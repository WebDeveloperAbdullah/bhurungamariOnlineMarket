<?php 

 function title() {
$path=$_SERVER['SCRIPT_FILENAME'];
$title=basename($path,'.php');
$title=str_replace('_', ' ', $title);

if($title=='index') {
	$title='home';
}elseif ($title=='category') {
	$title='category';
}elseif ($title=='post') {
$title='post';
	
}elseif ($title=='dashbord') {

	$title='dashbord';
}elseif ($title=='inbox') {

	$title='inbox';
}
elseif ($title=='login') {

	$title='login';
}elseif ($title=='singUp') {

	$title='singUp';
}elseif ($title=='socialMedia') {

	$title='socialMedia';
}elseif ($title=='copyright') {

	$title='copyright';
}elseif ($title=='changePass') {

	$title='changePass';
}
elseif ($title=='addCategory') {

	$title='addCategory';
}
elseif ($title=='addPost') {

	$title='addPost';
}
elseif ($title=='post_edit') {

	$title='post_edit';
}
elseif ($title=='category_edit') {

	$title='category_edit';
}
elseif ($title=='addPage') {

	$title='addPage';
}
return $title=ucwords($title);

}







 ?>