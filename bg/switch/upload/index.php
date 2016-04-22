<?php if($_SESSION['is-logged'] != true){
header("Location: ./?p=index");

}
else{

?>
<div id="box">
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>


<!-- AVATAR UPLOADING -->
<?php
    if(isset($_FILES['image'])){
        $errors= array();
        $id = $_SESSION['user']['id'];
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];   
        $avatar = $_SESSION['user']['avatar'];
        $newname = $id . ".png";
        $file_ext=$_FILES['image']['name'];
        $check = mysql_query("SELECT `id` FROM `users` WHERE `id` = '$id'");
        $num = mysql_num_rows($check);
        
        $expensions= array("jpeg","jpg","png","gif");         
        if(in_array($file_ext,$expensions)!= false){
            echo "Не е снимка";
        }
        if($file_size > 2097152){
        echo 'Прекалено голям е.';
        }               
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../avatars/".$newname);
        echo "<br /><br /> Браво! Ти качи своя аватар";

        }else{
            echo "Качи файл";
        }
    }

?>
</form>
</div>
<?php
}
?>
