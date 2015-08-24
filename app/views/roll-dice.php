<html>
<head>
	<title>roll dice</title>
</head>
<body>
<h1>You rolled a <?= $rand ?></h1>
<?php if ($guess == $rand) : ?>
	<h2><?= 'You guessed correct!' ?></h2>
<?php endif ?>
<?php if ($guess != $rand) : ?>
	<h2><?= 'Guess again!' ?></h2>
<?php endif ?>

</body>
</html>