<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
        <form class="form" id="loginForm" method="POST" action="{{ route('loginuser.login') }}">
            @csrf
            <div class="headline">
                <h1>Login</h1>
            </div>
            <div class="signin">
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email" required autocomplete="email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                </div>
                <div class="forget-password">
                    <div class="check-box">
                        <input type="checkbox" id="remember-me" name="remember_me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="account-exist">
                    Don't have an account? <a href="{{ route('signup.signup') }}">Register</a>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
