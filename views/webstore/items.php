<?=$id?>
<? foreach ($items as $item) {?>
    <h2><?=$item->name?></h2>
    <h2><?=$item->price?></h2>
  <img src="<?=$item->img?>" width="430px" height="300px"/>
    <br />
    <br />
    <br />
<? }?>
