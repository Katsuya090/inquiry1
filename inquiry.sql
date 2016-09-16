create database inquiry;

use inquiry;

grant all on inquiry.* to testuser@localhost identified by '1243';



create table inquiry (
  id int primary key auto_increment,
  name varchar(32),
  mailaddress varchar(50),
  kind varchar(20),
  question varchar(100),
  createdAt datetime
);

insert into  inquiry (name,mailaddress,kind,question,createdAt) values
  ('かつ','nase@yahoo','お支払いについて','見積もりのお支払いについて','2016/09/13 10:11:12');