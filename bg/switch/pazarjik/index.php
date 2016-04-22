<h2 style="margin:10px;"><big>Пазарджик</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/pazarjik_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Доспат</h3>
Доспат е язовир на река Доспат в Западните Родопи. Разположен на 18,3 км² на 1200 м надм. височина и е сред най-големите по площ и обем в България. Построен е на р. Доспатска. В него може да се лови шаран, пъстърва, кефал, костур, червеноперка и каракуда.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Доспат
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
                var distanceKM = computeDistance(position.coords, dospat);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/pazarjik_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Батак</h3>
Батак е шестият по големина язовир в България. Разположен е в Западните Родопи, област Пазарджик, отстои на 4 км от Батак, на 7 км от Ракитово и на 19 км от Велинград. Изграден е на река Мътница.
</td>
</tr>
<table>