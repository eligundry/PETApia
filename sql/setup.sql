create table if not exists `typing` (
	`id` int(10) unsigned not null AUTO_INCREMENT,
	`wpm` int(4) not null comment 'Words per minute',
	`keyboard` varchar(64) not null,
	`home_row` boolean default '0' comment 'Does the user use the home row when typing?',
	primary key (id)
) engine=innodb;

create table if not exists `programmers` (
	`id` int(10) unsigned not null AUTO_INCREMENT,
	`first_name` varchar(32) not null,
	`last_name` varchar(32) not null,
	`height` int(10) unsigned comment 'Height in CM',
	`weight` int(10) unsigned comment 'Weight in KG',
	`type_stats` int(10) unsigned,
	foreign key (type_stats) references typing(id),
	primary key (id)
) engine=innodb;
