<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product - Admin</title>
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

        .current-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
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

                <h4 class="mb-4">Edit Product</h4>

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
                    <form method="POST" action="{{ route('dashboard.products.update', [$type, $product->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $product->name) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" class="form-control" value="
                            @if($type === 'baby_clothes') Baby Clothes
                            @elseif($type === 'embroidery') Embroidery
                            @else Gifts
                            @endif" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (EGP)</label>
                            <input type="number" name="price" class="form-control"
                                value="{{ old('price', $product->price) }}" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control"
                                rows="4">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Current Image</label><br>
                            <img src="{{ asset($product->image) }}" class="current-img mb-2">
                            <label class="form-label d-block mt-2">Change Image (optional)</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <small class="text-muted">Leave blank to keep current image</small>
                        </div>

                        <div class="d-flex gap-3">
                            <button type="submit" class="btn main-btn">Save Changes</button>
                            <a href="{{ route('dashboard.products.index') }}"
                                class="btn btn-outline-secondary">Cancel</a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>