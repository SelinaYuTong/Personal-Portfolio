<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selina Yu's Portfolio Website</title>
  <link rel="stylesheet" href="css/portfoliostyle.css" />
  <!-- https://developers.google.com/fonts/docs/getting_started -->
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- https://cdnjs.com/libraries/font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<!-- HTML semantic elements are used for this HTML document as it is easy to use and read
  https://www.freecodecamp.org/news/semantic-html5-elements/ -->

<body>
  <div class="container">

    <!-- Section 1 - Landing Page -->
    <section class="section1 center" id="sectionhome">
      <h1 class="section1heading">
        Master of Software Development Student
      </h1>
      <h3 class="personname">Selina Yu</h3>
      <img src="images/SelinaYu1.jpg" alt="Selina Yu" class="personimg">
      <a href="#sectionprojects" class="personproject">Student Projects</a>
    </section>
    <!-- End of Section 1 -->

    <!-- Navigation Bar -->
    <nav class="navgiationbar center" id="navbar">
      <a href="#sectionhome" class="navbarlink">Home</a>
      <a href="#sectionabout" class="navbarlink">About</a>
      <a href="#sectionprojects" class="navbarlink">Projects</a>
      <a href="#sectioncontact" class="navbarlink">Contact</a>
    </nav>

    <!-- End of Navigation Bar -->

    <!-- Section 2 - About page -->
    <section class="section2" id="sectionabout">
      <h1 class="sectionheading section2heading">About Me</h1>
      <?php @require_once("about.php"); ?>
    </section>
    <!-- End of Section 2 -->

    <!-- Section 3 - Projects -->
    <section class="section3" id="sectionprojects">
      <h1 class="sectionheading">Selina Yu's Projects</h1>
      <?php @require_once("projects.php"); ?>
    </section>
    <!-- End of Section 3 -->

    <!-- Section 4 - Contact -->
    <section class="section4" id="sectioncontact">
      <h1 class="sectionheading section4heading">Contact Me</h1>
      <?php @require_once("contact.php"); ?>
    </section>
    <!-- End of Section 4 -->

    <!-- Footer -->
    <!-- Social Media Icons are from font awesome library -->
    <!-- https://fontawesome.com/v5.15/icons?d=gallery&p=2&c=business -->
    <footer class="footer center">
      <div class="socialmedias">
        <a href="https://github.com/SelinaYuTong" target="_blank" class="socialmedialink">
          <i class="fab fa-github-square"></i>
        </a>
        <a href="https://www.linkedin.com/in/selina-yu-435000218/" target="_blank" class="socialmedialink">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://gitlab.ecs.vuw.ac.nz/dashboard/projects" target="_blank" class="socialmedialink">
          <i class="fab fa-gitlab"></i>
        </a>
      </div>
      <p class="copyright">
        Copyright &copy; Developed by Selina Yu 2022
      </p>
    </footer>

    <!-- End of Footer -->

  </div>
  <script src="js/portfolioscript.js"></script>
</body>

</html>