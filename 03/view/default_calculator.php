<form method="POST" action="index.php">
    <div>
        <div style="float: left; padding-right: 10px;">
            <input type="number" name="a" placeholder="A" value="<?php echo $data['a']; ?>" />
            <input type="number" name="b" placeholder="B" value="<?php echo $data['b']; ?>" />
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
