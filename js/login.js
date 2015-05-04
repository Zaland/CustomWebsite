// function for showing password or hiding it for the login page
function showPasswordLogin()
{
  var temp = document.getElementById('password').type;

  // if the type is password, then make it text to make the password visible
  if(temp == 'password')
    document.getElementById('password').type = 'text';
  // otherwise set the type to password, to make the password hidden
  else if(temp == 'text')
    document.getElementById('password').type = 'password';
}

// check if all fields have data in them
function checkFieldsLogin()
{
  // check if username is filled in by the user, if not return error message
  if($("#username").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Username field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#username").focus();
  }

  // check if password is filled in by the user, if not return error message
  else if($("#password").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Password field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#password").focus();
  }

  // otherwise
  else
    checkAccountLogin();
}

// check the account by sending data via AJAX to the server
// when the account is successfully verified, send the user back to home page
// this function runs the sign_in.php script which returns a code after checking
// code: 12 (username and password match)
// code: 13 (username doesn't exist)
// code: 14 (username or password doesn't match)
function checkAccountLogin()
{
  // store username and password in variables
  var username = $("#username").val();
  var password = $("#password").val();

  // code for IE7+, Firefox, Chrome, Opera, Safari
  if (window.XMLHttpRequest)
    xmlhttp = new XMLHttpRequest();

  // code for IE6, IE5
  else
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  xmlhttp.onreadystatechange=function() {
    // if everything went well, check the error code and then print an appropriate alert
    if(xmlhttp.readyState==4 && xmlhttp.status==200) {
      // grab the response that the php file sent
      var temp = xmlhttp.responseText;

      // if the account was successfully verified, redirect to the home page
      if(temp == "12")
        window.location.href = "http://web.cs.dal.ca/~zaland/CustomWebsite/";

      // if a username doesn't exist, diplay an error
      else if(temp == "13")
      {
        $(function(){
          new PNotify({
            text: 'Username does not exist',
            type: 'error',
            icon: false
          });
        });
      }

      // if username or password don't match, display an error
      else if(temp == "14")
      {
        $(function(){
          new PNotify({
            text: 'Username or password do not match',
            type: 'error',
            icon: false
          });
        });
      }
    }
  }
  xmlhttp.open("GET", "scripts/sign_in.php?u="+username+"&p="+password, true);
  xmlhttp.send();
}
