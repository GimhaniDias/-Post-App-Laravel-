<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <div class="text-center">
        <h1>CREATE YOUR POST</H1>
        <div class="row">
                <div class="col-md-12">
                <form method="post" action="/complete">
                   {{csrf_field()}}
                    Post Title : <input type="text" class="form-control" name="title" placeholder="Enter your post title">
                    </br>
                    Post Description : <input type="text" class="form-control" name="desc" placeholder="Enter your post description">
                    </br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                    <input type="submit" class="btn btn-warning" value="CLEAR">
                </form>
                </div>
        </div>
   </div>
</div>  
</body>
</html>