<!DOCTYPE html>
<html>

<head>

    <style type="text/css">
        .rectangle {
            width: 50px;
            height: 50px;
        }

        body {
            background-color: deepskyblue;
        }

        .white {
            background-color: white;
        }

        .black {
            background-color: black;
        }

        table {
            border: 5px solid black;
            border-radius: 5px;
            margin: auto;
            padding: 0px;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            color: white;
            background-color: gray;
        }
    </style>

    <title>chess table</title>

</head>

<body>
    <table>
        <?php
        echo "<tr>";
        $arr = array('', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', '');
        for ($i = 0; $i < 10; $i++) {
            echo "<td >$arr[$i]</td>";
        }
        echo "</tr>";

        for ($row = 8; $row >= 1; $row--) {

            echo "<tr>";
            echo "<td>$row</td>";

            for ($col = 8; $col >= 1; $col--) {

                if ($row % 2 == 0) {

                    $fill_1 = "";

                    $fill_1 =  ($col % 2 == 0) ? "<td class='rectangle white'></td>" : "<td class='rectangle black'></td>";

                    echo ($fill_1);
                } else {

                    $fill_2 = "";

                    $fill_2 =  ($col % 2 != 0) ? "<td class='rectangle white'></td>" : "<td class='rectangle black'></td>";

                    echo ($fill_2);
                }
            }
            echo "<td >$row</td>";

            echo "</tr>";
        }

        echo "<tr>";

        for ($i = 0; $i < 10; $i++) {

            echo "<td>$arr[$i]</td>";
        }

        echo "</tr>";

        ?>
    </table>
</body>

</html>