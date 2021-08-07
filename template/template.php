<?php
$location = ucfirst(basename($_SERVER["REQUEST_URI"]));
$head = "
    <!DOCTYPE html>
    <html lang=\"en\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"description\" content=\"PHP Assignment 2 - Templates - $location\">
            <meta name=\"keywords\" content=\"Templates, PHP, $location \">
            <meta name=\"author\" content=\"D.C\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title> Templates - $location </title>
            <link href=\"../css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
        </head>
        <body>
            <header>
                <h1> Templates: $location </h1>
            </header>
            <nav>
                <ul>
                    <li><a href=\"../home/\">HOME</a></li>
                    <li><a href=\"../contact/\">CONTACT</a></li>
                    <li><a href=\"../gallery/\">GALLERY</a></li>
                </ul>
            </nav>
            <main>";          
$foot = "
            </main>
            <footer>
                <ul>
                    <li><a href=\"../home/\">HOME</a></li>
                    <li><a href=\"../contact/\">CONTACT</a></li>
                    <li><a href=\"../gallery/\">GALLERY</a></li>
                    <li><img width=\"32\" height=\"32\" src=\"../images/template.png\" alt=\"Page Template Icon\" /></li>
                </ul>
            </footer>
        </body>
    </html>";
?>