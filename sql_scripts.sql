-- Added new table `seller_items`
create table seller_items( id int AUTO_INCREMENT PRIMARY key, item_name varchar(50), item_description text, item_price float, item_type varchar(25), seller_id int, FOREIGN KEY (seller_id) REFERENCES user(id) )
