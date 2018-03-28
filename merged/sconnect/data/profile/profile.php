<?php 
	$deg_stmt = $sql_connection->prepare("SELECT degree from sconnect_lookup_degree");
	$deg_stmt->execute();
	$deg_array = [];
	foreach ($deg_stmt->get_result() as $row)
	{
		$deg_array[] = $row['degree'];
	}
	?>

	<?php 
	$maj_stmt = $sql_connection->prepare("SELECT major from sconnect_lookup_major");
	$maj_stmt->execute();
	$maj_array = [];
	foreach ($maj_stmt->get_result() as $row)
	{
		$maj_array[] = $row['major'];
	}
	?>

	<?php
	function dropdown($name, array $options, $selected=null)
	{
		$dropdown = '<select name="' .$name. '" id="' .$name. '">'."\n";
		$selected = $selected;
		foreach ($options as $key => $option) {
			$select = $selected==$key ? 'selected' : null;
			$dropdown .= '<option value="' .$key. '"' .$select. '>' .$option. '</option>'."\n";
		}
		$dropdown .= '</select>'."\n";

		return $dropdown;
	}

?>