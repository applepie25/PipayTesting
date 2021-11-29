<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Login</title>
</head>

<body>
    <div class="bg-image text-center shadow-1-strong rounded text-white"
        style="background-image: url(https://images.unsplash.com/photo-1564025420695-307817b7504e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80); background-size: cover">
        <div class="" style="width: 50%; height: 100vh; display: flex; align-items: center; margin: auto;">
            <form action="{{ route('login.store') }}" method="POST" style="width: 80%; padding: 20px;" class="border">
                @csrf
                <div>
                    <h4>
                        Login Form
                    </h4>
                </div>
                @if (session('status'))
                <h5>
                    {{ session('status') }}
                </h5>
                @endif
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control" id="email">
                    @error('email')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @error('password')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p>Belum Punya akun? <a href="{{ route('register') }}"> Daftar Disini</a>
                </p>
                <button type="submit" class="btn btn-primary">Submit</button>
                <h3>
                    or
                </h3>
                <a href="{{ route('google') }}" class="btn btn-light">Login with google</a>
            </form>
        </div>
    </div>
</body>

</html>