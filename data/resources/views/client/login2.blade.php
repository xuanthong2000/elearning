<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/styless.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
      <form method="post" action="login/store">
        @csrf
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
            <input type="text" placeholder="Name" name="name" value="">
       
            <input type="email" placeholder="Email" name="email" value="">    
    
            <input type="text" placeholder="Phone" name="phone" value="">
  
            <input type="password" placeholder="password" name="password" value="">
     
            <input type="password" placeholder="Confirm Password" />
          <br />
            <!-- <button type="submit" class=""><a style="text-decoration: none; color:white;">Sign up</a></button> -->
            <button type="submit">Submit</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form method="post" action="/login2">
        @csrf
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" name="Email" placeholder="Email" />
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <input type="password" name="Password" placeholder="Password" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <a href="resetpass">Forgot your password?</a>
          <button type="submit" class=""><a style="text-decoration: none; color:white;">Sign in</a></button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
