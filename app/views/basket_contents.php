        <h1>U heeft <?=count($this->data['basket']);?> items in uw winkelmandje</h1>
        <p><?=$this->data['message'];?></p>

        <form action="/basket/update" method="post">
            <section class="basket">
                <?php foreach($this->data['basket'] as $item) { ?>
                <article class="basket_item">
                    <span class='picture'><a href="/dish/<?=$item['dish']['pk'];?>" class="picture" style="background-image: url('/uploads/<?=$item['dish']['picture'];?>')"></a></span>
                    <span class='name'><a href="/dish/<?=$item['dish']['pk'];?>" class="name"><?=$item['dish']['name'];?></a></span>
                    <span class='amount'><input type='number' value='<?=$item['amount'];?>' name='amount_<?=$item['dish']['pk'];?>' /></span>
                    <span class='delete'><a href='/basket/remove/<?=$item['dish']['pk'];?>'>Verwijderen</a></span>
                </article>
                <?php } ?>
            </section>

            <br />

            <div class="buttons">
                <a href="/">Winkelmandje updaten</a>
                <a href="/" class="add">Bestellen</a>
            </div>
        </form>

        <br clear="all" />