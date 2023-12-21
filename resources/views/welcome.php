<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>

<body>
  <h1><?= $data ?></h1>
  <form action="/store" method="post">
    <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
    <input type="text" name="name">
    <button type="submit">submit</button>
  </form>
</body>

</html>