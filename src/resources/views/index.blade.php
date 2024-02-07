<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <style>
        table {
            border-collapse: collapse;
            width: 35%;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Original URL</th>
        <th>Shortened URL</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($urls as $url)
        <tr>
            <td><a href="{{ $url->original_url }}" target="_blank">{{ $url->original_url }}</a></td>
            <td><a href="{{ route('redirectToOriginalUrl', $url->short_url) }}" target="_blank">{{ route('redirectToOriginalUrl', $url->short_url) }}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
