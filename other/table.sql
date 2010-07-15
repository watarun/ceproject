/*ユーザーテーブル*/
create table users (
id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(50),
loginid VARCHAR(50),
password VARCHAR(50),
email VARCHAR(100),
sex INT,
created DATETIME DEFAULT NULL,
modified DATETIME DEFAULT NULL
);
