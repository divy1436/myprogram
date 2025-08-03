# Login Page Database

This repository contains the SQL schema for the **Login Page** project.  
The database stores user credentials in a secure format and supports authentication features.

---

## 📂 Database Details

- **Database Name:** `login_db`
- **Table Name:** `users`
- **Engine:** InnoDB

---

## 📑 Table Structure

### `users` Table
| Column     | Data Type     | Constraints                 | Description                          |
|------------|--------------|-----------------------------|--------------------------------------|
| `id`       | INT          | PRIMARY KEY, AUTO_INCREMENT | Unique identifier for each user.     |
| `username` | VARCHAR(100) | NOT NULL, UNIQUE            | User’s chosen username.              |
| `email`    | VARCHAR(50)  | NOT NULL, UNIQUE            | User’s email address.                |
| `password` | VARCHAR(100) | NOT NULL                    | User’s hashed password.              |

---

## 🛠 SQL Script

```sql
CREATE DATABASE login_db;

USE login_db;

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL UNIQUE,
  `email` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
