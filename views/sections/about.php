<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between">
            <div class="col-sm-8 col-xl-6 position-static">
                <figure style="background-image: url(<?= $about['image']; ?>);" class="about-image">
                    <div class="about-name">
                        <?= $about['name']; ?>
                    </div>
                </figure>
            </div>
            <div class="col-sm-8 col-xl-6 col-xxl-5">
                <div class="about-item">
                    <h2 class="section-title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="about-item__description">
                        <?= $about['description']; ?>
                    </div>
                    <div class="about-item__subtitle">
                        <?= $about['subtitle']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>