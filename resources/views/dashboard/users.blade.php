<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Users - Admin</title>
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
            padding: 20px;
            border: 1px solid #eee;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #c89b6d;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
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

            <div class="col-md-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3>All Users</h3>
                        <small class="text-muted">Manage your store users</small>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card-box">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="user-avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->role === 'admin')
                                            <span
                                                style="background:#fff4e5;color:#c05621;padding:4px 12px;border-radius:20px;font-size:12px;">Admin</span>
                                        @else
                                            <span
                                                style="background:#e6f0ff;color:#2b6cb0;padding:4px 12px;border-radius:20px;font-size:12px;">User</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at->format('d M Y') }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('dashboard.users.destroy', $user->id) }}"
                                            style="display:inline"
                                            onsubmit="return confirm('Are you sure you want to delete this user?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No users yet</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>