<h2>Калькулятор</h2>
<form method="POST" action="index.php">
	<input type="hidden" name="page" value="<?=$data['page']?>" />
	<div>
		<div style="float: left; padding-right: 10px;">
			<input type="number" name="a" placeholder="A" value="<?=$data['a']?>" />
			<input type="number" name="b" placeholder="B" value="<?=$data['b']?>" />
		</div>
		<div>
			<?php echo $data['total']; ?>
		</div>
	</div>
	<br>
	<div style="float: left; padding-right: 10px;">
		<button name="action" value="plus">+</button>
		<button name="action" value="minus">-</button>
		<button name="action" value="multiply">*</button>
		<button name="action" value="divide">/</button>
		<button name="action" value="equal">= или !=</button>
		<a href="<?=LOCAL_PATH?>/">Reset</a>
	</div>
</form>