<div>
    <h1>{{$val_c}}</h1>
    <form method="post" action="/my-route">
        @csrf
        <input type="number" name="myinput" class="number1" placeholder="ตัวเลขแม่สูตรคูณ" />
        <br>
        <input type="number" name="order" class="number2" placeholder="ลำดับเลขตัวคูณ" />
        <br>
        <button type="submit">ยืนยัน</button>
    </form>
</div>
<style>
    div {
        margin: auto;
        width: 50%;
        text-align: center;
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
        margin-top: 5px;
    }

</style>
