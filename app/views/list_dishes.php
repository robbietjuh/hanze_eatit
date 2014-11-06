        <h1>Welkom bij eatIT</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed urna iaculis, gravida turpis vitae,
            placerat nisl. Ut iaculis porttitor egestas. Proin tempus, ex id facilisis imperdiet, felis ipsum maximus
            mi, eget ultricies metus nulla vel turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
            sit amet blandit tellus. Aliquam cursus fringilla imperdiet. Sed in venenatis ante. Sed sit amet molestie
            augue, sollicitudin tempor justo. Nullam eleifend felis et turpis pharetra scelerisque. Morbi eu dolor
            lorem. Sed arcu quam, pharetra vel hendrerit quis, fermentum eu tortor. Praesent iaculis tellus mauris,
            vestibulum accumsan nibh laoreet ac.
        </p>
        <p>
            Aenean consectetur vehicula lacus, non luctus lorem consectetur at. Suspendisse potenti. Maecenas sed
            tristique ex, maximus consectetur est. Donec vel lacus arcu. Donec sed ornare nulla. Duis ut mauris tellus.
            Nulla facilisi. Proin lacus lorem, fringilla a faucibus at, consectetur vel dui. Pellentesque ultricies
            feugiat felis, eget iaculis nulla convallis sed. Nunc sollicitudin mollis ex ac gravida. Duis eu ex felis.
            Ut iaculis bibendum quam in vestibulum.
        </p>

        <h1 style="padding-top: 30px;">Onze gerechten</h1>

        <section class="dishes">
            <?php foreach($this->data['articles'] as $article) { ?>
            <article class="dish">
                <figure><a href="/dish/<?=$article['pk'];?>" style="background-image: url('/uploads/<?=$article['picture'];?>');"></a></figure>
                <div class="figcaption">
                    <a href="/dish/<?=$article['pk'];?>"><?=$article['name'];?></a>
                    <span>€ <?=$article['price'];?></span>
                </div>
            </article>
            <?php } ?>
        </section>

        <br clear="all" />