CREATE TABLE users
(
    id                int,
    lastname          varchar(32),
    firstname         varchar(32),
    birthday          date,
    email             varchar(64),
    phone             varchar(13),
    gender            enum('male', 'female', 'other'),
    timezone          varchar(30),
    registration_ip   varchar(15),
    registration_date timestamp
);