-- ProvincialOrganization Table
CREATE TABLE ProvincialOrganization (
    ProvincialOrganization_id INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(128) NOT NULL,
    Location VARCHAR(128) NOT NULL,
    PRIMARY KEY (ProvincialOrganization_id)
);

-- Stadium Table
CREATE TABLE Stadium (
    Stadium_id INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(128) NOT NULL,
    Location VARCHAR(128) NOT NULL,
    MaximumAttendance INT(11) NOT NULL,
    PRIMARY KEY (Stadium_id)
);

-- School Table
CREATE TABLE School (
    School_id INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Location VARCHAR(255) NOT NULL,
    Population INT(11) NOT NULL,
    SchoolType VARCHAR(100) NOT NULL,
    PRIMARY KEY (School_id)
);

-- Coach Table
CREATE TABLE Coach (
    Coach_id INT(11) NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(128) NOT NULL,
    LastName VARCHAR(128) NOT NULL,
    Sex VARCHAR(1) NOT NULL,
    Telephone VARCHAR(15) NOT NULL,
    StreetAddress VARCHAR(255) NOT NULL,
    PRIMARY KEY (Coach_id)
);

-- TeamManager Table
CREATE TABLE TeamManager (
    TeamManager_id INT(11) NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(128) NOT NULL,
    LastName VARCHAR(128) NOT NULL,
    Sex VARCHAR(1) NOT NULL,
    Telephone VARCHAR(10) NOT NULL,
    StreetAddress VARCHAR(50) NOT NULL,
    PRIMARY KEY (TeamManager_id)
);

-- player Table
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
    PRIMARY KEY (player_id),
    FOREIGN KEY (school_id) REFERENCES School(School_id)
);

-- Team Table
CREATE TABLE Team (
    Team_id INT(11) NOT NULL AUTO_INCREMENT,
    School_id INT(11) NOT NULL,
    Coach_id INT(11) NOT NULL,
    TeamManager_id INT(11) NOT NULL,
    PRIMARY KEY (Team_id),
    FOREIGN KEY (School_id) REFERENCES School(School_id),
    FOREIGN KEY (Coach_id) REFERENCES Coach(Coach_id),
    FOREIGN KEY (TeamManager_id) REFERENCES TeamManager(TeamManager_id)
);

-- Game Table
CREATE TABLE Game (
    Game_id INT NOT NULL AUTO_INCREMENT,
    Date DATETIME NOT NULL,
    HomeTeam_id INT(11) NOT NULL,
    AwayTeam_id INT(11) NOT NULL,
    Stadium_id INT(11) NOT NULL,
    Attendance INT NOT NULL,
    PRIMARY KEY (Game_id),
    FOREIGN KEY (HomeTeam_id) REFERENCES Team(Team_id),
    FOREIGN KEY (AwayTeam_id) REFERENCES Team(Team_id),
    FOREIGN KEY (Stadium_id) REFERENCES Stadium(Stadium_id)
);

-- PlayerStats Table
CREATE TABLE PlayerStats (
    player_id INT(11) NOT NULL,
    game_id INT(11) NOT NULL,
    goals INT(11) NOT NULL,
    assists INT(11) NOT NULL,
    minutes_played INT(11) NOT NULL,
    penalties INT(11) NOT NULL,
    PRIMARY KEY (player_id, game_id),
    FOREIGN KEY (player_id) REFERENCES player(player_id),
    FOREIGN KEY (game_id) REFERENCES Game(Game_id)
);

-- InjuryReport Table
CREATE TABLE InjuryReport (
    InjuryReport_id INT NOT NULL AUTO_INCREMENT,
    Player_id INT(11) NOT NULL,
    Game_id INT(11) NOT NULL,
    InjuryDetails TEXT NOT NULL,
    Date DATETIME NOT NULL,
    PRIMARY KEY (InjuryReport_id),
    FOREIGN KEY (Player_id) REFERENCES player(player_id),
    FOREIGN KEY (Game_id) REFERENCES Game(Game_id)
);

-- RecruitmentIncident Table
CREATE TABLE RecruitmentIncident (
    Incident_id INT NOT NULL AUTO_INCREMENT,
    player_id INT(11) NOT NULL,
    Description TEXT NOT NULL,
    Date DATETIME NOT NULL,
    PRIMARY KEY (Incident_id),
    FOREIGN KEY (player_id) REFERENCES player(player_id)
);

-- Scholarship Table
CREATE TABLE Scholarship (
    Scholarship_id INT NOT NULL AUTO_INCREMENT,
    Player_id INT(11) NOT NULL,
    Amount DECIMAL(10,2) NOT NULL,
    ScholarshipTerms TEXT NOT NULL,
    School_id INT(11) NOT NULL,
    PRIMARY KEY (Scholarship_id),
    FOREIGN KEY (Player_id) REFERENCES player(player_id),
    FOREIGN KEY (School_id) REFERENCES School(School_id)
);

-- SchoolRank Table
CREATE TABLE SchoolRank (
    schoolRank_id INT PRIMARY KEY,
    school_id INT,
    FOREIGN KEY (School_id) REFERENCES School(School_id)
);

-- HomeTeam Table
CREATE TABLE HomeTeam (
    HomeTeam_id INT NOT NULL AUTO_INCREMENT,
    Team_id INT(11) NOT NULL,
    PRIMARY KEY (HomeTeam_id),
    FOREIGN KEY (Team_id) REFERENCES Team(Team_id)
);

-- AwayTeam Table
CREATE TABLE AwayTeam (
    AwayTeam_id INT NOT NULL AUTO_INCREMENT,
    Team_id INT(11) NOT NULL,
    PRIMARY KEY (AwayTeam_id),
    FOREIGN KEY (Team_id) REFERENCES Team(Team_id)
);

-- Roster Table
CREATE TABLE Roster (
    Team_id INT(11) NOT NULL,
    SeasonNo INT(11) NOT NULL,
    player_id INT(11) NOT NULL,
    PRIMARY KEY (Team_id, player_id),
    FOREIGN KEY (Team_id) REFERENCES Team(Team_id),
    FOREIGN KEY (Player_id) REFERENCES player(player_id)
);
