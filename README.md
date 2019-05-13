# Visionauts

### This is a Visionauts WEB Application Repository

Visionauts is an open source project created by Softnauts (https://www.softnauts.com/) to help visually impaired users. The project includes a mobile application for Android and iOS and a web application - CMS for managing beacons and their content.

The user, when moving around, receives information about his location based on beacons in his vicinity. The content of beacons must be configured in CMS. Every beacon must have an assigned information in CMS that will be read to the user by mobile application when he is near beacon. The application recognizes a specific beacon based on its uuid, minor and major.

![ScreenShot](https://raw.github.com/softnauts-open-source/visionauts-android/master/screenshots/sc1.png)
![ScreenShot](https://raw.github.com/softnauts-open-source/visionauts-android/master/screenshots/sc2.png)
![ScreenShot](https://raw.github.com/softnauts-open-source/visionauts-android/master/screenshots/sc3.png)

### I. Instalation WEB API on Ubuntu server

##### 1. First make MySQL database on your server, and remember parameters of database required to composer install command.:

##### 2. Choose the place where you want to put application on your server and execute this command to install the project:
    
    ```
    $ git clone https://PASTE_HERE_LINK_TO_REPOSITORY.html visionauts
    ```
    
    ```
    $ cd visionauts/
    ```
    
    * Create doctrine database (if you don't want to create via SSH, first point):
        
        ```
        $ php bin/console doctrine:database:create
        ```     
  
##### 3. During this command please enter the database and other parameters required to install:
    
    ```
    $ composer install
    ```
    
##### 4. Create doctrine schema:
        
    ```
    $ php bin/console doctrine:schema:create
    ```
    
##### 5. Install assets (CSS, JS, Images, Text Editor etc.): 
    
    ```
    $ php bin/console assets:install
    ```

##### 6. Cache clear if you have some problems with permissions:
    
    ```
    $ php bin/console cache:clear
    ```
    
##### 7. Create admin user, provide username, email and password:
    
    ```
    $ php bin/console fos:user:create
    ```
    
Notes
--------------
* To change the all application parameters after composer install command  
you can do this by modifying the parameters.yml file on your server
(path: app/config/parameters.yml).


* If there are problems with permissions (cache, upload folder etc.), please remember that project folders on your server should be writable.


### IV. Authors

[![N|Solid](https://www.softnauts.com/assets/images/homepage/softnauts_logo_vertical.svg?v7)](https://www.softnauts.com/)

----

### VI. License

The MIT License

Copyright 2019 Softnauts

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

----
**Free Software, Hell Yeah!**

