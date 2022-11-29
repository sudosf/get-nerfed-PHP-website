CREATE TABLE Users (
	user_id int NOT NULL UNIQUE AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
	lastlame varchar(50) NOT NULL,
    username varchar(100) NOT NULL UNIQUE,
    password varchar(50) NOT NULL,
    email varchar(255) UNIQUE,
    age int CHECK (age >= 18),
    gender ENUM('F','M') NOT NULL, 
    role varchar(25) DEFAULT 'standard',
    PRIMARY KEY (user_id)
);

CREATE TABLE Comments (
	commment_id int NOT NULL UNIQUE AUTO_INCREMENT,
    comment TEXT, 
    user_id int,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Prize (
	prize_id int NOT NULL UNIQUE AUTO_INCREMENT,
	firstname varchar(50) NOT NULL,
	lastlame varchar(50) NOT NULL,
    phone int,
	user_id int,
    PRIMARY KEY (prize_id),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Contact (
	ticket_id int NOT NULL UNIQUE AUTO_INCREMENT,
	firstname varchar(50) NOT NULL,
	lastlame varchar(50) NOT NULL,
	email varchar(255),
    subject varchar(255),
    message  TEXT,
    PRIMARY KEY (ticket_id)
);

