<?php
$dir = "../";
$host = $_SERVER['HTTP_HOST'];
$hostRu = $_SERVER["REQUEST_URI"];
$location = ucfirst(basename($hostRu));
$hostSn = basename($_SERVER["SCRIPT_NAME"]);
if ( $host . $hostRu . $hostSn == $host . "/t/index.php" ) {
    $location = "Home";
    $dir = "./";
}
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
            <link href=\"{$dir}css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
        </head>
        <body>
            <header>
                <h1> Secure Website : $location </h1>
            </header>
            <nav>
                <ul>
                    <li><a href=\"http://$host/t\">HOME</a></li>
                    <li><a href=\"http://$host/t/contact\">CONTACT</a></li>
                </ul>
            </nav>
            <main>";          
$foot = "
            </main>
            <footer>
                <ul>
                <li><a href=\"http://$host/t/\">HOME</a></li>
                <li><a href=\"http://$host/t/contact\">CONTACT</a></li>
                </ul>
            </footer>
        </body>
    </html>";
?>