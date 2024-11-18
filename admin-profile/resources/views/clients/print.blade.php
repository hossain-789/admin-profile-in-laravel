<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <table>
            <thead>
                <th>Email</th>
                <th>Password</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>