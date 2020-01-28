<!doctype html>
<html>
    <head>
        <style>
            
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <script src="./js/bootstrap.min.js"></script>
    </head>
    <body>
     
        <div class = "container">
        <div class = "row">
        <div class = "col-md-3">
        <div class = "row">
        <a href="index.php">Home</a>
        </div>
        <div class = "row">
        <a href="index.php?page=index">Grade</a>
        </div>
        <!-- <div class = "row">
        <a href="index.php?page=index">Subject</a>
        </div> -->
        </div>
        <div class = "col-md-9">
                <?php 
                $page = $_GET['page'];
                if (!is_set($page))
                $page = "index";
                
                include ("grade/". $page . ".php");
                ?>
                
        </div>
        </div>
        </div>
    </body>
</html>