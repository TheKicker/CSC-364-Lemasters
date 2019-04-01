<?php
require_once (FS_TEMPLATES . 'templateEngine.php');

class loginTemplate extends templateEngine
{
    public function login(){
        echo <<<login
  <div style="padding-top: 48px; padding-left: 36px; padding-right: 36px;">
    <h2> Log In </h2>
    <hr>
    <div align:center style="padding-bottom: 48px;">
          <div style="padding-top: 96px;">
          <form class="form-signin">
            <div align="center">
              <img class="mb-4" src="https://cdn1.iconfinder.com/data/icons/user/512/user_login_man-512.png" alt="log in page" width="100" height="100">
            </div>
              <!-- <h3 class="h3 mb-3 font-weight-normal">Please enter your username (email) and password</h3> -->
      <div align="center">
        <div style="width:50%">
            <div style="padding: 10px;">
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div style="padding: 10px;">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>
            <div class="checkbox mb-3" style="padding-top: 20px; padding-left: 15px;">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                <br>
                <a class="text-muted" href="/createUser.php"> New to the site? Create an account! </a>
              </div>
        </div>
      </div>
          <div align="center" style="padding:15px;">
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="width:120px;">Sign in</button>
          </div>
          </div>
        </form>
        <div style="padding-bottom: 150px;">
      </div>
    </div>


login;

    }
}
?>
