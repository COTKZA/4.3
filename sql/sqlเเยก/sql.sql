CREATE DATABASE student_db;

USE student_db;

CREATE TABLE student (
    student_code CHAR(10) PRIMARY KEY,
    student_name VARCHAR(50),
    gender CHAR(1)
);

CREATE TABLE course (
    course_code CHAR(8) PRIMARY KEY,
    course_name VARCHAR(50),
    credit INT
);

CREATE TABLE exam_result (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_code CHAR(8),
    student_code CHAR(10),
    point FLOAT,
    FOREIGN KEY (course_code) REFERENCES course(course_code),
    FOREIGN KEY (student_code) REFERENCES student(student_code)
);