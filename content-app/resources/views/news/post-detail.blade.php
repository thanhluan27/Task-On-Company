<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post detail</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            margin-top: 20px;
        }

        #excerpt {
            color: #008080;
            margin-top: 10px;
        }

        .img {
            width: 250px;
            height: 250px;
        }
    </style>
</head>

<body>
    <div class="pull-left">
        <a class="btn btn-primary" href="{{ route('post') }}"> Back</a>
    </div>
    <div class="container">
        <div class="col-md-3">
            <img class="img" src="{{ asset('storage/img/posts/'.$posts->image) }}" alt="">
        </div>
        <div class="col-md-8">
            <div class="chill">
                <h1>{{ $posts['title'] }}</h1>
                <h4 id="excerpt">{{ $posts['excerpt'] }}</h4>
                <p id="content">{{ $posts['content'] }}</p>
                <div>
                    <span class="label label-info"> Status: {{ $posts['status'] }}</span>
                    <span class="badge">Posted: {{ $posts['posted_at'] }}</span>
                    <br>
                    <a href="{{ $posts['slug'] }}"><span class="label label-primary">{{ $posts['slug'] }}</span></a>

                </div>
                <hr>
            </div>

        </div>
    </div>
</body>

</html>
