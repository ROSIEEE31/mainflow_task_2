# Brewtiful Mornings ☕️

A boutique-style coffee recipe website with a login system, dynamic navbar, and beautifully styled pages using HTML, CSS, PHP, and minimal JS.

---

## 🔐 Login & Session

- Users can log in and sign up via separate pages.
- After login, sessions are used to track the user.
- `$_SESSION['user_name']` is used to greet the user in the navbar.
- PHP handles login/logout logic securely.

---

## 🔄 Navbar Behavior

- The navbar is dynamically injected into each HTML page using a small JS snippet.
- It fetches a PHP file that:
  - Shows `Login` and `Sign Up` if the user is **not logged in**.
  - Shows `Hi, [User]` and `Logout` if the user **is logged in**.
  - On recipe pages, only the `Home` link is shown.

---

## 💡 How It Works

1. HTML pages include:
   ```html
   <div id="navbar-container"></div>
   <script src="js/navbar.js"></script>
The JS loads the PHP navbar from /includes/navbar.php.

PHP checks for $_SESSION and adjusts links dynamically.

No need to rename .html files — PHP logic still works due to dynamic injection.

🚀 Getting Started
Place project folder inside your web server directory (like htdocs for XAMPP).

Start Apache.

Open your browser and go to:

arduino
Copy
Edit
http://localhost/your-folder/index.html
🧠 Notes
All session-based logic is handled server-side.

HTML files can stay .html — PHP works behind the scenes.

Clean separation of concerns: HTML for structure, CSS for design, PHP for logic, JS for loading navbar.

Made with ☕️ and ❤️ by Rose Maria
