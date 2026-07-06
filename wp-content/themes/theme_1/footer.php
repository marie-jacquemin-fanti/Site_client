<?php

$footer = dw_get_navigation_links('footer');//Un menu de navigation du nom de 'footer'


?>


<!-- Afficher la navigation du footer -->
<footer class="footer">
    <div class="footer__bottom">
        <p class="footer__copyright"><?= __('Mentions légales', 'hepl-trad'); ?></p>

        <p class="footer__copyright">
            <strong>©2026</strong>
            <?= __('Créé par', 'hepl-trad'); ?>
            <span itemprop="name">Marie Jacquemin-Fanti</span>.
            <?= __('Tous droits réservés.', 'hepl-trad'); ?>
        </p>
    </div>
</footer>
</body>
</html>