<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Street Number and Name Program, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Devin Boucher" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Street Number and Name Program, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Street Number and Name Program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/street.jpg" alt="street image" width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $street_number = $_GET["street_number"];
          $street_name = $_GET["street_name"];

          echo "<p>Your address is: " . $street_number . " " . $street_name . ".</p>";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>