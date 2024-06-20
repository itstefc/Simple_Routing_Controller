<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<body>
    <h1>{{ $data }}</h1>
    <h6>I'm Stef, a Web Developer based in Manila with over 2+ years of experience in web development. </h6>
    <button onclick="location.href='{{ route('about.me') }}'">About Me</button>
    <button onclick="location.href='{{ route('skills') }}'">Skills</button>
    <button onclick="location.href='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>