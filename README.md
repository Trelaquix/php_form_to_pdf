# php_form_to_pdf

<p><strong>Step 1:</strong> Install composer</p><br>

<strong>Step 2:</strong> Go to the root folder of your project and run

composer require mpdf/mpdf<br><br>


<strong>Step 3:</strong> Place this code in the file you're using 

require_once __DIR__ . '/vendor/autoload.php';<br><br>


<strong>Step 4:</strong> Codes to use

To create a new PDF instance <br>
$mpdf = new \Mpdf\Mpdf();

To write PDF <br>
$mpdf->WriteHTML($example-data);

The output to browser <br>
$mpdf ->Output('example-data.pdf', 'D');
