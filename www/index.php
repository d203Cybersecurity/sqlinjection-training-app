<?php
//function to check if sqlitraining database is created or not.
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SQL Injection</title>

    <link href="./css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>

    <div class="container-narrow">


<?php
if ($_SESSION["username"]){

	$msg = "<div class=\"footer\"><p><h4><a href=\"blindsqli.php?user=" . $_SESSION['username'] . "\">Profile</a> | <a href=\"logout.php\">Logout</a><h4></p></div>";
	echo $msg;

}
?>
	  
        <div class="jumbotron">
			<h1 style="color:white">SQL Injection Summative Lab</h1>
			<p class="lead" style="color:white">
				An application designed for students to demonstrate their mastery of SQL Injection exploitations.
			</p>
        </div>
		<br />
    <div class="row marketing">
        <div style="border:1px solid #000000; padding: 10px">
        <b>Additional information</b>
        <ul>
        <li>Most pages support a debug view to see the query being run. Add <b>?debug=true</b> to the URL to enable this.</li>
        <li>The application is meant to be a deliberately insecure to practice and learn SQL Injection attacks. <b>Do not run on a server exposed to the Internet or in untrusted environments!</b></li>
        </ul>
        </div>
    </div>		
      <div class="row marketing">
        <div class="col-lg-6">

    <div style="border:1px solid #000000; padding: 10px">
		  <h4><a href="/login1.php?debug=true" style="color:#B31D14">Exercise 1 -- Login Bypass #1</a></h4>
          <p>Enter a random username and password combination that will not be in the database and observe the output. Now use your SQL injection techniques to bypass the user authentication. When you are successful, you will be redirected to the home page and there will now be an option to logout at the top of the page. Complete the corresponding portion of the document.</p>
          
		<h4><a href="/login2.php?debug=true" style="color:#B31D14">Exercise 2 -- Login Bypass #2</a></h4>
          <p>Be sure to logout. Enter a random username and password combination that will not be in the database and observe the output. Now use your SQL injection techniques to bypass the user authentication. When you are successful, you will be redirected to the home page and there will now be an option to logout at the top of the page. Complete the corresponding portion of the document.</p>
          
		<h4><a href="/searchproducts.php?debug=true" style="color:#B31D14">Exercise 3 -- Return SQL database information -- Products Catalog</a></h4>
          <p>Enter a SQLi that will list all of the tables and their columns in the database. Note that you need to list all of the tables and all of their columns in the database. Not just the columns for the products table. There are other tables in the database. Complete the corresponding portion of the document.</p>

		<h4><a href="/searchproducts.php?debug=true" style="color:#B31D14">Exercise 4 -- Return SQL database information -- User Database</a></h4>
          <p>Enter a SQLi that will return all of the users in the database and their hashed passwords associated with each user account. Complete the corresponding portion of the document.</p>
          
        </div>
      </div>

</div>

	  <div class="footer">
		<p><a href="https://appsecco.com">Appsecco</a> | Riyaz Walikar | <a href="https://twitter.com/riyazwalikar">@riyazwalikar</a></p>
      </div>

    </div> <!-- /container -->

  

</body></html>