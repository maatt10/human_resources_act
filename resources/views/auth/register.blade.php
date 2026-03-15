<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    
    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    <form method="POST" action="/register">
        @csrf
        <div>
            <input name="name" placeholder="Name" required>
        </div>
        <div>
            <input name="email" type="email" placeholder="Email" required>
        </div>
        <div>
            <input name="password" type="password" placeholder="Password" required>
        </div>
        <div>
            <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    
    <p>Already have an account? <a href="/login">Login here</a></p>
</body>
</html>