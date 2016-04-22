<h2 style="margin:10px;"><big>Сливен</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/sliven_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Регионален исторически музей</h3>
Регионалният исторически музей в Сливен се помещава в красива сграда на главната улица на града. Той е една от най-старите институции в Сливен. Основан е през 1913 година като читалищен музей към читалище "Зора".
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Регионалния исторически музей
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
                var distanceKM = computeDistance(position.coords, regionalen_istoricheski_muzey_sliven);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script> 
<tr>
<td>
<img src="../img/sliven_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Къща музей „Хаджи Димитър”</h3>
Един от най-известните туристически обекти в град Сливен е къщата на легендарния сливенски войвода Хаджи Димитър. Тя е построена от дядото на именития войвода в края на XVIII в. и се намира в сливенския квартал „Клуцохор”.
</td>
</tr>
<table>