<?php
   $data['actualites'] = $actualites;
?>

<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title>Actualites Covid19 en 2021</title>
        <meta name="description" content="Toutes les actualites sur l'epidemie covid19 en 2021 a Madagascar et autres pays du monde"/>
		<meta name="keywords" content="covid19,actualites,2021,monde,madagascar,pays"/>
        <meta name="author" content="Tonny Andriambololona"/>
        <meta name="robots" content="index,follow"/>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
    </head>

    <body>
        <br>
        
        <div id="main-content">

            <div id="tabListe"> 
                <div id="titreMain"> 
                    <h1>ACTUALITES SUR LE COVID19</h1>
                </div>

                <div>
                    <h2><?php echo strtoupper($details_actualite['titre_actu']) ?></h2>
                </div>

                <h2 style="color:gray">                      
                    <?php echo $details_actualite['preview_actu'] ?>
                </h2>

                <div id="descriptionMain" style="display:flex;flex-wrap:wrap;">
                    <h3>
                        &emsp;&emsp; <?php echo $details_actualite['paragraphe'] ?>
                    </h3>
                </div>
            </div>

            <?php $this->load->view('NavActualites',$actualites); ?>

        </div>
    </body>

</html>
