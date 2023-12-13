create table reservation_manage(
name varchar(10) not null,
id int(15) not null primary key,
phone_number int(15) not null,
day varchar(10),
room int(5) not null,
time int(5) not null,
purpose varchar(50) not null,
status varchar(5) default null,
reason varchar(50) default null
);