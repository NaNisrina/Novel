<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css" />
    <title>Login Page</title>
</head>

<body>
    <h2>Become a Member today!</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="">
                <h1>Create New Account</h1>
                <span>or use your new username for registration</span>
                <input type="text" placeholder="Fullname" />
                <input type="text" placeholder="Username" />
                {{-- <input type="email" placeholder="Email" /> --}}
                <input type="password" placeholder="Password" />
                <a href=""></a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="">
                <h1>Log in</h1>
                <span>or use your account</span>
                <input type="text" placeholder="Username" />
                {{-- <input type="email" placeholder="Email" /> --}}
                <input type="password" placeholder="Password" />
                <a href=""></a>
                <button>Log In</button>
                <a href="/HomePage">
                    Login as Guest
                </a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="Login">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="SignIn">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/log.js') }}"></script>

</body>

</html>
