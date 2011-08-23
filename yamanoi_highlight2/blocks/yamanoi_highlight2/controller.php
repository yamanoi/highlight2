<?php
	class YamanoiHighlight2BlockController extends BlockController {
		
		private $pkgHandle = "yamanoi_highlight2";
		
		protected $btTable = 'btYamanoiHighlight2';
		protected $btInterfaceWidth = "500";
		protected $btInterfaceHeight = "400";
		private $scripts = array( 'bash' => 'shBrushBash.js', 'cpp' => 'shBrushCpp.js',
		 'csharp' => 'shBrushCSharp.js', 'css' => 'shBrushCss.js', 'delphi' => 'shBrushDelphi.js',
		 'diff' => 'shBrushDiff.js', 'groovy' => 'shBrushGroovy.js', 'java' => 'shBrushJava.js',
		 'jscript' => 'shBrushJScript.js', 'php' => 'shBrushPhp.js', 'plain' => 'shBrushPlain.js',
		 'python' => 'shBrushPython.js', 'ruby' => 'shBrushRuby.js', 'perl' => 'shBrushPerl.js',
		 'scala' => 'shBrushScala.js', 'sql' => 'shBrushSql.js', 'vb' => 'shBrushVb.js',
		 'xml' => 'shBrushXml.js', 'as3' => 'shBrushAS3.js', 'javafx' => 'shBrushJavaFX.js',
		 'powershell' => 'shBrushPowerShell.js');

		public function getBlockTypeDescription() {
			return "A Highlight block for software developers.";
		}
	
		public function getBlockTypeName() {
			return "Yamanoi Highlight2";
		}

		public function on_page_view() {
			global $cp;
			$html = Loader::helper('html');
				$this->addHeaderItem($html->css('yamanoi_highlight2/shCore.css',$this->pkgHandle));
				$this->addHeaderItem($html->css('yamanoi_highlight2/shThemeDefault.css',$this->pkgHandle));
				$this->addHeaderItem($html->javascript('yamanoi_highlight2/shCore.js',$this->pkgHandle));
			if( $this->html ) {
				$this->addHeaderItem($html->javascript('yamanoi_highlight2/shBrushXml.js',$this->pkgHandle));
			}

			$htmldata = $html->javascript('yamanoi_highlight2/clipboard.swf',$this->pkgHandle);
			$htmldata = preg_replace('/.*src="(.*)".*/','${1}',$htmldata);
			$this->addHeaderItem("<script type=\"text/javascript\">SyntaxHighlighter.config.clipboardSwf = '".$htmldata."';SyntaxHighlighter.all();</script>");
		}

		function view(){
			global $cp;
			static $st=array();
				$this->set('software',$this->code);
				$this->set('html',$this->html);
				$html = Loader::helper('html');
				if( empty($st[$this->code]) ) {
					$st[$this->code] = $this->code;
				$sc = $this->scripts[$this->code];
				if( !empty($sc))
					print $html->javascript('yamanoi_highlight2/'.$sc,$this->pkgHandle);
				else
					print '<p style="color:#900">Error: '.$this->code.' is Not Found.</p>';
				}
		}
	}
	
?>
