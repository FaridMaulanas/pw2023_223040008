<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1C</title>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            line-height: 0;
        }

        .container {
            display: flex;
        }

        .kotak {
            width: 100px;
            height: 100px;
            background-color: salmon;
            position: relative;
            border: 1px solid #000000;
        }

        .toktok {
            position: absolute;
            font-family: arial;
            font-weight: 500;
            font-size: 30px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kotak">
            <div class="toktok">1</div>
        </div>
    </div>

    <div class="container">
        <div class="kotak">
            <div class="toktok">2</div>
        </div>
        <div class="kotak">
            <div class="toktok">2</div>
        </div>
    </div>
    <div class="container">
        <div class="kotak">
            <div class="toktok">3</div>
        </div>
        <div class="kotak">
            <div class="toktok">3</div>
        </div>
        <div class="kotak">
            <div class="toktok">3</div>
        </div>
    </div>
</body>

</html>