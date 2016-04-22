<h2 style="margin:10px;"><big>Ловеч</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/lovech_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Паметник на Васил Левски</h3>
Паметникът на Васил Левски в Ловеч е открит на 27 май 1964 г. и е най-големият и внушителен паметник на Васил Левски. Един от символите на града и е част от герба му в продължение на 40 години. Намира се в Архитектурно-историческия резерват „Вароша“.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Паметника на Васил Левски
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
                var distanceKM = computeDistance(position.coords, levski_pametnik);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/lovech_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Покрит мост	</h3>
Покритият мост в Ловеч е мост над река Осъм в Ловеч. Свързва новата част на града с Архитектурно-историческия резерват „Вароша“. Единственият по рода си на Балканския полуостров.
</td>
</tr>
<table>