<?php require ('partials/head.php'); ?>
<?php foreach($users as $user):?>

<li><?= $user->name ?></li>

<?php endforeach;?>

	<form method='POST' action="/users">
		
		<input name="name" >
		<button type="submit">Submit</button>
	
	
</form>
<?php require ('partials/footer.php'); ?>