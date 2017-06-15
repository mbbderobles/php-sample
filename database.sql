create database if not exists cnsec;
use cnsec;
create table if not exists users(
id int not null auto_increment primary key,
username varchar(20) not null,
password varchar(50) not null,
fname varchar(30) not null,
lname varchar(30) not null,
room varchar(10)
);

create table if not exists books(
id int not null auto_increment primary key,
bname varchar(20) not null,
bnumber varchar(20) not null,
year year(4) not null,
author varchar(50) not null
);

create table if not exists users_books(
id int not null auto_increment primary key,
uid int not null,
bid int not null
);

insert into users (username,password,fname,lname,room) values('ivyjoy','5f4dcc3b5aa765d61d8327deb882cf99', 'Ivy', 'Aguila', 'C-116');
insert into users (username,password,fname,lname,room) values('kendall','7f7aac3bd182aede923b8f6ff64afe36', 'Kendall', 'Jaen', 'C-118');
insert into users (username,password,fname,lname,room) values('djadja','648810d7e5a86c4798addc6b9a489df4', 'Dyanara', 'Dela Rosa', 'C-114');
insert into users (username,password,fname,lname,room) values('miyah','2506be555e99af65477472fb21e53440', 'Miyah', 'Queliste', 'C-118');
insert into users (username,password,fname,lname,room) values('betel','6bd7e550aa84502ff67b9f9db230cebc', 'Betel', 'de Robles', 'C-118');
insert into users (username,password,fname,lname,room) values('jach','183d38fb21c9b33d92c13e3a85c8ea13', 'Joseph', 'Hermocilla', 'C-122');
insert into users (username,password,fname,lname,room) values('abc','6c232782a1ed8d2cc5f9933359400efe', 'A', 'A', 'C-001');
insert into users (username,password,fname,lname,room) values('def','3453438589d9abfd6108f4624fec78fc', 'A', 'B', 'C-001');

insert into books(bname,bnumber,year,author) values('A','12524526672',2004,'tyui');
insert into books(bname,bnumber,year,author) values('B','56797845645',2017,'wert');
insert into books(bname,bnumber,year,author) values('C','09890764422',1995,'asdf');

insert into users_books(uid,bid) values(1,1);
insert into users_books(uid,bid) values(1,3);
insert into users_books(uid,bid) values(2,2);