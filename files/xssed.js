//
// XSSeducation - xssed.js - v0.1.0
// Probably your best friend, it offers various functions you will likely
// be needing in these challenges
//
var $xss = {
    loot: new Object(),
    onload: function() {
	$xss.loot['version'] = 'v0.1.0';
	$xss.dump_cookies();
    },
    id: function(id) {
	return document.getElementById(id);
    },
    dump_cookies: function() {
	$xss.loot.cookies = document.cookie;
    }
}

window.addEventListener('load', $xss.onload, false);