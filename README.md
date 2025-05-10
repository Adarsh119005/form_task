# 📝 Laravel Notes App

This is a simple Laravel-based note-taking application. Users can create and delete notes. Notes are stored in a MySQL database using Laravel’s Eloquent ORM.

---

## 🚀 Features

* Create new notes with a title and content
* Automatically timestamped
* View all notes
* Delete notes
* Server-side form validation
* Styled with custom CSS and includes a Spline 3D background

---

## 🛠️ Tech Stack

* Laravel (PHP)
* MySQL
* Blade (templating)
* HTML/CSS
* Spline 3D Viewer

---

## 📁 Project Structure

```
- app/
  - Http/
    - Controllers/
      - NoteController.php
  - Models/
    - Note.php
- resources/
  - views/
    - welcome.blade.php
- routes/
  - web.php
- public/
  - css/
    - welc.css
```

---

## ⚙️ Setup Instructions

1. **Clone the repository**

```bash
git clone https://github.com/your-username/laravel-notes.git
cd laravel-notes
```

2. **Install dependencies**

```bash
composer install
```

3. **Set up your `.env` file**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure your MySQL database in `.env`**

```
DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run migrations**

```bash
php artisan migrate
```

6. **Start the development server**

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## 🔐 Validation

* Notes must have a title (max 255 characters)
* Note content must not be empty (max 1000 characters)

---

## ✅ Example Usage

* Fill out the form on the homepage to submit a note.
* Each note appears below the form.
* Click **Delete** to remove a note.

---

## 🧐 Author

* **Adarsh Upadhyay**
* [Portfolio](https://adarsh119005.github.io/webpage/)
* [LinkedIn](https://www.linkedin.com/in/adarsh-upadhayay-65111830b/)

---

## 📄 License

This project is open-source and free to use.
