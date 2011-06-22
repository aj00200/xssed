<?php
header('Location: index.htm');
require('../template/head.php');
$q = $_GET['q'];

print <<<END
 Password Changed, redirecting you home.
END;

require('../template/foot.php');
?>