<?php include('header.php'); ?>
<style>
  /* Custom styles for carousel size */
  #carouselExampleAutoplaying {
    max-width: 800px; /* Set the max width of the carousel */
    margin: 0 auto;   /* Center the carousel */
  }
  .carousel-item img {
    width: 100%;  /* Make the image fill the carousel container */
    height: auto; /* Keep the image's aspect ratio */
  }
</style>
 <div class="text-center mt-4" style="font-family: 'Verdana'; margin-top: 25px; color: #333;">
      <h1 class="mb-3" style="font-size: 28px;">Join the Apple Revolution</h1>
      <p class="lead" style="font-size: 18px; line-height: 1.5;">Experience the best in technology, design, and innovation. Shop now and enjoy the superior quality that only Apple offers.</p>
    </div>
<div style="margin-top: 15px;" class="container mt-4">
  <div id="carouselExampleAutoplaying" class="carousel slide shadow-lg" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/17.jpg" class="d-block w-100 rounded" alt="Smartphone">
      </div>
      <div class="carousel-item">
        <img src="images/17P.jpg" class="d-block w-100 rounded" alt="Smartphone">
      </div>
      <div class="carousel-item">
        <img src="images/17PM.jpg" class="d-block w-100 rounded" alt="Smartphone">
      </div>
      <div class="carousel-item">
        <img src="images/17s.jpg" class="d-block w-100 rounded" alt="Smartphone">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Additional Information Section -->
  <div class="mt-5">
    <h3 class="text-center mb-4" style="font-family: 'Georgia', serif; font-size: 32px; color: #1e3a5f;">Why Choose Our Apple Products?</h3>
    <div class="row text-center">
      <!-- First Feature Box -->
      <div class="col-md-4 mb-4">
        <div class="feature-box p-4 border rounded shadow-lg" style="background-color: #f0f8ff; transition: all 0.3s ease-in-out;">
          <i class="fas fa-check-circle fa-4x mb-3" style="color: #007bff;"></i>
          <h5 style="font-size: 24px; font-family: 'Arial', sans-serif; color: #333;">Authenticity Guaranteed</h5>
          <p style="color: #555;">Our products are 100% genuine, sourced directly from Apple. No imitations, only the real deal!</p>
        </div>
      </div>
      <!-- Second Feature Box -->
      <div class="col-md-4 mb-4">
        <div class="feature-box p-4 border rounded shadow-lg" style="background-color: #e9f7ef; transition: all 0.3s ease-in-out;">
          <i class="fas fa-cogs fa-4x mb-3" style="color: #28a745;"></i>
          <h5 style="font-size: 24px; font-family: 'Arial', sans-serif; color: #333;">Advanced Features</h5>
          <p style="color: #555;">Stay ahead of the curve with the latest Apple technology and innovative features, designed to enhance your lifestyle.</p>
        </div>
      </div>
      <!-- Third Feature Box -->
      <div class="col-md-4 mb-4">
        <div class="feature-box p-4 border rounded shadow-lg" style="background-color: #fff3e6; transition: all 0.3s ease-in-out;">
          <i class="fas fa-headset fa-4x mb-3" style="color: #ffc107;"></i>
          <h5 style="font-size: 24px; font-family: 'Arial', sans-serif; color: #333;">Customer Support</h5>
          <p style="color: #555;">Our dedicated support team is here for you! Whether it's setup, troubleshooting, or inquiries, we’ve got you covered.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQ Section -->
  <div class="mt-5">
    <h3 class="text-center mb-4" style="font-family: 'Georgia', serif; font-size: 32px; color: #1e3a5f;">Frequently Asked Questions (FAQ)</h3>
    <div id="accordion">
      <!-- Question 1 -->
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px; color: #1e3a5f;">
              What is the return policy?
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
          <div class="card-body" style="font-size: 16px; color: #555;">
            We offer a 30-day return policy on all Apple products. If you're not satisfied with your purchase, you can return it within 30 days for a full refund.
          </div>
        </div>
      </div>
      <!-- Question 2 -->
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px; color: #1e3a5f;">
              Are the products refurbished?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
          <div class="card-body" style="font-size: 16px; color: #555;">
            No, all our products are brand new and directly sourced from Apple. You can trust the authenticity of everything we sell.
          </div>
        </div>
      </div>
      <!-- Question 3 -->
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px; color: #1e3a5f;">
              Do you offer international shipping?
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
          <div class="card-body" style="font-size: 16px; color: #555;">
            Yes, we offer international shipping to most countries. Shipping fees may vary depending on your location.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Question Submission Form -->
  <div class="mt-5">
    <h3 class="text-center mb-4" style="font-family: 'Georgia', serif; font-size: 32px; color: #1e3a5f;">Your Time, Ask Us Anything!</h3>
    <form action="submit_question.php" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label" style="font-size: 18px; color: #333;">Your Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label" style="font-size: 18px; color: #333;">Your Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
  </div>
  <div class="mb-3">
    <label for="question" class="form-label" style="font-size: 18px; color: #333;">Your Question</label>
    <textarea class="form-control" id="question" name="question" rows="4" placeholder="Ask your question here" required></textarea>
  </div>
  <button type="submit" class="btn btn-lg" style="background-color: #1e3a5f; color: #fff; font-size: 18px; padding: 12px 30px; border: none; text-transform: uppercase;">
    Submit Question
  </button>
</form>

  </div>

</div>

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
