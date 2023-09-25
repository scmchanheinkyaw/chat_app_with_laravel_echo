<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
</head>
<body>
    <div id="wrapper">
        <div id="menu">
            <p class="welcome">Chat App</p>
        </div>
        <ul id="list-message"></ul>
        <form id="form">
            <input type="text" id="input-message" placeholder="Type a Message"  />
        </form>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>