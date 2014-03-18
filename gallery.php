<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <script src="js/jquery.min.js"></script>
    <link href="css/MetroJs2.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/site.css" rel="stylesheet">
    <link href="css/dg-font-awesome.min.css" rel="stylesheet">

    <script src="js/MetroJs.js"></script>
    <style type="text/css">
        body{
            /*background-image:url('images/1312281.jpg');*/
            background-image:url('images/background/bg7.jpg');
            background-repeat:no-repeat;
            /*background-image:url('images/1c8534b9eb50ea5c14b16872e7881001.jpg');*/
            margin-top:0px;
            margin-left:auto;
            margin-right:auto;
            width:95%;
            /*overflow-x: auto;*/
        }
        p{
            font-family: segoe ui, verdana, arial, sans-serif;
            font-size: x-small;
        }
    </style>
</head>
<body>
    <div>
        <div class="site-title" style="margin-top:10px; margin-bottom:30px;"><a href="/">Factory Gallary</a></div>

        <div class="tiles tile-group six-wide">
        <?php 
            $dirname = "images/";
            $images = glob($dirname."*.*");
            $con=mysqli_connect("mysql1.000webhost.com","a7310273_db","feay091088141","a7310273_db");
            if (file_exists(images)) {
                foreach($images as $image) {
                // echo '<div class="tile ol-transparent" style="margin:-px;">'.
                //         '<div class="image-container shadow">'.
                //             "<img id=test1 src=$image>".
                //             '<div class="overlay-fluid">.
                //                 text is here
                //             </div>
                //         </div>
                //       </div>';
                $result = mysqli_query($con,"SELECT * FROM Persons");
                echo '<div class="live-tile" data-mode="flip" data-delay="4000">'.
                            "<img class=full src=$image>".
                            // "<span class='tile-title'>";
                            // while($row = mysqli_fetch_array($result))
                            //   {
                            //   echo $row['FirstName'];
                            //   }
                            // echo"</span>".
                     '</div>';
                }
            }
            
         ?>
        </div>

                    

    </div>

</body>

</html>
