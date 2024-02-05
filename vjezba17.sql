-- Create the countries table
CREATE TABLE IF NOT EXISTS countries (
    country_code varchar(2) PRIMARY KEY,
    country_name varchar(50) NOT NULL
);

-- Insert sample data into the countries table
INSERT INTO countries (country_code, country_name) VALUES
    ('US', 'United States'),
    ('CA', 'Canada'),
    ('GB', 'United Kingdom'),
    -- Add more countries as needed
    ('HR', 'Croatia');

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    username varchar(100) NOT NULL,
    password varchar(255) NOT NULL,
    country_code varchar(2),
    PRIMARY KEY (id),
    UNIQUE KEY username_key (username),
    CONSTRAINT fk_users_countries FOREIGN KEY (country_code) REFERENCES countries(country_code)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
