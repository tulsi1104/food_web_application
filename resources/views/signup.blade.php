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
                <input type="text" name="name" pattern="^[a-zA-Z]+(?: [a-zA-Z]+)*$" title="Name must contain only letters" placeholder="Name" required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" pattern=".+@gmail\.com" title="Please enter a valid email address(username@gmail.com)" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Contains a mix of uppercase and lowercase letters, numbers, and special characters(At least 8 characters long)." required="">
            </div>
            <div class="form-group">
                <input type="text" name="phone_number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" placeholder="Phone Number (Optional)">
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
