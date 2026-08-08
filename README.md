# Hello Laravel

## 1. Introduction

### Overview of Laravel

Laravel is a PHP web application framework used for building modern web applications. It provides developers with tools and a structured framework for handling common web development tasks such as routing, database operations, sessions, authentication, and application configuration. Laravel also uses the Blade templating system for creating dynamic web pages.

### Importance of Client-Server Technologies

Client-server technologies are important because they allow users to interact with applications through a client, such as a web browser, while the server processes requests, handles application logic, and communicates with databases. Understanding this architecture is important for developing web applications that can efficiently handle user requests and manage data.

### Purpose of the Project

The purpose of this project was to configure a Laravel development environment and create my first Laravel application for ITST 302 – Client-Server Technologies. The activity involved installing and verifying PHP, Composer, Laravel, Git, MySQL, and Visual Studio Code, creating a Laravel project, customizing its homepage, and publishing the project to GitHub.

---

## 2. Objectives

At the end of the activity, I achieved the following objectives:

1. Installed and verified PHP for server-side web development.
2. Installed Composer and used it to manage PHP dependencies.
3. Installed and configured Laravel and created my first Laravel application.
4. Installed and verified Git for version control.
5. Installed and verified MySQL as the required relational database system.
6. Configured SQLite for the Laravel project's local database.
7. Used Visual Studio Code to open and edit the Laravel project.
8. Created and customized a Laravel homepage using HTML and CSS.
9. Ran the Laravel application locally using `php artisan serve`.
10. Connected the Laravel project to a public GitHub repository.
11. Practiced Git commits and version control.
12. Created technical documentation for the development environment and installation process.

---

## 3. Development Environment

The following software and tools were used during the activity.

| Software                 | Version / Details                                |
| ------------------------ | ------------------------------------------------ |
| Operating System         | Windows 11                                       |
| PHP                      | 8.4.20                                           |
| Laravel                  | 13.24.0                                          |
| Composer                 | 2.10.2                                           |
| Git                      | 2.51.1.windows.1                                 |
| MySQL                    | 8.0.39                                           |
| Visual Studio Code       | 1.132.0                                          |
| Database used by Laravel | SQLite                                           |

### PHP

PHP 8.4.20 was used as the server-side programming language. PHP was also configured with the extensions required by Laravel, including `fileinfo`, `pdo_sqlite`, `sqlite3`, and `zip`.

### Laravel

The project uses Laravel 13.24.0. The Laravel application was created using Composer with the project name `hello-laravel`.

### Composer

Composer was used as the PHP dependency manager and was also used to create the Laravel project.

### Git

Git was used for version control and for connecting the local Laravel project to GitHub.

### MySQL

MySQL 8.0.39 was installed as the required relational database software for the activity. The MySQL command-line client was not initially available through the `mysql` command, although MySQL Shell was installed and available.

### Visual Studio Code

Visual Studio Code was used as the primary code editor for opening and modifying the Laravel project.

---

## 4. Installation Steps

### Step 1: Verify PHP

PHP was installed and verified using:

```bash
php -v
```

The installed PHP version was:

```text
PHP 8.4.20
```

Screenshot:

`![PHP Version](screenshot/php-version.png)`

**Figure 1. PHP version verification.**

---

### Step 2: Install and Verify Composer

Composer was installed as the PHP dependency manager.

The installation was verified using:

```bash
composer -V
```

Screenshot:

`![Composer Version](screenshot/composer-version.png)`

**Figure 2. Composer version verification.**

---

### Step 3: Install Laravel

The Laravel installer was installed through Composer using:

```bash
composer global require laravel/installer
```

The Laravel project was later created using:

```bash
composer create-project laravel/laravel hello-laravel
```

Laravel was verified using either:

```bash
laravel -V
```

or:

```bash
composer global show laravel/installer
```

The Laravel application was running Laravel 13.24.0.

Screenshot:

`![Laravel Version](screenshot/laravel-version.png)`

**Figure 3. Laravel installation/version verification.**

---

### Step 4: Verify Git

Git was installed and verified using:

```bash
git --version
```

Screenshot:

`![Git Version](screenshot/git-version.png)`

**Figure 4. Git version verification.**

---

### Step 5: Install and Verify MySQL

MySQL was installed as the required relational database software.

The expected verification command was:

```bash
mysql --version
```

However, the `mysql` command was initially not recognized even though MySQL Shell was installed.

MySQL Shell was verified using:

```bash
mysqlsh --version
```

The installed MySQL Shell reported MySQL 8.0.38.

The MySQL installation itself was reported as version 8.0.39.

Screenshot:

`![MySQL Version](screenshot/mysql-version.png)`

**Figure 5. MySQL/MySQL Shell version verification.**

---

### Step 6: Open the Laravel Project in Visual Studio Code

The Laravel project was opened in Visual Studio Code from:

```text
C:\Users\bryanpaks\hello-laravel
```

The project contains the standard Laravel folders and configuration files.

Screenshot:

`![Visual Studio Code](screenshot/vscode.png)`

**Figure 6. Laravel project opened in Visual Studio Code.**

---

### Step 7: Create the Laravel Project

The project was created using Composer:

```bash
composer create-project laravel/laravel hello-laravel
```

This created the project at:

```text
C:\Users\bryanpaks\hello-laravel
```

Composer installed the Laravel framework and its required PHP dependencies.

---

### Step 8: Configure the Database

The Laravel project was configured to use SQLite for its local database.

The SQLite database file was:

```text
database/database.sqlite
```

The `.env` configuration used:

```env
DB_CONNECTION=sqlite
```

The session driver was configured to use files:

```env
SESSION_DRIVER=file
```

This prevented Laravel from attempting to store sessions in a database table unnecessarily for this simple project.

The SQLite PHP extensions were enabled and verified with:

```bash
php -m | findstr /i "sqlite"
```

The result included:

```text
pdo_sqlite
sqlite3
```

The available PDO drivers were also verified with:

```bash
php -r "var_dump(PDO::getAvailableDrivers());"
```

The result confirmed:

```text
sqlite
```

---

### Step 9: Run the Laravel Application

The project was opened in the terminal:

```bash
cd C:\Users\bryanpaks\hello-laravel
```

Laravel was then started using:

```bash
php artisan serve
```

The application became available at:

```text
http://127.0.0.1:8000
```

Screenshot:

`![Laravel Server](screenshot/artisan-serve.png)`

**Figure 7. Laravel development server running successfully.**

---

### Step 10: Customize the Homepage

The default Laravel homepage was modified through:

```text
resources/views/welcome.blade.php
```

The homepage was customized to display:

* Student Name
* Student Number
* Course
* Section
* Subject
* Current Date

Student information:

```text
Name: Balmes, Amaru Jay F.
Student Number: 0124-0398
Course: Bachelor of Science in Information Technology
Section: 3-C
Subject: ITST 302
Date: August 8, 2026
```

The page was also given a simple and clean design using HTML and CSS.

Screenshot:
`![Laravel Homepage](screenshot/laravel-initial-page.png)`
`![Laravel Homepage](screenshot/hello-laravel-homepage.png)`

**Figure 8. Customized Hello Laravel homepage.**

---

### Step 11: Connect the Project to GitHub

A public GitHub repository was created with the required name:

```text
client-server-week02-laravel-setup
```

The local project was initialized with Git and connected to the GitHub repository.

The general Git workflow used was:

```bash
git init
git add .
git commit -m "Initial Laravel project setup"
git branch -M main
git remote add origin https://github.com/marubalmes/marubalmes-client-server-week02-laravel-setup.githttps://github.com/marubalmes/marubalmes-client-server-week02-laravel-setup.git
git push -u origin main
```

The `.gitignore` file was also used to prevent files such as `.env`, `vendor`, and `node_modules` from being committed.

---

## 5. Project Structure

The Laravel project contains several important folders.

### `app/`

The `app/` directory contains the core application code. This is where application-related classes such as models, controllers, and other PHP classes are organized.

### `routes/`

The `routes/` directory contains the application's route definitions. Routes determine how the application responds to URLs and requests.

For example, web routes are commonly defined in:

```text
routes/web.php
```

### `resources/`

The `resources/` directory contains resources used by the application, including Blade views and frontend assets.

The customized homepage for this project is located at:

```text
resources/views/welcome.blade.php
```

### `public/`

The `public/` directory contains files that are directly accessible by the web server. It serves as the entry point for the Laravel application.

### `config/`

The `config/` directory contains Laravel's configuration files. These files control different settings used by the application.

### `database/`

The `database/` directory contains database-related files such as migrations, seeders, factories, and the SQLite database file used by this project.

The local SQLite database is:

```text
database/database.sqlite
```

---

## 6. Problems Encountered

### Problem 1: PHP ZIP Extension Was Missing

While installing the Laravel installer with Composer, Composer reported that the ZIP extension and unzip/7-Zip commands were missing.

The error indicated that the PHP configuration file being used was:

```text
C:\Users\bryanpaks\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe\php.ini
```

This prevented Composer from downloading and extracting some dependencies.

### Problem 2: PHP `fileinfo` Extension Was Missing

When creating the Laravel project, Composer reported:

```text
ext-fileinfo is missing from your system
```

The Laravel framework required this PHP extension.

### Problem 3: SQLite Driver Was Initially Missing

After creating the SQLite database, Laravel reported:

```text
could not find driver
```

The error occurred because the SQLite PDO driver had not yet been enabled in PHP.

### Problem 4: SQLite Database File Was Not Found

Laravel initially reported that:

```text
C:\Users\bryanpaks\hello-laravel\database\database.sqlite
```

did not exist.

An attempt to create the file from the wrong directory also produced a path error because the terminal was located at:

```text
C:\Users\bryanpaks
```

instead of the Laravel project directory.

### Problem 5: MySQL Command Was Not Recognized

The command:

```bash
mysql --version
```

was not recognized even though MySQL was installed.

However:

```bash
where mysqlsh
```

located MySQL Shell, and:

```bash
mysqlsh --version
```

successfully returned the installed MySQL Shell version.

### Problem 6: Laravel Session Database Error

Laravel attempted to query the `sessions` table and produced a database-related error.

The problem was resolved by changing the session driver from the database driver to the file driver:

```env
SESSION_DRIVER=file
```

Laravel configuration was then cleared using:

```bash
php artisan optimize:clear
```

---

## 7. Solutions

### Solution to the PHP ZIP Extension Problem

The PHP configuration file reported by PHP was opened and the required PHP extension was enabled. The PHP installation was then checked again to confirm that the required extensions were available.

### Solution to the `fileinfo` Problem

The `fileinfo` extension was enabled in the PHP configuration file. Composer was then able to continue resolving the Laravel framework dependencies.

### Solution to the SQLite Driver Problem

The required SQLite extensions were enabled in `php.ini`:

```ini
extension=pdo_sqlite
extension=sqlite3
```

PHP was then verified using:

```bash
php -m | findstr /i "sqlite"
```

The output confirmed:

```text
pdo_sqlite
sqlite3
```

The PDO drivers were also checked:

```bash
php -r "var_dump(PDO::getAvailableDrivers());"
```

and `sqlite` was returned.

### Solution to the SQLite File Problem

The Laravel project directory was entered first:

```bash
cd C:\Users\bryanpaks\hello-laravel
```

The SQLite database file was then created in the correct location:

```text
database/database.sqlite
```

### Solution to the MySQL Command Problem

Although `mysql` was not available directly through the command line, MySQL Shell was found at:

```text
C:\Program Files\MySQL\MySQL Shell 8.0\bin\mysqlsh.exe
```

MySQL Shell was verified using:

```bash
mysqlsh --version
```

### Solution to the Session Database Problem

The Laravel session driver was changed to file-based storage:

```env
SESSION_DRIVER=file
```

Laravel's cached configuration was cleared:

```bash
php artisan optimize:clear
```

After this change, the Laravel application successfully loaded at:

```text
http://127.0.0.1:8000
```

---

## 8. Screenshots

The following screenshots are included in the `screenshot/` directory.

| Screenshot                   | Caption                                                   |
| ---------------------------- | --------------------------------------------------------- |
| `php-version.png`            | Figure 1. PHP version verification                        |
| `composer-version.png`       | Figure 2. Composer version verification                   |
| `laravel-version.png`        | Figure 3. Laravel installation/version verification       |
| `git-version.png`            | Figure 4. Git version verification                        |
| `mysql-version.png`          | Figure 5. MySQL/MySQL Shell version verification          |
| `vscode.png`                 | Figure 6. Laravel project opened in Visual Studio Code    |
| `artisan-serve.png`          | Figure 7. Laravel development server running successfully |
| `hello-laravel-homepage.png` | Figure 8. Customized Hello Laravel homepage               |

---

## 9. Reflection

This activity helped me understand the basic setup and workflow needed before developing a Laravel application. Before starting the activity, I knew that Laravel was a PHP framework, but I had a better understanding of how the different development tools work together after completing the installation and configuration process. I learned how PHP provides the server-side environment, Composer manages PHP dependencies, Laravel provides the application framework, Git manages version control, MySQL provides relational database functionality, and Visual Studio Code provides an environment for writing and managing the project.

One of the biggest challenges I encountered was configuring PHP correctly. Composer initially reported that the ZIP extension was missing, and later the Laravel installation reported that the `fileinfo` extension was missing. I had to locate the correct `php.ini` file being used by the command-line version of PHP and enable the required extensions. I also encountered SQLite driver problems. Even after creating the SQLite database file, Laravel reported that it could not find a driver. I eventually verified the PHP configuration using `php -m` and `PDO::getAvailableDrivers()`, which confirmed that `pdo_sqlite` and `sqlite3` were working.

Another challenge was working with MySQL from the command line. The `mysql` command was not recognized even though MySQL was installed. I discovered that MySQL Shell was available through the `mysqlsh` command. This taught me that having software installed does not always mean every command-line tool is automatically available through the system PATH.

I also learned how Laravel handles configuration through the `.env` file and how configuration changes can require clearing Laravel's cached configuration. After changing the session driver to file-based storage and clearing the configuration, the application successfully ran at `http://127.0.0.1:8000`.

Laravel is important in client-server development because it provides an organized structure for handling requests, application logic, views, databases, and other server-side functions. It makes it easier to develop applications without having to build every common feature from scratch.

The knowledge from this activity will help me in future software development projects because I now understand the basic process of setting up a development environment, troubleshooting configuration problems, creating a Laravel application, editing its views, and managing the project with Git and GitHub. These skills will also be useful for larger projects that require databases, version control, and collaboration.

---

## 10. References

Laravel. (2026). *Installation*. Laravel 13.x documentation. [Laravel Installation Documentation](https://laravel.com/docs/13.x/installation)

Laravel. (2026). *Laravel 13.x documentation*. [Laravel Documentation](https://laravel.com/docs/13.x/documentation)

PHP Documentation Group. (2026). *PHP manual*. [PHP Manual](https://www.php.net/manual/en/)

Composer. (n.d.). *Composer documentation*. [Composer Documentation](https://getcomposer.org/doc/)

Composer. (n.d.). *Basic usage*. [Composer Basic Usage](https://getcomposer.org/doc/01-basic-usage.md)

Chacon, S., & Straub, B. (2014). *Pro Git* (2nd ed.). Apress. [Pro Git Documentation](https://git-scm.com/book/en/v2)

Microsoft. (2026). *Visual Studio Code documentation*. [Visual Studio Code Documentation](https://code.visualstudio.com/docs)

---

## 11. Git Commit History

The project was managed using Git with meaningful commits documenting major changes. Examples of commits used or appropriate for the development process include:

```text
feat: initialize Laravel project
docs: added installation screenshots
feat: updated homepage
docs: add project README
style: improve homepage design
```

The activity required a minimum of five meaningful commits using professional commit messages.

---

## 12. Project Repository

Repository name:

```text
client-server-week02-laravel-setup
```

The repository contains the Laravel project, README documentation, screenshots, `.gitignore`, and LICENSE file as required by the activity.

---

## 13. Project Structure

```text
client-server-week02-laravel-setup/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
│
├── screenshot/
│   ├── php-version.png
│   ├── composer-version.png
│   ├── laravel-version.png
│   ├── git-version.png
│   ├── mysql-version.png
│   ├── vscode.png
│   ├── artisan-serve.png
│   ├── laravel-initial-page.png
│   └── hello-laravel-homepage.png
│
├── README.md
├── .gitignore
└── LICENSE
```

---

## 14. Conclusion

The Hello Laravel project successfully established a working Laravel development environment and demonstrated the basic workflow of creating, configuring, running, customizing, documenting, and version-controlling a Laravel application. The project provides the foundation for future Laravel activities and larger client-server applications.
