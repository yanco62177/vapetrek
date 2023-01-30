create database CafeTeaKudasai;
use CafeTeaKudasai;

create table Person(
pname varchar(50) not null,
uname varchar(20) primary key not null,
pnum varchar(13) not null,
address varchar(100) not null,
pass varchar(20) not null);

insert into Person (pname, uname, pnum, address, pass)
values('adrian cary bejoc', 'ian', '09665552233', 'bool, tagbilaran', '1234'), 
('edimar rato', 'kong', '09665552233', 'dampas, tagbilaran', '4321'), 
('abraham bejoc', 'abay', '09665552233', 'panggangan, calape', '2345');

create table orders(
uname varchar(20) not null,
ordId int(6) primary key auto_increment,
ordDate datetime,
amt varchar(30));


alter table orders
add foreign key (uname) references person(uname);

