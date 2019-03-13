<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    header  {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
    li  {
      list-style-type: none;
    }
  </style>
</head>

<body>
<?php foreach ($task as $taskInfo => $val) : ?>
<li><strong><?= $taskInfo; ?></strong> : <?= $val; ?></li>
<?php endforeach; ?>
</body>
</html>