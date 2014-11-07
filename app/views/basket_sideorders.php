        <h1>Kies hieronder eventuele sideorders voor uw bestelling</h1>
        <p><?=$this->data['message'];?></p>

        <form action="/sideorders/update" method="post">
            <section class="basket">
                <?php foreach($this->data['sideorders'] as $item) { ?>
                    <article class="basket_item">
                        <span class='picture'><a href="#" class="picture" style="background-image: url('/uploads/<?=$item['picture'];?>')"></a></span>
                            <span class='name'>
                                <a href="#" class="name"><?=$item['name'];?></a><br />
                                &euro; <?=$item['price'];?>
                            </span>
                        <span class='amount'><input type='number' value='0' name='amount_<?=$item['pk'];?>' /></span>
                    </article>
                <?php } ?>
            </section>

            <br />

            <div class="buttons">
                <a href="/basket">Terug naar mijn winkelmandje</a>
                <a href="#" onclick="document.forms[0].submit();" class="add">Bestellen</a>
            </div>
        </form>

        <br clear="all" />