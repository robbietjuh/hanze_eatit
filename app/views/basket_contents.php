        <h1>U heeft <?=$this->data['amount'];?> items in uw winkelmandje</h1>
        <p><?=$this->data['message'];?></p>

        <?php foreach($this->data['basket'] as $item) { ?>
        <?=var_dump($item);?>
        <?php } ?>

        <br clear="all" />