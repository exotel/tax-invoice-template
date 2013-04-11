<?php
$cur_dir = dirname(__FILE__);
require_once($cur_dir.'/dompdf/dompdf_config.inc.php');

class pdfCreator {
	private $curDir;

	public function __construct() {
		global $cur_dir;
		$this->curDir = $cur_dir;
	}
	
	private function getHtml() {
		ob_start();
		include($this->curDir . '/template.php');
		$retStr = ob_get_contents();
		ob_end_clean();
		return $retStr;
	}
	
	public function getPdf() {		
		$html = $this->getHtml();
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		$output = $dompdf->output();
			
		$pdfFileName = $this->curDir.'/invoice.pdf';
		file_put_contents($pdfFileName, $output);
	}
}


$pdfCreator = new pdfCreator();
$pdfCreator->getPdf();
