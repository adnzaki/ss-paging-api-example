<?php

namespace App\Controllers;

use App\Models\CustomerModel;
class Customers extends BaseController
{
    public function getCustomers($limit, $offset, $orderBy, $searchBy, $sort, $search = '')
    {
        $model = new CustomerModel();
        if(! empty($search)) {
            $model->like($searchBy, $search);
        }

        $response = $model->orderBy($orderBy, $sort)->findAll($limit, $offset);
        $rows = empty($search) ? $model->countAllResults() : $model->like($searchBy, $search)->countAllResults();

        return $this->response->setJSON([
            'container' => $response,
            'totalRows' => $rows,
            'additionalResponse' => [
                'status' => 'OK',
                'message' => 'This is just an example for additional responses'
            ]
        ]);
    }

    public function getCustomersUsingHeaders($searchBy, $search = '')
    {
        $limit = (int)$this->request->getHeaderLine('limit');
        $offset = (int)$this->request->getHeaderLine('offset');
        $orderBy = $this->request->getHeaderLine('orderBy');
        $sort = $this->request->getHeaderLine('sort');

        $model = new CustomerModel();
        if (! empty($search)) {
            $model->like($searchBy, $search);
        }

        $response = $model->orderBy($orderBy, $sort)->findAll($limit, $offset);
        $rows = empty($search) ? $model->countAllResults() : $model->like($searchBy, $search)->countAllResults();
        
        return $this->response->setJSON([
            'container' => $response,
            'totalRows' => $rows,
            'additionalResponse' => [
                'status' => 'OK',
                'message' => 'This is just an example for additional responses'
            ]
        ]);
    }
}
