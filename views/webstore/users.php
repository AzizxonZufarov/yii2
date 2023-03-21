<?=$id?>
<? foreach ($users as $value) {?>
    <h2><?=$value->name?></h2>
    <h2><?=$value->email?></h2>
    <h2><?=$value->password?></h2>
    <br />
    <br />
    <br />
<? }?>
