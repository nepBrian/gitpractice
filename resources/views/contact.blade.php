<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact form here...</h1>

        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif
        <form method="post" action="{{ route('contact.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Full Name:</label>
                <input class="form-control" type="text" name="name">
                @if ($errors->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label>Email Address:</label>
                <input class="form-control" type="text" name="email">
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea class="form-control" name="message"></textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
