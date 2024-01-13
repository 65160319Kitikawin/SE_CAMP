html>

    <head>
        <meta charset="utf-8" />
        <style>
            table {
                width: 150px;
                height: 265px;
                overflow-y: scroll;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            div {
                margin-top: -400px;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>สูตรคูณแม่ <?php echo $myinput; ?></h1>
            <table>
                <?php
                    $myinput = $_POST['myinput'];
                    $order = $_POST['order'];
                    if (!empty($myinput) && empty($order)) {
                        for($i = 1; $i < 25; $i++) {
                            echo "<tr><td>{$myinput} x {$i} = ".($myinput * $i)."</td></tr>";
                        }
                    }else if (!empty($myinput) && !empty($order)) {
                        for($i = 1; $i <= $order; $i++) {
                            echo "<tr><td>{$myinput} x {$i} = ".($myinput * $i)."</td></tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </body>

</html>
