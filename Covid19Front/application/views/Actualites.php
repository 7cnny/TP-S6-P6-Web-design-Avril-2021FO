<?php
   $data['actualites'] = $actualites;
?>

<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title>Actualités de la pandémie Covid-19 en 2021</title>
        <meta name="description" content="COVITU-19 | Toutes les actualites sur l'epidemie covid-19 en 2021 a Madagascar et dans le monde"/>
		<meta name="keywords" content="covid-19,covid,actualites,2021,monde,madagascar,pays"/>
        <meta name="author" content="Tonny Andriambololona"/>
        <meta name="robots" content="index,follow"/>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
    </head>

    <body>
        <br>
        
        <div id="main-content">

            <div id="tabListe"> 
                <div id="titreMain"> 
                    <h1><a class="covid">COVID-19<a> <br> ACTUALITES EN 2021</h1>
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

                <div id="date-auteur">                      
                    <b><u>Date:</u></b> <i class="end"><?php echo $details_actualite['date_actu'] ?></i>
                    <br><br>
                    <b><u>Auteur:</u></b> <i class="end"><?php echo $details_actualite['auteur'] ?></i>
                </div>
            </div>

            <?php $this->load->view('NavActualites',$actualites); ?>

        </div>
    </body>

</html>
