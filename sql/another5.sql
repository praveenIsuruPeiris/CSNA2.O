-- Insert 5 additional records into each table as a continuation

-- ProvincialOrganization
INSERT INTO ProvincialOrganization (Name, Location) VALUES 
('Provincial Org 6', 'City 6'),
('Provincial Org 7', 'City 7'),
('Provincial Org 8', 'City 8'),
('Provincial Org 9', 'City 9'),
('Provincial Org 10', 'City 10');

-- Stadium
INSERT INTO Stadium (Name, Location, MaximumAttendance) VALUES 
('Stadium F', 'Location F', 70000),
('Stadium G', 'Location G', 80000),
('Stadium H', 'Location H', 90000),
('Stadium I', 'Location I', 100000),
('Stadium J', 'Location J', 110000);

-- School
INSERT INTO School (Name, Location, Population, SchoolType) VALUES 
('School Zeta', 'Town Zeta', 1300, 'Highschool'),
('School Eta', 'Town Eta', 1400, 'Highschool'),
('School Theta', 'Town Theta', 1500, 'Highschool'),
('School Iota', 'Town Iota', 1600, 'Highschool'),
('School Kappa', 'Town Kappa', 1700, 'Highschool');

-- Coach
INSERT INTO Coach (FirstName, LastName, Sex, Telephone, StreetAddress) VALUES 
('Felix', 'White', 'M', '666-6666', 'Coach Address 6'),
('Gloria', 'Black', 'F', '777-7777', 'Coach Address 7'),
('Hector', 'Green', 'M', '888-8888', 'Coach Address 8'),
('Isla', 'Brown', 'F', '999-9999', 'Coach Address 9'),
('Jason', 'Gray', 'M', '000-0000', 'Coach Address 10');

-- TeamManager
INSERT INTO TeamManager (FirstName, LastName, Sex, Telephone, StreetAddress) VALUES 
('Kevin', 'Lee', 'M', '678-9012', 'Manager Address 6'),
('Laura', 'Hall', 'F', '789-0123', 'Manager Address 7'),
('Miles', 'Young', 'M', '890-1234', 'Manager Address 8'),
('Nina', 'Harris', 'F', '901-2345', 'Manager Address 9'),
('Oscar', 'Martin', 'M', '012-3456', 'Manager Address 10');

-- player
INSERT INTO player (name, gender, position, school_id, telephone, street_Address, player_Rank, schoolType) VALUES 
('Player F', 'M', 'Forward', 6, '600-0006', 'Player Address F', 6, 'college'),
('Player G', 'F', 'Midfielder', 7, '700-0007', 'Player Address G', 7, 'college'),
('Player H', 'M', 'Defender', 8, '800-0008', 'Player Address H', 8, 'college'),
('Player I', 'F', 'Goalkeeper', 9, '900-0009', 'Player Address I', 9, 'college'),
('Player J', 'M', 'Forward', 10, '000-0010', 'Player Address J', 10, 'college');

-- Team
INSERT INTO Team (School_id, Coach_id, TeamManager_id) VALUES 
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10);

-- Game
INSERT INTO Game (Date, HomeTeam_id, AwayTeam_id, Stadium_id, Attendance) VALUES 
('2023-10-06 19:00:00', 6, 7, 6, 35000),
('2023-10-07 19:00:00', 8, 9, 7, 40000),
('2023-10-08 19:00:00', 10, 6, 8, 45000),
('2023-10-09 19:00:00', 7, 8, 9, 50000),
('2023-10-10 19:00:00', 9, 10, 10, 55000);

-- PlayerStats
-- Each record is associated with a player and a game
INSERT INTO PlayerStats (player_id, game_id, goals, assists, minutes_played, penalties) VALUES 
(6, 6, 1, 0, 90, 1),
(7, 7, 0, 1, 85, 0),
(8, 8, 2, 0, 80, 2),
(9, 9, 0, 2, 75, 1),
(10, 10, 1, 1, 70, 0);

-- InjuryReport
-- Each record is associated with a player and a game
INSERT INTO InjuryReport (Player_id, Game_id, InjuryDetails, Date) VALUES 
(6, 6, 'Fractured foot', '2023-10-07'),
(7, 7, 'Dislocated shoulder', '2023-10-08'),
(8, 8, 'Elbow injury', '2023-10-09'),
(9, 9, 'Knee ligament injury', '2023-10-10'),
(10, 10, 'Hip injury', '2023-10-11');

-- RecruitmentIncident
-- Each record is associated with a player
INSERT INTO RecruitmentIncident (player_id, Description, Date) VALUES 
(6, 'Impressive agility', '2023-10-12'),
(7, 'Strong defensive skills', '2023-10-13'),
(8, 'Powerful striker', '2023-10-14'),
(9, 'Excellent reflexes', '2023-10-15'),
(10, 'High scoring ability', '2023-10-16');

-- Scholarship
-- Each record is associated with a player and a school
INSERT INTO Scholarship (Player_id, Amount, ScholarshipTerms, School_id) VALUES 
(6, 2100.00, 'Full scholarship 2023', 6),
(7, 2200.00, 'Partial scholarship 2023', 7),
(8, 2300.00, 'Full scholarship 2023', 8),
(9, 2400.00, 'Partial scholarship 2023', 9),
(10, 2500.00, 'Full scholarship 2023', 10);

-- SchoolRank
-- Each record is associated with a school
INSERT INTO SchoolRank (schoolRank_id, school_id) VALUES 
(11, 6),
(12, 7),
(13, 8),
(14, 9),
(15, 10);

-- HomeTeam and AwayTeam
-- Each record is associated with a team
INSERT INTO HomeTeam (Team_id) VALUES (6), (7), (8), (9), (10);
INSERT INTO AwayTeam (Team_id) VALUES (6), (7), (8), (9), (10);

-- Roster
-- Each record is associated with a team and a player
INSERT INTO Roster (Team_id, SeasonNo, player_id) VALUES 
(6, 2023, 6),
(7, 2024, 7),
(8, 2025, 8),
(9, 2026, 9),
(10, 2027, 10);
