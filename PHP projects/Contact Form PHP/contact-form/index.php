<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Send us a Message</header>
    <form action="contactform.php" method="post">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your Username">
          <i class="material-icons">account_box</i>
          <!-- <i class='fas fa-user'></i> -->
        </div>
        <div class="field">
          <input type="email" name="mail" placeholder="Enter your email">
          <i class="material-icons">local_post_office</i>
          <!-- <i class='fas fa-envelope'></i> -->
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="number" name="phonenumber" placeholder="Enter your phone">
          <i class="material-icons">call</i>
          <!-- <i class='fas fa-phone-alt'></i> -->
        </div>
        <div class="field">
          <input type="text" name="subject" placeholder="Enter The title of your message">
          <i class="material-icons">assignment</i>
          <!-- <i class='fas fa-message-pen'></i> -->
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit" name="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>

  <script src="script.js"></script>

</body>
</html>
