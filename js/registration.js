// function for showing password or hiding it for the registration page
function showPasswordReg()
{
  var temp = document.getElementById('password1').type;

  // if the type is password, then make it text to make the password visible
  if(temp == 'password')
  {
    $("#password1").attr('type', 'text');
    $("#password2").attr('type', 'text');
  }
  // otherwise set the type to password, to make the password hidden
  else if(temp == 'text')
  {
    $("#password1").attr('type', 'password');
    $("#password2").attr('type', 'password');
  }
}

// check if all fields have data in them
function checkFields()
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
  else if($("#password1").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Password field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#password1").focus();
  }

  // check if confirm password is filled in by the user, if not return error message
  else if($("#password2").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Confirm password field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#password2").focus();
  }

  // otherwise check if the password fields match
  else
    checkPassword();
}

// first perform a check on the passwords to see if they are identical
function checkPassword()
{
  // store the value of the two passwords in variables
  var pass1 = $("#password1").val();
  var pass2 = $("#password2").val();

  // if the passwords are the same, then check the username next
  if(pass1 === pass2)
  {
    checkUsername();
  }

  // if the passwords don't match, then display an alert
  else
  {
    $(function(){
      new PNotify({
        text: 'Passwords do not match',
        type: 'error',
        icon: false
      });
    });
  }
}

// check the username to see if its in use or not
// the create_account script will return codes if it went well or something went wrong
// code: 10 (everything went well)
// code: 11 (username already taken)
function checkUsername()
{
  // send an AJAX request to the server and check if there exists a same username
  // also send the password, if there doesn't exist the same username then create the account
  var username = $("#username").val();
  var password = $("#password1").val();

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

      // if the account was successfully created
      if(temp == "10")
      {
        // reset the values that the user input
        $("#username").val('');
        $("#password1").val('');
        $("#password2").val('');

        // return a success alert
        $(function(){
          new PNotify({
            text: 'Successfully created account',
            type: 'success',
            icon: false
          });
        });
      }

      // if a username is already taken, display an error alert
      else if(temp == "11")
      {
        $(function(){
          new PNotify({
            text: 'Username already taken',
            type: 'error',
            icon: false
          });
        });
      }
    }
  }
  xmlhttp.open("GET", "scripts/create_account.php?u="+username+"&p="+password, true);
  xmlhttp.send();
}
