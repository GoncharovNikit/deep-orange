<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/orange.png">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>DeepOrange</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul class="navigation">
                <li>Home<div class="line"></div></li>
                <li>Profile</li>
                <li>Feed</li>
                <li>Create post</li>
                <li>Find group</li>
                <li>Login</li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <div class="right-panel">
        
    </div>

    <footer>

    </footer>
    <!--JS script-->
</body>
</html>