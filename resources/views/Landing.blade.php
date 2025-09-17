<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-white">
    <div class="text-4xl font-bold text-center mb-5">
        {{ $message }}
    </div>
    <div class="max-w-2/3 bg-white flex items-center justify-center rounded-lg">
        <img src="/images/HelloWorld.png" alt="Family Vector Illustration">
    </div>
</body>
</html>