<?php  
  include('header.php'); 
  include ("db.php"); 
  $products = new Connection('localhost', 'root', 'root', 'valerikh', 'products');
  $products->dbconnect();
  $data = $products->select($_GET['id']);
?>
<div class="container my-5">
  <?php foreach ($data as $value) { ?>

    <div class="row">

      <div class="col-md-6">
        <img src="<?php echo $value['img']; ?>" class="img-fluid rounded" alt="<?php echo $value['title']; ?>">
      </div>

      <div class="col-md-6">
        <h1 class="mb-3"><?php echo $value['title']; ?></h1>
        <h4 class="text-muted mb-3"><?php echo $value['descr']; ?></h4>
        <h3 class="text-success mb-3">$<?php echo $value['price']; ?></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum justo at nisi condimentum, at posuere lacus facilisis.</p>
        <a href="buy.php" class="btn btn-primary btn-lg me-3">Buy Now</a>
        <button class="btn btn-success btn-lg">Add to Cart</button>
      </div>
    </div>

 
    <div class="mt-5">
  <h3>Customer Reviews</h3>
  <hr>
  <div class="review">
    <p><strong>John Doe</strong>: "Amazing product! Highly recommend."</p>
  </div>
  <div class="review">
    <p><strong>Jane Smith</strong>: "Great value for the price, fast delivery."</p>
  </div>
  <div class="review">
    <p><strong>Emily Carter</strong>: "Exactly what I needed! The quality exceeded my expectations."</p>
  </div>
  <div class="review">
    <p><strong>Michael Brown</strong>: "Good product, but shipping took longer than expected."</p>
  </div>
  <div class="review">
    <p><strong>Sophia Johnson</strong>: "Stylish and functional. Definitely worth the money!"</p>
  </div>
  <div class="review">
    <p><strong>Liam Wilson</strong>: "The build quality is solid, and it works perfectly. Highly satisfied."</p>
  </div>
  <div class="review">
    <p><strong>Ava Martinez</strong>: "Affordable and reliable. I’ve already recommended it to friends."</p>
  </div>
  <div class="review">
    <p><strong>Ethan Davis</strong>: "Impressive design and features. It’s now my go-to choice."</p>
  </div>
  <div class="review">
    <p><strong>Olivia Garcia</strong>: "Works as advertised. Customer support was helpful too!"</p>
  </div>
  <div class="review">
    <p><strong>Noah Rodriguez</strong>: "This is a game-changer. I can’t imagine going back to my old one."</p>
  </div>
  <div class="review">
    <p><strong>Isabella Lopez</strong>: "Fantastic! Shipping was quick, and the product came well-packed."</p>
  </div>
  <div class="review">
    <p><strong>James Anderson</strong>: "A great investment. I’ve been using it daily with no issues."</p>
  </div>
</div>

    </div>
  <?php } ?>
</div>


<footer class="bg-dark text-white mt-5">
  <div class="container py-4">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>We are passionate about connecting you to the latest and greatest in mobile technology. Discover the best smartphones tailored for your needs.</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="text-white text-decoration-none">Phones</a></li>
          <li><a href="#" class="text-white text-decoration-none">Accessories</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact</h5>
        <p>Email: support@phoneshop.com</p>
        <p>Phone: +123 456 789</p>
        <div class="d-flex">
          <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <p class="mb-0">© 2024 Phone Shop. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
