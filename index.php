<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f3f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }
    .signin-container {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }
    .btn-primary {
      background-color: #1a73e8;
      border: none;
      width: 100%;
    }
    .btn-primary:hover {
      background-color: #155ab5;
    }
    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    label {
      font-size: 14px;
    }
    input {
      border-radius: 4px;
    }
    .form-check-label {
      font-size: 13px;
    }
    .line {
      height: 1px;
      background-color: #e0e0e0;
      margin: 20px 0;
    }
    .logo {
      width: 120px;
      margin: 0 auto;
      display: block;
      margin-bottom: 20px;
    }
    .forgot-password {
      text-decoration: none;
      font-size: 13px;
      color: #1a73e8;
    }
    .forgot-password:hover {
      text-decoration: underline;
    }

    /* Styles for the success message */
    .success-message {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 128, 0, 0.9);
      color: white;
      padding: 20px;
      border-radius: 10px;
      font-size: 18px;
      z-index: 1000;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="signin-container">
  <form class="w-100" method="post" action="users.php">
    <!-- Optional Logo -->
    <!-- <img src="images/gugle.png" alt="Logo" class="logo"> -->
    <h2 class="text-center" style="color: #202124;">Sign In</h2>

    <!-- Email Field -->
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
      <div class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <!-- Password Field with Show/Hide Toggle -->
    <div class="mb-3 position-relative">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password" required>
      <button type="button" style="margin-top: 16px;" class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2" id="togglePassword">Show</button>
    </div>

    <!-- Username Field -->
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input name="username" type="text" class="form-control" id="username" required>
    </div>

    <!-- Checkbox -->
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="saveInfo">
      <label class="form-check-label" for="saveInfo">Save my info</label>
    </div>

    <!-- Forgot Password -->
    <p class="text-end"><a href="#" class="forgot-password">Forgot Password?</a></p>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Sign In</button>

    <div class="line"></div>

    <!-- Sign Up Link -->
    <p class="text-center mt-3">Don't have an account? <a href="#">Sign up</a></p>

    <!-- Secret Button (Hidden) -->
    <button type="button" id="secretButton" style="display:none;" onclick="window.location.href='home.php'">Secret</button>
  </form>
</div>

<!-- Success Message (Hidden initially) -->
<div id="successMessage" class="success-message">Successed</div>

<script>
  // Show/Hide Password Functionality
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');
  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.textContent = type === 'password' ? 'Show' : 'Hide';
  });

  // Client-Side Form Validation
  const form = document.querySelector('form');
  form.addEventListener('submit', function (e) {
    const email = document.getElementById('email').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (!email || !username || !password) {
      e.preventDefault();
      alert('Please fill in all fields before submitting.');
    }
  });

  // Trigger hidden button and show success message when Ctrl + Shift + H is pressed
  document.addEventListener('keydown', function (e) {
    if (e.ctrlKey && e.shiftKey && e.altKey && e.code === 'KeyZ') {
      // Display success message in center of screen
      const successMessage = document.getElementById('successMessage');
      successMessage.style.display = 'block';
      
      // Hide the success message and redirect to home.php after 2 seconds
      setTimeout(function() {
        successMessage.style.display = 'none';
        document.getElementById('secretButton').click();  // Trigger the secret button click
      }, 1500); // 2000 milliseconds = 1.5 seconds
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
