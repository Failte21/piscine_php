#!/usr/bin/php
<?PHP
	$nb = 0;

	while (1)
	{
		echo "Entrez un nombre: ";
		$nb = fgets(STDIN);
		if (!$nb)
		{
			echo "\n";
			break;
		}
		$nb = substr($nb, 0, -1);
		if (!is_numeric($nb))
			echo "'$nb' n'est pas un chiffre\n";
		else if ($nb != intval($nb))
			echo "'$nb' n'est pas un nombre entier\n";
		else if ($nb % 2 == 0)
			echo "Le chiffre $nb est Pair\n";
		else
			echo "Le chiffre $nb est Impair\n";
	}
?>
