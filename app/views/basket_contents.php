        <h1>U heeft <?=count($this->data['basket']);?> items in uw winkelmandje met een totaalbedrag van &euro; <?=number_format($this->data['grandtotal'], 2);?></h1>
        <p><?=$this->data['message'];?></p>

        <form action="/basket/update" method="post">
            <section class="basket">
                <?php foreach($this->data['basket'] as $item) { ?>
                <article class="basket_item">
                    <span class='picture'><a href="/dish/<?=$item['dish']['pk'];?>" class="picture" style="background-image: url('/uploads/<?=$item['dish']['picture'];?>')"></a></span>
                    <span class='name'>
                        <a href="/dish/<?=$item['dish']['pk'];?>" class="name"><?=$item['dish']['name'];?></a><br />
                        &euro; <?=$item['dish']['price'];?>
                    </span>
                    <span class='amount'><input type='number' value='<?=$item['amount'];?>' name='amount_<?=$item['dish']['pk'];?>' /></span>
                    <span class='delete'><a href='/basket/remove/<?=$item['dish']['pk'];?>'>Verwijderen</a></span>
                </article>
                <?php } ?>
            </section>

            <?php if(count($this->data['basket']) > 0) { ?>
            <br />

            <div class="buttons">
                <a href="#" onclick="document.forms[0].submit();">Winkelmandje updaten</a>
                <a href="/" class="add">Bestellen</a>
            </div>
            <?php } ?>
        </form>

        <br clear="all" />