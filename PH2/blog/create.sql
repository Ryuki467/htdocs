CREATE DATABASE blog DEFAULT CHARACTER SET utf8;

use blog;

DROP TABLE IF EXISTS user;

CREATE TABLE user(
	user_id int NOT NULL AUTO_INCREMENT,
	mail varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	nickname varchar(255) NOT NULL,
	modified_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (user_id),
	UNIQUE KEY mail_index (mail)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS tweet;

CREATE TABLE tweet(
	tweet_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	body varchar(255),
	created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (tweet_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS follow;

CREATE TABLE follow(
	follow_id int not null AUTO_INCREMENT,
	user_id int not null,
	following_user_id int not null,
	PRIMARY KEY (follow_id),
	unique key user_id_following_user_id_index(user_id,following_user_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS favorite;

CREATE TABLE favorite(
	user_id int,
	tweet_id int,
	modified_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (user_id,tweet_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
