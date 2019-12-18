<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    p,h1 {
        text-align: center;
        font-size: 60px;
        margin-top: 100px;
    }
    body {
        background-color: gray;
    }
    </style>
</head>

<body>
    <p id="demo"></p>
    <script>
   
    var countDownDate = <?php echo strtotime('Jan 1, 2020 00:00:00') ?> * 1000;
    var now = <?php echo time() ?> * 1000;

    var x = setInterval(function() {




        now = now + 1000;


        var distance = countDownDate - now;


        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";


        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>

    <H1>NEW YEAR COUNTDOWN</H1>
</body>

</html>
