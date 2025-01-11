# SSPaging API Example
## What is this?
This repository holds a simple API example to integrate with [SSPaging](https://lib.actudent.com/ss-paging) pagination library. There is nothing special here, just controller and model getting customers data from database with required URL pattern of SSPaging.

## Installation
Clone this repo to your pc and run these commands sequentially:
```bash
composer install

php spark migrate

php spark db:seed InsertDumpRecords
```

The URL provided by this example is:
```
http://your-domain/public/customer/get-data/(limit)/(offset)/(orderBy)/(searchBy)/(sort)/(search)
```
If you serve with SparkCLI in your local machine, then the URL will be: 
```
http://localhost:8080/customer/get-data/(limit)/(offset)/(orderBy)/(searchBy)/(sort)/(search)
```
You are free to modify this example to match your own use case.


