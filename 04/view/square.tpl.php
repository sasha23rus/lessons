<h2>Квадратный корень</h2>
<form method="POST">
	<input type="hidden" name="page" value="<?=$data['page']?>" />
	<div>
		<div style="float: left; padding-right: 10px;">
			<label>
				<input type="number" name="a" placeholder="A" value="<?=$data['a']?>" />
			</label>
		</div>
		<div>
			<?=$data['total']?>
		</div>
	</div>
	<br>
	<div style="float: left; padding-right: 10px;">
		<button name="action" value="square">x<sup>2</sup></button>
		<button name="action" value="squareRoot">√</button>
		<a href="<?=LOCAL_PATH?>/square">Reset</a>
	</div>
</form>
