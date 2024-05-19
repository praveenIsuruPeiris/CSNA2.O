
CREATE TABLE player (
  player_id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(128) NOT NULL,
  gender VARCHAR(1) NOT NULL,
  position VARCHAR(30) NOT NULL,
  school_id INT(11) NOT NULL,
  telephone VARCHAR(10) NOT NULL,
  street_Address VARCHAR(50) NOT NULL,
  player_Rank INT(11) NOT NULL,
  schoolType ENUM('college', 'highschool') NOT NULL,
  PRIMARY KEY (player_id)
);


INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('John Doe', 'M', 'Goalkeeper', 1, '1234567890', '123 Main St', 1);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Jane Smith', 'F', 'Defender', 2, '2345678901', '456 Elm St', 2);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Alice Johnson', 'F', 'Midfielder', 3, '3456789012', '789 Oak St', 3);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Bob Brown', 'M', 'Striker', 4, '4567890123', '321 Pine St', 4);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Charlie Garcia', 'M', 'Goalkeeper', 5, '5678901234', '654 Maple St', 5);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Diana Martin', 'F', 'Defender', 1, '6789012345', '987 Walnut St', 6);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Evan Torres', 'M', 'Midfielder', 2, '7890123456', '321 Birch St', 7);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Fiona Cheng', 'F', 'Striker', 3, '8901234567', '432 Willow St', 8);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('George King', 'M', 'Goalkeeper', 4, '9012345678', '543 Palm St', 9);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Hannah Scott', 'F', 'Defender', 5, '0123456789', '654 Cedar St', 10);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Ian ONeil', 'M', 'Midfielder', 1, '1234509876', '765 Spruce St', 11);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Julia Chang', 'F', 'Striker', 2, '2345610987', '876 Aspen St', 12);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Kyle Mehta', 'M', 'Goalkeeper', 3, '3456721098', '987 Redwood St', 13);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Luna Rodriguez', 'F', 'Defender', 4, '4567832109', '108 Cherry St', 14);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Mason Li', 'M', 'Midfielder', 5, '5678943210', '209 Birch St', 15);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Nina Kim', 'F', 'Striker', 1, '6789054321', '310 Cedar St', 16);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Oscar Diaz', 'M', 'Goalkeeper', 2, '7890165432', '411 Pine St', 17);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Penelope Cruz', 'F', 'Defender', 3, '8901276543', '512 Oak St', 18);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Quincy Adams', 'M', 'Midfielder', 4, '9012387654', '613 Maple St', 19);
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank) VALUES ('Rachel Green', 'F', 'Striker', 5, '0123498765', '714 Pine St', 20);
CREATE TABLE player (
  player_id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(128) NOT NULL,
  gender VARCHAR(1) NOT NULL,
  position VARCHAR(30) NOT NULL,
  school_id INT(11) NOT NULL,
  telephone VARCHAR(10) NOT NULL,
  street_Address VARCHAR(50) NOT NULL,
  player_Rank INT(11) NOT NULL,
  schoolType ENUM('college', 'highschool') NOT NULL,
  PRIMARY KEY (player_id)
);
