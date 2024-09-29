create database users_db;
use users_db;

create table admin(
admin_id int auto_increment primary key,
username varchar(60) not null,
password varchar(15) not null
);
create table users(	
users_id int auto_increment primary key,
username varchar(60) not null,
email varchar(60) not null,
password varchar(45) not null
);
INSERT INTO users(username, email, password)
values ('index', 'trannin028@gmail.com','123');

truncate table users;
SELECT * FROM users;



