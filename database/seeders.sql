-- StadiumStream Seeders
-- Insert sample data for teams, stadiums, and roles

INSERT INTO role (id, role) VALUES (1, 'user'), (2, 'admin');

INSERT INTO stade (id, name, location, capacity) VALUES
(1, 'Olympic Stadium of Ebimpe', 'Abidjan', 60000),
(2, 'The Felix Houphouet-Boigny Stadium', 'Abidjan', 29000),
(3, 'Peace Stadium', 'Bouake', 40000),
(4, 'The Stadium of Korhogo', 'Korhogo', 20000),
(5, 'Laurent Pokou Stadium – San Pedro', 'San Pedro', 20000),
(6, 'Charles Konan Banny Stadium', 'Yamoussoukro', 20000);

INSERT INTO team (id, name, flag, coach, founded_year) VALUES
(1, 'Ivory Coast', 'Ivory_Coast.jpeg', 'Jean-Louis Gasset', 1950),
(2, 'Nigeria', 'Nigeria.jpeg', 'José Peseiro', 1972),
(3, 'Senegal', 'Senegal.jpeg', 'Aliou Cissé', 1975),
(4, 'Morocco', 'Morocco.jpeg', 'Walid Regragui', 1960),
(5, 'Ghana', 'Ghana.jpeg', 'Chris Hughton', 1962);

INSERT INTO match (id, team1, team2, time, stade, image) VALUES
(1, 1, 2, '2024-01-13 22:00:00', 1, '1vs2.jpg'),
(2, 3, 4, '2024-01-14 20:00:00', 2, '3vs4.jpg'),
(3, 5, 1, '2024-01-15 21:00:00', 3, '5vs1.jpg');

INSERT INTO user (id, full_name, email, phone_number, password) VALUES
(1, 'Admin User', 'admin@stadiumstream.com', '+22500000000', 'admin123'),
(2, 'Normal User', 'user@stadiumstream.com', '+22511111111', 'user123');

INSERT INTO user_role (role_id, user_id) VALUES
(2, 1),
(1, 2);
