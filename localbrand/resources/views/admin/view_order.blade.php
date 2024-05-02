@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Customer Infomation
    </div>
    
    <div class="table-responsive">
    <?php
	                    $message = Session::get('message');
	                    if($message){
		                    echo '<span class="text-alert">' ,$message, '</span>';
		                    Session::put('message',null);
	                        }
	                    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Tên người đặt</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>{{$order_by_id->name}}</td>
            <td>{{$order_by_id->email}}</td>
                 
          </tr>

        </tbody>
      </table>
    </div>  

  </div>
</div>
<br></br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Receiver Infomation
    </div>
    
    <div class="table-responsive">
    <?php
	                    $message = Session::get('message');
	                    if($message){
		                    echo '<span class="text-alert">' ,$message, '</span>';
		                    Session::put('message',null);
	                        }
	                    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Tên người mua</th>
            <th>Địa chỉ đặt hàng</th>
            <th>Số điện thoại</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>{{$order_by_id->shipping_name}}</td>
            <td>{{$order_by_id->shipping_address}}</td>
            <td>{{$order_by_id->shipping_phone}}</td>
              
            
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</div>
<br></br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Order Details
    </div>
    <div class="table-responsive">
    <?php
	                    $message = Session::get('message');
	                    if($message){
		                    echo '<span class="text-alert">' ,$message, '</span>';
		                    Session::put('message',null);
	                        }
	                    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền(Thuế)</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            
            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->order_total}}</td>
           
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection