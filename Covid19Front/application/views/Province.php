<?php
    $province = $_GET['province'];
    $dataPoints = array(
        array("y" => 122, "label" => "Janvier"),
        array("y" => 96, "label" => "Fevrier"),
        array("y" => 169, "label" => "Mars"),
        array("y" => 342, "label" => "Avril"),
        array("y" => 301, "label" => "Mai"),
    );
?>

<!DOCTYPE html>
<html>
    
    <head>
		<meta charset="utf-8">
		<title> Statistique covid19 province <?php echo $province ?> 2021</title>
        <meta name="description" content="En 2021 a Madagascar, la province de <?php echo $province ?> compte plusieurs cas positifs, deces et gueris du covid19"/>
		<meta name="keywords" content="covid-19,covid,madagascar,province,actualites,<?php echo $province ?>,2021"/>
        <meta name="author" content="Tonny Andriambololona"/>
        <meta name="robots" content="index,follow"/>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>assets/css/design.css">
        <script>
            window.onload = function () {
            
            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Evolution des nouveaux cas"
                },
                axisY: {
                    title: "Nombre de nouveaux cas"
                },
                data: [{
                    type: "line",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
            }
        </script>
    </head>
    <body>
        <br>
        
        <div id="main-content">

            <div id="tabListe"> 
                <div id="titreMain"> 
                    <h1><a class="covid">COVID-19<a> <br> PROVINCE <?php echo strtoupper($province) ?> </h1>
                </div>

                <div>
                    <h2>SITUATION DE LA PROVINCE DE <?php echo strtoupper($province) ?> </h2>
                </div>

                <div id="descriptionMain">
                    <h3>
                        &emsp;&emsp; Le virus Corona aussi appelé <strong>Covid-19</strong> est apparu a <strong>
                        Madagascar</strong> en mois de Mars 2020. Cela fait maintenant plus d'un an que le virus 
                        s'est installé et propagé partout ici a <strong>Madagascar</strong>. Depuis le debut de 
                        l'annee 2021, le nombre de cas <strong>positifs</strong> mais aussi de <strong>deces</strong> 
                        n'a cessé d'augmenter, mais egalement de patients <strong>gueris</strong>. Nous assistons 
                        en ce moment a ce qui semble etre une deuxieme vague de l'epidemie. Voici les chiffres pour la
			            province de <?php echo strtoupper($province) ?>: 
                    </h3>
                </div>
                
                <div id="chartContainer" style="height: 370px; width: 80%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>   

            </div>

            <?php $this->load->view('NavActualites'); ?>

        </div>

        
    </body>

</html>

