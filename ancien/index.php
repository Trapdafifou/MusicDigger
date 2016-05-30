<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Digger</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/styleIndex.css">
    <script src="jquery.js"> </script>
</head>
<body>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71558102-1', 'auto');
  ga('send', 'pageview');

</script>
    <!-- ces div (leurs classes entre autres) ont-elles une utilité? si non, à retirer -->
<div class="description">
    
    <div class="homeArrow">
        <img class="fleche" src="images/newfleche.png">
    </div>
    
    <img id="homepage" src="images/homepage.png" alt="all your favorite playlists ine one place">
</div>


<?php

require_once( 'array_pages.php' );
include( 'index/headerIndex.php' );
?>





<!-- animation script -->
<script>
    $(document).ready(function(){
        $('.fleche').click(function() {

            $('.description').slideUp('slow');
            $('.fleche').fadeOut(0.2);
        });
    });
            $(document).ready(function(){
            $('.description').scroll(function(){
                console.log("coucou ! ")
            });
            });
</script>