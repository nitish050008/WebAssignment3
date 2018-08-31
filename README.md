# WebAssignment3
SENG 31313 Advanced Web Application Development Module. Group 3 Assignment 03

KelaniSE - A Software Enginnering Blog Site


#System Configurations


















System Work Flow

This blog site consists with two types of users.
   - Admin Users 
         Admin users are the ones who have the power to create new content.
   - Non-Admin Users
         Non-admin or normal users have the ability to comment to posts. 
         If a user is not logged-in then he/she cannot comment

Front end - By Pavan Madusha(SE/2014/022)
    All the pages have been well designed following good design practises.
    All the pages have been developed by extending two layout files. As a result, adding new pages, features have become very easy.
    Code readability have increased, hence debugging have became efficient.
    

DB tables - By Sevindu Hiran (SE/2014/023)
    (Check the root for the ERD)
    MySQL server have been used as the database server and Laravel Migration tool have been used to create tables.
    

Basic and Social Authentication - By Ragulan Gopalapillei(SE/2014/025)
    For the basic login, laravel provided Authentication Scafolldings have been used with little customization
    For the Social Authentication, Socialite package have been used.
    In this initial release, only the github login have been implemented.

User-Role Management - By Charith Madhusanka(SE/2014/020)
    Two seperate middlewares were developed to manage two user roles admin and non-admin
    Admin middleware specifically used to manage the access to the AdminController where admin specific actions have been programmed.
    Non-admin middleware get activated onece the login credentials have been submitted, and it ill filter the user according to the respective user role.
    
    
 CRUD functionality - By Madhuranga Wijesekara(SE/2014/021)
 
    Create, Read, Update and Delete functionality have been implemented for Blog Posts and Users.
    Create, Update and Delete functions have been restricted to only take place through the admin panel.
    
Report Module - By Ishara Nadeeshan(SE/2014/024)
    Exporting of Database data to excell spreadsheet
  
SystemWork flow and Configuration Documentation - By Raaseem(SE/2014/026)




    

