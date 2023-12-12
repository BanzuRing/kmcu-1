create table _men(
    num int not null auto_increment,
    pass char(20) not null,
    name char(20) not null,
    email char(80),
    regist_Day char(20),
    level int,
    point int,
    primary key(num))