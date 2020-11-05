<main>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Login</h1>
          </div>
          <div class="panel-body">
            <form action="php/login.inc.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <input type="submit" name="login-submit" class="btn btn-primary" />
              <br>
              <a href="signup.php">Not a member Register?</a>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>Team Alpha-Q</small>
          </div>
        </div>
      </div>
    </div>
  
  </body>
</html>
</main>
