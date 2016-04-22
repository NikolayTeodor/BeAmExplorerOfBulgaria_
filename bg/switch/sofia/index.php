<h2 style="margin:10px;"><big>София</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/sofia_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Боровец</h3>
Боровец е най-старият планински курорт в България.
Датира от 1896 г., когато генерал Тантилов построява първата вила за почивка, в последствие княз Фердинанд построява лятна резиденция. Боровец е най-близкият до столицата зимен курорт и е предпочитан от столичани.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Боровец
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
                var distanceKM = computeDistance(position.coords, borovec);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script> 
<tr>
<td>
<img src="../img/sofia_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Връх Мусала</h3>
Мусалà е най-високият връх в България и на целия Балкански полуостров с височина 2925,4 м, измерено от равнището на пристанище Варна. По височина е на 7-мо място сред европейските върхове. По-висок е с 8 м от връх Митикас в планината Олимп, Гърция и с 11 м от връх Вихрен в планината Пирин, България.
</td>
</tr>
<table>