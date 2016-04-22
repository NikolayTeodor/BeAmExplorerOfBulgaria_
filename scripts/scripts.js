			/*IMG SLIDER*/
            var imagecount = 1;
var total = 66;

function slide(x) {
    var Image = document.getElementById('img');
    imagecount = imagecount + x;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
    Image.src = "../gallery/img"+ imagecount +".jpg";
    }
window.setInterval(function slideA() {
    var Image = document.getElementById('img');
    imagecount = imagecount + 1;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
    Image.src = "../gallery/img"+ imagecount +".jpg";
    },5000);

/*Тaking coords when window is openned*/
  
            window.onload = getLocation;
            
            var vihren = {
                latitude: 41.7672222,
                longitude: 23.39888880000001
            };
            var nesebar_muzey = {
                latitude: 42.6583718,
                longitude: 27.73082009999996
            };
            var balchik_dvorec = {
                latitude: 43.404444,
                longitude: 28.146943999999962
            };
            var etar = {
                latitude: 42.81048990000001,
                longitude: 25.34653789999993
            };
            var mezeshka_grobnica = {
                latitude: 41.7382583,
                longitude: 26.088121399999977
            };
            var perperikon = {
                latitude: 41.71542789999999,
                longitude: 25.46567349999998
            };
            var rilski_manastir = {
                latitude: 42.133333,
                longitude: 23.340278000000012
            };
            var levski_pametnik = {
                latitude: 43.12892670000001,
                longitude: 24.717768699999965
            };
            var dobridolski_manastir = {
                latitude: 43.74112210000001,
                longitude: 22.970439400000032
            };
            
            var dospat = {
                latitude: 41.70873999999999,
                longitude: 24.078532399999972
            };
            var lyulin = {
                latitude: 42.01461122881795,
                longitude: 23.589019775390625
            };
            var panorama = {
                latitude: 43.3987688,
                longitude: 24.606144099999938
            };
            var pametnik_syedinenie = {
                latitude: 42.1354079,
                longitude: 24.74529039999993
            };
                var istoricheski_muzey = {
                latitude: 42.48419990000001,
                longitude: 26.503502300000036
            };
                var chasovnikova_kula = {
                latitude: 43.5266872,
                longitude: 26.52257199999997
            };
                var ivanovski_cyrkvi = {
                latitude: 43.83557130000001,
                longitude: 25.96565540000006
            };
                    var muzey_shumen_garnizon = {
                latitude: 43.2712398,
                longitude: 26.93612859999996
            };
                        var etnografski_muzey_silistra = {
                latitude: 44.1147271,
                longitude: 27.267190099999993
            };
                        var regionalen_istoricheski_muzey_sliven = {
                latitude: 42.6803,
                longitude: 26.318199999999933
            };
                        var pamporovo = {
                latitude: 41.6567751,
                longitude: 24.69535989999997
            };
                    var borovec = {
                latitude: 42.27066749999999,
                longitude: 23.605616499999996
            };
                    var kazanlyshka_grobnica = {
                latitude: 42.6258404,
                longitude: 25.399164400000018
            };
                var hajiangelova_kyshta = {
                latitude: 43.2493556,
                longitude: 26.572735700000067
            };
            
            var park_muzey_vladislavvarnenchik = {
                latitude: 43.23033779999999,
                longitude: 27.868644300000028
            };
            var preobrajenski_manastir = {
                latitude: 43.117026,
                longitude: 25.606732100000045
            };
            var baba_vida = {
                latitude: 43.993026,
                longitude: 22.886499800000024
            };
            var ledenika = {
                latitude: 43.2044194,
                longitude: 23.493698900000027
            };
            /*Formule for calculating coordinates*/
            function computeDistance(startCoords, destCoords) {
                var startLatRads = degreesToRadians(startCoords.latitude);
                var startLongRads = degreesToRadians(startCoords.longitude);
                var destLatRads = degreesToRadians(destCoords.latitude);
                var destLongRads = degreesToRadians(destCoords.longitude);
                var Radius = 6371; // radiusa na zemqta v km
                var distance = Math.acos(Math.sin(startLatRads) * Math.sin(destLatRads) +
                Math.cos(startLatRads) * Math.cos(destLatRads) *
                Math.cos(startLongRads - destLongRads)) * Radius;
                return distance;
            }
            
            /*gradus-radian*/
            function degreesToRadians(degrees) {
                var radians = (degrees * Math.PI)/180;
                return radians;
            }
            
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(displayMyLocation, displayError);
                } else {
                    alert("Áðàóçaðà òè íå ïîääúðæà GEOLOCATION");
                }
            }
            function displayError(error) {
                var errorTypes = {
                    0: "Unknown error",
                    1: "Permission denied by user",
                    2: "Position is not available",
                    3: "Request timed out"
                };
                var errorMessage = errorTypes[error.code];

                if (error.code == 0 || error.code == 2) {
                    errorMessage = errorMessage + " " + error.message;
                }
                var div = document.getElementById("myLocation");
                div.innerHTML = "<b>Error Message: </b>" + errorMessage;
            }

                        /*IMG SLIDER*/
            var imagecount = 1;
var total = 66;

function slide(x) {
    var Image = document.getElementById('img');
    imagecount = imagecount + x;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
    Image.src = "../gallery/img"+ imagecount +".jpg";
    }
window.setInterval(function slideA() {
    var Image = document.getElementById('img');
    imagecount = imagecount + 1;
    if(imagecount > total){ imagecount = 1;}
    if(imagecount < 1){ imagecount = total;}
    Image.src = "../gallery/img"+ imagecount +".jpg";
    },5000);