<?php include_once "header.php";?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>EchoChat</header>
        <form action="#" autocomplete="off">
          <div class="error-txt"></div>
          <div class="field input">
            <label>Email Addresse</label>
            <input type="text" name="email" placeholder="Entrez votre email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Entrer votre mot de passe" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat" />
          </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Singnup now</a></div>
      </section>
    </div>
    <footer class="footer">
    <button><a href="quisommenous.html">Qui sommes nous</a></button> <span>|</span> <button><a href="">Nous contacter</a></button>
  </footer>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
  </body>
</html>
