
use cnsa;
DROP TABLE IF EXISTS PlayerStats;

CREATE TABLE PlayerStats (
  player_id INT(11) NOT NULL,
  game_id INT(11) NOT NULL,
  goals INT(11) NOT NULL,
  assists INT(11) NOT NULL,
  minutes_played INT(11) NOT NULL,
  penalties INT(11) NOT NULL,
  PRIMARY KEY (player_id, game_id),
  FOREIGN KEY (player_id) REFERENCES player(player_id)
);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (1, 101, 2, 1, 90, 0);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (2, 102, 0, 2, 85, 1);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (3, 103, 1, 0, 75, 2);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (4, 104, 3, 1, 90, 0);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (5, 105, 0, 0, 90, 1);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (6, 106, 1, 1, 80, 0);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (7, 107, 2, 2, 90, 0);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (8, 108, 1, 3, 90, 1);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (9, 109, 0, 1, 90, 0);
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES (10, 110, 1, 0, 45, 1);
