<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products - Admin</title>
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

        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .badge-baby {
            background: #e6f0ff;
            color: #2b6cb0;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-embroidery {
            background: #fff4e5;
            color: #c05621;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
        }

        .badge-gifts {
            background: #e6f7ee;
            color: #2f855a;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
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

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3>All Products</h3>
                        <small class="text-muted">Manage your store products</small>
                    </div>
                    <a href="{{ route('dashboard.products.create') }}" class="btn"
                        style="background: #c89b6d; color: #fff;">+ Add Product</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card-box">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td><img src="{{ asset($product->image) }}" class="product-img"></td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        @if($product->type === 'baby_clothes')
                                            <span class="badge-baby">Baby Clothes</span>
                                        @elseif($product->type === 'embroidery')
                                            <span class="badge-embroidery">Embroidery</span>
                                        @else
                                            <span class="badge-gifts">Gifts</span>
                                        @endif
                                    </td>
                                    <td>EGP {{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.products.edit', [$product->type, $product->id]) }}"
                                            class="btn btn-sm btn-outline-warning">Edit</a>
                                        <form method="POST"
                                            action="{{ route('dashboard.products.destroy', [$product->type, $product->id]) }}"
                                            style="display:inline"
                                            onsubmit="return confirm('Are you sure you want to delete this product?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No products yet</td>
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