drop table if exists posts;
drop table if exists comments;

create table posts (
  id integer not null primary key autoincrement,
  user varchar(80) not null,
  title varchar(80) default '',
  message text default ''
); 

create table comments (
  id integer not null primary key autoincrement,
  postid integer not null, 
  user varchar(80) not null,
  message text default ''
);

insert into posts values (null, "Christopher Brewin",  "My first post", "While I'm not experienced in PHP, I have some background in programming. Picking up the actual syntax wouldn't be much of an issue. I'm just quite confused which function to call and what exactly I should change. If I'm not wrong, this theme allows you to change your layout, but it applies across the entire site.");
insert into posts values (null, "Christopher Brewin",  "My first post", "While I'm not experienced in PHP, I have some background in programming. Picking up the actual syntax wouldn't be much of an issue. I'm just quite confused which function to call and what exactly I should change. If I'm not wrong, this theme allows you to change your layout, but it applies across the entire site.");
