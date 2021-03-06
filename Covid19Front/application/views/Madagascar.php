<?php 
    //var_dump($actualites);
    $data['actualites'] = $actualites;
?>

<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title>La pandemie Covid-19 a Madagascar en 2021</title>
        <meta name="description" content="COVITU-19 | Toutes les actualités sur le covid-19 a Madagascar en 2021"/>
		<meta name="keywords" content="covid19,madagascar,pays,actualites,epidemie,2021"/>
        <meta name="author" content="Tonny Andriambololona"/>
        <meta name="robots" content="index,follow"/>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
    </head>

    <body>
        <br>
        
        <div id="main-content">

            <div id="tabListe"> 
                <div id="titreMain"> 
                    <h1><a class="covid">COVID-19<a> <br> A MADAGASCAR EN 2021</h1>
                </div>

                <div>
                    <h2><strong>Covid-19</strong> une <strong>pandemie</strong> mondiale, mais qu'est ce que c'est ?</h2>
                </div>

                <div id="descriptionMain">
                    <h3>
                        &emsp;&emsp; Le virus Corona aussi appelé <strong>Covid-19</strong> est un virus apparu 
                        pour la premiere en Decembre 2019 dans la ville de Wuhan en Chine. Son reel origine 
                        demeure toujous inconnu, et les traitements sont encore aujourd'hui incertains en </strong>2021</strong>.
                    <h3>
                </div>

                <div>
                    <h2>Situation actuel de <strong>Madagascar</strong> face au <strong>Covid-19</strong></h2>
                </div>

                <div id="descriptionMain">
                    <h3>
                        &emsp;&emsp; Le virus Corona est apparu a <strong>Madagascar</strong> en mois de Mars 2020. 
                        Cela fait maintenant plus d'un an que le virus 
                        s'est installé et propagé partout ici a <strong>Madagascar</strong>. Depuis le debut de 
                        l'annee <strong>2021</strong>, le nombre de cas <strong>positifs</strong> mais aussi de <strong>deces</strong> 
                        n'a cessé d'augmenter, mais egalement de patients <strong>gueris</strong>. Nous assistons 
                        en <strong>2021</strong> a ce qui semble etre une deuxieme vague de l'<strong>epidemie</strong>. Voici les chiffres: 
                    </h3>
                </div>
                <div>
                    <table>
                        <tr>
                            <th class="icon-th-map" style="width:50px;height:50px;"> </th>
                            <th class="icon-th-posi" style="width:50px;height:50px;"> </th>
                            <th class="icon-th-soin" style="width:50px;height:50px;"> </th>
                            <th class="icon-th-dead" style="width:50px;height:50px;"> </th>
                        </tr>
                    <?php 
                        for($i=0;$i<sizeof($evolutionProvinces);$i++) { 
                    ?>
                        <tr>
                            <td> 
                                <h4> <a class="ph3" href="covid19-province-de-madagascar-<?php echo $evolutionProvinces[$i]['nom_province'] ?>-2021.html"> <?php echo ucwords($evolutionProvinces[$i]['nom_province']) ?> </a> </h4> 
                            </td>
                            <td> <a class="tab_caractere"> <?php echo number_format($evolutionProvinces[$i]['positifs']) ?> </a> </th>
                            <td> <a class="tab_caractere"> <?php echo number_format($evolutionProvinces[$i]['gueris']) ?> </a> </th>
                            <td class="td-last"> <a class="tab_caractere"> <?php echo number_format($evolutionProvinces[$i]['deces']) ?> </a> </th>
                        </tr>
                    <?php 
                        }
                    ?>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
			    <th></th> 
                        </tr>
                    </table>
                </div>
            </div>

            <?php $this->load->view('NavActualites',$data); ?>

        </div>
    </body>

</html>
