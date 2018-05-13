show databases;
create database zdb_simple
		default character set utf8
        collate utf8_general_ci;

use zdb_simple;

create table ztb_simple(
	int_data int not null,
    str_data varchar(100) not null
);
