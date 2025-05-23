<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  public function create(Request $request){
    $invoice = $request->validate([
        'company_name'=>'required',
        'name' => 'required|string',
        'email' => 'required|email',
        'date' => 'required|date_format:d/m/Y',
        'address'=>'required',
        'phone'=>"required",
        'items'=>'required',
        'logo' => 'required',

        

    ]);
//    dd($invoice['item']);
//      $logoPath = $request->file('logo')->store('temp-logos', 'public');
//     $invoice['logo_path'] = public_path('storage/' . $logoPath);

    // Step 3: Load the invoice view into PDF
    $pdf = Pdf::loadView('invoice', $invoice);
    // Create unique file name
    $fileName = 'invoice_' . time() . '.pdf';

  

    // Define full path inside public folder
    $filePath = public_path('invoices/' . $fileName);

    // Make sure directory exists
    if (!file_exists(public_path('invoices'))) {
        mkdir(public_path('invoices'), 0755, true);
    }

    // Save PDF file manually
    file_put_contents($filePath, $pdf->output());

    // Return URL to the saved PDF
    $pdfUrl = asset('invoices/' . $fileName);

    return response()->json([
        'message' => 'PDF generated successfully',
        'pdf_url' => $pdfUrl,
    ]);
}
 
}
