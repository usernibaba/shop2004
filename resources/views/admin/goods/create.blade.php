<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('goods/save')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>商品名称</td>
            <td><input type="text"name="goods_name"></td>
        </tr>
        <tr>
            <td>商品订单</td>
            <td><input type="text"name="goods_sn"></td>
        </tr>
        <tr>
            <td>货物名称</td>
            <td><input type="text"name="goods_number"></td>
        </tr>
        <tr>
            <td>货物编号</td>
            <td><input type="text"name="goods_sn"></td>
        </tr>
        <tr>
            <td>商品价格</td>
            <td><input type="text"name="shop_price"></td>
        </tr>   
        <tr>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
        吗
    </table>
</form>
</body>
</html>