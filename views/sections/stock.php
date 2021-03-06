<!-- Stock -->
<section id="stock">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7 col-xxl-4">
                <div class="stock-item">
                    <h2 class="section-title">
                        <?= $stock['title']; ?>
                    </h2>
                    <img class="stock-image" src="<?= $stock['image']; ?>" alt="stock image">
                </div>
            </div>
            <?php foreach ($stock['items'] as $item) : ?>
                <div class="col-sm-8 col-md-6 col-xxl-4">
                    <div class="stock-card">
                        <div class="stock-card-prev">
                            <figure style="background-image: url(<?= $item['image']; ?>);"
                                    class="stock-card__image"></figure>
                        </div>
                        <div class="stock-card-body">
                            <h3 class="stock-card__title">
                                <?= $item['title']; ?>
                            </h3>
                            <div class="stock-card__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>