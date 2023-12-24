<html>

<head>
    <meta charset="utf-8">
    <title>แม่สูตรคูณ</title>
</head>

<body>
    <h1>ตารางสูตรคูณตาม Input</h1>
    <form action="" method="post">
        <input type="number" name="number" placeholder="กรอกตัวเลขแม่สูตรคูณ" />
        <button type="submit">ยืนยัน</button>
    </form>
    <table>
        <tbody>
            <?php
                if(isset($_POST['number'])) {
                    $number = $_POST['number'];
                    if (!empty($number)) {
                         for($i = 1; $i < 25; $i++) {
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
    </style>
</body> 

</html>