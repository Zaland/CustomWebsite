// deletes the row with the id given
function delete_game(object)
{
  var id = $(object).attr('id');
  //$("#table").html('');

  // code for IE7+, Firefox, Chrome, Opera, Safari
  if (window.XMLHttpRequest)
    xmlhttp = new XMLHttpRequest();

  // code for IE6, IE5
  else
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  // use AJAX to send the value of id to delete
  xmlhttp.onreadystatechange=function() {
    // if everything went well, check the error code and then print an appropriate alert
    if(xmlhttp.readyState==4 && xmlhttp.status==200) {
      // grabs the parent of tr and then removes that object by using the fade out animation
      var $tr = $(object).parents('tr');
      $tr.fadeOut('slow');
    }
  }
  xmlhttp.open("GET", "scripts/delete_game.php?i="+id, true);
  xmlhttp.send();
}
