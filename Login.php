<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Login Page</title>
</head>
<body>
    <header>
        <h1>WIRE THE FUTURE</h1>
    </header>
    <main>
        <section class="log-in">
            <h3>SIGN UP</h3>
            <form method="post" action="Confirmation.php">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email..." required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password..." required><br><br>
                <button id="log-in-button" type="submit">Log in</button>
            </form>
            <p onclick="document.location='Signup.php'">Don't have an account?</p>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
