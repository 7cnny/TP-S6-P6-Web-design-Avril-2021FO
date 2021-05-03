<?php 
    //var_dump($actualites);
?>

<!DOCTYPE html>
<html>
    <div id="actualites">
        <div class="hActus"><h5>ACTUALITES</h5></div>
        <?php for($i=0 ; $i<sizeof($actualites) ;$i++){ ?>
            <a href="covid19-actualite-2021-<?php echo $actualites[$i]['id_actu'] ?>.html" style="text-decoration:none;color:black">
            <div id="SingleActu">           
                <div class="nomOffre"> <h6> <?php echo $actualites[$i]['titre_actu'] ?> </h6> </div>
                <div class="valeurOffre"> <?php echo $actualites[$i]['preview_actu'] ?> </div>
            </div>
        </a>
        <?php } ?>
    </div>
</html>
