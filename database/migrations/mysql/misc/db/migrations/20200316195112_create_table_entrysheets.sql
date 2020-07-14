
-- +goose Up
-- SQL in section 'Up' is executed when this migration is applied

CREATE TABLE entry_sheets(
  id int NOT NULL auto_increment primary key,
  title varchar(30) NOT NULL,
  text varchar(2000),
  character_limit int NOT NULL,
  company_name varchar(30) NOT NULL,
  created_by varchar(30) NOT NULL,
  created_at datetime NOT NULL default CURRENT_TIMESTAMP,
  updated_at datetime NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- +goose Down
-- SQL section 'Down' is executed when this migration is rolled back

DROP TABLE entry_sheets;
