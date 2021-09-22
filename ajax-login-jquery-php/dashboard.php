<?php
include "./config/init.php";  // include database connection

?>
<head>
 

  <link
    href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>

<body>
  <div class="container">
    <!-- main app container -->
    <div class="readersack">
      <div class="container">
        <div class="row">
          <div class="col-md-9 offset-md-3">
            <h3>
           Dashboard Ajax login using jquery php - Readerstacks
            </h3>
              <?php 
                if(isset($_SESSION["login_user"])){
                  echo "Logined using ".$_SESSION["login_user"]["email"];
                }
                else{
                  echo "You are not authorised to use this page.";
                }
              ?>
          </div>
        </div>
      </div>
    </div>
    <!-- credits -->
    <div class="text-center">
      <p>
        <a href="#" target="_top"
          >Ajax login using jquery php</a
        >
      </p>
      <p>
        <a href="https://readerstacks.com" target="_top">readerstacks.com</a>
      </p>
    </div>
  </div>
</body>
