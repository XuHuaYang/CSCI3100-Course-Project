CREATE TABLE questionnaire(
    nid int not null AUTO_INCREMENT PRIMARY KEY,
    title text not null,
    finished bit not null,
    type int not null,
    people int default 0
    );;