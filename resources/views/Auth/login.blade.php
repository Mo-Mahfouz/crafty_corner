<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Nourhan Store</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
</head>

<body>

<div class="store-container">

    <div class="signin-layout">

        <!-- LEFT SIDE -->
        <div class="story-area">

            <div class="tagline">
                <h2>Curating Timeless Elegance</h2>
                <p>Welcome back to Nourhan Store — continue your journey in refined fashion.</p>
            </div>

            <div class="heirloom-image">
                <img src="{{ asset('images/loginImage.png') }}" alt="Luxury fashion">
                <div class="image-caption">✨ welcome back ✨</div>
            </div>

            <div class="brand-store-name">Nourhan Store</div>

            <div class="artisan-badges">
                <span>secure login</span>
                <span>fast checkout</span>
                <span>premium access</span>
            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="form-panel">

            <h1>Welcome Back</h1>
            <div class="subhead">Login to access your account</div>

            <form class="login-form" action="{{ url('/login') }}" method="POST">
                @csrf

                <div class="input-field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="name@example.com" required>
                </div>

                <div class="input-field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="row-remember">
                    <label class="checkbox-item">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="#" class="forgot-pass">Forgot password?</a>
                </div>

                <button type="submit" class="signin-btn">Sign In</button>

                <div class="guest-area">
                    Don't have an account?
                    <a href="{{ url('/register') }}" class="guest-link">Create one</a>
                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>