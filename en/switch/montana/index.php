<h2 style="margin:10px;"><big>Montana</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/montana_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Dobridolski Monastery</h3>
Dobridolski Monastery “Holy Trinity” is functioning monastery in northern Bulgaria on the Bulgarian Orthodox, Diocese of Vidin, Lom clerical district.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Dobridolski monastery
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
                var distanceKM = computeDistance(position.coords, dobridolski_manastir);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/montana_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Lopushanski Monastery</h3>
Lopushanski Monastery “St. Johan the Baptist” is a Bulgarian orthodox monastery. It is located in the Chiprovtsi part of the Balkans on 300m. Above sea level in the valley of the river Dalgodelska Ogosta, between the villages Pomezhdin, Meyane and George Damyano.</td>
</tr>
<table>