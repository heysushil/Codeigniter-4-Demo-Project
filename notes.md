# CI 4 work flow

## Routing

1. rotuing is use 3 types normal | map and group wise all useing in route file check for more details.

## Controller

1. Controller no use construcer in ci4
1. controller methods access on url via route and route have differen method of crud behaviours.
1. Like in case of only getting data form db use get() or for form post data use post() which is mendatory otherwise url will show 403 error.
1. Header footer and main page access is same like in ci 3 only diff. is to load view files using view() method here.
1. also everything in ci4 is as library for anything use in ci4 need to import it on file before use usning use keywork to fetch specific librayry form the collection. which is already used in controller

## Method

1. Methods in ci 4 is diff. then ci3 becausae in ci 4 no need to access mehtod via via.
1. In ci4 method every table will have is own method because in method define the table name, related files and primary key, required key so that direct call related action on controller directly like
    1. insert data on db table using save(), or update() or delete() for doing these activities on controller but on ci 3 we do these actions on model and then return the respone on controller.
1. Method have many other good use cases which need to explore.

## Validation

1. Validation is used in admin controller via config->validation.php file
1. on controller admin file used validation->run() method to pass the validation to config->validation file and set all rules on this file.
1. validation->run() method accept 3 types of values array | group or dbGroup last 2 types need to explore

>> On config->validation file try to store on tables all fileds on array formate then pass them on validation rules array using for loop for make it automated.
>> In this case might be no need to manually define the lable, rule, errror on validation array every time.
>> Also remeber to store the table fileds data on array on required to non-required form or as it is.

## XAMPP Server

1. Via xampp running ci 4 project url will be like this: projectName/public/controller/method/id
1. XAMPP You may find that you have to uncomment the php.ini “extension” lines to enable “curl” and “intl”, for instance.
1. Restart xampp server and use.


