<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Activity Logs - Admin</title>
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

        .badge-login {
            background: #e6f7ee;
            color: #2f855a;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-logout {
            background: #fde8e8;
            color: #c53030;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-register {
            background: #e6f0ff;
            color: #2b6cb0;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-order {
            background: #fff4e5;
            color: #c05621;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar px-4 d-flex justify-content-between align-items-center py-2">
        <div class="d-flex gap-3">
            <span>Shop</span>
            <span>Admin</span>
        </div>
        <div class="logo">◇ Crafty Corner</div>
        <div class="d-flex gap-3 align-items-center">
            <span>👤 {{ Auth::user()->name }}</span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <a href="{{ route('dashboard.index') }}">Orders</a>
                <a href="{{ route('dashboard.activity_logs') }}" class="active">Activity Logs</a>
                <a href="{{ route('dashboard.account') }}">Account</a>
                <div class="mt-5">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn text-danger w-100 text-start">Sign Out</button>
                    </form>
                </div>
            </div>

            <!-- Main -->
            <div class="col-md-10 p-4">

                <!-- Header -->
                <div class="mb-4">
                    <h3>Activity Logs</h3>
                    <small class="text-muted">Track all actions happening in the system</small>
                </div>

                <!-- Table -->
                <div class="card-box">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Action</th>
                                <th>Description</th>
                                <th>IP Address</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logs as $log)
                                <tr>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ $log->user->name ?? 'N/A' }}</td>
                                    <td>
                                        <span class="badge-{{ $log->action }}">{{ ucfirst($log->action) }}</span>
                                    </td>
                                    <td>{{ $log->description }}</td>
                                    <td>{{ $log->ip_address }}</td>
                                    <td>{{ $log->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No activity yet</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $logs->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>