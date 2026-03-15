<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    @if (session('success'))
        <div style="color: green;">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    
    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    <form method="POST" action="/login">
        @csrf
        <div>
            <input name="email" type="email" placeholder="Email" required>
        </div>
        <div>
            <input name="password" type="password" placeholder="Password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    
    <p>Don't have an account? <a href="/register">Register here</a></p>
</body>
</html>