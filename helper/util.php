<?php
function param(string $name) {
	if (isset($_GET[$name])) {
		return $_GET[$name];
	} else if (isset($_POST[$name])) {
		return $_POST[$name];
	}
	return null;
}
