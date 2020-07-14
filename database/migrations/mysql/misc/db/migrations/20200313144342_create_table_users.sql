
-- +goose Up
-- SQL in section 'Up' is executed when this migration is applied

CREATE TABLE users(
  id int NOT NULL auto_increment primary key,
  user_id varchar(20) NOT NULL,
  user_password varchar(100) NOT NULL,
  created_at datetime NOT NULL default CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- +goose Down
-- SQL section 'Down' is executed when this migration is rolled back

DROP TABLE 'users';
