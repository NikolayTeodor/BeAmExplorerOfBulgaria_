<h2 style="margin:10px;"><big>Велико Търново</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/velikotyrnovo_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Преображенски манастир</h3>
Преображенският манастир „Св. Преображение Господне“ е български манастир във Великотърновска епархия.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Преображенския манастир
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
                var distanceKM = computeDistance(position.coords, preobrajenski_manastir);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script> 
<tr>
<td>
<img src="../img/velikotyrnovo_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Царевец</h3>
Крепостта Царевец е разположена край самия център на град Велико Търново. Тя е била главната българска крепост по време на Второто българско царство (1185 – 1393), когато Търново е столица на царството. През Средновековието хълмът, на който е ситуирана, е изцяло застроен с жилищни и административни постройки.
</td>
</tr>
<table>