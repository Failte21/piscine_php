#!/usr/bin/php

<?PHP
	$input = fopen("php://stdin", 'r');
	$nb = 0;

	while (1)
	{
		echo "Entrez un nombre: ";
		$nb = fgets($input);
		if (!$nb)
		{
			echo "\n";
			break;
		}
		$nb = substr($nb, 0, -1);
		if (!is_numeric($nb))
			echo "'$nb' n'est pas un chiffre\n";
		else if ($nb % 2 == 0)
			echo "Le chiffre $nb est Pair\n";
		else
			echo "Le chiffre $nb est Impair\n";
	}
?>
