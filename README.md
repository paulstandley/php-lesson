# PHP TEST by **Paul Standley**

![Profile Pick](http://res.cloudinary.com/pieol2/image/upload/v1516543296/profile-small.png)

---

## **__PHP Tutorils By mmtuts__**

## [Youtube](https://www.youtube.com/watch?v=I4JYwRIjX6c&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=40)

## [ToDo](https://www.youtube.com/watch?v=LC9GaXkdxF8)

```SQL
/*Create table*/
CREATE TABLE posts (
	id int(11) NOT null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) NOT null,
    content varchar(1000) NOT null,
    date datetime NOT null
);
/*Read*/
SELECT * FROM posts WHERE id='1'
/*Write*/
INSERT INTO posts (subject, content, date) VALUES ('Subject 1','Content 1','0000-00-00 00:00:00');
INSERT INTO posts (subject, content, date) VALUES ('Subject 2','Content 2','0000-00-00 00:00:00');
/*Update*/
UPDATE posts
SET subject="This is a test", content="This is the new content"
WHERE id="1"
/*Delete*/
DELETE FROM posts
WHERE id='1'
/*Sort*/
SELECT * FROM posts ORDER BY id ASC
SELECT * FROM posts ORDER BY subject DESC
```

---

## OOP by **Brad Travis**

[OOP](https://www.youtube.com/watch?v=dQxuYRNbL_M&t=49s)

---

```SQL
CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY NOT null,
    user_first varchar(256) NOT null,
    user_last varchar(256) NOT null,
    user_email varchar(256) NOT null,
    user_uid varchar(256) NOT null,
    user_pwd varchar(256) NOT null
);
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ("Paul","Standley","paul@paul.co.uk","Admin","test123");
```