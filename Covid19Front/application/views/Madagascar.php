<?php 
    //var_dump($actualites);
    $data['actualites'] = $actualites;
?>

<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title>L'epidemie Covid19 a Madagascar en 2021</title>
        <meta name="description" content="L'epidemie Covid19 est aussi d'actualite a Madagascar, plusieurs deces,cas positifs et gueris chaque jour"/>
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
                    <h1>COVID19 A MADAGASCAR</h1>
                </div>

                <div>
                    <h2><strong>Covid19</strong> une <strong>epidemie</strong> mondiale, mais qu'est ce que c'est ?</h2>
                </div>

                <div id="descriptionMain">
                    <h3>
                        &emsp;&emsp; Le virus Corona aussi appelé <strong>Covid19</strong> est un virus apparu 
                        pour la premiere en Decembre 2019 dans la ville de Wuhan en Chine. Son reel origine 
                        demeure toujous inconnu, et les traitements sont encore aujourd'hui incertains en </strong>2021</strong>.
                    <h3>
                </div>

                <div>
                    <h2>Situation de <strong>Madagascar</strong> actuel face au <strong>Covid19</strong></h2>
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
                            <th><a class="tab_caractere">PROVINCE</a></th>
                            <th><a class="tab_caractere">POSITIFS</a></th>
                            <th><a class="tab_caractere">GUERIS</a></th>
                            <th><a class="tab_caractere">DECES</a></th>
                        </tr>
                    <?php 
                        for($i=0;$i<sizeof($evolutionProvinces);$i++) { 
                    ?>
                        <tr>
                            <td > 
                                <h4> <a class="ph3" href="covid19-province-de-madagascar-<?php echo $evolutionProvinces[$i]['nom_province'] ?>-2021.html"> <?php echo ucwords($evolutionProvinces[$i]['nom_province']) ?></a> </h4> 
                            </th>
                            <td> <a class="tab_caractere"> <?php echo $evolutionProvinces[$i]['positifs'] ?> </a> </th>
                            <td> <a class="tab_caractere"> <?php echo $evolutionProvinces[$i]['gueris'] ?> </a> </th>
                            <td class="td-last"> <a class="tab_caractere"> <?php echo $evolutionProvinces[$i]['deces'] ?> </a> </th>
                        </tr>
                    <?php 
                        }
                    ?>
                        <tr>
                            <th></th>
                            <th>TOTAL</th>
                            <th>TOTAL</th>
                            <th>TOTAL</th> 
                        </tr>
                    </table>
                </div>
            </div>

            <?php $this->load->view('NavActualites',$data); ?>

        </div>
    </body>

</html>
