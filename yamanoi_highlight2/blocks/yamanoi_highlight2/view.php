<?php if(!empty($filename)) { ?>
<h3 class="hightlight">Filename:&nbsp;<?php echo $filename ?></h3>
<?php } ?><pre class="brush: <?php echo strtolower($software)?>; html-script: <?php echo $html?"true":"false"; ?>">
<?php
$tmp  = preg_replace('/&/','&amp;',$content);
$patterns = array( '/</', '/>/' );
$replacements = array( '&lt;', '&gt;' );
$result = preg_replace($patterns, $replacements, $tmp);
echo $result;
?></pre>

