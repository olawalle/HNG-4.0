<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Olawalle's</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" >
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <style type="text/css">
            *{
             font-family: 'Work Sans', sans-serif;
            }
            body{
               
                 overflow: hidden;
                 padding: 0;
                 margin: 0
             }
            .overlay{
                background-color: #000;
                opacity: 0.9;
                width: 100%;
                height: 100%;
                position: absolute;
                z-index: 100
            }
            .time{
                position: absolute;
                top: 25%;
                width: 100%;
                z-index: 300;
            }
            .time h2{
                color: #A39E9E;
                text-align: center;
                font-size: 50px;
                font-weight: 100
            }
            img{
                position: absolute;
                top: 0;
                z-index: 1;
                margin-top: -200px;
                width: 100%;
                height: 150%;
            }
            .footer{
                position: absolute;
                top: 85%;
                z-index: 300;
                right: 5%;
            }
            .footer h4{
                font-family: 'Work Sans', sans-serif;
                color: #A39E9E;
                font-size: 20px
            }
        </style>
   </head>
    <body >
       <div class="col-md-12">
        <?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

       </div>
    </body>
</html>