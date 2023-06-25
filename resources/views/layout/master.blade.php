<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <title>Book Exchange</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Ysabeau+Office:ital,wght@0,200;0,500;0,700;1,400&display=swap');

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: content-box;
        }

        .container {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
</body>

</html>
