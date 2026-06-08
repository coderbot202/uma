
-- UMA GROUPS PRODUCTION DATABASE SCHEMA

CREATE DATABASE IF NOT EXISTS uma;
USE uma;

-- USERS
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NULL,
    email VARCHAR(100) UNIQUE NULL,
    password VARCHAR(255) NULL,
    role VARCHAR(20) DEFAULT 'user',
    reset_token VARCHAR(255) NULL,
    reset_token_expiry DATETIME NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_users_email ON users(email);

-- ADMISSIONS
CREATE TABLE admissions (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    child_name VARCHAR(255) NULL,
    father_name VARCHAR(255) NULL,
    mother_name VARCHAR(255) NULL,
    mobile VARCHAR(20) NULL,
    class VARCHAR(50) NULL,
    address TEXT NULL,
    admission_date DATE NULL,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_admission_status ON admissions(status);


-- COMMUNICATIONS
CREATE TABLE communications (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    type ENUM('sms', 'email') NOT NULL,
    audience_type ENUM(
        'all_students',
        'all_teachers',
        'specific_class'
    ) NOT NULL,
    class_id INT(11) NULL,
    subject VARCHAR(255) NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- COMMUNICATION RECIPIENTS
CREATE TABLE communication_recipients (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    communication_id INT(11) NULL,
    user_id INT(11) NULL,
    status ENUM('pending', 'sent', 'failed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_communication_id
    FOREIGN KEY (communication_id)
    REFERENCES communications(id)
    ON DELETE CASCADE,

    CONSTRAINT fk_recipient_user
    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE
);

CREATE INDEX idx_communication_status 
ON communication_recipients(status);


-- DAILY DIARY
CREATE TABLE daily_diary (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    priority VARCHAR(20) NULL,
    class_range VARCHAR(50) NULL,
    staff_instruction TEXT NULL,
    event_date DATE NULL,
    event_time TIME NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_diary_event_date 
ON daily_diary(event_date);


-- JOBS
CREATE TABLE jobs (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    experience VARCHAR(50) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20) DEFAULT 'reviewing'
);

CREATE INDEX idx_job_status 
ON jobs(status);


-- NOTICES
CREATE TABLE notices (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    priority VARCHAR(50) NULL,
    file_path VARCHAR(255) NULL,
    posted_by VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_notice_category 
ON notices(category);

CREATE INDEX idx_notice_priority 
ON notices(priority);


-- PROGRAMS
CREATE TABLE programs (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NULL,
    description TEXT NULL,
    category VARCHAR(50) NULL,
    status VARCHAR(20) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_program_status 
ON programs(status);


-- QUERIES
CREATE TABLE queries (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NULL,
    address TEXT NULL,
    message TEXT NOT NULL,
    status ENUM('pending', 'resolved') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
);

CREATE INDEX idx_query_status 
ON queries(status);


-- SAMPLE PAPERS
CREATE TABLE sample_papers (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(100) NULL,
    class_name VARCHAR(50) NULL,
    year VARCHAR(10) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- SYLLABUS
CREATE TABLE syllabus (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(100) NULL,
    class_name VARCHAR(50) NULL,
    year VARCHAR(10) NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- TIMETABLE
CREATE TABLE timetable (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(50) NULL,
    file_path VARCHAR(255) NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- PRODUCTION NOTES
-- 1. Create uploads folder
-- mkdir uploads

-- 2. Give permission
-- chmod -R 755 uploads

-- 3. If upload issue occurs:
-- chmod -R 777 uploads

-- 4. Run composer install

-- 5. Required PHP Extensions:
-- mysqli
-- openssl
-- mbstring
-- fileinfo

-- END OF SCHEMA