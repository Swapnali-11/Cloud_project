create table Admin(
	admin_id	text(10) primary key,
	admin_pwd	text(20) not null
);

insert into Admin values('swapnali','swap123'),('aditya','adya29');

create table s_questions(
	s_id		serial primary key,
	s_question	text(200)NOT NULL
);

insert into s_questions(s_question) values('What is your nick name?'),('What is your favourite color?'),
('What is your mother''s name?'),('What is your first car''s name?');

create table Users(
	user_id		text(10) primary key,
	user_pwd	text(10) not null,
	user_name	text(10) not null,
	user_phone	text(10) not null,
	user_email	text(100) not null,
	active_flag	int(10)NOT NULL,
	s_id		int(20)NOT NULL references s_questions(s_id),
	s_ans		text(10)NOT NULL
);

create table documents(
	doc_id		serial primary key,
	doc_path	text(10)NOT NULL,
	upload_date	date(10)NOT NULL,
	user_id		text(10) NOT NULL references Users(user_id)
);

CREATE TABLE captcha (
	cap_id 		serial primary key,
    	img_path 	text(20) NOT NULL,
    	value text(10)NOT NULL
);


insert into captcha (img_path, value) values('captcha/1.jpg','captcha'),
('captcha/2.jpg','jmi8i'),
('captcha/3.jpg','84NB2'),
('captcha/4.gif','PQJRYD'),
('captcha/5.jpg','EX4X'),
('captcha/6.jpg','ee610c'),
('captcha/7.png','83tsU'),
('captcha/8.png','5b535D'),
('captcha/9.gif','N4EL3'),
('captcha/10.gif','3PLHJ'),
('captcha/11.gif','F62PB'),
('captcha/12.png','MQ5M4'),
('captcha/13.jpg','FHC4b'),
('captcha/14.jpg','89AF2'),
('captcha/15.jpg','7T4MKe'),
('captcha/16.jpg','AV74Y'),
('captcha/17.jpg','Z9E2E'),
('captcha/18.gif','W68HP'),
('captcha/19.jpg','8nALg5d'),
('captcha/20.jpg','88MY3'),
('captcha/21.png','XnkAW'),
('captcha/22.png','imagejoke');

