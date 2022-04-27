<html>
<table height = 500px width = 200% border = 1px cellpadding = 0 cellspacing = 0>
<?php

	for ($row = 1; $row <= 8; $row++)
	{
		echo "<tr>";

			for ($cols = 1; $cols <= 8; $cols++)
			{
				$total = $cols + $row;
				if ($total % 2 == 0)
				{
					echo "<td height = 30px width = 30px bgcolor = white></td>";
				}

				else
				{
					echo "<td height = 30px width = 30px bgcolor = black></td>";
				}
			}
		echo "</tr>";
	}
?>
</table>
</html>
