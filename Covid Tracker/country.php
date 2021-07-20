<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ7VvobsIYLr3Pe6cTNUnIUvzgpV2Na-o&callback=initMap"
    async defer></script> -->
    <style>


        body{
            background-color: #1e88e5;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 id="countryName"></h1>
        </div>

        <div class="row">
            
        </div>



    </div>
    <script>

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);

        const product = urlParams.get('country')

        fetch("https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country.php?country="+product, {
            "method": "GET",
            "headers": {
                "x-rapidapi-key": "2ec3dc195fmsh6764d68994bddcap11837cjsnbaf79804358e",
                "x-rapidapi-host": "coronavirus-monitor.p.rapidapi.com"
            }
        })
        .then(response => response.json()
            .then( data => {
                console.log(data);
                let countryName = document.getElementById('countryName');
                countryName.innerText=data['country'];

            })).catch(err => {
                console.log(err);
        });
    </script>
</body>
</html>