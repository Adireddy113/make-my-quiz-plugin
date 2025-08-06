## 🧩 Make My Quiz – WordPress Plugin

**Make My Quiz** is a custom WordPress plugin designed to create, manage, and display interactive quizzes inside the WordPress admin and frontend. Built with modular code and WordPress best practices, this plugin allows users to create multiple quizzes, add questions with options, and view results. It is mainly focused on procedural code.


### ✨ Features

* 🧠 Custom Post Type for Quizzes & Questions
* 🛠️ Admin panel menu: `Make My Quiz` with a `Results` submenu
* 📝 Meta boxes for adding quiz questions, options, and correct answers
* 📊 Results dashboard for storing and viewing quiz submissions
* 🔗 Planned support for shortcodes or blocks to display quizzes on the frontend
* 📂 Modular folder structure for better maintainability
* 📅 Daily commit-based development tracking




## 📅 Daily Progress

### ✅ Day 1 – Initial Setup and Admin Menu

**📌 Summary:**

* 🔧 Created plugin folder and main plugin file `make-my-quiz.php`.
* 🧩 Registered custom admin menu **Make My Quiz** and a submenu **Results** (used by admin)
* ✅ Verified menu visibility inside WordPress admin dashboard

**📁 File Changes:**

```bash
make-my-quiz/ 
├── make-my-quiz.php  
├── admin
    ├── admin-menu.php             
```

## 🧩What I Learned

1. What are the basic required files for this plugin and purpose of those files
2. How to create menu and sub menu items in admin dashboard using **add_menu_page** and **add_submenu_page**
3. How to connect all files using **require_once** in **make-my-quiz.php** file




### ✅ Day 2 – Registering Custom Post Types

**📌 Summary:**

* 🔧 Created plugin folder and main plugin file `make-my-quiz.php`.
* 🧩 Registered custom post types **Quizzes** and a submenu **Add Questions** (used by admin)
* ✅ Verified menu visibility inside WordPress admin dashboard

**📁 File Changes:**

```bash
make-my-quiz/ 
├── make-my-quiz.php  
├── admin
    ├── admin-menu.php
    ├── quiz-cpt.php
    ├── question-cpt.php
```


## 🧩What I Learned

1. what are custom post types and how to create/register them.
2. Registered custom post types **Quizzes** and **Add Questions** through **register_post_type** function
3. And how add those registered custom post types to Admin Menu dashboard.
4. Connected these php files to main file through **require_once**



