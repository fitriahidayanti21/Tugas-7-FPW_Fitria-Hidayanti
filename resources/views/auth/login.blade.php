<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <div>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div>
                <label for="">Email</label>
                <input type="email" name="email">
                <div>
                    @if ($errors->has('email'))
                        <p style="color: red;">{{ $errors->first('email') }}</p>
                    @endif
                </div>
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password">
                <div>
                    @if ($errors->has('password'))
                        <p style="color: red;">{{ $errors->first('password') }}</p>
                    @endif
                </div>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
            <p> Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </form>
    </div>
</body>
</html>