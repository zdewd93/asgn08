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
    <li><strong>Status: </strong> 
      <?php if ($task['completed']) : ?>
        <span>&#9989;</span>
      <?php else : ?>
        <span>Incomplete</span>       
      <?php endif; ?>
    </li>
    <li><strong>Does the task require follow-up action?: </strong> 
      <?php if ($task['follow up']) : ?>
        <span>&#9989;</span>
      <?php else : ?>
        <span>Incomplete</span>       
      <?php endif; ?>
    </li>
  </ul>  
</body>
</html>