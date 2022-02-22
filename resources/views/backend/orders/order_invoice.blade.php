<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hóa Đơn</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }

        .font {
            font-size: 15px;
        }

        .authority {
            /*text-align: center;*/
            float: right
        }

        .authority h5 {
            margin-top: -10px;
            color: green;
            /*text-align: center;*/
            margin-left: 35px;
        }

        .thanks p {
            color: green;
            ;
            font-size: 16px;
            font-weight: normal;
            font-family: serif;
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
        <tr>
            <td valign="top">
                <!-- {{-- <img src="" alt="" width="150"/> --}} -->
                <h2 style="color: green; font-size: 26px;"><strong>EasyShop</strong></h2>
            </td>
            <td align="right">
                <pre class="font">
               Shailly Ecommerce
               Email:shaillydixit999@gmail.com <br>
               Mob: 1245454545 <br>
               Delhi, India, <br>

            </pre>
            </td>
        </tr>

    </table>


    <table width="100%" style="background:white; padding:2px;""></table>

  <table width=" 100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
        <tr>
            <td>
                <p class="font" style="margin-left: 20px;">
                    <strong>Tên:</strong> {{$order->first_name}} <br>
                    <strong>Email:</strong> {{ $order->shipping_email }} <br>
                    <strong>Số Điện Thoại:</strong> {{ $order->shipping_phone }} <br>
                    @php
                    $div = $order->division->division_name;
                    $dis = $order->district->district_name;
                    $state = $order->state->state_name;
                    @endphp
                    <strong>Địa chỉ:</strong> {{$div}}, {{$dis}}, {{$state}} <br>
                    <strong>Mã bưu điện:</strong> {{$order->shipping_zipcode}}
                </p>
            </td>
            <td>
                <p class="font">
                <h3><span style="color: green;">Hóa Đơn:</span> #{{ $order->invoice_no}}</h3>
                Ngày đặt hàng: {{ $order->order_date }}<br>
                Ngày giao hàng: {{ $order->delivered_date }}<br>
                Kiểu thanh toán : {{ $order->payment_method }} </span>
                </p>
            </td>
        </tr>
    </table>
    <br />
    <h3>Sản Phẩm</h3>


    <table width="100%">
        <thead style="background-color: green; color:#FFFFFF;">
            <tr class="font">
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Size</th>
                <th>Màu</th>
                <th>Code</th>
                <th>Số Lượng</th>
                <th>Đơn Giá </th>
                <th>Tổng </th>
            </tr>
        </thead>
        <tbody>

            @foreach($orderItem as $item)
            <tr class="font">
                <td align="center">
                    <!--  -->
                    <img src="{{ public_path($item->product->product_thumbnail)  }}" height="60px;" width="60px;" alt="">
                </td>
                <td align="center">{{ $item->product->product_name }}</td>
                <td align="center">
                    @if($item->size == NULL)
                    ----
                    @else
                    {{ $item->size }}
                    @endif
                </td>
                <td align="center">{{ $item->color }}</td>
                <td align="center">{{ $item->product->product_code }}</td>
                <td align="center">{{ $item->qty }}</td>
                <td align="center">VNĐ{{ $item->price }}</td>
                <td align="center">VNĐ{{ $item->price * $item->qty }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <table width="100%" style=" padding:0 10px 0 10px;">
        <tr>
            <td align="right">
                <h2><span style="color: green;">Tổng hóa đơn:</span> VNĐ{{ $order->amount }}</h2>
                <h2><span style="color: green;">Thành Tiền:</span> VNĐ{{ $order->amount }}</h2>
                {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
            </td>
        </tr>
    </table>
    <div class="thanks mt-3">
        <p>Cảm Ơn Bạn Đã Ủng Hộ..!!</p>
    </div>
    <div class="authority float-right mt-3">
        <h4>Shailly Dixit</h4>
        <p>-----------------------------------</p>
        <h5>Authority Signature:</h5>
    </div>
</body>

</html>
