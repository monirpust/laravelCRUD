<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
    <!-- bootstarp css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h1>User Table from Database</h1>
    <section>
        <div class="container">
            <div class="row">
             <div class="col-md-12">
                    <!--success message for update-->
                    @if(Session::has('update_user'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('update_user')}}
                            </div>
                        @endif
                <!--Success message for delete-->
             @if(Session::has('user_removed'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('user_removed')}}
                </div>
             @endif
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <td>Name</td>
                        <td>Roll</td>
                        <td>Email</td>
                        <td>Actions</td>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->roll}}</td>
                                <td>{{$user->email}}</td>
                                <td><a class="btn btn-success" href="/users/{{$user->id}}">View</a></td>
                                <td><a class="btn btn-info" href="/edit-user/{{$user->id}}">Edit</a></td>
                                <td><a class="btn btn-danger" href="/delete-user/{{$user->id}}">Delete</a></td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/addUser" type="button" class="btn btn-warning" target="_blank">Add New User</a>
             </div>
            </div>
        </div>
    </section>

    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>