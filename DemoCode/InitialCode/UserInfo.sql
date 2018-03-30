DROP TABLE Account_info;
CREATE TABLE Account_info(
first_name varchar(55) NOT NULL,
last_name varchar(55) NOT NULL,
email varchar(100) not null primary key,
password varchar(20),
credit_card int not null,
pin int not null check (pin between 0 and 999),
student bit ,
business bit,
Science bit,
art bit,
social bit,
other bit);



