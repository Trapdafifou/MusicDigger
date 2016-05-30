<?php

 
/* "database file" */
include('array_pages.php'); 


/** Pages and currentPage + index redirection if page not caught */
if(isset($_GET['page']) && isset($pages[$_GET['page']])){
    $cPage = $_GET['page'];
} else{
    header('location : index.php');
}


/** head from the html, moreover navigation bar */
include('header.php');
?>


<!-- the last playlist we have -->
<section class="section1">
    
        <h1 class="titreDePage">
          LAST PLAYLIST
        </h1>


<div class="sectionContainer"></div>
<!--  all the infos about the channel in this container of the section  -->
<div class="containerChannel">

        <p class="description"><?= $pages[$cPage]['descrTop'] ?></p>
        
        <img class="imgLabel" src="<?= $pages[$cPage]['imgTop'] ?>" alt="Image meilleure playlist <?= $key ?>" title="<?= key ?>">
        
        <div class='reseau'>
            <a href="<?= $pages[$cPage]['lien'] ?>"><img src="images/soundcloud.png" class="scMarg"></a>
        </div>
</div>


<!--  embed player of the section  -->
<div class="playerTop">
        <iframe width="100%" height="90%" scrolling="no" frameborder="no" src="<?= $pages[$cPage]['embedTop'] ?>"></iframe>
</div>
</section>


<!--  more playlists? click here  -->
<section class="currentPlaylist">
    
    <p class="moreplaylist"> SELECT YOUR PLAYLIST</p>
    <div  class="player-content">
        <!--  -->
        <!--  embed1  -->
        <div class="player1">
            <iframe   class="laplay"  width= "400px" height= "400px" scrolling="yes" frameborder="no" src="<?= $pages[$cPage]['embed'] ?>"></iframe>
            <p class="playerSub"><?= $pages[$cPage]['descrembed1'] ?></p>
        </div>
        
        <!--  embed2  -->
        <div class="player2">
            <iframe   class="laplay"  width= "400px" height= "400px" scrolling="yes" frameborder="no" src="<?= $pages[$cPage]['embed2'] ?>"></iframe>
            <p class="playerSub"><?= $pages[$cPage]['descrembed2'] ?></p>
        </div>
        
        <!--  embed3  -->
        <div class="player3">
            <iframe   class="laplay"  width= "400px" height= "400px" scrolling="yes" frameborder="no" src="<?= $pages[$cPage]['embed3'] ?>"></iframe>
            <p class="playerSub"><?= $pages[$cPage]['descrembed3'] ?></p>
        </div>
    </div>

    
</section>
<!--<button class="nuit">Party</button>-->


<!--  more playlists button  -->
<div class="plusDePlaylists">

<div class="slidebar"><p class="texteplus">FOR MORE PLAYLISTS CLICK HERE</p></div>
<div class="hover"></div>
</div>


<!--  script animation à mettre dans footer  -->
<script src="jquery.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
     $(".currentPlaylist").hide();
});


$(".slidebar").on("click",function(){
    $(".currentPlaylist").slideToggle("slow");
    $('body').animate({scrollTop: $('.currentPlaylist').offset().top}, 500);
    $('.slidebar').css('color','white');
    
    if($(".slidebar").text() == "NEED LESS ?") {
        $(".slidebar").text("NEED MORE ?");
        
        $(".slidebar").toggleClass('hoverW');
        console.log("How !")
    }
    else{
        $(".slidebar").text("NEED LESS ?");
        $(".slidebar").toggleClass('hoverB');
        console.log("hey !")
    }
});

</script>
<!--<script>
    $(document).ready(function(){
        $(".nuit").click(function(){
            $('.section1').css('background-color','black');
            $('titreDePage').css('background-color','black');
        });
        
    });
    $(".nuit").click(function(){
             $('.section1').css('background-color','white');
            $('titreDePage').css('background-color','white');
        });
</script>-->