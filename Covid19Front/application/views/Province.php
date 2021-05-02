<?php
    $province = $_GET['province'];
    $data['actualites'] = $actualites;
?>

<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title> Statistique covid19 province <?php echo $province ?> 2021</title>
        <meta name="description" content="En 2021 a Madagascar, la province de <?php echo $province ?> compte plusieurs cas positifs, deces et gueris du covid19"/>
		<meta name="keywords" content="covid19,madagascar,province,actualites,<?php echo $province ?>,2021"/>
        <meta name="author" content="Tonny Andriambololona"/>
        <meta name="robots" content="index,follow"/>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
    </head>

    <body>
    <body>
        <br>
        
        <div id="main-content">

            <div id="tabListe"> 
                <div id="titreMain"> 
                    <h1>STATISTIQUES COVID19 PROVINCE <?php echo strtoupper($province) ?> </h1>
                </div>

                <div>
                    <h2>PROVINCE DE <?php echo strtoupper($province) ?> </h2>
                </div>

                <div id="descriptionMain">
                    <h3>
                        &emsp;&emsp; Le virus Corona aussi appelé <strong>Covid19</strong> est apparu a <strong>
                        Madagascar</strong> en mois de Mars 2020. Cela fait maintenant plus d'un an que le virus 
                        s'est installé et propagé partout ici a <strong>Madagascar</strong>. Depuis le debut de 
                        l'annee 2021, le nombre de cas <strong>positifs</strong> mais aussi de <strong>deces</strong> 
                        n'a cessé d'augmenter, mais egalement de patients <strong>gueris</strong>. Nous assistons 
                        en ce moment a ce qui semble etre une deuxieme vague de l'epidemie. Voici les chiffres: 
                    </h3>
                </div>
            </div>

            <?php $this->load->view('NavActualites',$data); ?>

        </div>
    </body>
    </body>

</html>

