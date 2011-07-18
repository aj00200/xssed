<?php
require('../template/head.php');
$user = $_GET['user'];

print <<<END
 <a href="index.htm">Return Home</a>
 <h1>My Account</h1>
 <pre>
  Username: $user
  Email: neo@example.com
  Registered: June 21st, 2011</pre>

 <h2>Change Password</h2>
  <pre>
   <form action="setaccount.php">
   Password: <input type="password" id="pass1" name="pass1" /><br />
   Repeat it:<input type="password" id="pass2" name="pass2" /><br />
   <input type="submit" />
   </form>
  </pre>


END;

require('../template/foot.php');
?>