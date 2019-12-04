<?php
session_start();

if (isset($_SESSION['user'])) {
	$usr= $_SESSION['user'];
	echo "<h2>$usr, ви увійшли успішно</h2>";
	echo <<<HTML
<form action='logout.php'>
<button type='submit' class='btn btn-primary'>Вийти</button>
</div>
</form>
HTML;
} else {
	include "form.php";
}
?>