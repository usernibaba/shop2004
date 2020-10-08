<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('admin/update/'.$res->user_id)}}" method="post">
    @csrf
    <table>
        <tr>
            <td>登录</td>
            <td><input type="text" name='user_name'value="{{$res->user_name}}"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text"name='password'value="{{$res->password}}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>