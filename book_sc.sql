drop DATABASE if exists book_sc;
create database book_sc;

use book_sc;

create table buy_car
(
  user_name char(60) not null,
	buy_thing char(60) not null,
	buy_count int(255)
);

create table users
(
  user_name char(60) not null primary key,
  user_key int(20) not null,
	user_img varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
);

create table best_book
(
	id int unsigned not null primary key,
	best_book_author char(60) not null,
	best_book_name char(60) not null,
	best_book_information char(255) not null,
	best_book_img varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
);

create table more_book
(
	id int unsigned not null primary key,
  more_book_name char(60) not null,
	more_book_author char(60) not null,
	more_book_information char(255) not null,
	more_book_img varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	more_book_publish char(60) not null,
	more_book_put_time char(60) not null,
	more_book_oldprice float(4,2) not null,
	more_book_price int not null,
	more_book_littleprice int not null,
	more_book_kind char(60) not null
);

create table expect_book
(
	id int unsigned not null primary key,
  expect_book_name char(60) not null,
	expect_book_author char(60) not null,
	expect_book_information char(255) not null,
	expect_book_img varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	expect_book_oldprice float(4,2) not null,
	expect_book_price float(4,2) not null
);


grant select, insert, update, delete
on book_sc.*
to book_sc@localhost identified by 'user_key';

INSERT INTO best_book VALUES ('001','Luke Welling and Laura Thomson','PHP and MySQL Web Development',
'PHP & MySQL Web Development teaches the reader to develop dynamic, secure e-commerce web sites. You will learn to integrate and implement these technologies by following real-world examples and working sample projects.',
'./img/big2.jpg');
INSERT INTO best_book VALUES ('002','Julie Meloni','Sams Teach Yourself PHP, MySQL and Apache All-in-One',
'Using a straightforward, step-by-step approach, each lesson in this book builds on the previous ones, enabling you to learn the essentials of PHP scripting, MySQL databases, and the Apache web server from the ground up.',
'./img/big2.jpg');
INSERT INTO best_book VALUES ('003','Sterling Hughes and Andrei Zmievski','PHP Developer\'s Cookbook',
'Provides a complete, solutions-oriented guide to the challenges most often faced by PHP developers\r\nWritten specifically for experienced Web developers, the book offers real-world solutions to real-world needs\r\n',
'./img/big2.jpg');

INSERT INTO more_book VALUES ('011','海底两万里','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/22518018-1_w_6.jpg','aaa','1-1',31.00,21,50,'文艺');
INSERT INTO more_book VALUES ('010','岛上书店','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/23685329-1_l_2.jpg','aaa','1-1',31.00,25,30,'文艺');
INSERT INTO more_book VALUES ('009','西天','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/23911764-1_w_26.jpg','aaa','1-1',31.00,22,50,'文艺');
INSERT INTO more_book VALUES ('012','bbb','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/big2.jpg','bbb','bbb',21.00,11,50,'青春');
INSERT INTO more_book VALUES ('013','汤姆索亚历险记','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/22800647-1_w_1.jpg','ccc','ccc',31.00,11,50,'童书');
INSERT INTO more_book VALUES ('014','非洲三万里','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/23852676-1_l_7.jpg','aaa','aaa',35.00,24,00,'励志/成功');
INSERT INTO more_book VALUES ('015','沟通的艺术','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/3620171-1_l_1.jpg','bbb','bbb',30.00,23,00,'人文社科');
INSERT INTO more_book VALUES ('016','ccc','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/big2.jpg','ccc','ccc',21.00,18,20,'科技');
INSERT INTO more_book VALUES ('017','恰到好处的幸福','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/23414972-1_b_4.jpg','bbb','bbb',23.00,15,25,'生活');
INSERT INTO more_book VALUES ('017','先谋生，再谋爱','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/23917889-1_w_10.jpg','bbb','bbb',24.00,15,20,'生活');
INSERT INTO more_book VALUES ('018','沟通的艺术','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/3620171-1_l_1.jpg','ccc','ccc',17.00,13,00,'教育');
INSERT INTO more_book VALUES ('019','专注力培养','作者',
'详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/23825184-1_l_10.jpg','ccc','ccc',19.50,10,00,'教育');


INSERT INTO expect_book VALUES ('111','aaa','作者',
'这是一段详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/big2.jpg',11.0,10.0);
INSERT INTO expect_book VALUES ('112','bbb','作者',
'这是一段详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/big2.jpg',19.0,18.0);
INSERT INTO expect_book VALUES ('113','ccc','作者',
'这是一段详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍.',
'./img/big2.jpg',17.0,12.0);

INSERT INTO users VALUES ('root','123456','./img/a.jpg');