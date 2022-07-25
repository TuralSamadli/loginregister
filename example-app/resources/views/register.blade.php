<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <form method="POST" action="{{ route('register') }}" class="form pt-3">
    @csrf
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
      <label for="surname"><b>Surname</b></label>
      <input type="text" placeholder="Enter Your Surname " name="surname" id="surname" required>
      <label for="age"><b>Age</b></label>
      <input type="number" placeholder="Enter  Your Age" name="age" id="age" required>
  
      
  
      <button type="submit" class="registerbtn">Register</button>
    </div>
  
   
  </form>
</body>
</html>