<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Font-awesome CDN -->
    <script src="https://kit.fontawesome.com/b75774c827.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="build/assets/app-2f91cba3.css"> -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Lara-Blog</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <p class="d-inline">Welcome, {{ Auth::user()->name }}</p>
                    <a class="d-inline nav-link" href="{{ route('profile.index') }}">Profile</a>
                    <a class="d-inline nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>