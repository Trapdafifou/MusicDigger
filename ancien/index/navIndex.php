<nav class="navIndex">
    <?php
    foreach($pages as $key => $theme):
        ?>
        <div class="<?=$key?>">
            <a href="./content.php?page=<?=$key?>">
                <p><?=$theme['h1']?></p>
            </a>
        </div>
        <?php
    endforeach;
    ?>
</nav>