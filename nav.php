<nav class="nav">

        <?php
       foreach($pages as $key => $theme):
            $active = '';
            if($cPage == $key):
                $active=" active";
            endif;
            ?>
           <a href="<?= $theme['href'] ?>#pageTop">
               <div class="<?= $key . $active ?>" id="pageTop">
                   <p><?= $theme['h1'] ?></p>
               </div>
           </a>
            <?php
        endforeach;
        ?>

</nav>

