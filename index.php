<?php
 //session_start();
 header('Content-Type: text/html; charset=iso-8859-1');
 $message = "";
 $message2 = "";
 $message3 = "";
 $team1 = $_POST['team1'];
 $city1 = $_POST['city1'];
 $best1 = $_POST['best1'];
 $year1 = $_POST['year1'];
 $site1 = $_POST['site1'];

 $team2 = $_POST['team2'];
 $city2 = $_POST['city2'];
 $best2 = $_POST['best2'];
 $year2 = $_POST['year2'];
 $site2 = $_POST['site2'];

 $team3 = $_POST['team3'];
 $city3 = $_POST['city3'];
 $best3 = $_POST['best3'];
 $year3 = $_POST['year3'];
 $site3 = $_POST['site3'];

 $team4 = $_POST['team4'];
 $city4 = $_POST['city4'];
 $best4 = $_POST['best4'];
 $year4 = $_POST['year4'];
 $site4 = $_POST['site4'];	// Create connection
 
 ?>


 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/program-09.css">
		<title>
			ITSE 2302 Program-09: Jesse Strait
		</title>
	</head>

	<body>
		<h1>ITSE 2302 Program-09: Jesse Strait</h1>
		<hr>

		<h2>#1. Connection to Database.</h2>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			<p>Click Button to connect to database.</p>
		    
		    <input type="submit" name="submit1" value="ConnectDB">
		</form>
	
<?php


if(isset($_POST['submit1'])) {
	$servername = "lineofcode.com";
 	$username = "itse2302001003";
 	$password = "8AT7SWCJ";
 	$dbname = "itse2302001003";
   	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
  } 

?>
	<hr>
	<h2>#2. Create and Close, Hit the button!!</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		    <input type="submit" name="submit2" value="CREATE / CLOSE">
		    
		</form>
	<p><?php echo $message; ?></p>
<?php


if(isset($_POST['submit2'])) {
	$servername = "lineofcode.com";
 	$username = "itse2302001003";
 	$password = "8AT7SWCJ";
 	$message = "Attempting to CONNECT...<br>";
   	echo $message;
   	//sleep(1);

	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	if ($conn) {
		$message = "Connected to DATABASE<br>";
		echo $message;
		//sleep(1);
	}
	
	$conn->close();
	
	$message = "Connection CLOSED<br>";
	echo $message;
  } 

 
?>
	<hr>
	<h2>#3. Create Table!!</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		    <input type="submit" name="submit3" value="CREATE TABLE">
		    
		</form>
		<p><?php echo $message2; ?></p>

<?php


if(isset($_POST['submit3'])) {
	$servername = "lineofcode.com";
 	$username = "itse2302001003";
 	$password = "8AT7SWCJ";
 	$message2 = "";
   	$dbname = "itse2302001003";
   	$conn = new mysqli($servername, $username, $password,$dbname);

	//$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	if ($conn) {
		$message = "Connected to DATABASE<br>";
		echo $message2;
		//sleep(1);
	}
	
	$sql = "CREATE TABLE teams (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	teamname VARCHAR(30) NOT NULL,
	city VARCHAR(30) NOT NULL,
	bestplayer VARCHAR(30),
	yearformed INT(4),
	website VARCHAR(30)
	)";

	if ($conn->query($sql) === TRUE) {
    $message2 = "Table teams created successfully<br>";
    echo $message2;
	} else {
	    echo "Error creating table: <br>" . $conn->error;
	}

	$conn->close();
	
	$message2 = "<br>Connection CLOSED<br>";
	echo $message2;
  } 

 
?>

	<hr>
	<h2>#4. Input Team information into created table!!</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		    
		    <p>Enter information for 4 teams</p>
		    <table style="width:100%">
			  <tr>
			    <th>Team Name</th>
			    <th>City</th> 
			    <th>Best Player</th>
			    <th>Year Formed</th>
			    <th>Website</th>
			  </tr>
			  <tr>
			    <td>
			    	<input name="team1" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="city1" type="text" max="30"/>
			    </td> 
			    <td>
			    	<input name="best1" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="year1" type="number" max="9999" />
			    </td>
			    <td>
			    	<input name="site1" type="url" max="30"/>
			    </td>
			  </tr>
			  <tr>
			    <td>
			    	<input name="team2" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="city2" type="text" max="30"/>
			    </td> 
			    <td>
			    	<input name="best2" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="year2" type="number" max="9999" />
			    </td>
			    <td>
			    	<input name="site2" type="url" max="30"/>
			    </td>
			  </tr>
			  <tr>
			    <td>
			    	<input name="team3" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="city3" type="text" max="30"/>
			    </td> 
			    <td>
			    	<input name="best3" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="year3" type="number" max="9999" />
			    </td>
			    <td>
			    	<input name="site3" type="url" max="30"/>
			    </td>
			  </tr>
			  <tr>
			    <td>
			    	<input name="team4" type="text" max="30"/>
			    </td>
			    <td>
			    	<input name="city4" type="text" max="30" />
			    </td> 
			    <td>
			    	<input name="best4" type="text" max="30" />
			    </td>
			    <td>
			    	<input name="year4" type="number" max="9999" />
			    </td>
			    <td>
			    	<input name="site4" type="url" max="30"/>
			    </td>
			  </tr>
			  
			</table>




    		
    		<input type="submit" name="submit4" value="CREATE TABLE">
	</form>
	<p><?php echo $message3; ?></p>


<?php


if(isset($_POST['submit4'])) {
	$servername = "lineofcode.com";
 	$username = "itse2302001003";
 	$password = "8AT7SWCJ";
 	$message2 = "";
   	$dbname = "itse2302001003";
   	$conn = new mysqli($servername, $username, $password,$dbname);

	//$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	if ($conn) {
		$message = "Connected to DATABASE<br>";
		echo $message2;
		//sleep(1);
	}

	
	$sql = "INSERT INTO teams (teamname, city, bestplayer, yearformed, website)
	VALUES ('$team1', '$city1', '$best1', '$year1', '$site1');";

	if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    echo "<br>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO teams (teamname, city, bestplayer, yearformed, website)
	VALUES ('$team2', '$city2', '$best2', '$year2', '$site2');";

	if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    echo "<br>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO teams (teamname, city, bestplayer, yearformed, website)
	VALUES ('$team3', '$city3', '$best3', '$year3', '$site3');";

	if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    echo "<br>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO teams (teamname, city, bestplayer, yearformed, website)
	VALUES ('$team4', '$city4', '$best4', '$year4', '$site4');";

	if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    echo "<br>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	

	
	$conn->close();
	
	$message2 = "<br>Connection CLOSED<br>";
	echo $message2;
  } 

 
?>
	<hr>
	</body>
		</html>