<?php
require('../template/head.php');
echo('<script type="text/javascript">\n');
echo('var search_term = "' . $_GET['q'] . '";"\n');
echo('</script>\n');
echo('\n\n');

echo('Sorry, we could not find any results for: ');
echo('<script type="text/css">document.write(search_term);</script>\n');
require('../template/foot.php');
?>