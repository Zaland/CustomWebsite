
    <div class="container" style="padding-top:30px">
      <div class="col-lg-6 col-md-6 col-sm-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-1">
        <font style="color:#1fa67b">
          <div class="jumbotron">
            <h4 align="center" style="color:#1fa67b; margin-top:-15px;"> Registration </h4>
            <form action="javascript:checkFields()" method="POST">
              <fieldset>
              <div class="form-group">
                <label> Username </label>
                <input type="text" id="username" class="form-control" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label> Password </label>
                <input type="password" id="password1" class="form-control" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label> Confirm Password </label>
                <input type="password" id="password2" class="form-control" placeholder="Enter Password">
              </div>
              <div class="checkbox">
                <input type="checkbox" onclick="showPasswordReg()" style="margin-left:1px">
                <label> Show Password </label>
              </div>
              <input style="font-size:14px" type="submit" value="Register" id="register" class="btn btn-custom btn-lg btn-block"/>
            </fieldset>
            </form>
          </div>
        </font>
      </div>
    </div>
