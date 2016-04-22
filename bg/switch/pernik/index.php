<h2 style="margin:10px;"><big>Перник</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/pernik_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Люлин</h3>
Люлин е планина в Западна България, на границата между Софийска градска, Софийска и Пернишка област и е част от Завалско-Планската планинска редица на Средногорието.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Люлин
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
                var distanceKM = computeDistance(position.coords, lyulin);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/pernik_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Черни връх</h3>
Черни връх е 2 290м висок и е най-високата точка на Витоша.
</td>
</tr>
<table>