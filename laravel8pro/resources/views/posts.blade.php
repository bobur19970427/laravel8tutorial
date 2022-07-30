<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<h1>All Posts</h1>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Post
                    </div>
                    <div class="card-body">
                        @if (Session::has('delete_post'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('delete_post')}}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Body</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr>

                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td>
                                        <a href="/posts/{{$post->id}}" class="btn btn-info">view</a>
                                        <a href="/edit-post/{{$post->id}}" class="btn btn-success">edit</a>
                                        <a href="/delete-post/{{$post->id}}" class="btn btn-danger">delete</a>

                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
