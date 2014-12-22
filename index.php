<html>
<head>
	<title> PHP Form Builder </title>
</head> 
<body> 
<?php
error_reporting();
/* Creates a form builder object for form creation. */

class FormBuilder {

	function __construct($formId, $action, $method){
		echo "<form id='".$formId."' action='".$action."' method='".$method."'>";
	}
	function textarea($label, $id) {
		echo "<label>".$label;
		echo "<textarea id='".$id."' name='".$id."'></textarea><br/>"; 
		echo "</label>"; 
	}
	function input($label, $type, $id) {
		echo "<label>".$label;
		echo "<input type='".$type."' id='".$id"' />";
		echo "</label>"; 
	}
	function radio(){
		echo "<label>".$label;
		echo "<input type='radio' id='".$id"' name='".$name."'/>";
		echo "</label>"; 
	}
	function selectOpen($label, $id){
		echo "<label>".$label;
		echo "<select id='".$id."'>";
	}
	function selectClose() 
	{
		echo "</select>"; 
		echo "</label>"; 
	}
	function option($value, $text)
	{
		echo "<option value='".$value."'>$text</option>";
	}
	function __deconstruct()
	{
		echo "</form>";
	}
}

$form = new FormBuilder('test','post', '/');
$form->input('First Name', 'text', 'fname');
$form->input('Last Name', 'text', 'lname');
$form->input('Email','text','email'); 
$form->textarea('Comments','comments');
$form->selectOpen('Favorite Ice Cream', 'ice-cream');
$form->option('Chocolate','Chocolate');
$form->option('Rasberry','Rasberry');
$form->option('Peanut Butter', 'Peanut Butter'); 
$form->option('Bubble Gum','Bubble Gum');
$form->option('Mint','Mint');
$form->selectClose(); 
$form->input('','submit', 'submit');


?> 
</body>
</html> 