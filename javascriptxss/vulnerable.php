<?php
require('../template/head.php');
$q = $_GET['q'];

print <<<END
<script type="text/javascript">
var serach_term = " $q";
</script>

Sorry, we could not find any results for:
<script type="text/javascript">document.write(search_term);</script>
END;

?>