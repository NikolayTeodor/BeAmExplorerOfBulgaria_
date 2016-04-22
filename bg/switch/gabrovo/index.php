<h2 style="margin:10px;"><big>Габрово</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/gabrovo_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Етър</h3>
Етъра е музей на открито в едноименния квартал на Габрово.Представлява възстановка на българския бит, култура и занаятчийство. Той е първият по рода си музей в България. Открит е на 7 септември 1964 г. Музеят е разположен на 8 км южно от основната част на Габрово.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Етъра
</div>        
<div id="myDistance" style="text-align: right;">
</div>
<div>
</div></font>
<script>   function displayMyLocation(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var positionDiv = document.getElementById("myLocation");
				
                
                
                console.log(position.coords);
                var distanceKM = computeDistance(position.coords, etar);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/gabrovo_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Соколски манастир</h3>
Габровски Соколски манастир „Успение Богородично“ е действащ смесен манастир на Българската православна църква, намиращ се в Северна България, близо до Габрово. Манастирът е основан в началото на 1833 година от Йосиф Соколски.
</td>
</tr>
<table>