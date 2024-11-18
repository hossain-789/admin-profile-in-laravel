<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="">
            <input type="file" name="image" id="image">
            <button type="submit">upload</button>
        </form>
    </div>
    <div>
        <table>
            <thead>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>edit</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td><a href="{{ route('edit', $item->id) }}" type="button">Edit</a></td>
                        <td><a href="{{ route('delete', $item->id) }}" type="button">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>