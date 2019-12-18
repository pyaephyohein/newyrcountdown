<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Syncopate);
    /* p {
        display: inline-block;
        font-size: 80px;
        line-height: 0.9;
        padding: 10px;
        font-family: 'Syncopate', sans-serif;
        text-transform: uppercase;
        background-color: white;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
    } */
    p,h1 {
        display: inline-block;
        font-size: 80px;
        line-height: 0.9;
        padding: 20px;
        font-family: 'Syncopate', sans-serif;
        text-transform: uppercase;
        background: radial-gradient(
    circle farthest-corner at left center,
    white,
    #111
  ) no-repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
    }
    div.border {
        border: 3px solid #072144;
        border-radius: 12px;
        margin: 1px;
        background: radial-gradient(circle farthest-corner at ,white,#111
  ) no-repeat;
    }
body {
    background: black;
    text-align: center;
    padding: 120px 20px;
    }
</style>
<body>
</div>   
    <div class="border">
        <h1> New Year Countdown</h1>
    </div>
    <p>
    <div class="border">
            <!-- Display the countdown timer in an element -->

        <p id="demo"></p>

        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 1, 2020 UTC+06:30").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "D " + hours + "H "
        + minutes + "M " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        }, 1000);
        </script>
</body>
</html>
