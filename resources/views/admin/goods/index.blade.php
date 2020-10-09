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
<table border>
    <tr>
        <td>商品id</td>
        <td>分类id</td>
        <td>货物</td>
        <td>货物名称</td>
        <td>点击计数</td>
        <td>货物编号</td>
        <td>商品价格</td>

    </tr>
    @foreach($res as $v)
    <tr>
        <td>{{$v->goods_id}}</td>
        <td>{{$v->cat_id}}</td>
        <td>{{$v->goods_sn}}</td>
        <td>{{$v->goods_name}}</td>
        <td>{{$v->click_count}}</td>
        <td>{{$v->goods_number}}</td>
        <td>{{$v->shop_price}}</td>
    </tr>
        @endforeach
</table>
</body>
</html>