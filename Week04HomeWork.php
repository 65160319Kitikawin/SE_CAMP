<html>

<head>
    <meta charset="utf-8">
    <title>แม่สูตรคูณ</title>
</head>

<body>
    <h1>ตารางสูตรคูณตาม Input</h1>
    <form action="" method="post">
        <input type="number" name="number" class="number1" placeholder="ตัวเลขแม่สูตรคูณ" />
        <br>
        <input type="number" name="order" class="number2" placeholder="ลำดับเลขตัวคูณ" />
        <br>
        <button type="submit">ยืนยัน</button>
    </form>
    <table>
        <tbody>
            <?php
                if(isset($_POST['number'])) {
                    $number = $_POST['number'];
                    $order = $_POST['order'];
                    if (!empty($number) && empty($order)) {
                        for($i = 1; $i < 25; $i++) {
                            echo "<tr><td>{$number} x {$i} = ".($number * $i)."</td></tr>";
                        }
                    }else if (!empty($number) && !empty($order)) {
                        for($i = 1; $i <= $order; $i++) {
                            echo "<tr><td>{$number} x {$i} = ".($number * $i)."</td></tr>";
                        }
                    }
                } 
            ?>
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
            overflow-y: scroll;
            display: block;
        }

        .number1::placeholder {
            color: red;
            font-weight: bold;
        }

        .number2::placeholder {
            font-weight: bold;
        }

        .number2 {
            margin-top: 5px;
        }
        
        button {
            margin-left: 61.5px;
            margin-top: 5px;
        }
    </style>
</body> 

</html>