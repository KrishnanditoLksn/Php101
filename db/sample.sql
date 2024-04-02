-- Active: 1711861680364@@127.0.0.1@3306@test
SELECT * 
FROM linkify_user;

UPDATE linkify_user SET last_name = 'dito'
WHERE last_name = 'Nazair';

SELECT id
FROM linkify_user;

ALTER TABLE linkify_user
ADD PRIMARY KEY (id);


SELECT id
FROM linkify_user;

CREATE TABLE LINKIFY_USER (
    link_id INT(7) NOT NULL,
    password CHARACTER(255) NOT NULL,
    PRIMARY KEY (link_id),
    user_id INT(7) NOT NULL
)

ALTER TABLE `LINKIFY_USER` RENAME  LINKIFY_USER_PRIVATE;

SELECT *
FROM `LINKIFY_USER_PRIVATE`;

ALTER TABLE `LINKIFY_USER_PRIVATE`
ADD FOREIGN KEY (user_id) REFERENCES linkify_user(id);

SELECT *
FROM `LINKIFY_USER_PRIVATE`;

INSERT INTO `LINKIFY_USER_PRIVATE`
VALUES(1,"abc",1);

SELECT `LINKIFY_USER_PRIVATE`.user_id , linkify_user.id , linkify_user.first_name
FROM `LINKIFY_USER_PRIVATE`
INNER JOIN linkify_user ON 
linkify_user.id=LINKIFY_USER_PRIVATE.user_id;