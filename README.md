# 🏟️ StadiumStream

**StadiumStream** is a PHP-based web application that simplifies ticket purchases for the **AFCON 2023** tournament.  
It provides football fans with a secure, user-friendly interface to browse matches, select seats, and complete payments.

---

## 🚀 Features

- 🌗 Light / Dark mode toggle
- 🌍 Cross-platform compatibility
- 🔐 Authentication and user roles (Admin / User)
- 🎟️ Ticket reservation and management system
- 📩 Contact form with email confirmation

---

## 🧠 Tech Stack

**Frontend:** HTML, JavaScript, TailwindCSS  
**Backend:** PHP (OOP), MySQL  
**Environment:** [Laragon](https://laragon.org/index.html)

---

## ⚙️ Installation

### 1. Prerequisites

- [Laragon](https://laragon.org/index.html)
- [Node.js](https://nodejs.org/en)
- [Composer](https://getcomposer.org/)

### 2. Clone the Repository

```bash
git clone https://github.com/Zaiidmo/StadiumStream.git
cd StadiumStream
```

### 3. Install Dependencies

```bash
npm install
composer update
composer dump-autoload
```

### 4. Environment Configuration

Create a `.env` file in the **public** directory:

```env
HOST=localhost
USER=root
PASSWORD=
DATABASE=stadiumstream
```

---

## 🧱 Database Setup

1. Create a database:

   ```sql
   CREATE DATABASE stadiumstream;
   ```

2. Import the schema and seeders:

   ```bash
   mysql -u root -p stadiumstream < database/schema.sql
   mysql -u root -p stadiumstream < database/seeders.sql
   ```

3. Data included in seeders:
   - Teams and coaches
   - Stadiums and capacities
   - Match schedule
   - User roles and base accounts

> 📁 See the `/database` folder for full SQL files.

---

## 🎨 Color Palette

| Name   | Hex       | Preview                                                         |
| ------ | --------- | --------------------------------------------------------------- |
| Noir   | `#0a192f` | ![#0a192f](https://via.placeholder.com/15/0a192f/000000?text=+) |
| Orange | `#FFA500` | ![#FFA500](https://via.placeholder.com/15/FFA500/000000?text=+) |
| Vert   | `#00b48a` | ![#00b48a](https://via.placeholder.com/15/00b48a/000000?text=+) |

---

## 🧩 Roadmap

1. Figma UI/UX Design
2. UML Diagrams (Use Case & Class)
3. Jira Planning
4. Development
5. Testing & Deployment

---

## 👥 Authors & Maintainers 

- [@Zaiid-Moumni](https://github.com/Zaiidmo)
- [@Ismail-Lafhiel](https://github.com/Ismail-Lafhiel)
- [@Khalid-Oukha](https://github.com/khalid-oukha)

---

## 🪪 License

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for details.

---

## ❤️ Contributing

We welcome contributions! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

---

## 📫 Contact

For questions or support, open an issue or contact the maintainers via GitHub.
