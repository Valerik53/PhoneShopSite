<?php  
	include ("header.php"); 
	include ("db.php"); 

	$products = new Connection('localhost', 'root', 'root', 'valerikh', 'products');
	$products->dbconnect();
	$data = $products->select();
	$title = '';
	$price = '';
	$descr = '';
	$img = '';
	$id = '';
	$notificationMessage = ''; // Notification message variable

	if(isset($_GET['title']) && isset($_GET['price']) && isset($_GET['descr']) && isset($_GET['img']) && !isset($_GET['id'])){
		$products->title = $_GET['title'];
		$products->price = $_GET['price'];
		$products->descr = $_GET['descr'];
		$products->img = $_GET['img'];
		$products->insert();
		
		// Set the notification message
		$notificationMessage = "Your product has been added successfully! Customers can now view it, but it may not be visible in your product list immediately. Please wait 1-4 hours for it to appear.";
	}

	if(isset($_GET['title']) && isset($_GET['price']) && isset($_GET['descr']) && isset($_GET['img']) && isset($_GET['id'])){
		$products->title = $_GET['title'];
		$products->price = $_GET['price'];
		$products->descr = $_GET['descr'];
		$products->img = $_GET['img'];
		$products->update($_GET['id']);
		
		// Set the notification message for product update
		$notificationMessage = "Product updated successfully!";
	}

	if(isset($_GET['id'])){
		$data = $products->select($_GET['id']);
		$title = $data[0]['title'];
		$price = $data[0]['price'];
		$descr = $data[0]['descr'];
		$img = $data[0]['img'];
		$id = $_GET['id'];
	}

	if(isset($_GET['id']) && isset($_GET['type'])){
		if($_GET['type'] == 'delete'){
			$products->remove($_GET['id']);
			header('Location: admin.php');
		}
	}
?>

<div class="container my-5">
	<h1 style="text-align: center;" class="display-4">Admin Panel</h1>
	<p style="text-align: center;" class="lead">Manage your products with ease. Add, update, or delete items.</p>
	<hr class="my-4">

	<form method="get" action="" class="row justify-content-center">
		<div class="col-md-6">
			<div class="mb-3">
				<label for="title" class="form-label">Title</label>
				<input name="title" value="<?php echo $title ?>" type="text" class="form-control" id="title">
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Price</label>
				<input name="price" value="<?php echo $price ?>" type="number" class="form-control" id="price">
			</div>
			<div class="mb-3">
				<label for="descr" class="form-label">Description</label>
				<input name="descr" value="<?php echo $descr ?>" type="text" class="form-control" id="descr">
			</div>
			<div class="mb-3">
				<label for="img" class="form-label">Image URL</label>
				<input name="img" value="<?php echo $img ?>" type="text" class="form-control" id="img">
			</div>

			<?php if(isset($_GET['id'])) { ?>
				<a href="admin.php?id=<?php echo $_GET['id'] ?>&type=delete" style="margin-top: 15px;" class="btn btn-danger mb-3">DELETE</a>
				<input name="id" value="<?php echo $id ?>" type="hidden">
				<button type="submit" name="update" class="btn btn-primary">UPDATE</button>
			<?php } else { ?>
				<button type="submit" class="btn btn-primary">Add New Product</button>
			<?php } ?>
		</div>
	</form>

	<h3 class="text-center mt-5">Your Products List</h3>
	<table class="table table-striped mt-3">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Price</th>
				<th>Description</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data as $product){ ?>
				<tr>
					<td><?php echo $product['id'] ?></td>
					<td><?php echo $product['title'] ?></td>
					<td><?php echo $product['price'] ?></td>
					<td><?php echo $product['descr'] ?></td>
					<td><img src="<?php echo $product['img'] ?>" alt="Product Image" style="width: 50px; height: 50px; object-fit: cover;"></td>
					<td><a href="admin.php?id=<?php echo $product['id']?>" class="btn btn-info" style="background-color: #2b2b2b; color: white;"  >More</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<div class="text-center mt-5">
		<button onclick="scrollToTop()" class="btn btn-secondary">Back to Top</button>
	</div>
</div>

<!-- Notification container -->
<div id="notification" style="display:none; position: fixed; bottom: 10px; right: 10px; background-color: #ff9800; color: white; padding: 10px; border-radius: 5px; width: 350px; z-index: 1000; line-height: 1.5;">
    <button onclick="hideNotification()" style="position: absolute; top: 5px; right: 5px; background-color: transparent; border: none; color: white; font-weight: bold;">×</button>
    <p id="notification-message" style="margin: 0;"></p>
</div>

<?php include('footer.php'); ?>

<script>
	function scrollToTop() {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	}

	// Function to show notification
	function showNotification(message) {
		const notification = document.getElementById('notification');
		const notificationMessage = document.getElementById('notification-message');
		notificationMessage.textContent = message;
		notification.style.display = 'block';
	}

	// Function to hide notification
	function hideNotification() {
		const notification = document.getElementById('notification');
		notification.style.display = 'none';
	}

	// If there's a message from PHP, show the notification
	<?php if($notificationMessage) { ?>
		showNotification("<?php echo $notificationMessage; ?>");
	<?php } ?>
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
