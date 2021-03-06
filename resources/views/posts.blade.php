<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Posts</title>
</head>
<body>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              All Posts
            </div>
            <div class="card-body">
              @if(Session::has('post_deleted'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('post_deleted')}}
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
                @foreach($posts as $p)
                  <tr>
                    <td>{{$p->title}}</td>
                    <td>{{$p->body}}</td>
                    <td>
                      <a class="btn btn-success" href="/posts/{{$p->id}}">View</a>
                      <a class="btn btn-secondary" href="/edit-post/{{$p->id}}">Edit</a>
                      <a class="btn btn-danger" href="/delete-post/{{$p->id}}">Delete</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>