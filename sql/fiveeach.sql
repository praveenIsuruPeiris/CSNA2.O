-- Insert 5 new records into each table without assuming existing records

-- ProvincialOrganization
INSERT INTO ProvincialOrganization (Name, Location) VALUES 
('Provincial Org 1', 'City 1'),
('Provincial Org 2', 'City 2'),
('Provincial Org 3', 'City 3'),
('Provincial Org 4', 'City 4'),
('Provincial Org 5', 'City 5');

-- Stadium
INSERT INTO Stadium (Name, Location, MaximumAttendance) VALUES 
('Stadium A', 'Location A', 20000),
('Stadium B', 'Location B', 30000),
('Stadium C', 'Location C', 40000),
('Stadium D', 'Location D', 50000),
('Stadium E', 'Location E', 60000);

-- School
INSERT INTO School (Name, Location, Population, SchoolType) VALUES 
('School Alpha', 'Town Alpha', 800, 'Highschool'),
('School Beta', 'Town Beta', 900, 'Highschool'),
('School Gamma', 'Town Gamma', 1000, 'Highschool'),
('School Delta', 'Town Delta', 1100, 'Highschool'),
('School Epsilon', 'Town Epsilon', 1200, 'Highschool');

-- Coach
INSERT INTO Coach (FirstName, LastName, Sex, Telephone, StreetAddress) VALUES 
('Adam', 'Smith', 'M', '111-1111', 'Coach Address 1'),
('Barbara', 'Johnson', 'F', '222-2222', 'Coach Address 2'),
('Carlos', 'Davis', 'M', '333-3333', 'Coach Address 3'),
('Diana', 'Martinez', 'F', '444-4444', 'Coach Address 4'),
('Evan', 'Garcia', 'M', '555-5555', 'Coach Address 5');

-- TeamManager
INSERT INTO TeamManager (FirstName, LastName, Sex, Telephone, StreetAddress) VALUES 
('Frank', 'Brown', 'M', '123-4567', 'Manager Address 1'),
('Gina', 'Wilson', 'F', '234-5678', 'Manager Address 2'),
('Harry', 'Miller', 'M', '345-6789', 'Manager Address 3'),
('Irene', 'Moore', 'F', '456-7890', 'Manager Address 4'),
('Jack', 'Taylor', 'M', '567-8901', 'Manager Address 5');

-- player
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank, schoolType) VALUES 
('Player A', 'M', 'Forward', 1, '100-0001', 'Player Address A', 1, 'highschool'),
('Player B', 'F', 'Midfielder', 2, '200-0002', 'Player Address B', 2, 'highschool'),
('Player C', 'M', 'Defender', 3, '300-0003', 'Player Address C', 3, 'highschool'),
('Player D', 'F', 'Goalkeeper', 4, '400-0004', 'Player Address D', 4, 'highschool'),
('Player E', 'M', 'Forward', 5, '500-0005', 'Player Address E', 5, 'highschool');

-- Team
INSERT INTO Team (School_id, Coach_id, TeamManager_id) VALUES 
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- Game
INSERT INTO Game (Date, HomeTeam_id, AwayTeam_id, Stadium_id, Attendance) VALUES 
('2023-10-01 19:00:00', 1, 2, 1, 10000),
('2023-10-02 19:00:00', 3, 4, 2, 15000),
('2023-10-03 19:00:00', 5, 1, 3, 20000),
('2023-10-04 19:00:00', 2, 3, 4, 25000),
('2023-10-05 19:00:00', 4, 5, 5, 30000);

-- PlayerStats
-- Each record is associated with a player and a game
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES 
(1, 1, 2, 1, 90, 0),
(2, 2, 1, 2, 85, 1),
(3, 3, 0, 0, 75, 0),
(4, 4, 3, 0, 80, 2),
(5, 5, 1, 1, 70, 1);

-- InjuryReport
-- Each record is associated with a player and a game
INSERT INTO InjuryReport (Player_id, Game_id, InjuryDetails, Date) VALUES 
(1, 1, 'Sprained ankle', '2023-10-02'),
(2, 2, 'Twisted knee', '2023-10-03'),
(3, 3, 'Broken wrist', '2023-10-04'),
(4, 4, 'Muscle strain', '2023-10-05'),
(5, 5, 'Concussion', '2023-10-06');

-- RecruitmentIncident
-- Each record is associated with a player
INSERT INTO RecruitmentIncident (player_id, Description, Date) VALUES 
(1, 'Excellent performance', '2023-10-07'),
(2, 'Remarkable skill', '2023-10-08'),
(3, 'Great leadership', '2023-10-09'),
(4, 'Outstanding teamwork', '2023-10-10'),
(5, 'Impressive commitment', '2023-10-11');

-- Scholarship
-- Each record is associated with a player and a school
INSERT INTO Scholarship (Player_id, Amount, ScholarshipTerms, School_id) VALUES 
(1, 2000.00, 'Full scholarship 2023', 1),
(2, 2500.00, 'Partial scholarship 2023', 2),
(3, 3000.00, 'Full scholarship 2023', 3),
(4, 3500.00, 'Partial scholarship 2023', 4),
(5, 4000.00, 'Full scholarship 2023', 5);

-- SchoolRank
-- Each record is associated with a school
INSERT INTO SchoolRank (schoolRank_id, school_id) VALUES 
(6, 1),
(7, 2),
(8, 3),
(9, 4),
(10, 5);

-- HomeTeam and AwayTeam
-- Each record is associated with a team
INSERT INTO HomeTeam (Team_id) VALUES (1), (2), (3), (4), (5);
INSERT INTO AwayTeam (Team_id) VALUES (1), (2), (3), (4), (5);

-- Roster
-- Each record is associated with a team and a player
INSERT INTO Roster (Team_id, SeasonNo, player_id) VALUES 
(1, 2023, 1),
(2, 2024, 2),
(3, 2025, 3),
(4, 2026, 4),
(5, 2027, 5);
