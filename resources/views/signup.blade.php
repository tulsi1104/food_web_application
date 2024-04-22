<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
        <form class="form" method="POST" action="{{route('registercustomer.register')}}">
            @csrf
            <div class="headline">
                <h1>Register</h1>
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required="" autocomplete="email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required="" autocomplete="current-password">
            </div>
            <div class="form-group">
                <input type="text" name="phone_number" placeholder="Phone Number (Optional)">
            </div>
            <div class="form-group">
                <input type="text" name="address" placeholder="Address (Optional)">
            </div>

            <button type="submit" class="btn">Register</button>
            <div class="account-exist">
                Already have an account? <a href="{{ route('login.login') }}">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
