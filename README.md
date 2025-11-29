# FretBox Laravel Intern Task — Friends API

A simple and clean RESTful API built using **Laravel** and **MySQL** that manages a list of friends with:

✔ CRUD Operations  
✔ Pagination  
✔ Search Functionality  
✔ API Resource Routing  
✔ Validation and JSON responses  

This project demonstrates backend knowledge and Laravel fundamentals required for the **Laravel Developer Intern role** at **FretBox**.

---

## 🚀 Tech Stack

| Technology | Purpose |
|-----------|---------|
| Laravel 12 | Backend Framework |
| PHP 8+ | Core Language |
| MySQL | Database |
| Thunder Client / Postman | API Testing |
| Git & GitHub | Version Control |

---

## 📡 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/friends` | Get all friends (Paginated) |
| GET | `/api/friends?search=query` | Search by name or email |
| POST | `/api/friends` | Add a new friend |
| GET | `/api/friends/{id}` | Get friend details |
| PUT / PATCH | `/api/friends/{id}` | Update friend |
| DELETE | `/api/friends/{id}` | Delete a friend |

---

## 🧪 Sample JSON Payloads

### ➕ Create Friend (POST)
```json
{
  "name": "Sneha Namdeo",
  "email": "sneha_n@example.com",
  "phone": "9876543210"
}
## 🗄 Database Schema

| Column | Type | Constraints |
|--------|------|-------------|
| id | BIGINT | Primary Key |
| name | VARCHAR | Required |
| email | VARCHAR | Required, Unique |
| phone | VARCHAR | Optional |
| created_at | TIMESTAMP | Auto |
| updated_at | TIMESTAMP | Auto |

---

## ▶️ Setup Instructions (Run Locally)
```bash
git clone https://github.com/nsneha16/fretbox-laravel-intern-task.git
cd fretbox-laravel-intern-task
composer install
cp .env.example .env
php artisan key:generate
```

🔹 Update `.env` with your MySQL database credentials

Then run:
```bash
php artisan migrate
php artisan serve
```

👉 Application URL: http://127.0.0.1:8000

---

## 🧾 API Testing Screenshots

📂 `/api-tests/` folder contains proof of:
- POST (Add Friend)
- GET (Pagination)
- Search Feature
- PUT Update
- DELETE
- Route List

---

## 👩‍💻 Developer

**Sneha Namdeo**  
📍 India  
🌐 GitHub: https://github.com/nsneha16
