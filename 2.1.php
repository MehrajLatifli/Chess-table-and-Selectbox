    <?php

    $carmodels = array("BMW", "Volvo", "Chevrolet", "Ford");

    $car = isset($_POST["car"]) ? $_POST["car"] : '';

    $c = "";

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            
            h2{
                color: deepskyblue;
            }
        </style>

    </head>

    <body>


        <form action="" method="POST">

            <div>

                <select name="car" id="car">

                    <?php
                    foreach ($carmodels as $value) {

                        $c = $value;

                        if (isset($_POST['car']) && $_POST['car'] == $c) {

                            echo "<option selected>$c</option>";
                        } else {
                            echo "<option >$c</option>";
                        }
                    }
                    ?>

                </select>

            </div>

            <br>

            <div>

                <input type="submit" value="Submit" />

            </div>


        </form>


        <h2>
            
            <?php
             if (isset($_POST['car'])) 
             {
              echo( $_POST['car']); 
             }
            ?>
        </h2>


    </body>

    </html>