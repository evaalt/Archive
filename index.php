<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="welcome.css">


    <title>Log in</title>
  </head>
  <body>

        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post" action="signup.php">
                    <h1>Create Account</h1>


                    <div class="input-container">
                    <input class="form-control" type="text" name="name" placeholder="Name" required />
                    <i class="fa fa-user"></i>
                    </div>
                    <div class="input-container">
                    <input class="form-control" type="email" name="email" placeholder="Email" required/>
                    <i class="fa fa-envelope"></i>
                    </div>
                    <div class="input-container">
                    <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    <i class="fa fa-lock"></i>
                    </div>
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form method="post" action="login.php">
                    <h1>Login</h1>


                    <div class="input-container">
                        <input class="form-control" type="email" name="email" placeholder="Email" required/>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="input-container">
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="login">
                    <button>Login</button>
                    <a href="#">Forgot?</a>
                </div>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Login</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <footer>

        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="welcome.js"></script>
  </body>
</html>

