<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
       <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
 <section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add New User
                    </div>
                    <!--success message-->
                        @if(Session::has('user_added'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('user_added')}}
                            </div>
                        @endif
                    <div class="card-body">
                      <form action="{{ route('submit.user') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">User Name: </label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                            <label for="roll">Roll no:</label>
                            <input class="form-control" type="number" name="roll" id="roll" placeholder="11">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>