<?php


        //this code if there is no spaces in the name of file
		/*$pdf = "test.pdf";

		$pdf_first_page = "test.pdf";

		$jpg = str_replace("pdf", "jpg", $pdf);

		exec ("convert $pdf_first_page $jpg");*/



        // this code if there is spaces in the name of file
        $pdf_escaped = "test.pdf";
		$pdf_escaped = escapeshellarg($pdf_escaped);
		$jpg_escaped = str_replace("pdf", "jpg", $pdf_escaped);
		exec("convert $pdf_escaped photos/$jpg_escaped");
		

  


?>


