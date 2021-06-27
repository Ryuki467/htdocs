CREATE DATABASE message DEFAULT CHARACTER SET utf8;

CREATE TABLE user(
	id int NOT NULL AUTO_INCREMENT,
	login_id varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	nickname varchar(255) NOT NULL,
	modified_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	UNIQUE KEY login_id_index (login_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE groups(
	group_id int NOT NULL AUTO_INCREMENT,
	title varchar(255) NOT NULL,
	created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (group_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE group_user(
	group_user_id int not null AUTO_INCREMENT,
	group_id int not null,
	id int not null,
	PRIMARY KEY (group_user_id),
	unique key group_id_id_index(group_id,id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE chat(
	chat_id int NOT NULL AUTO_INCREMENT,
	group_id int not null,
	id int not null,
	message varchar(255),
	PRIMARY KEY (chat_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
