<?php
function removeMaliciousCode($data)
{
	$data = implode("", explode("\\", $data));
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}

function numberValidation($data)
{
	if (filter_var($data, FILTER_VALIDATE_INT) || filter_var($data, FILTER_VALIDATE_FLOAT)) {
		return true;
	}

	return false;
}