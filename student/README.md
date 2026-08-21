# Student Management System

A PHP and MySQL student record application for adding, viewing, updating, and deleting student information.

## Features

- View all students sorted by registration number
- Add a student with registration number, name, marks, attendance, and course
- Update an existing student by registration number
- Delete a student by registration number or name

## Project files

| File | Purpose |
| --- | --- |
| `student/stdmain.php` | Displays the student dashboard and records |
| `student/stdadd.php` | Adds a new student |
| `student/stdup.php` | Updates student details |
| `student/stddel.php` | Deletes a student |
| `student/css h2.css` | Additional page styles |

## Requirements

- XAMPP with Apache, PHP, and MySQL
- A MySQL database named `std1`
- A table named `std12` with columns matching the application fields: `reg`, `name`, `mark`, `att`, and `cou`

Example table setup:

```sql
CREATE DATABASE std1;
USE std1;

CREATE TABLE std12 (
    reg INT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mark INT NOT NULL,
    att INT NOT NULL,
    cou VARCHAR(100) NOT NULL
);
```

## Run locally

1. Place the project in `C:\xampp\htdocs\project`.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Create the `std1` database and `std12` table using the SQL above.
4. Open [http://localhost/project/student/stdmain.php](http://localhost/project/student/stdmain.php).

The PHP pages currently connect to MySQL on `localhost` with the `root` user and no password.