<?php 
$name = "John";
?>

<h3> String Functions </h3>
<div> Count : <?php echo strlen($name); ?></div>
<div> Index of: <?php echo strpos($name, "o"); ?></div>
<div> Upper Case: <?php echo strtoupper($name); ?></div>
<div> Lower Case: <?php echo strtolower($name); ?></div>
<div> Replace: <?php echo str_replace("John","Jame",$name);?></div>
<div> Substrong <?php echo substr($name,0,3);?></div>