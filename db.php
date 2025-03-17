<?php
	class Connection{
		public $host;
		public $username;
		public $password;
		public $db;
		public $table;
		public $id;
		public $title;
		public $price;
		public $descr;
		public $img;
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
			$query = "INSERT INTO $this->table (title,price,descr,img) VALUES('$this->title', $this->price,'$this->descr','$this->img')";
			mysqli_query($this->connection, $query);
		}

		function update($id){
			$query = "UPDATE $this->table SET title='$this->title', price=$this->price, descr='$this->descr',img='$this->img' WHERE id = $id ";
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
	}

?>