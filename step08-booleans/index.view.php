<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    li  {
      list-style-type: none;
    }
  </style>
</head>

<body>
  <h1>Task Of The Day</h1>
  <ul>
    <li><strong>Name: </strong> <?= $task['title']; ?></li>
    <li><strong>Due: </strong> <?= $task['due']; ?></li>
    <li><strong>Assigned to: </strong> <?= $task['assigned to']; ?></li>
    <li><strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?></li>
  </ul>  
</body>
</html>