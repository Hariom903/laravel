<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Invoice</title>
</head>

<body >
  <table
    style="background-color: #fff; padding: 30px; width: 100%; max-width: 800px; margin: auto; ">
    
    <!-- Header Row -->
    <tr>
      <td style="padding: 20px;  background-color:rgb(37, 105, 231); ">
        <table style="width: 100%;">
          <tr>
            <td style="vertical-align: middle;">
              <img src="{{ $logo ?? "" }}" alt="Logo"
                style="width: 80px; border-radius: 50%; margin-right: 15px;">
              <span style="font-size: 32px; font-weight: bold; vertical-align: middle;">INVOICE</span>
            </td>
            <td style="text-align: right;">
              <p style="margin: 4px 0;"><strong>Date:</strong>{{$date ?? " "}}</p>
              <p style="margin: 4px 0;"><strong>Invoice No.:</strong> 76543</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- Company and Bill To Row -->
    <tr>
      <td>
        <table style="width: 100%;">
          <tr>
            <!-- Company Info -->
            <td style="width: 48%; vertical-align: top;">
              <h3 style="margin-bottom: 5px;">Company Name</h3>
              <p style="margin: 4px 0;">IGNISH</p>
              <p style="margin: 4px 0;">Indore</p>
              <p style="margin: 4px 0;">0000000000</p>
              <p style="margin: 4px 0;">test@test.com</p>
            </td>
            <!-- Bill To Info -->
            <td style="width: 48%; vertical-align: top;">
              <h3 style="margin-bottom: 5px;">Bill To</h3>
              <p style="margin: 4px 0;">{{$name ?? " "}}</p>
              <p style="margin: 4px 0;">{{$company_name ?? " "}}</p>
              <p style="margin: 4px 0;">{{ $address?? " " }}</p>
              <p style="margin: 4px 0;">{{$phone ?? " "}}</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- Items Table Row -->
    <tr>
      <td>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
          <thead> 
            <tr style="background-color:rgb(52, 125, 234); text-align: left;">
              <th style="padding: 8px; border: 1px solid #ddd;">DESCRIPTION</th>
              <th style="padding: 8px; border: 1px solid #ddd;">QTY</th>
              <th style="padding: 8px; border: 1px solid #ddd;">UNIT PRICE</th>
              <th style="padding: 8px; border: 1px solid #ddd;">TOTAL</th>
            </tr>
          </thead>
          <tbody>
            @php
              $total = 0;
            @endphp
            @foreach ($items as $item)
              @php
                $lineTotal = $item['QTY'] * $item['UNIT_PRICE'];
                $total += $lineTotal;
              @endphp
              <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $item['DESCRIPTION'] ?? " " }}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $item['QTY'] ?? " " }}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $item['UNIT_PRICE'] ?? "" }}</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $lineTotal ?? " " }}</td>
              </tr>
                   @endforeach
                 @php
              $discount = 2.00;
              $subtotalLessDiscount = $total - $discount;
              $taxRate = 0.08; // 8%
              $totalTax = $subtotalLessDiscount * $taxRate;
              $shipping = 2.99;
              $balanceDue = $subtotalLessDiscount + $totalTax + $shipping;
            @endphp
               <tr>
                <td> </td>
                <td> </td>
                <td style="padding: 8px; border:none; text-align: right;">SUBTOTAL</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $total ?? " " }}</td>
              </tr>
              <tr>
                 <td> </td>
                <td> </td>
                <td style="padding: 8px; border:none; text-align: right;">DISCOUNT</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $discount ?? "" }}</td>
              </tr>
              <tr>
                 <td> </td>
                <td> </td>
                <td style="padding: 8px;  border:none; text-align: right;">SUBTOTAL LESS DISCOUNT</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $subtotalLessDiscount ?? " " }}</td>
              </tr>
              <tr>
                 <td> </td>
                <td> </td>
                <td style="padding: 8px; border:none; text-align: right;">TAX RATE</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">8%</td>
              </tr>
              <tr>
                 <td> </td>
                <td> </td>
                <td style="padding: 8px;  border:none; text-align: right;">TOTAL TAX</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $totalTax ?? "" }}</td>
              </tr>
              <tr>
                 <td> </td>
                <td> </td>
                <td style="padding: 8px;  border:none; text-align: right;">SHIPPING/HANDLING</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $shipping ?? " " }}</td>
              </tr>
               <td> </td>
                <td> </td>
              <tr style=" font-weight: bold;">
                 <td> </td>
                <td> </td>
                <td style="padding: background-color:rgb(29, 106, 223); 8px; border: 1px solid #ddd; text-align: right;">BALANCE DUE</td>
                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $balanceDue ?? "" }}</td>
              </tr>
       
          </tbody>
        </table>
      </td>
    </tr>

    <!-- Totals and Remarks Row -->
    <tr>
      <td>
        <div style="display: flex; justify-content: space-between; margin-top: 30px; flex-wrap: wrap;">
          <div style="width: 48%; min-width: 250px;">
            <p style="font-weight: bold;">Remarks / Payment Instructions:</p>
            <p>Make all checks payable to Company Name.<br>
              Or submit payment via Venmo: venmo_account or PayPal: paypal_account
            </p>
          </div>
        </div>
      </td>
    </tr>

    <!-- Signature and Thank You -->
    <tr>
      <td>
        <p style="text-align: right; margin-top: 40px;">Client Signature: ____________________</p>
        <h5 style="text-align: center; margin-top: 40px;"><em>Thank you for your business!</em></h5>
      </td>
    </tr>

  </table>
















  {{-- <div class="container">
         <div class="row color mb-4 d-flex justify-content-between">
            <div>
                <div class="logo"><img
                    src="{{ $logo ?? ' ' }}"
                    class="img-fluid rounded-top"
                    alt=""   
                    style="width: 120px; height: auto"
                />
                 </div>
                <h2 class="invoice-title">INVOICE</h2>
            </div>
            <div class="text-end">
                <p><strong>DATE:</strong>{{$date ?? " "}}</p>
                <p><strong>INVOICE NO.:</strong> 76543</p>
            </div>
        </div>


        <div class="row mb-4 d-flex justify-content-between">
            <div>
                <h6>COMPANY NAME</h6>
                <p>IGNISH <br/>INDORE <br> 0000000000<br>test@test.com</p>
            </div>
            <div>
                <h6>BILL TO </h6>
                <p>{{$name ?? " "}}<br>
                    {{$company_name ?? " "}}<br>{{$address ?? " " }}<br>{{$phone ?? " "}}</p>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>DESCRIPTION</th>
                    <th>QTY</th>
                    <th>UNIT PRICE</th>
                    <th>TOTAL</th>
                </tr> 
            </thead>
            <tbody> --}}
{{--                 
                @foreach ($items as $item )
                @php 
                $totle =+ $item['QTY']*$item['UNIT_PRICE'] 
                @endphp
                      <tr>
                    <td>{{ $item['DESCRIPTION'] }}</td>
                    <td>{{$item['QTY']}}</td>
                    <td>{{$item['UNIT_PRICE']}}</td>
                  
                    <td>{{$item['QTY']*$item['UNIT_PRICE']}}</td>
                 
                </tr>
                @endforeach --}}
              
{{--               
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-6">
                <p><strong>Remarks / Payment Instructions:</strong></p>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td class="text-end">SUBTOTAL</td>
                        <td class="text-end">{{$totle ?? 0}}</td>
                    </tr> --}}
                     {{-- @php $subtotal = $totle;
                         $discount = 2.00;
                       $subtotalLessDiscount = $subtotal - $discount;
                      $taxRate = 0.08; // 8%
                        $totalTax = $subtotalLessDiscount * $taxRate;
                      $shipping = 2.99;
                      $balanceDue = $subtotalLessDiscount + $totalTax + $shipping;   @endphp  --}}
                    {{-- <tr>
                        <td class="text-end">DISCOUNT</td>
                        <td class="text-end">{{ $discount ?? " "}}</td>
                    </tr>
                    <tr>
                        <td class="text-end">SUBTOTAL LESS DISCOUNT</td>
                       
                        <td class="text-end">{{  $subtotalLessDiscount ?? ""  }}</td>
                    </tr>
                    <tr>
                        <td class="text-end">TAX RATE</td>
                        <td class="text-end">8%</td>
                    </tr>
                    <tr>
                        <td class="text-end">TOTAL TAX</td>
                        <td class="text-end">{{$totalTax ?? " "}}</td>
                    </tr>
                    <tr>
                        <td class="text-end">SHIPPING/HANDLING</td>
                        <td class="text-end">{{
                         $shipping ?? ""}}</td>
                    </tr>
                    <tr class="table-primary">
                        <td class="text-end fw-bold">BALANCE DUE</td>
                        <td class="text-end fw-bold">{{ $balanceDue ?? ""}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <p>Make all checks payable to company name.<br>
                Or submit payment via Venmo: venmo account or Paypal: paypal account</p>
            <p class="text-end">Client Signature X</p>
        </div>

        <h5 class="text-center mt-4"><em>Thank you for your business!</em></h5>
    </div> --}}
</body>

</html>
