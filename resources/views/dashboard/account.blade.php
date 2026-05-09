<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --main: #c89b6d;
            --bg: #f7f5f2;
        }

        body {
            background: var(--bg);
            font-family: Arial;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        .logo {
            color: var(--main);
            font-weight: bold;
        }

        .sidebar {
            background: #fff;
            height: 100vh;
            border-right: 1px solid #eee;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            color: #555;
            text-decoration: none;
            border-radius: 8px;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: #f3ede7;
            color: var(--main);
        }

        .card-box {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            border: 1px solid #eee;
        }

        .main-btn {
            background: var(--main);
            color: #fff;
            border: none;
        }

        .main-btn:hover {
            background: #b88a5c;
            color: #fff;
        }

        .form-control:focus {
            border-color: var(--main);
            box-shadow: 0 0 0 0.2rem rgba(200, 155, 109, 0.25);
        }
    </style>
</head>

<body>

    <nav class="navbar px-4 d-flex justify-content-between align-items-center py-2">
        <div class="d-flex gap-3"><span>Shop</span><span>Admin</span></div>
        <div class="logo">◇ sšr</div>
        <div class="d-flex gap-3 align-items-center"><span>👤 {{ Auth::user()->name }}</span></div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            @include('dashboard.partials.sidebar')

            <!-- Main -->
            <div class="col-md-10 p-4">

                <div class="mb-4">
                    <h3>Account Settings</h3>
                    <small class="text-muted">Manage your admin profile</small>
                </div>

                @if(session('success'))
                    <div class="alert alert-success rounded-3">{{ session('success') }}</div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h5 class="mb-4">Profile Information</h5>
                            <form method="POST" action="{{ route('dashboard.account.update') }}">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <hr>
                                <h6 class="mb-3">Change Password <small class="text-muted">(optional)</small></h6>

                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Leave blank to keep current">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Confirm new password">
                                </div>

                                <button type="submit" class="btn main-btn px-4">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>