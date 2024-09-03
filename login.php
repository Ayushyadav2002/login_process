<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form id="loginForm" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
    
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            if (username == "" || password == "") {
                alert("Please fill in all fields.");
                return false;
            }
        }
    </script>
</body>
</html>
<!-- CREATE TABLE Employee_login (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
); -->