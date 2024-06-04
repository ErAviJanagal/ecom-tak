<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Include your CSS file here -->
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-1">404</h1>
                <h2>Oops! Page Not Found</h2>
                <p>Sorry, the page you are looking for could not be found.</p>
                <a href="{{ route('/') }}" class="btn btn-primary">Go to Homepage</a>
            </div>
        </div>
    </div>
</body>
</html>
