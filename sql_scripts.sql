-- Added new table `seller_items`
create table seller_items(
    id int AUTO_INCREMENT PRIMARY key,
    item_name varchar(50),
    item_description text,
    item_price float,
    item_type varchar(25),
    seller_id int,
    FOREIGN KEY (seller_id) REFERENCES user(id) 
    );

-- Added new tables :
---  Messages
create table messages(
    id int AUTO_INCREMENT PRIMARY KEY,
    entity_id int,
    entity_type varchar(20),
    title varchar(50),
    message text,
    user_id int,
    FOREIGN key (user_id) REFERENCES user(id)
    );
---  Tickets
create table tickets(
    id int AUTO_INCREMENT primary key,
    date_created datetime,
    title varchar(50),
    status varchar(50),
    last_reply int,
    last_updated datetime,
    user_id int,
    foreign key (last_reply) references messages(id),
    FOREIGN key (user_id) REFERENCES user(id)
    );
---  Orders
create TABLE orders(
    id int AUTO_INCREMENT primary key,
    item_type varchar(50),
    item_id int,
    seller_id int,
    user_id int,
    date_created datetime,
    foreign key (seller_id) references user(id),
    foreign key (user_id) references user(id)
    );
---  Reports
create table reports(
    id int AUTO_INCREMENT primary key,
    date_created datetime,
    order_id int,
    status varchar(50),
    last_reply int,
    last_updated datetime,
    user_id int,
    foreign key (last_reply) references messages(id),
    foreign key (order_id) references orders(id),
    FOREIGN key (user_id) REFERENCES user(id)
    );