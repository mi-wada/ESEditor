
-- +goose Up
-- SQL in section 'Up' is executed when this migration is applied

CREATE TABLE companies(
  id int NOT NULL auto_increment primary key,
  company_name varchar(30) NOT NULL,
  created_by varchar(30) NOT NULL,
  created_at timestamp NOT NULL default CURRENT_TIMESTAMP,
  updated_at timestamp NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- +goose Down
-- SQL section 'Down' is executed when this migration is rolled back

DROP TABLE 'companies';
