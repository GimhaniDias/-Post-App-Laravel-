<!DOCTYPE html>
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
            <h1>SIGN IN HERE...</H1>
            <div class="row">
                <div class="col-md-12">
                   <form method="post" action="/post">
                   {{csrf_field()}}
                        Name : <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                        </br>
                        Email : <input type="text" class="form-control" name="email" placeholder="Enter your E mail">
                        </br>
                        Pass Word : <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                        </br>
                        Phone Number : <input type="text" class="form-control" name="tele" placeholder="Enter your Phone Number">
                        </br>
                        <input type="submit" class="btn btn-primary" value="SIGN IN">
                        <input type="submit" class="btn btn-warning" value="CLEAR">
                   </form>
                </div>
            </div>
        </div>
   </div>
</body>
</html>