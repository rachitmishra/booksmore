create database books_db;

use books_db;

create table admin (
	username varchar(16) not null PRIMARY KEY,
	password varchar(32) not null
)engine=InnoDB;

create table userlogin (
	userid  varchar(32) not null references customers(customerid) PRIMARY KEY,
	username  varchar(32) not null ,
	password  varchar(32) not null ,
	lastlogindate  date not null ,
	lastloginip  int unsigned not null ,
	persistent  smallint(2) not null 
)engine=InnoDB;

create table links (
	linkid  int not null auto_increment PRIMARY KEY ,
	name  varchar(64) not null ,
	link  varchar(200) not null ,
	linkdetail  varchar(200) null ,
	addedon  date not null
)engine=InnoDB;

create table customers (
	customerid int unsigned not null auto_increment PRIMARY KEY,
	name char(60) not null,
	address varchar(128) not null,
	city char(30) not null,
	pin int(6) unsigned not null,
	country char(32) not null
) engine=InnoDB;

create table books (
	isbn char(13) not null PRIMARY KEY,
	author char(96) not null,
	title char(96) not null,
	catid int unsigned,
	price float(6,2) not null,
	description varchar(256)
) engine=InnoDB;

create table categories (
	catid int unsigned not null auto_increment PRIMARY KEY,
	catname char(64) not null
) engine=InnoDB;

create table authors (
	authorid int unsigned not null auto_increment PRIMARY KEY ,
	aname  varchar(32) not null ,
	aaddress  varchar(256) not null ,
	acontact  int(10) unsigned not null ,
	acountry  char(32) not null ,
	ayear  year not null, 
	aisbn char(13) not null,
	aemail varchar(32) null
) engine=InnoDB;

create table publishers (
	pid  int unsigned not null auto_increment PRIMARY KEY ,
	pname  varchar(32) not null ,
	paddress  varchar(256) not null ,
	pcontact  int(10) unsigned not null ,
	pcountry  char(32) not null ,
	pyear  year not null ,
) engine=InnoDB;

create table orders (
	orderid int unsigned not null auto_increment PRIMARY KEY,
	customerid int unsigned not null references customers(customerid),
	amount float(6,2),
	date date not null,
	order_status char(16),
	ship_address varchar(128) not null,
	ship_city char(30) not null,
	ship_pin int(6) unsigned not null,
	ship_country char(32) not null
) engine=InnoDB;

grant select,insert,update, delete
	on books_db.*
	to 'books_user'@'localhost' identified by 'password';