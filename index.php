<?php include_once "header.php";?>
  <body>
  <div id="welcomeMessage" class="welcome-popup">
  Bienvenue sur Enigma Chat !
  </div>
    <div class="wrapper">
      <section class="form signup">
        <header>Enigma Chat !</header>
        <form action="#" enctype="multipart/form-data" autocomplete="off">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" name="fname" placeholder="First Name" required/>
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" name="lname" placeholder="Last Name" required/>
            </div>
          </div>
          <div class="field input">
            <label>Email Addresse</label>
            <input type="text" name="email" placeholder="Entrez votre email"required />
          </div>
          <div class="field input">
            <label>Password</label>
            <input
              type="password" name="password" required
              placeholder="Entrer votre mot de passe"
            />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" required/>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat"/>
          </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login now</a></div>
      </section>
      <footer class="copyrigth">
        <p>© 2024 Enigma Chat - All rights reserved.</p>
      </footer>
    </div>
  <footer class="footer">
    <button><a href="#">Qui somme nous</a></button> <span>|</span> <button><a href="">Nous contacter</a></button>
  </footer>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    <script src="javascript/globe.js"></script>
  </body>
</html>