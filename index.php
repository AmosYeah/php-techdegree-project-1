<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Extra Credit-3: Auto-refresh the quote. -->
  <!-- code adapted from https://www.w3schools.com/tags/att_meta_http_equiv.asp -->
  <meta http-equiv="refresh" content="30">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <?php include "inc/functions.php" ?>
</head>
<!-- Extra Credit-2: Random background color. -->
<body style="background-color: <?php echo genRandomColor(); ?>">
  <div class="container">
    <div id="quote-box">
      <?php echo printQuote($quoteArray); ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>