<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
</head>
<body>
  @foreach($posts as $p)
    <h3>{{$p->title}}</h3>
    <p>{{$p->body}}</p>
  @endforeach
</body>
</html>