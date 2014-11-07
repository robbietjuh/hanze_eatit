        <h1>U heeft <?=$this->data['amount'];?> items in uw winkelmandje</h1>

        <?php foreach($this->data['basket'] as $item) { ?>
        Item...
        <?php } ?>

        <br clear="all" />