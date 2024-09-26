<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="class1">
        <div class1="container" id="SignUp" style="display: block;">
            <h1 class="form-title">Register</h1>
            <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
                    <label>First Name</label>
                </div>

                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                    <label>Last Name</label>
                </div>

                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label>Email</label>
                </div>
                <div class="input-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label>Password</label>
                </div>
                <br>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <p class="or">

                ------or------

            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Already Have Account?</p>
                <button id="signInButton">Sign In</button>

            </div>
        </div>
    </div>

    <div class="class2">

        <div class2="container" id="SignIn">
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="register.php">

                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label>Email</label>
                </div>
                <div class="input-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label>Password</label>
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <br>
                <input type="submit" class="btn" name="signIn" value="Sign In">
            </form>
            <p class="or">

                ------or------

            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton">Sign Up</button>

            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>