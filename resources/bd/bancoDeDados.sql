create database login_e_senha

use login_e_senha

Create table instrutores (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
email Varchar(30) UNIQUE,
senha Varchar(20),
Primary Key (ID)) ENGINE = MyISAM;

drop table instrutores

select * from instrutores