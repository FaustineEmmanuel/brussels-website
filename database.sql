-- Brussels Website Database Schema
-- For XAMPP MySQL Integration

-- Create Database
CREATE DATABASE IF NOT EXISTS brussels_website;
USE brussels_website;

-- Table for visitor comments/feedback
CREATE TABLE IF NOT EXISTS comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for photo gallery
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    image_path VARCHAR(255) NOT NULL,
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for landmarks information
CREATE TABLE IF NOT EXISTS landmarks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    description TEXT,
    history TEXT,
    location VARCHAR(200),
    image_path VARCHAR(255),
    visit_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for visitor statistics
CREATE TABLE IF NOT EXISTS visitor_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_name VARCHAR(100),
    visit_count INT DEFAULT 0,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample landmarks data
INSERT INTO landmarks (name, description, history, location, image_path, visit_info) VALUES
('Grand Place', 'UNESCO World Heritage Site and the central square of Brussels, featuring stunning guildhalls and the Town Hall.', 'The Grand Place has been the heart of Brussels since the 13th century. It showcases Gothic, Baroque, and Louis XIV styles in its architecture.', 'City Center, Brussels', 'assets/images/grand_place_brussels_364537f2.jpg', 'Open 24/7, Free access. Best visited in the evening for light shows.'),

('Atomium', 'A 102-meter tall structure representing an iron crystal magnified 165 billion times, built for the 1958 World Expo.', 'Designed by André Waterkeyn for the 1958 Brussels World Fair, the Atomium symbolizes the atomic age and scientific progress.', 'Square de l''Atomium, 1020 Brussels', 'assets/images/atomium_brussels_bel_225e89cc.jpg', 'Open daily 10:00-18:00. Advance booking recommended.'),

('Manneken Pis', 'The iconic bronze statue of a little boy urinating, one of Brussels most famous landmarks.', 'Created in 1619, this 61cm statue has become a beloved symbol of Brussels. It has over 1000 costumes in its wardrobe.', 'Corner of Rue de l''Etuve and Rue du Chêne', 'assets/images/manneken_pis_brussel_f158b05d.jpg', 'Visible 24/7, Free. See costume collection at Brussels City Museum.'),

('St. Michael and St. Gudula Cathedral', 'The main Catholic cathedral of Brussels, a masterpiece of Gothic architecture.', 'Construction began in 1226 and took over 300 years. Named after Brussels patron saints Michael and Gudula.', 'Parvis Sainte-Gudule, 1000 Brussels', 'assets/images/st_michael_st_gudula_3a45153d.jpg', 'Open Mon-Fri 7:30-18:00, Sat-Sun 8:30-18:00. Free entry.'),

('Royal Palace of Brussels', 'The official palace of the King and Queen of the Belgians, used for state functions.', 'Built in the neoclassical style, it serves as the administrative headquarters of the Belgian monarchy.', 'Rue Brederode 16, 1000 Brussels', 'assets/images/royal_palace_brussel_c83d14a3.jpg', 'Open to public FREE in summer months (late July-September).'),

('European Parliament', 'One of the main institutions of the European Union, where EU laws are debated and adopted.', 'The Parliament represents over 450 million EU citizens. The hemicycle can accommodate all 705 Members of European Parliament.', 'Rue Wiertz, 1047 Brussels', 'assets/images/european_parliament__8fdca356.jpg', 'Guided tours available. Book in advance through official website.'),

('Galeries Royales Saint-Hubert', 'Europe''s first covered shopping arcade, opened in 1847.', 'This beautiful glass-roofed arcade features luxury shops, cafes, and theaters in stunning 19th-century architecture.', 'Galerie du Roi 5, 1000 Brussels', 'assets/images/galeries_royales_sai_7938b893.jpg', 'Open daily. Shops typically 10:00-18:00.'),

('Sonian Forest', 'A 4,400-hectare ancient forest on the southeastern edge of Brussels.', 'This UNESCO World Heritage Site dates back thousands of years and is a vital green lung for the city.', 'Southeast Brussels region', 'assets/images/sonian_forest_brusse_9db93ba0.jpg', 'Open year-round. Multiple entry points. Free access.');

-- Insert gallery categories
INSERT INTO gallery (title, description, image_path, category) VALUES
('Grand Place at Night', 'The magnificent Grand Place illuminated in the evening', 'assets/images/grand_place_brussels_364537f2.jpg', 'landmarks'),
('The Atomium', 'Brussels iconic 1958 World Expo monument', 'assets/images/atomium_brussels_bel_225e89cc.jpg', 'landmarks'),
('Brussels Cityscape', 'Beautiful view of Brussels skyline', 'assets/images/brussels_cityscape_s_275944aa.jpg', 'cityscape'),
('Royal Palace', 'The majestic Royal Palace of Brussels', 'assets/images/royal_palace_brussel_c83d14a3.jpg', 'architecture'),
('European Parliament', 'Home of European democracy', 'assets/images/european_parliament__8fdca356.jpg', 'institutions'),
('Sonian Forest', 'Ancient forest surrounding Brussels', 'assets/images/sonian_forest_brusse_9db93ba0.jpg', 'nature'),
('Belgian Delicacies', 'Famous Belgian waffles and chocolate', 'assets/images/belgian_waffles_choc_5d6c8016.jpg', 'culture'),
('Art Museums', 'World-class art collections in Brussels', 'assets/images/brussels_belgium_mus_bc097f97.jpg', 'museums');

-- Initialize page visit statistics
INSERT INTO visitor_stats (page_name, visit_count) VALUES
('home', 0),
('history', 0),
('landmarks', 0),
('museums', 0),
('nip_program', 0),
('sustainability', 0),
('democracy', 0),
('contact', 0);
