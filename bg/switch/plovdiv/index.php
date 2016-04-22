<h2 style="margin:10px;"><big>Пловдив</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/plovdiv_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Паметник на Съединението</h3>
Паметникът на Съединението представлява внушителна 12-метрова фигура, дело на скулптора Величко Минеков. Издигнат е през 1985 г. и олицетворява съединението на България. Двете разперени крила на птица символизират единството на двете принудително разделени части на страната в годините от 1878 до 1885.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Паметника на Съединението
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
                var distanceKM = computeDistance(position.coords, pametnik_syedinenie);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/plovdiv_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Света Марина</h3>
„Света Марина” е православна църква в град Пловдив, посветена на света великомъченица Марина Антиохийска. Tя е митрополитски храм на Пловдивска епархия. Намира се на ул. „Д-р Вълкович” № 7.
</td>
</tr>
<table>