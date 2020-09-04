# Simple Login System

A simple login system with a registration form and a login form using PHP and MySQL.   

## Getting Started

### Database
You need to create a database and then create a table named users with the following structure.  
```
id int(11) not null PRIMARY KEY AUTO_INCREMENT
name varchar(30) not null
email varchar(128) not null
password varchar(128) not null
phoneNumber int(15) not null
address varchar(300) not null
```  
Make sure the table's name is users or you are going to have to head to classes/users.class.php and edit the MySQL queries.  

don't know MySQL?  
don't worry you can use the following MySQL code to create a table with the structure mentioned above.
```
CREATE TABLE users(
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  name varchar(30) not null ,
  email varchar(128) not null ,
  password varchar(128) not null ,
  phoneNumber int(15) not null ,
  address varchar(300) not null
);
```
### What needs to be edited
After creating the above database head into classes/dbh.class.php and edit the  properties of the class to your convenience  
### Prerequisites

XAMPP or any similar service, see the link bellow for XAMPP

https://www.apachefriends.org/index.html

### development process

the task description was to create a simple login system with a registration form, a login form and the inputs need to be verified.  
this task was pretty straightforward. I chose to implement it using the MVC design pattern. I also used prepared statements in order to avoid any MySQL injections. then I decided to hash my passwords before inserting them into my database for extra security.    
