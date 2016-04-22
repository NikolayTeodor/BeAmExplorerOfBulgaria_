<h2 style="margin:10px;"><big>Добрич</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/dobrich_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Балчишки дворец</h3>
Архитектурно-парковият комплекс “Дворецът” представлява комплекс вили и други постройки, разположени на брега на Черно море.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Балчишкия дворец
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
                var distanceKM = computeDistance(position.coords, balchik_dvorec);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
</tr>
<tr>
<td>
<img src="../img/dobrich_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Калиакра</h3>
Калиакра е дълъг и тесен нос на българското северно черноморско крайбрежие. Носът е вдаден на 2 км навътре в морето и наподобява полуостров, представлява природен и археологически резерват.
</td>
</tr>
<table>