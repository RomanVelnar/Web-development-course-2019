<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>My Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="styling.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
      <style>
          .container{
              margin-top: 120;
          }
          #notePad #allNotes, #done{
              display: none;
          }
          .buttons{
              margin-bottom: 20px;
          }
          textarea{
              width: 100%;
              max-width: 100%;
              font-size: 16px;
              line-height: 1.5em;
              border-left-width: 20px;
              border-color: #CA2DD9;
              color: #CA2DD9;
              background-color: #FBEFFF;
              padding: 10px;
          }
      </style>
  </head>
  <body>
      <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">Online Notes</a>  
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
          </div>
          <div class="navbar-collapse collapse"></div>
          <ul class="nav navbar-nav" id="navbarCollapse">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Contact Us</a></li>
              <li class="active"><a href="#">My Notes</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#loginModal">Log out</a></li>
            </ul>   <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#loginModal">Logged in as username</a></li>
            </ul>
        </div>
      
      </nav>
<!--      Container-->
      
      <div class="container" id="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="buttons">
                        <button id="addNote" type="button" class="btn btn-info btn-lg">Add Notes</button>
                        <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>
                        <button id="Done" type="button" class="btn green btn-lg pull-right">Done</button>
                        <button id="allNotes" type="button" class="btn btn-info btn-lg">All Notes</button>
                    </div>
                    <div id="notePad">
                        <textarea rows="10"></textarea>
                    </div>
                    <div id="notes" class="notes">
<!--                    Ajax call to PHP file-->
                    </div>
                </div>
            </div>
      </div>
<!--      login form -->
         <form method="post" id="loginform">
       <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"> &times;
                </button>
                <h4 id="myModalLabel">Login:</h4>
            </div>
            <div class="modal-body">
                
<!--            Login message for PHP file    -->
                <div id="loginmessage"></div>
            <div class="form-group">
                    <label for="loginemail" class="sr-only">Email:</label>
                    <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                </div>
            <div class="form-group">
                    <label for="loginpassword" class="sr-only">Password:</label>
                    <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                </div>
                <div class="checkbox">
                    <label> 
                        <input type="checkbox" name="rememberme" id="rememberme">
                    Remember me
                    </label>
                        <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">Forgot Password?</a>
                </div>

            </div>
            <div class="modal-footer">
                <input class="btn green" name="login" type="submit" value="Login">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">Register</button>
            </div>
            </div>
            </div>
            </div>
      </form>
<!--      Sign up form-->
      <form method="post" id="signupform">
       <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"> &times;
                </button>
                <h4 id="myModalLabel">Sign up today and Start using our Online Notes App!</h4>
            </div>
            <div class="modal-body">
                
<!--            SIgnup message for PHP file    -->
                <div id="signupmessage"></div>
                <div class="form-group">
                    <label for="username" class="sr-only">Username:</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                </div>
            <div class="form-group">
                    <label for="email" class="sr-only">Email:</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email" maxlength="50">
                </div>
            <div class="form-group">
                    <label for="password" class="sr-only">Password:</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                </div>
            <div class="form-group">
                    <label for="password2" class="sr-only">Password:</label>
                    <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn green" name="signup" type="submit" value="Sign Up">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
            </div>
            </div>
            </div>
      </form>
<!--  Forgot password form    -->
               <form method="post" id="forgotpasswordform">
       <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"> &times;
                </button>
                <h4 id="myModalLabel">FOrgot Password? Enter your Email address:</h4>
            </div>
            <div class="modal-body">
                
<!--            FOrgot message for PHP file    -->
                <div id="forgotpasswordmessage"></div>
            <div class="form-group">
                    <label for="forgotmail" class="sr-only">Email:</label>
                    <input class="form-control" type="email" name="forgotmail" id="forgotmail" placeholder="Email" maxlength="50">
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn green" name="forgotpassword" type="submit" value="Submit">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">Register</button>
            </div>
            </div>
            </div>
            </div>
      </form>
<!--      FOoter-->
      <div class="footer">
        <div class="container">
          <p>DevelopmentIsland.com Copyright &copy; 2015-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>