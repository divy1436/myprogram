# 📝 PHP MySQL User Registration System

A simple user registration system using **PHP** and **MySQL** with secure password hashing. Built using **XAMPP** for local development.

---

## ✅ Features

- 📧 Collects Email, Username, and Password
- 🔒 Secure password storage using `password_hash()`
- 🛡️ Prevents duplicate registration (email/username)
- 🖥️ Simple HTML + PHP-based form
- 💾 Data stored in MySQL database (`login_db`)

---

## 🛠️ Setup Instructions

### 1. Install XAMPP

Download and install XAMPP from:  
👉 [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)

Start:
- ✅ Apache  
- ✅ MySQL  

---

### 2. Create MySQL Database & Table

1. Go to: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Create a new database named: `login_db`
3. Run the following SQL:

```sql
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `email` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


---

