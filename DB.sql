CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    school VARCHAR(255) NOT NULL,
    grade INT NOT NULL,
    plan VARCHAR(50) NOT NULL
);

