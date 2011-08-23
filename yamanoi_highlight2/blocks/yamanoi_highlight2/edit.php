<?php echo $form->label('code', 'Software');?>
<?php echo $form->select('code',
array(
'as3' => 'as3',
'bash' => 'bash',
'csharp' => 'csharp',
'cpp' => 'cpp',
'css' => 'css',
'delphi' => 'delphi',
'diff' => 'diff',
'groovy' => 'groovy',
'jscript' => 'jscript',
'java' => 'java',
'javafx' => 'javafx',
'perl' => 'perl',
'php' => 'php',
'plain' => 'plain',
'powershell' => 'powershell',
'python' => 'python',
'ruby' => 'ruby',
'scala' => 'scala',
'sql' => 'sql',
'vb' => 'vb',
'xml' => 'xml'),
$code,
array('style' => 'width: 100px;'));?>
<?php echo $form->label('filename', 'Filename');?>
<?php echo $form->text('filename', $filename,array('style' => 'width: 380px') );?>
<?php echo $form->hidden('html','0'); ?>
<?php echo $form->label('html', 'html-script');?>
<?php echo $form->checkbox('html','1',$html);?>
<?php echo $form->label('content', 'Source');?>
<?php echo $form->textarea('content', htmlentities($content,ENT_QUOTES,"UTF-8"),array('style' => 'width: 470px;height:200px;'));?>
