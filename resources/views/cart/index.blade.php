<!-- resources/views/cart/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>My Cart</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($cartItems as $item)
            <li>
                {{ $item->product->name }} - ${{ $item->product->price }} (Quantity: {{ $item->quantity }})
            </li>
        @endforeach
    </ul>

    <p>Total: ${{ $totalPrice }}</p>

    <div>
        <form action="/checkout" method="POST">
            @csrf
            <button type="submit">Checkout</button>
        </form>
    </div>

    <p><a href="/products">Continue Shopping</a></p>
</body>
</html>
