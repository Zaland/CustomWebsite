// clear the data on the screen
function clearResults()
{
  document.getElementById("results").innerHTML = '';
}

// searches the name and then includes it in the div "results"
function searchName()
{
  // store the value of input by user in a variable and reset its value on the webpage
  var name = document.getElementById('searchName').value;
  $('#searchName').val('');

  // code for IE7+, Firefox, Chrome, Opera, Safari
  if (window.XMLHttpRequest)
    xmlhttp = new XMLHttpRequest();

  // code for IE6, IE5
  else
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("results").innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","scripts/searchname.php?q="+name,true);
  xmlhttp.send();
}

// searches the developer and then includes it in the div "results"
function searchDeveloper()
{
  // store the value of input by user in a variable and reset its value on the webpage
  var developer = document.getElementById('searchDeveloper').value;
  $('#searchDeveloper').val('');

  // code for IE7+, Firefox, Chrome, Opera, Safari
  if (window.XMLHttpRequest)
    xmlhttp = new XMLHttpRequest();

  // code for IE6, IE5
  else
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("results").innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","scripts/searchdeveloper.php?q="+developer,true);
  xmlhttp.send();
}

// searches the developer and then includes it in the div "results"
function searchPublisher()
{
  // store the value of input by user in a variable and reset its value on the webpage
  var publisher = document.getElementById('searchPublisher').value;
  $('#searchPublisher').val('');

  // code for IE7+, Firefox, Chrome, Opera, Safari
  if (window.XMLHttpRequest)
    xmlhttp = new XMLHttpRequest();

  // code for IE6, IE5
  else
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("results").innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","scripts/searchpublisher.php?q="+publisher,true);
  xmlhttp.send();
}
