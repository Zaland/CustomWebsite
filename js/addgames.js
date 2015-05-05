// check if all fields have data in them
function checkFieldsAdd()
{
  // check if name is filled in by the user, if not return error message
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

  // check if developer is filled in by the user, if not return error message
  else if($("#developer").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Developer field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#developer").focus();
  }

  // check if publisher is filled in by the user, if not return error message
  else if($("#publisher").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Publisher field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#publisher").focus();
  }

  // check if price is filled in by the user, if not return error message
  else if($("#price").val() == '')
  {
    $(function(){
      new PNotify({
        text: 'Price field is empty',
        type: 'error',
        icon: false
      });
    });
    $("#price").focus();
  }

  // otherwise check the data provided by the user, if there exists a match return an error
  // else add the data into the database and return a success alert
  else
    checkEntry();
}

// sends the data to another script via AJAX
// if the data does not match another already in the database, then add it
// returns a code if something went wrong or if everything went right
// code: 15 (inserted data into database)
// code: 16 (data already exists in the database)
function checkEntry()
{
  // store data from input fields in variables
  var name = $("#name").val();
  var developer = $("#developer").val();
  var publisher = $("#publisher").val();
  var price = $("#price").val();

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

      console.log(temp);

      // if the account was successfully verified, redirect to the home page
      if(temp == "15")
      {
        $(function(){
          new PNotify({
            text: 'Successfully added',
            type: 'success',
            icon: false
          });
        });
      }

      // if a username doesn't exist, diplay an error
      else if(temp == "16")
      {
        $(function(){
          new PNotify({
            text: 'Game already exists',
            type: 'error',
            icon: false
          });
        });
      }
    }
  }
  xmlhttp.open("GET", "scripts/insert_game.php?n="+name+"&d="+developer+"&p="+publisher+"&pr="+price, true);
  xmlhttp.send();
}
