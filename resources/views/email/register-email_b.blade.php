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
<h1>Merhaba {{$account->name}}</h1>
<h2>Kaydınız başarıyla yapılabilmesi için son adımınız aşağıya tıklamak :)))))</h2>
<h3><a href="{{route('account.activation',$account->access_token)}}">Dogrula - {{$account->access_token}}</a></h3>
</body>
</html>