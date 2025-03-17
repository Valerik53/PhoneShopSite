<?php  
  include('header.php'); 
  include ("db.php"); 
  $products = new Connection('localhost', 'root', 'root', 'valerikh', 'products');
  $products->dbconnect();
  $data = $products->select();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Features</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3lW9u7vJ8jov6k9gHpHq5hfoqZ0pB8H9h6Xq8e6bI45mswHQrhqWL1Y1g" crossorigin="anonymous">
  <style>
    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
      transition: box-shadow 0.3s ease-in-out;
    }

    .card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
    }
  </style>
</head>
<body>
  <h2 style="text-align: center; margin-top: 30px;">New Features</h2>
  <div style="margin-left: 110px;" class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      All
    </a>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Iphone 17's</a></li>
      <li><a class="dropdown-item" href="#">Iphone 17 Pro's</a></li>
      <li><a class="dropdown-item" href="#">Iphone 17 ProMax's</a></li>
    </ul>
  </div>
  <div class="d-flex flex-wrap justify-content-center"> 
    <?php foreach ($data as $value) { ?>
    <div class="card m-3" style="width: 18rem;"> <!-- Added 'shadow' class here -->
      <img src="<?php echo $value['img']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title"><?php echo $value['title']; ?></h2>
        <h5 class="card-title"><?php echo $value['descr']; ?></h5>
        <p class="card-text"><?php echo $value['price']; ?></p>
        <a href="single.php?id=<?php echo $value['id']?>" class="btn btn-primary">More</a>
      </div>
    </div>
    <?php } ?>
  </div>

  <?php include('footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
