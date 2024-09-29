create database book_storage;
use book_storage;

create table books (
book_id int auto_increment primary key,
book_title varchar(255) not null,
book_authors varchar(60) not null,
book_quantity int not null,
price int not null
);
alter table books 
add column price varchar(60) not null;

ALTER TABLE books
ADD INDEX (book_authors);

create table authors (
authors_id int auto_increment primary key,
authors_name varchar(60),
foreign key (authors_name) references books(book_authors)
);

insert into books (book_title, book_authors, book_quantity, price)
values 
('Romeo và Juliet','Anna Claybourne - Jana Costa', 1, 2000),
('Hamlet','Louie Stowell - Christa Unzner', 1,2000 ),
('Macbeth ','Louie Stowell - Christa Unzner', 1,2000 );

INSERT INTO authors (authors_name)
values ('Louie Stowell - Christa Unzner'),
 ('Anna Claybourne - Jana Costa');
SELECT book_id, book_title, authors_name
FROM books, authors
WHERE book_authors = 'Louie Stowell - Christa Unzner';
select * FROM ebook where book_id < 5;
ALTER TABLE abook
ADD column description text;
UPDATE ebook
SET book_title = "Đối nhân khéo - Xử thế hay"
WHERE book_id < 6;
select * from ebook;




