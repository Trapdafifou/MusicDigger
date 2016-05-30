<nav class="nav">

        <?php
       foreach($pages as $key => $theme):
            $active = '';
            if($cPage == $key):
                $active=" active";
            endif;
            ?> 
            <div class="<?=$key.$active?>" id="pageTop">
                   <a href="<?= $theme['href'] ?>#pageTop">
                    <p><?=$theme['h1']?></p>
                </a>
            </div>
            <?php
        endforeach;
        ?>

</nav>

