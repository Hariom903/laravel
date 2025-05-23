<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    
   

</head>

<body>
    <div class="container">
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
            <tbody>
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
                    </tr>
                     {{-- @php $subtotal = $totle;
                         $discount = 2.00;
                       $subtotalLessDiscount = $subtotal - $discount;
                      $taxRate = 0.08; // 8%
                        $totalTax = $subtotalLessDiscount * $taxRate;
                      $shipping = 2.99;
                      $balanceDue = $subtotalLessDiscount + $totalTax + $shipping;   @endphp  --}}
                    <tr>
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
    </div>
</body>

</html>
