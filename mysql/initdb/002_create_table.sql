CREATE TABLE IF NOT EXISTS web_app_bootcamp.diaries (
  id int(10) unsigned not null auto_increment,
  title varchar(30) not null,
  body varchar(500) not null,
  created_at timestamp,
  updated_at timestamp,
  primary key(id)
);