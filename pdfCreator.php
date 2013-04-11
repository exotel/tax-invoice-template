<?php
$cur_dir = dirname(__FILE__);
require_once($cur_dir.'/dompdf/dompdf_config.inc.php');

class pdfCreator {
	
	private function getHtml() {
		global $cur_dir;
		ob_start();
		include($cur_dir . '/template.php');
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
			
		$pdfFileName = $cur_dir.'/invoice.pdf';
		file_put_contents($pdfFileName, $output);
	}
}

/*
$pdfCreator = new pdfCreator();
$pdfCreator->getPdf();
*/