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
    <title>Register</title>
</head>

<body>
    <div class="bg-image text-center shadow-1-strong rounded text-white justify-content-center"
        style="background-image: url(https://images.unsplash.com/photo-1564025420695-307817b7504e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80);">
        <div class="" style="width: 50%; height: 100vh; display: flex; align-items: center; margin: auto;">
            <form action="{{ route('register.store') }}" method="POST" style="width: 80%; padding: 20px;"
                class="border">
                @csrf
                <div>
                    <h4>
                        Register Form
                    </h4>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="name" name="name" class="form-control" id="name">
                    @error('name')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                    @error('email')
                    <div>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="handphone" class="form-label">Handphone</label>
                    <input type="handphone" name="handphone" class="form-control" id="handphone">
                    @error('handphone')
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
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>