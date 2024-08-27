<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'] )
</head>
<body>
   <h1 class="text-purple-500 font-bold"> DIONAR GWAPO</h1>

   <a href ="{{ route('doh') }}">
    <button>go to demo 2</button>
   </a>
</body>
</html>