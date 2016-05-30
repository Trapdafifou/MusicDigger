<nav class="navIndex">
    <?php
    foreach($pages as $key => $theme):
        ?>
        <div class="<?= $key ?>">
             <a href="<?= $theme['href'] ?>#pageTop">
                <p><?= $theme['h1'] ?></p>
            </a>
        </div>
        <?php
    endforeach;
    ?>
</nav>
