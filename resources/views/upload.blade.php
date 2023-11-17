
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".pdf, .doc, .docx, .png, .jpg, .jpeg">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
