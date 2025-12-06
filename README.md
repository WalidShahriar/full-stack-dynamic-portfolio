<img width="1904" height="1080" alt="Screenshot (70)" src="https://github.com/user-attachments/assets/6ebcd08c-1ac8-41b0-bd82-1a07cc27c164" />

---

# 👨‍💻 Dynamic Single Page Portfolio | Laravel

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

A fully dynamic, single-page portfolio website built with the **Laravel PHP Framework**. 

Unlike static HTML portfolios, this application fetches all content—including personal details, skills, project showcases, and contact info—from a **MySQL database**. It allows for easy content management and includes a functional contact form that stores user messages securely.

---

## 📸 Screenshots

> *Add a screenshot of your Hero section here*
> ![Hero Section](./public/photos/screenshot-hero.png)

---

## 🚀 Features

* **Single Page Architecture (SPA):** Smooth scrolling navigation using anchor linking.
* **Dynamic Content:** All text, images, and links are fetched from the database (Profile, Skills, Projects).
* **Database Driven Skills:** Skills are categorized (Technical vs. Soft) and rendered dynamically.
* **Project Showcase:** Dynamic cards displaying project titles, descriptions, tech stacks, and links.
* **Contact System:** * Functional contact form.
    * Server-side validation.
    * Stores messages in the MySQL database.
    * Success alert notifications upon submission.
* **Responsive Design:** Fully mobile-responsive layout using Bootstrap 5.

---

## 🛠️ Tech Stack

* **Backend:** Laravel 10/11 (PHP)
* **Frontend:** Blade Templates, Bootstrap 5, Custom CSS
* **Database:** MySQL (via XAMPP)
* **Server:** Apache (via XAMPP)

---

## ⚙️ Installation & Setup

Follow these steps to set up the **E-Municipal** project on your local machine.

### 1. Prerequisites

Before you begin, ensure you have the following software installed:
* **[XAMPP](https://www.apachefriends.org/)** (Includes PHP & MySQL)
* **[Composer](https://getcomposer.org/)** (Dependency Manager for PHP)
* **Git** (For cloning the repository)

### 2. Clone the Repository
```bash
git clone [https://github.com/WalidShahriar/portfolio-laravel.git](https://github.com/WalidShahriar/portfolio-laravel.git)
cd portfolio-laravel
```

### 3. Install Backend Dependencies

Download the necessary PHP packages using Composer

```bash
composer install
```

### 4. Database Setup (Import Method)

Since this project uses a pre-configured SQL dump, follow these steps to set up the database:

1. Open the XAMPP Control Panel and start Apache and MySQL.
2. Go to localhost/phpmyadmin in your browser.
3. Click New from the sidebar and create a database named: e_municipal
4. Select the new database, go to the Import tab.
5. Click Choose File and locate the full_stack_dynamic_portfolio_2.sql file (located in the project root directory or database/ folder).
6. Finally, Click Import (or Go) at the bottom.

### 5. Link Database to Application

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=full_stack_dynamic_portfolio_2
DB_USERNAME=root
DB_PASSWORD=root
```

### 6. Run the Application

🎉💗🥳 You are ready to go! Start the local development server: 
hit: ```bash php artisan serve ```

### 7. One more step to access the web-app 🙏 🥺👉👈

hit the url: ```bash http://127.0.0.1:8000 ``` Generated in the **terminal**

---

## 🙏 Acknowledgements

I would like to express my sincere gratitude to everyone who contributed to the realization of this project.

* **My Supervisor/Instructor:** Special thanks to **[Teacher's Name]** for their guidance on implementing the MVC architecture and database integration. Their feedback was instrumental in moving this project from a static design to a dynamic application.
* **Daffodil International University:** For providing the learning environment and resources.
* **Open Source Community:** For the incredible documentation available for Laravel and Bootstrap.

---

## 🤝 Usage & Credits

This project is open-source and intended for educational purposes. If you use this code, learn from it, or include parts of it in your own work, **please give credit** in one of the following ways:

1.  **Star the Repo:** If you found this helpful, please give it a ⭐ on GitHub!
2.  **Attribution:** If you clone this project or use the source code, please keep the author's name in the comments or mention:
    > *Based on the Portfolio Architecture by [Walid Shahriar](https://github.com/WalidShahriar)*

**License:**
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

<div align="center">
    <br>
    <h3><strong>If you read this far, you now qualify for a virtual high-five. ✋🏻</strong></h3>
    <br>
    <h3>°❀⋆.ೃ࿔*:･__<em> The End </em>__･:*࿔.ೃ⋆❀°</h3>
    <br>
</div>

