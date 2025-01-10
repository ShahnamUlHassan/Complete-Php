<?php
$h2_color="gray";
echo "<h1 style ='color:green'>php with html</h1>";
echo "<h3 style ='color:gray'>php with html</h3>";
?>

<?php
$name="shahnam";
echo "<h1 style='color:hotpink'>My name is ".$name."</h1>";
?>

<h1 style='color:green'>
My real name is <?php echo $name;?>
</h1>
<h2 style='color:<?php echo $h2_color;?>'><?php echo "this is h2 tag";?></h2>
<h2 style='color:<?php echo $h2_color;?>''><?php echo $name;?></h2>
<h2 style='color:<?php echo $h2_color;?>''>my name is <?php echo $name;?></h2>

