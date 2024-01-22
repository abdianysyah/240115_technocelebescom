<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
@foreach($article as $t)
    <tr>
        <td>{{ $t->title }}</td>
        <td>{{ $t->image }}</td>
        <td>{{ $t->isi }}</td>
    </tr>
 @endforeach
    
</body>
</html>