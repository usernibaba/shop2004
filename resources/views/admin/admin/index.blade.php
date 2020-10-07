<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border>

    <tr>
        <td>用户名</td>
        <td>年龄</td>
        <td>手机号</td>
        <td>id</td>
    </tr>
    @foreach($res as $v)
    <tr>
        <td>{{$v->admin_name}}</td>
        <td>{{$v->admin_pwd}}</td>
        <td>{{$v->admin_tel}}</td>
        <td>{{$v->id}}</td>
    </tr>
        @endforeach
</table>
</body>
</html>