<h2 style="margin:10px;"><big>Монтана</big></h2>
<table class="info">
<tr>
<td>
<img src="../img/montana_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Добридолски манастир</h3>
Добридолският манастир „Света Троица“ е действащ мъжки манастир в Северна България на Българската православна църква, Видинската епархия, Ломската духовна околия.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Добридолския манастир
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
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/montana_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Лопушански манастир</h3>
Лопушанският манастир "Свети Йоан Предтеча" е български православен манастир. Той е разположен в чипровския дял на Стара планина на 300 м. надморска височина в долината на река Дългоделска Огоста, между селата Помеждин, Меляне и Георги Дамяново.
</td>
</tr>
<table>