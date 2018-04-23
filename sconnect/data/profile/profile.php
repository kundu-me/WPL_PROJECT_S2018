<?php 

	$deg_stmt = $sql_connection->prepare("SELECT degree from sconnect_lookup_degree");
	$deg_stmt->execute();
	$deg_array = [];
	$deg_stmt->bind_result($deg_fetched);
	while ($deg_stmt->fetch())
	{
		$deg_array[] = $deg_fetched;
	}
	?>

	<?php 
	$maj_stmt = $sql_connection->prepare("SELECT major from sconnect_lookup_major");
	$maj_stmt->execute();
	$maj_array = [];
	$maj_stmt->bind_result($maj_fetched);
	while ($maj_stmt->fetch())
	{
		$maj_array[] = $maj_fetched;
	}
	?>

	<?php
	function dropdown($name, array $options, $selected)
	{
		$dropdown = '<select name="' .$name. '" id="' .$name. '">'."\n";
		//$selected = $selected;
		foreach ($options as $key => $option) {
			$select = $selected==$key ? 'selected' : null;
			$dropdown .= '<option value="' .$option. '"' .$select. '>' .$option. '</option>'."\n";
		}
		$dropdown .= '</select>'."\n";

		return $dropdown;
	}
?>



