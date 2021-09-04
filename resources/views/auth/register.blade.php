<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="author" content="Ghalmas Shanditya Putra Agung">
        <title>
            Sign Up
        </title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/icons')}}/favicon.png">
        <link href="{{asset('assets/users')}}/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!--======= GOOGLE FONTS ========-->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:500,600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400;500;600&display=swap" rel="stylesheet">

        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            }

            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            }
            html,
            body {
            height: 100%;
            }

            body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            }

            .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            }

            .form-signin .checkbox {
            font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }

            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }
        </style>

    </head>
    <body class="text-center" style="background: #E4F0C5;">
        <main class="form-signin">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <a href="/"><img class="mb-4" src="{{asset('assets/icons')}}/majoo.png" alt="" width="75" height="65"></a>
                <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="you@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg text-white" style="background: #07C53C" type="submit">Sign Up</button>
                <p class="mt-2 mb-3 text-muted">Already account ? <a href="{{ route("login") }}" style="color: #07C53C;text-decoration:none" >Login</a></p>
                <p class="mt-5 mb-3 text-muted">2019 &copy; PT Majoo Teknologi Indonesia</p>
            </form>
        </main>
    </body>
</html>
