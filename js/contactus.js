// check if all fields have data in them
function checkContactForm()
{
  // return an alert if the phone field is empty
  if($('#phone').val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Phone field is empty',
        type: 'alert',
        icon: false
      });
    });
  }

  // check if name is filled in, if not return error message
  if($("#name").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Name field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#name").focus();
  }

  // check if email is filled in, if not return error message
  else if($("#email").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Email field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#email").focus();
  }

  // check if confirm password is filled in by the user, if not return error message
  else if($("#message").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Message field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#message").focus();
  }

  // if not, at the moment just send a success message (does not actually send the message)
  else
  {
    $(function(){
      new PNotify({
        text: 'Successfully sent message',
        type: 'success',
        icon: false
      });
    });
  }
}
