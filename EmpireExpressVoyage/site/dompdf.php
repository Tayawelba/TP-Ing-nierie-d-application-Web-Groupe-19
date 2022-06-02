<?php
  use Dompdf\Dompdf;
  use Dompdf\Options;

  require_once 'dompdf/autoload.inc.php';

  ob_start();

  /*require_once 'billet.php';

  $html = ob_get_contents();

  ob_end_clean();
*/

  require_once 'dompdf/autoload.inc.php';

  $options = new Options();

  $options ->set('defaultfond','Courier');

  $dompdf = new Dompdf ($Options);

  $dompdf->loadHtml('Hesed est un roi');

  $dompdf->setPaper('A4', 'Portrait');

  $dompdf->render();
  $fichier ='hesed-fichier.pdf';

  $dompdf->stream($fichier);



?>