<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Signup.css">
    <title>Document</title>
    
</head>
<body>
    <header>
        <h1>WIRE THE FUTURE</h1>

    </header>
    <main>
        <section class="sign-up">
            <h3>SIGN UP</h3>
            <form method="post" action="Confirmation2.php">
                <label for="email">Emial:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email..." required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password..." required><br><br>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" placeholder="Enter your Name..." required><br><br>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your Phone..." required><br><br>
                <label for="location">Choose your location:</label>
                <select name="location" id="location" required>
                    <option value="" disabled selected>Choose</option>
                    <option value="Normal-Wiring">Sydney</option>
                    <option value="Fiber-Wiring">Fiber-Wiring</option>
                    <option value="Wired-Camera">Wired-Camera</option>
                    <option value="Wireless-Camera">Wireless-Camera</option>
                </select>
                <button id="sign-up-button" type="submit" name="sign">Sign up</button>
            </form>
            <p onclick="document.location='Login.php'">Already have an account?</p>
        </section>
        

    </main>
    <footer>


    </footer>

</body>
</html>