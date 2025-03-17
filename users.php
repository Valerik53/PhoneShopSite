<?php
	class Users{
		public $host;
		public $username;
		public $password;
		public $db;
		public $table;
		public $id;
		public $user;
		public $pass;
		public $email;
		public $connection;

		function __construct($host, $username, $password, $db, $table){
			$this->host = $host;
			@$this->username = $username;
			@$this->password = $password;
			$this->db = $db;
			$this->table = $table;
		}

		function dbconnect(){
			$connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
			$this->connection = $connection;
		}

		function remove($id){
			$query = "DELETE FROM $this->table WHERE id = $id ";
			mysqli_query($this->connection, $query);
		}

		function insert(){
			$query = "INSERT INTO $this->table (username,password,email) VALUES('$this->user', '$this->pass','$this->email')";
			mysqli_query($this->connection, $query);
		}

		function update($id){
			$query = "UPDATE $this->table SET username='$this->user', password='$this->pass', email='$this->email' WHERE id = $id ";
			mysqli_query($this->connection, $query);
		}

		function select($id=''){
			if($id == ''){
				$query = "SELECT * FROM $this->table";
			}else{
				$query = "SELECT * FROM $this->table WHERE id = $id";
			}
			$response = mysqli_query($this->connection, $query);
			$data = mysqli_fetch_all($response, MYSQLI_ASSOC);
			return $data;
		}

		function check($id=''){
			$query = "SELECT * FROM $this->table WHERE username = '$this->user' AND email='$this->email' AND password='$this->pass' ";
			$response = mysqli_query($this->connection, $query);
			$data = mysqli_fetch_all($response, MYSQLI_ASSOC);
			return count($data);
		}
	}


	$buttonColor = "#4CAF50"; // Default green color (more subtle)
	$buttonText = "Go To Site"; // Default text
	$actionPage = "home.php"; // Default action page
	$message = ""; // Message placeholder

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
		$user = new Users('localhost', 'root', 'root', 'valerikh', 'users');
		$user->dbconnect();
		$user->user = $_POST['username'];
		$user->pass = $_POST['password'];
		$user->email = $_POST['email'];
		if($user->check() > 0){
			// If user exists, change button to muted red and label to Retry
			$buttonColor = "#e74c3c"; // Softer red
			$buttonText = "Retry";
			$actionPage = "index.php"; // Redirect to index.php
			$message = "<div class='error'>An account with these credentials already exists.</div>";
		}else{
			$user->insert();
			$message = "<div class='success'>Registration successful. Welcome!</div>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Registration</title>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #f5f5f5;
			text-align: center;
			margin-top: 50px;
		}
		.success, .error {
			font-size: 16px;
			padding: 15px;
			border-radius: 8px;
			width: 50%;
			margin: 0 auto 20px auto;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}
		.success {
			background-color: #dff0d8;
			color: #3c763d;
			border: 1px solid #d6e9c6;
		}
		.error {
			background-color: #f2dede;
			color: #a94442;
			border: 1px solid #ebccd1;
		}
		input[type=submit] {
			padding: 12px 20px;
			font-size: 16px;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 150px;
			transition: background-color 0.3s ease;
		}
		input[type=submit]:hover {
			opacity: 0.9;
		}
		form {
			margin: 0 auto;
			width: 200px;
		}
	</style>
</head>
<body>
	<?php echo $message; ?>
	<form action="<?php echo $actionPage; ?>" method="post">
		<input style="background-color: <?php echo $buttonColor; ?>;" type="submit" value="<?php echo $buttonText; ?>" />
	</form>
</body>
</html>
