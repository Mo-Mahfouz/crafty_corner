<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Nourhan Store</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
</head>

<body>

<div class="store-container">

    <div class="signin-layout">

        <!-- LEFT SIDE -->
        <div class="story-area">

            <div class="tagline">
                <h2>Join Timeless Elegance</h2>
                <p>Create your account and start your fashion journey with Nourhan Store.</p>
            </div>

            <div class="heirloom-image">
                <img src="{{ asset('images/loginImage.png') }}" alt="Luxury fashion">
                <div class="image-caption">✨ join us ✨</div>
            </div>

            <div class="brand-store-name">Nourhan Store</div>

            <div class="artisan-badges">
                <span>fast signup</span>
                <span>secure data</span>
                <span>exclusive offers</span>
            </div>

        </div>

        @if ($errors->any())
    <div style="color:red; margin-bottom:15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <!-- RIGHT SIDE -->
        <div class="form-panel">

            <h1>Create Account</h1>
            <div class="subhead">Register to get started</div>

            <form class="login-form" action="{{ url('/register') }}" method="POST">
                @csrf

                <div class="input-field">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Your name" required>
                </div>

                <div class="input-field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="name@example.com" required>
                </div>

                <div class="input-field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="input-field">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="••••••••" required>
                </div>

                <button type="submit" class="signin-btn">Create Account</button>

                <div class="guest-area">
                    Already have an account?
                    <a href="{{ url('/login') }}" class="guest-link">Login</a>
                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>