<?php 
    //var_dump($actualites);
    $data['actualites'] = $actualites;
?>
<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title>La pandemie Covid-19 dans le monde en 2021</title>
        <meta name="description" content="COVITU-19 | Toutes les actualités sur le covid-19 dans le monde en 2021"/>
		<meta name="keywords" content="covid=19,covid,monde,pays,actualites,pandemie,2021,Madagascar"/>
        <meta name="author" content="Tonny Andriambololona"/>
        <meta name="robots" content="index,follow"/>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
    </head>

    <body>
        <br>
        
        <div id="main-content">

            <div id="tabListe"> 
                <div id="titreMain"> 
                    <h1><a class="covid">COVID-19<a> <br> DANS LE MONDE EN 2021</h1>
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
                    <h2>Situation du actuel <strong>monde</strong> face au <strong>Covid-19</strong></h2>
                </div>

                <div id="descriptionMain">
                    <h3>
                        &emsp;&emsp; En 2020 le virus a commencé a se propager dans tout les <strong>pays</strong> du <strong>monde</strong>.
                        Vers la fin de l'année 2020 elle semblait diminuer et les nombres de patients <strong>gueris</strong>
                        augmentaient mais en debut de cette nouvelle année </strong>2021</strong>, les nouveaux cas <strong>positifs</strong> 
                        de <strong>Covid-19</strong> et de <strong>deces</strong> ont augmenté en fleche partout dans le <strong>
                        monde</strong> annoncant ce qui semble etre une deuxieme vague de l'<strong>epidemie</strong>, bien plus 
                        inquietante que la premiere. Voici les chiffres:
                    <h3>
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
                            for($i=0;$i<sizeof($evolutionPays);$i++) { 
                        ?>

                        <tr>
                            <td scope="col" > 
                                <h4> <a class="ph3"> <?php echo ucwords($evolutionPays[$i]['nom_pays']) ?> </a> </h4> 
                            </th>
                            <td> <a class="tab_caractere"> <?php echo number_format($evolutionPays[$i]['positifs']) ?> </a> </th>
                            <td> <a class="tab_caractere"> <?php echo number_format($evolutionPays[$i]['gueris']) ?> </a> </th>
                            <td class="td-last"> <a class="tab_caractere"> <?php echo number_format($evolutionPays[$i]['deces']) ?> </a> </th>
                        </tr>
                    <?php 
                        }
                    ?>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th> 
                        </tr>
                    </table>
                </div>
            </div>

            <?php $this->load->view('NavActualites',$data); ?>
            
        </div>
    </body>

</html>
