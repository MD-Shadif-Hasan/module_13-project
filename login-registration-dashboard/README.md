
# Laravel Login-Registration-Dashboard (Cookie Authentication)

## 📌 Project Overview
This is a simple Laravel-based **Login, Registration, and Dashboard** application that uses **cookie-based authentication** instead of Laravel's default session-based system.  
The project allows users to register, log in, view a protected dashboard, and log out.  
UI is styled with **modern CSS** for a clean, professional look.

---

## 🚀 Features
1. **User Registration** – Create a new account with name, email, and password.
2. **User Login** – Authenticate using email & password.
3. **Dashboard Access** – Only logged-in users can view the dashboard.
4. **Logout** – Clears authentication cookie.
5. **Login Restriction** – Logged-in users cannot access the login/registration pages.
6. **Cookie-based Authentication** – No Laravel session; `auth_user` cookie stores user ID.
7. **Modern UI Design** – Gradient backgrounds, card layouts, hover effects.

---

## 🛠 Requirements
- PHP >= 8.0
- Composer
- Laravel 10+
- MySQL or MariaDB
- Web Browser (Chrome, Firefox, etc.)

---

## 📂 Folder & File Structure (Important Files)
```

project/
│── app/
│   └── Http/
│       └── Controllers/
│           └── AuthController.php    # Handles login, register, logout, dashboard
│── resources/
│   └── views/
│       ├── login.blade.php           # Login page
│       ├── register.blade.php        # Registration page
│       ├── dashboard.blade.php       # Dashboard page
│── routes/
│   └── web.php                       # Application routes
│── .env                              # Database configuration

````

---

## ⚙️ Installation & Setup
1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/laravel-cookie-auth.git
   cd laravel-cookie-auth

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Create `.env` File**

   ```bash
   cp .env.example .env
   ```

   Update your database credentials:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=login_project
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**

   ```bash
   php artisan migrate
   ```

6. **Start the Development Server**

   ```bash
   php artisan serve
   ```

7. **Access in Browser**

   ```
   http://127.0.0.1:8000
   ```

---

## 🔑 Authentication Logic (Cookie-Based)

* **Login**

  * User enters email & password.
  * If valid, a cookie named `auth_user` is created storing the user’s ID (valid for 60 minutes).
* **Dashboard Access**

  * Before showing the dashboard, system checks if `auth_user` cookie exists.
  * If not, redirect to `/login`.
* **Restrict Login/Registration**

  * If `auth_user` cookie exists, redirect user to `/dashboard` instead of showing login/register page.
* **Logout**

  * Deletes `auth_user` cookie and redirects to login page.

---

## 🎨 UI Design Notes

* **Background**: Gradient `linear-gradient(135deg, #6a11cb 0%, #2575fc 100%)`
* **Card Style**: White background, rounded corners, shadow effect.
* **Buttons**: Blue primary button with hover darkening.
* **Inputs**: Smooth border-color transition & glow effect on focus.
* **Messages**:

  * Success: Green with light background.
  * Error: Red with light background and left border.
* **Animations**: Fade-in effect on card load.

---

## 📸 Screenshots

### Registration Page

![Register Page](screenshots/register.png)

### Login Page

![Login Page](screenshots/login.png)

### Dashboard

![Dashboard](screenshots/dashboard.png)

---

## 🧑‍💻 Author

* **Your Name** – [Your GitHub Profile](https://github.com/your-username)

---

## 📄 License

This project is open-source and available under the **MIT License**.

```

---

If you want, I can **add screenshots** of your styled pages inside a `/screenshots` folder and update the README so it looks like a real GitHub project showcase.  
That would make it look professional if you upload it to GitHub.
```
