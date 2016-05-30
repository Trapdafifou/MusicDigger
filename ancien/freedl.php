<?php
/**
 * Created by PhpStorm.
 * User: mak
 * Date: 17/12/2015
 * Time: 13:27
 */
include('header.php')
?>

<section>
    <h1 class="titreDePageDl">
        YOUR FREE PLAYLIST
    </h1>

    <div class="playerDl">
        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/161481046&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    </div>
    
    <form class="formDl">
        <label for="nameInput">Ton nom</label>
        <input type="text" name="phpdb1" class="nameInput">
        <label for="">Ton email</label>
        <input type="email" name="phpdb2" class="mailInput">
        <input type="submit" value="SEND" class="submitDl">
    </form>
</section>

<?php

/** footer à mettre ici **/

?>