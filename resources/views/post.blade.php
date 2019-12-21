<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UQ-Compantible" content="ie=edge">

        <title>Document</title>
    </head>

    <body>
        {{-- the {{  }} escapes the content so that html or js cant be dropped in --}}
        <h1>My Blog</h1>
        <p>{{ $post->body }}</p>
    </body>


</html>