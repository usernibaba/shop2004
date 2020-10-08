<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('store')}}" method="post">
        @csrf
    <table>
        <tr>
            <td>登录</td>
            <td><input type="text" name='admin_name'></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text"name='admin_pwd'></td>
        </tr>
        <tr>
            <td><input type="submit" value="登录"></td>
            <td></td>
        </tr>
    </table>
    </form>
</body>
</html>