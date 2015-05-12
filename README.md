# About
A dynamic website that allows users to view and interact with a database through the website. Bootstrap is used for the front-end design. Pnotify is used for the various notifications that can pop up. Animsition is used for transitions between the web pages. AJAX is used to communicate between JavaScript and the server using PHP.

#Files
##### 'index.php'
This page only shows data, no interaction can be done with this page.

##### 'viewallgames.php'
This page shows all the data that is currently in the database in a table format. This is done by running a PHP script that connects with the database, grabs the values, closes the connection, and then prints the data in the table. If an admin is logged in, the table will expand to include a delete icon and an edit icon(not working at the moment) for each table entry. When the delete icon is clicked, a JavaScript function checks the ID of the row, which is the ID in the database. Then the function sends the data via AJAX to a PHP script which deals with deleting the object and returning a specific code to determine whether it worked or not. The JavaScript function then receives the code and acts appropriately. The row is deleted and updated dynamically.
