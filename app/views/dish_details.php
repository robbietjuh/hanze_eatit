        <h1><?=$this->data['title'];?></h1>
        <div class="picture" style="background-image: url('/uploads/<?=$this->data['article']['picture'];?>');"></div>

        <p>
            <?=nl2br(htmlentities($this->data['article']['description']));?>
        </p>

        <p>
            <strong>Ingredienten:</strong>
            <ul>
                <?php foreach($this->data['article']['ingredients'] as $ingredient) { ?>
                    <li><?=$ingredient['name'];?></li>
                <?php } ?>
            </ul>
        </p>

        <p>Prijs: <?=$this->data['article']['price'];?></p>

        <div class="buttons">
            <a href="/basket/add/<?=$this->data['article']['pk'];?>" class="add">Toevoegen aan winkelmandje</a>
            <a href="/">Verder winkelen</a>
        </div>

        <br clear="all" />