<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Not Allowed</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Include your CSS file here -->
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-1">405</h1>
                <h2>Method Not Allowed</h2>
                <p>Sorry, the method you are using to access this page is not allowed.</p>
                <a href="{{ route('/') }}" class="btn btn-primary">Go to Homepage</a>
            </div>
        </div>
    </div>
</body>
</html>
