<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Smart School</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>REGISTER YOUR SCHOOL</b></h3>
            <hr>
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('actionregister') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>School ID</label>
                    <input type="text" name="id_school" class="form-control" placeholder="School ID" required="">
                </div>
                <div class="form-group">
                    <label>School Name</label>
                    <input type="text" name="name_school" class="form-control" placeholder="School Name" required="">
                </div>
                <div class="form-group">
                    <label>School Admin Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label>School Admin Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <label>School Admin Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</body>
</html>