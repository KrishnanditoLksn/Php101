<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>

<body>
    <?php $is_admin = true; ?>
    <?php if ($is_admin) :?>
    <a href="#">Edit</a>
    <?php endif; ?>
    <a href="view">view</a>
</body>
</html>