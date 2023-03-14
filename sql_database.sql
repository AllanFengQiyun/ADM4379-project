CREATE DATABASE playstation;

USE playstation;

CREATE TABLE IF NOT EXISTS users(
	id int(11) not null auto_increment,
	username varchar(50) not null,
	email varchar(50) not null,
	password varchar(50) not null,
	create_datetime date not null,
	primary key (`id`)
);

INSERT INTO users 
VALUES(0,'123','112@gmail.ca','123321','20230212');

delete from users;

select *
from users;

CREATE TABLE IF NOT EXISTS reviews(
	id int(11) not null auto_increment,
	user_id int(11) not null,
	comment varchar(255) not null,
	primary key(id),
	foreign key (user_id) references users(id)
);

INSERT INTO reviews
VALUES (0,13,'hey, this is like my comment. cool right?'),
(0,13,'another comment to check the styling');

delete from reviews;

CREATE TABLE IF NOT EXISTS product_order(
	id int(11) not null auto_increment,
	user_id int(11) not null,
	product_order varchar(255) not null,
	primary key(id),
	foreign key (user_id) references users(id)
)

