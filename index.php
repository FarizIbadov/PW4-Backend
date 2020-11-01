<?php include "./renderForm.php" ?>
<?php include "./renderList.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <script defer src="./assets/app.js"></script>
    <title>Customer Form</title>
</head>
<body>
    <?php renderForm(); ?>
    <?php renderList(); ?>
</body>
</html>