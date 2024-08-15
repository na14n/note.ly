# note.ly
A notes app built with my [PHP Pseudo Framework](https://github.com/na14n/php-pseudo-framework).

---

## What can this do
- Register and Login User Accounts
- Save User Notes
- List All User's Notes
- Update Existing User's Notes
- Delete Existing User's Notes

---

## What I Used
- PHP 8.2.12
- XAMPP Control Panel v3.3.0

---

## How I Run
1. Open a terminal inside the directory.
2. Run the following command:
   
   ```
   php -S localhost:8888 -t public
3. Open your browser and load localhost:8888.
4. Open your favorite code editor in the directory.
5. Open XAMPP and access PhpMyAdmin.
6. Create a new database called 'local'.
7. Add notes table:
   
   ```
   CREATE TABLE `notes` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `body` varchar(255) NOT NULL,
        `user_id` int(11) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 16 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci
8. Add users table:
   
   ```
   CREATE TABLE `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `email` (`email`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 13 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci
9. Enjoy learning!
