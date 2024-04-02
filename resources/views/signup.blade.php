<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body> 
     <div class="wrapper">
         <form class="form" method="post" action="#">
            <div class="signin"> 
                <div class="form-group">
                    <input type="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" required="">
                </div>
                <div class="forget-password">
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    <a href="#">Forget password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <div class="account-exist">
                    Create New a account? <a href="{{route('login.login')}}" id="signup">Signup</a>
                </div>
            </div>
         </form>
     </div>
</body>
</html>