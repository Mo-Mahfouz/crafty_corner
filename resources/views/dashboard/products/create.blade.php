<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product - Crafty Corner</title>
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
            padding: 12px 30px;
            border-radius: 8px;
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

                <h4 class="mb-4">Add New Product</h4>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-box">
                    <form method="POST" action="{{ route('dashboard.products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                placeholder="Enter product name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-control">
                                <option value="">-- Select Category --</option>
                                <option value="baby_clothes" {{ old('category') == 'baby_clothes' ? 'selected' : '' }}>
                                    Baby Clothes</option>
                                <option value="embroidery" {{ old('category') == 'embroidery' ? 'selected' : '' }}>
                                    Embroidery</option>
                                <option value="gifts" {{ old('category') == 'gifts' ? 'selected' : '' }}>Gifts</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (EGP)</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}"
                                placeholder="Enter price" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4"
                                placeholder="Enter product description">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <small class="text-muted">PNG, JPG or JPEG (Max 2MB)</small>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn main-btn">Add Product</button>
                            <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>