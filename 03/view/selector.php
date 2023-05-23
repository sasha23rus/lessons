<h2>Супер-пупер гепер квантовый универсальный калькулятор 6000 гигафлоп</h2>
<form action="index.php" method="POST" name="selector">
    <select name="page" id="" onchange="this.form.submit()">
        <option value="default_calculator" <?=($data['page'] == 'default_calculator')? 'selected' : ''?> >Калькулятор</option>
        <option value="square_root" <?=($data['page'] == 'square_root')? 'selected' : ''?> >Квадратный корень</option>
    </select>
</form>

