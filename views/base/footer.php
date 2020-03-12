</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto mb-3 mb-md-0">
                <a href="/" class="logo">
                    <img src="<?= $logo; ?>" alt="logo">
                </a>
            </div>
            <div class="col-md-auto px-2 px-sm-3">
                <ul class="contacts-list">
                    <li>
                        <a href="tel:<?= phone_link($phone1); ?>">
                            <?= $phone1; ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?= phone_link($phone2); ?>">
                            <?= $phone2; ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?= phone_link($phone3); ?>">
                            <?= $phone3; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto mb-2 mb-md-0">
                    <div class="footer-copyright">
                        <?= date('Y'); ?> Все права защищены.
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="footer-copyright">
                        Дизайн и разработка сайта <a href="https://impressionbureau.pro/" target="_blank">Impression Bureau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>