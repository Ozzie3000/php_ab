<?php
	echo "Hello World";
?>

<?php
$foo = <<<EOD
This is a string created using heredoc syntax.
It can span multiple lines, use "quotes" without having to
escape them, and it'll allow apostrohes, and $variables.

Special characters are still supporte as well.
EOD;
?>