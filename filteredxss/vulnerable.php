<?php
require('../template/head.php');
$id = str_replace('"', '&quot;', $_GET['id']);
$creditcard = $_GET['creditcard'];
$creditcard = preg_replace('/([^\s])([A-Za-z\\"\\\'])/', '', $creditcard);

print <<<END
<h1>Please Confirm Your Order</h1>
<div id="creditcard">$creditcard</div>

<script type="text/javascript">
var q = "$id";
document.write("<!-- " + q + "-->");
</script>
END;

require('../template/foot.php');
?>