<?php
	include_once($_SERVER["DOCUMENT_ROOT"].'/02/lib/calculator.php');
	use Calculator as Calculator;
	$calculator = new Calculator();
?>

<form method="POST">
	<div>
		<div style="float: left; padding-right: 10px;">
			<input type="number" name="a" placeholder="A" value="<?=$calculator->a;?>" />
			<input type="number" name="b" placeholder="B" value="<?=$calculator->b;?>" />
		</div>
		<div>
			<?=$calculator->init()?>
		</div>
	</div>
	<br>
	<div style="float: left; padding-right: 10px;">
		<button name="action" value="plus">+</button>
		<button name="action" value="minus">-</button>
		<button name="action" value="multiply">*</button>
		<button name="action" value="divide">/</button>
		<button name="action" value="equal">= или !=</button>
		<a href="/02/">Reset</a>
	</div>
</form>
