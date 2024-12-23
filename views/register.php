<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="email"],
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}
input[type="radio"] {
    margin-right: 5px;
}

button {
    background-color: #ff8300;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #ff7300;
}

p {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
#usernameFeedback, #emailFeedback, #passwordFeedback, #confirmPasswordFeedback {
            font-size: 12px;
            margin-top: 2px;
        }
</style>
</head>
<body>
    <div class="login-container">
        <h2>Daftar</h2>
        <form id="register-form" method="POST" action="../actions/register_action.php">
            <label>Username:</label>
            <input type="text" name="username" id="username" required>
            <div id="usernameFeedback"></div>
            <br>
            <label>Email:</label>
            <input type="email" name="email" id="email" required>
            <div id="emailFeedback"></div>
            <br>
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <div id="passwordFeedback"></div>
            <br>
            <label>Confirm Password:</label>
            <input type="password" id="confirmPassword" required>
            <div id="confirmPasswordFeedback"></div>
            <br>
            <label>Gender:</label>
            <div>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Laki-laki</label>
            </div>
            <div>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Perempuan</label>
            </div>
            <br>
            <button type="submit">Register</button>
        </form>
    </div>

    <script src="../assets/js/register.js"></script>
</body>
</html>
