Create database Intern;

use Intern;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Account
#------------------------------------------------------------

CREATE TABLE Account(
        id_account int (11) Auto_increment  NOT NULL ,
        username   Varchar (50) ,
        password   Varchar (50) ,
        email      Varchar (50) ,
        type       Varchar (25) ,
        PRIMARY KEY (id_account )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Account_type
#------------------------------------------------------------

CREATE TABLE Account_type(
        type Varchar (25) NOT NULL ,
        PRIMARY KEY (type )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        id_article   int (11) Auto_increment  NOT NULL ,
        name_article Varchar (100) ,
        date_article Date ,
        views        Int ,
        Content      Text ,
        name_subject Varchar (50) ,
        id_account   Int ,
        PRIMARY KEY (id_article )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Subject
#------------------------------------------------------------

CREATE TABLE Subject(
        name_subject Varchar (50) NOT NULL ,
        PRIMARY KEY (name_subject )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: File
#------------------------------------------------------------

CREATE TABLE File(
        Id_File    Int NOT NULL ,
        path       Varchar (200) ,
        name       Varchar (50) ,
        size       Int ,
        id_article Int ,
        PRIMARY KEY (Id_File ) ,
        UNIQUE (name )
)ENGINE=InnoDB;

ALTER TABLE Account ADD CONSTRAINT FK_Account_type FOREIGN KEY (type) REFERENCES Account_type(type);
ALTER TABLE Article ADD CONSTRAINT FK_Article_name_subject FOREIGN KEY (name_subject) REFERENCES Subject(name_subject);
ALTER TABLE Article ADD CONSTRAINT FK_Article_id_account FOREIGN KEY (id_account) REFERENCES Account(id_account);
ALTER TABLE File ADD CONSTRAINT FK_File_id_article FOREIGN KEY (id_article) REFERENCES Article(id_article);


#------------------------------------------------------------
# Insertion of some dummy rows
#------------------------------------------------------------
select * from account_type;
INSERT INTO `intern`.`account_type` (`type`) VALUES ('Admin');
INSERT INTO `intern`.`account_type` (`type`) VALUES ('Student');
INSERT INTO `intern`.`account_type` (`type`) VALUES ('Teacher');

select * from account;
INSERT INTO `intern`.`account` (`id_account`, `username`, `password`, `email`, `type`) VALUES ('1', 'Puthus', '142753869', 'Puthus09@gmail.com', 'Admin');
INSERT INTO `intern`.`account` (`id_account`, `username`, `password`, `email`, `type`) VALUES ('2', 'Roux', '142753869', 'Roux@gmail.com', 'Student');
INSERT INTO `intern`.`account` (`id_account`, `username`, `password`, `email`, `type`) VALUES ('3', 'Zebritov', '142753869', 'zebritov@gmail.com', 'Teacher');

select * from subject;
INSERT INTO `intern`.`subject` (`name_subject`) VALUES ('Thermodynamique');
INSERT INTO `intern`.`subject` (`name_subject`) VALUES ('Analyze');
INSERT INTO `intern`.`subject` (`name_subject`) VALUES ('Optique');


select * from article;
INSERT INTO `intern`.`article` (`id_article`, `name_article`, `date_article`, `views`, `Content`, `name_subject`, `id_account`) VALUES ('0', 'Analyse S1', '2018-5-5', '0', 'This is the support for the Analyse S1', 'Analyze', '3');
INSERT INTO `intern`.`article` (`id_article`, `name_article`, `date_article`, `views`, `Content`, `name_subject`, `id_account`) VALUES ('1', 'Thermodynamique S1', '2018-5-5', '0', 'this is the support for Thermodynamique S1', 'Thermodynamique', '3');

select * from file;
INSERT INTO `intern`.`file` (`Id_File`, `path`, `name`, `size`, `id_article`) VALUES ('0', '/Files', 'Analyze.txt', '1', '1');
INSERT INTO `intern`.`file` (`Id_File`, `path`, `name`, `size`, `id_article`) VALUES ('1', '/Files', 'Thermo.txt', '1', '2');

