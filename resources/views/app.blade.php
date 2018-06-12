<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app"> <br>
        <div class="container col-lg-offset-4 col-lg-4">
            <div class="row">
                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if (count($errors))
                        @foreach ($errors->all() as $error)
                            <span class="text-danger">{{$error}}</span>
                        @endforeach
                    @endif
                    <br>
                    <input type="file" name="image">
                    <img src="storage/1.png" alt="Image">
                    <input type="submit" class="btn btn-primary" name="" value="Upload">
                </form>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>