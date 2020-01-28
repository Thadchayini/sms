<!Doctype html>
<html>
    <head>
        <title>

        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class = "container">
            <div class = "row" style = "background-color:green;" style = "height:500px;">
                <h1>header</h1>
            </div>
            <div class = "row">
                <div class = "col-md-2" style = "background-color:red;">
                    <h1>side bar</h1>
                    <ul>
                        <li><a href = "#">Home</a></li>
                        <li><a href = "#">Home</a></li>
                        <li><a href = "#">Home</a></li>                        
                    </ul>
                </div>
                <div class = "col-md-10" style = "background-color:blue; height:520px;">
                    <h1>content</h1>
                    
                    <?php
                    include 'home.php';
                    require 'about.php';
                    include_once 'home.php';
                    require_once 'about.php';
                    ?>
                    

                </div>
            </div>
            <div class = "row" style = "background-color:green;">
                <h1>footer</h1>
            </div>
        </div>
    </body>
    </html>