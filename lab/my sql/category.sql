create database category;
use category;

TRUNCATE TABLE product;
select * from product;
INSERT INTO product (pro_name, pro_quantity, price, pro_img) 
VALUES ( 'Product 1', 2000, 20000, 'http://placehold.it/750x600'),
( 'Product 2', 2000, 20000, 'http://placehold.it/750x600'),
( 'Product 3', 2000, 20000, 'http://placehold.it/750x600'),
( 'Product 4', 2000, 20000, 'http://placehold.it/750x600');
select * from product
limit 3
--  -- 