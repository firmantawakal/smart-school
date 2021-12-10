<h1>Login Information</h1>
   
You can login with below data and use reset link to continue:
<br>ID School  : {{ $school }}
<br>Email      : {{ $email }}
<br>Username   : {{ $username }}
<br>Reset Link : <a href="{{ route('reset.password.get', $token) }}">Reset</a>