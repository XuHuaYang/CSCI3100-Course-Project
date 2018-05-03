CREATE TABLE releases(
    bid int not null AUTO_INCREMENT PRIMARY KEY,
    email varchar(70) not null,
    nid int not null,
    FOREIGN KEY (nid) REFERENCES questionnaire(nid),
    FOREIGN KEY (email) REFERENCES userinfo(email)
)