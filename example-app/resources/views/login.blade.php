<form method="POST" action="{{ route('login') }}" class="form pt-3">
  <div class="container">
    <h1>Login</h1>
    <p>Please fill in this form to sign in an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    

    <button type="submit" class="registerbtn">Sign in</button>
  </div>

 
</form>
