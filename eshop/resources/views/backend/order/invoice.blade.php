@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card mb-4">
               
                <div class="card-body">
                        <div id="page-wrap" style="margin-top:40px;">

        <textarea id="header">INVOICE</textarea>
        
        <div id="identity">
        
            <textarea id="address">{{$customers->first_name.' '.$customers->last_name}}
{{$customers->address}}

Phone: {{$customers->phone_number}}</textarea>

            <div id="logo">
              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
        
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">

            <textarea id="customer-title">Widget Corp.
c/o Steve Widget</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000{{$order->id}}</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">{{$order->created_at}}</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Total Amount</td>
                    <td><div class="due">{{$order->order_total}}</div></td>
                </tr>

            </table>
        
        </div>
        
        <table id="items">
        
          <tr>
              <th>Item</th>
              <th>Description</th>
              <th>Unit Cost</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
          @php($sum = 0 )
          @foreach($orderAll as $orders)
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>{{$orders-> product_name}}</textarea></div></td>
              <td class="description"><textarea>{{$orders-> address}}</textarea></td>
              <td><textarea class="cost">{{$orders-> product_price}}</textarea></td>
              <td><textarea class="qty">{{$orders-> product_quantity}}</textarea></td>
              <td><span class="price">{{ $total = $orders-> product_quantity * $orders   ->product_price}}</span></td>
          </tr>
          @php($sum = $sum + $total)
          @endforeach
          <tr id="hiderow">
            
          </tr>
          <tr>

              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Total</td>
              <td class="total-value"><div id="total">$875.00</div></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">VAT</td>

              <td class="total-value"><textarea id="paid">$0.00</textarea></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line balance">Grand Total</td>
              @php($vat = 0)
              <td class="total-value balance"><div class="due">{{$sum+$vat}}</div></td>
          </tr>
        
        </table>
        
        <div id="terms">
          <h5>Terms</h5>
          <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
        </div>
    
    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection