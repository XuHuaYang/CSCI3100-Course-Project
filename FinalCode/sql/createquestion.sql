CREATE TABLE question(
    qid int AUTO_INCREMENT PRIMARY KEY,
    nid int not null,
    title text not null,
    choicea varchar(2000) not null,
    choiceb varchar(2000) not null,
    choicec varchar(2000) not null,
    choiced varchar(2000) not null,
    acount int not null,
    bcount int not null,
    ccount int not null,
    dcount int not null,
    FOREIGN KEY (nid) REFERENCES questionnaire(nid)

    );