<?php
$h2_color = "aqua";
    echo "<h1 style='color : green'>Php with html</h1>";
    echo "<h2 style='color : red'>Php with html</h2>";
?>

<?php
    $name = "Ankit Kumar";
    echo "<h1 style='color : magenta'>My name is $name</h1>";
?>

<h1>
    My name is <?php echo $name; ?>
</h1>

<h2><?php echo "this is h2 tag"?></h2>
<h2 style="color : <?php echo $h2_color;?>"><?php echo $name; ?></h2>
<h2 style="color : <?php echo $h2_color;?>"><?php echo "My name is $name"; ?> </h2>