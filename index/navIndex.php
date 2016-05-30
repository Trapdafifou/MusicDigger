<nav class="navIndex">
    <?php
    foreach($pages as $key => $theme):
        ?>
        <a href="./content.php?page=<?= $key ?>">
            <div class="<?= $key ?>">
                <p><?= $theme['h1'] ?></p>
            </div>
        </a>
        <?php
    endforeach;
    ?>
</nav>