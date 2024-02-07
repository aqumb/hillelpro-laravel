<!-- resources/views/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show URL</title>
</head>
<body>
<h1>Original URL</h1>
<p>Original URL: <a href="{{ $originalUrl }}" target="_blank">{{ $originalUrl }}</a></p>
<p>Shortened URL: <a href="{{ $shortUrl }}" target="_blank">{{ $shortUrl }}</a></p>
</body>
</html>
