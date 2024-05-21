<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
        background-color:red;
        text-align:center; 
    }
    .container .row {
        display:flex;
        flex-wrap:wrap;
        text-align: center;
        justify-content: center;
    }
    .foto {
        width: 130px;
        height: 70px;
        margin:20px;
        text-align: center;
        padding-top:50px; 
        background-image:url('ive/Rei.jpg');
        background-size:cover;
        border-radius:100%; 
        background-position:center center;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="foto">1</div>
            <div class="foto">2</div>
            <div class="foto">3</div>
        </div>
    </div>
</body>
</html>