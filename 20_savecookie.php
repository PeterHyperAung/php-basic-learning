<?php

setcookie("name", "Peter");

// Expire time; Third parameter. No parameters ? -> will be deleted after the tab is closed
// Reminder: host must be the same to remember cookies (if it is localhost:3000, localhost:8000 won't know that cookie in 3000)
// the last argument show the directory where cookies should work
setcookie("theme", "light", time() + 3600, "/form/");

echo "See view-cookie.php";
echo "<a href='/21_viewcookie.php'>Here</a>";

// deleteting cookies values

setcookie("name", "Peter", time() - 1);
