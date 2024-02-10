<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jquery Calculator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        table {
            width: 150px;
            height: 265px;
            overflow-y: scroll;
            display: block;
            margin-left: 125px;
            margin-top: 40px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .my_first_number::placeholder {
            color: red;
            font-weight: bold;
        }

        .my_second_number::placeholder::placeholder {
            font-weight: bold;
        }

        h1{
            text-align: center
        }

        div {
            margin-top: -400px;
        }
    </style>
</head>

<body>
    <div>
        <h1>ตารางตามสูตรคูณ</h1>
        <input type="number" id="my_first_number" placeholder="ตัวเลขแม่สูตรคูณ">
        <input type="number" id="my_second_number" placeholder="ลำดับเลขตัวคูณ">
        <button onclick="myFunction()">submit number</button>

        <table id="my_table">
            <thead>
                <tr>
                </tr>
            </thead>
            <tbody id="my_tbody">
            </tbody>
        </table>
    </div>
    <script>
        function myFunction() {
            let my_first_number = $('#my_first_number').val()
            let my_second_number = $('#my_second_number').val()
            let my_code_tr = ``
            console.log(my_first_number)
            console.log(my_second_number)
            if (my_first_number != "" && my_second_number == "") {
                for(let i = 1; i < 25; i++) {
                    my_code_tr += `<tr><td>${my_first_number}</td><td> x </td> <td>${i}</td><td> = </td><td>${my_first_number} * ${i}</td></tr>`;
                }
            }else if (my_first_number != "" && my_second_number != "") {
                for(let i = 1; i <= my_second_number; i++) {
                    my_code_tr += `<tr><td>${my_first_number}</td><td> x </td> <td>${i}</td><td> = </td><td>${my_first_number} * ${i}</td></tr>`;
                }
            }
            $('#my_tbody').html(my_code_tr)
        }
    </script>

</body>

</html>
