CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100),
    role VARCHAR(20)
);

CREATE TABLE consultations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    disease VARCHAR(100),
    description TEXT,
    doctor_reply TEXT,
    status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    doctor_name VARCHAR(100),
    specialty VARCHAR(100)
);

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100),
    appointment_date DATE
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT
);

INSERT INTO users(name,email,password,role)
VALUES(
'Doctor',
'doctor@gmail.com',
'123',
'doctor'
);