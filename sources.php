<!DOCTYPE html>

<html lang="de">

<head> <!-- Unsichtbarer Teil der Seite (Head) -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,0">
<meta name="author" content="Elias Müller">
<meta property="og:title" content="1x1 des HTML's - Quellenverzeichnis" />
<meta property="og:url" content="https://www.xn--unsere-hrspielcloud-x6b.de/wiki/sources.php" />
<meta property="og:image" content="https://www.xn--unsere-hrspielcloud-x6b.de/wiki/favicon.png"/>
<title>1x1 des HTML's - Quellenverzeichnis</title>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<link rel="stylesheet" href="main_style_front.css">
</head>

<body>
<div class="navBar_name_sub">
        <a class="navBar_a" href="index.html">HTML-Wiki</a>
    </div>
        <div id="navigation_sub">   
            <div class="navBar_box1_sub">
                <a class="navBar_a" href="about-html.html">Über HTML</a>
            </div>
            <div class="navBar_box2_sub">
                <a class="navBar_a" href="grundlagen.html">Grundlagen</a>
            </div>
            <div class="navBar_box3_sub">
                <a class="navBar_a" href="data-entrys.html">Tag's</a>
            </div>
            <div class="navBar_box4_sub">
                <a class="navBar_a" href="beispiele.html">Anwendungsbeispiele</a>
            </div>
        </div> 
            <div id="maincontent">

                


            </div>

            <footer id="footer">
    <hr>
    <p class="footer_info_left_name">Programmiert von: Elias Müller & Finn-Ole Trähnert</p>
<a href="sources.php" class="footer_a" target="_blank">Quellenverzeichnis</a>
<a href="kontakt.php" class="footer_a" target="_blank">Kontakt</a>
<a class="footer_a" href="https://github.com/HTML-Wiki/HTML-Wiki" target="_blank">Quellcode auf GitHub</a>
<p class="footer_info_date">Datum: 
    <?php
    $datum = date("d.m.Y");
    $uhrzeit = date("H:i");
    echo $datum," - ",$uhrzeit," Uhr";
    ?>
    </p>
</footer>            
</body>
</html>