<?php
require('../template/head.php');
$q = $_GET['q'];

print <<<END
Here are the results for $q:
<ol>
  <li><a href="account.php?user=neo">My Account</a> - account.php (0.5KB)</a></li>
  <li><a href="index.htm">Home</a> - index.htm (0.4KB)</a></li>
</ol>
END;

require('../template/foot.php');
?>