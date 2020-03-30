# mvc-php
A simple mvc PHP with friendly url and some functions.

Copy the project to the root of your site and test it.

### Important :

Modify the base_url value in the core file according to the folder where you place the project.

### Functions :

#### 1. form_valid(name_of_input, type, status)

example : 

for (input type="email" name="email" required)  ---> $data = form_valid('email', 'email' ,1)

(1 for required and 0 for not).

(type : text or email).

this function returns a array with --> 

array[0] (0 for Not accepted and 1 for accepted)

array[1] (the value of input)

#### 2.image_upload(form_name_input, location, size_limit)

example:

$data = image_upload('file' ,'view/uploads/', 500000)

$data[0] = (0 for Not accepted and 1 for accepted)

$data[1] = name of file
