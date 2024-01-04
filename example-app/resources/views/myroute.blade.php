<html>

    <head>
        <meta charset="utf-8" />
        <style>
            table {
                width: 150px;
                height: 265px;
                overflow-y: scroll;
                display: block;
            }
        </style>
    </head>

    <body>
        <h1>สูตรคูณแม่ .$myinput</h1>
        <table>
            <?php  for($i = 1; $i < 25; $i++) {
                echo "<tr><td>{$myinput} x {$i} = ".($myinput * $i)."</td></tr>";
            } ?>
        </table>
    </body>

</html>
