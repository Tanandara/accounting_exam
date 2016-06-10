<?php
system("curl \"http://www.miniwebtool.com/pvifa-calculator/?r=".(int)$_REQUEST["r"]."&n=".(int)$_REQUEST["n"]."\" | grep \"<div class=r1>\" ");
?>