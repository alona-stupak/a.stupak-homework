CREATE TYPE gender_type AS ENUM('male', 'female', 'other');
CREATE TABLE users
(
    id                integer,
    lastname          varchar(32),
    firstname         varchar(32),
    birthday          date,
    email             varchar(64),
    phone             varchar(13),
    gender            gender_type,
    timezone          varchar(30),
    registration_ip   varchar(15),
    registration_date timestamp without time zone,
);