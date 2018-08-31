# WebAssignment3
SENG 31313 Advanced Web Application Development Module. Group 3 Assignment 03

KelaniSE - A Software Enginnering Blog Site


#System Configurations

1.Clone or Download as a Zip
2.Open the terminal(Command Prompt) and move into the root folder
3.Execute "composer install" to install the necessary dependencies.
4.Import the database image which is inside the root folder.
5.Execute the db seed file with the command "php artisan db:seed --class=UsersTableSeeder" (Optional)

**We have not included the .env file inside the .gitignore. Therefore it ll be inside the root folder with the db configuration details of,
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=blogdb
 DB_USERNAME=root
 DB_PASSWORD=
if the db settings of your PC is differ than this, please do edit the .env file
**db name must be "blogdb"

** While trying to login with github as social authentication, if you encountered an ssl certifiate issue, you should have download the following file and put it inside the SSL folder of your server's PHP folder.
And then Add the following line to the php.ini file under "php.ini Options" section.(This happens only for some servers only).

1) Download the latest cacert.pem from https://curl.haxx.se/ca/cacert.pem

2) Add the following line to php.ini (if this is shared hosting and you don't have access to php.ini then you could add this to .user.ini in public_html)



**Default Admin credentials
    email : admin@admin.com
    password : secret
    








#System Work Flow

This blog site consists with two types of users.
   - Admin Users 
         Admin users are the ones who have the power to create new content.
   - Non-Admin Users
         Non-admin or normal users have the ability to comment to posts. 
         If a user is not logged-in then he/she cannot comment

Front end - By Pavan Madusha(SE/2014/022).
    - All the pages have been well designed following good design practises.
    - All the pages have been developed by extending two layout files. As a result, adding new pages, features have become very easy.
    - Code readability have increased, hence debugging have became efficient.
    

DB tables - By Sevindu Hiran (SE/2014/023).
    - (Check the root for the ERD)
    - MySQL server have been used as the database server and Laravel Migration tool have been used to create tables.
    

Basic and Social Authentication - By Ragulan Gopalapillei(SE/2014/025).
    - For the basic login, laravel provided Authentication Scafolldings have been used with little customization
    - For the Social Authentication, Socialite package have been used.
    - In this initial release, only the github login have been implemented.

User-Role Management - By Charith Madhusanka(SE/2014/020).
    - Two seperate middlewares were developed to manage two user roles admin and non-admin
    - Admin middleware specifically used to manage the access to the AdminController where admin specific actions have been programmed.
    - Non-admin middleware get activated onece the login credentials have been submitted, and it ill filter the user according to the respective user role.
    
    
 CRUD functionality - By Madhuranga Wijesekara(SE/2014/021).
    - Create, Read, Update and Delete functionality have been implemented for Blog Posts and Users.
    - Create, Update and Delete functions have been restricted to only take place through the admin panel.
    
Report Module - By Ishara Nadeeshan(SE/2014/024).
    - Exporting of Database data to excell spreadsheet
  
SystemWork flow and Configuration Documentation - By Raaseem(SE/2014/026)




    

