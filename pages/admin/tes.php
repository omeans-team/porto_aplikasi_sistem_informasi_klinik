<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: '../_partials/autocomplete.php'
    });
  });
  </script>
</head>
<body>
<div class="container">
  <label for="skills" class="control-label">Skills: </label>
  <input id="skills" class="form-control" placeholder="Enter your skills like PHP, Mysql, Jquery, Ajax">
</div>
</body>
</html>