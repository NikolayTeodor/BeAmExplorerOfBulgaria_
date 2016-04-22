<?php 
if($_SESSION['is-logged'] != true)
{
	 header("Location: ./?p=login");
}
else
{
?>
<div id="container">
<img src="../gallery/img1.jpg" id="img"/>
<div id="left_holder" ><img onClick="slide(-1)" class="left" src="../img/arrow_left.png"/></div>
<div id="right_holder" ><img onClick="slide(1)" class="right" src="../img/arrow_right.png"/></div>
<div class="whopost"><span style="color:white; float: left;">tedo3637</span></div>
</div>
<div style="display: none;" id="imagetotal" >
<?php 
    $i =-1;
    $dir = '../galerryimages/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // kolko faila ima v papkata
    echo "$i";
?>
</div>
<script>
	 var total = parseFloat(document.getElementById("imagetotal").innerHTML);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<?php
}
?>