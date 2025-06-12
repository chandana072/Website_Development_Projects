<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Registration</title>
    <style>
    body{
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(https://steamuserimages-a.akamaihd.net/ugc/851599216710070863/231EB41FA5BB13C9F68E1CDE6B1B539CE93AC18E/);
        background-size: cover;
        background-position: center;
      }
</style>
  </head>
  <body>
    <div class="container center_div" style="padding-top: 100px;">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="card card-outline-secondary">
            <div class="card-header">
              <h3 class="mb-0">Sign Up</h3>
            </div>
            <div class="card-body">
              <form action="regprocess.php" method="post" class="form" role="form">
                <div class="form-group">
                  <label for="inputName">Father Name</label> 
                  <input class="form-control" name="father_name" id="inputName" placeholder="Father name" type="text">
                </div>
                <div class="form-group">
                  <label for="inputName">Mother Name</label> 
                  <input class="form-control" name="mother_name" id="inputName" placeholder="Mother name" type="text">
                </div>
                <div class="form-group">
                  <label for="inputName">Date of Birth</label> 
                  <input class="form-control" name="date_birth" id="inputName" placeholder="Mother name" type="date">
                </div>
                <div class="form-group">
                  <label for="inputName">Time of Birth</label> 
                  <input class="form-control" name="time_birth" id="inputName" placeholder="Enter Time" type="time">
                </div>
                <div class="form-group">
                  <label for="inputEmail3">Child's weight</label> 
                  <input class="form-control" name="baby_weight" id="inputName" placeholder="Child's weight in kg" type="text">
                </div>
                <div class="form-group">
                  <label for="inputEmail3">Email</label> 
                  <input class="form-control" name="email" id="inputEmail3" placeholder="Email" required="" type="email">
                </div>
                <div class="form-group">
                  <label for="inputName">Contact</label> 
                  <input class="form-control" name="contactno" id="inputName" placeholder="Enter Phone" type="text">
                </div>
                <div class="form-group">
                  <label for="inputName">Username</label> 
                  <input class="form-control" name="user_name" id="inputName" placeholder="Enter Username" type="text">
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Password</label> 
                  <input class="form-control" id="inputPassword3" name="userpassword" placeholder="Password" required="" type="password"> 
                  <small class="form-text text-muted" id="passwordHelpBlock">Your password must be 8-20 characters long.</small>
                </div>
                <div class="form-group">
                  <label for="inputVerify3">Verify</label> 
                  <input class="form-control" id="inputVerify3" name="confirmpassword" placeholder="Password (again)" required="" type="password">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-lg float-right" type="submit">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>