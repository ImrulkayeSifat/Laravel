<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>db crud operation</title>
</head>
<body>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-header">
              Edit Post
            </div>
            <div class="card-body">
            @if(Session::has('post_updated'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('post_updated')}}
                </div>
            @endif
              <form method="POST" action="{{route('post.update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" name="title" value="{{$post->title}}" placeholder="Enter post title"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="body">Post Description</label>
                  <textarea name="body" rows="3"  class="form-control">{{$post->body}}</textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Update">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>