<?php defined('C5_EXECUTE') or die("Access Denied.");?>

<?php if(!empty($filename)) { ?>
<h3 class="hightlight">Filename:&nbsp;<?php echo $filename ?></h3>
<?php } ?>

<pre class="brush: <?php echo strtolower($software)?>; html-script: <?php echo $html?"true":"false"; ?>">
<?php echo htmlentities($content, ENT_COMPAT, APP_CHARSET); ?>
</pre>

