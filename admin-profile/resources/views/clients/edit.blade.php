<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method="post" action="{{ route('update', $data->id) }}" id="login-form" class="login-form" autocomplete="off"
        role="main">
        @csrf
        <h1 class="a11y-hidden">Login Form</h1>
        <div>
            <label class="label-email">
                <input type="email" class="text" name="email" value="{{ $data->email }}" placeholder="Email"
                    tabindex="1" required />
            </label>
        </div>
        <div>
            <label class="label-password">
                <input type="text" class="text" name="password" value="{{ $data->password }}" placeholder="Password"
                    tabindex="2" required />
            </label>
        </div>
        <td><button type="submit">Update</button></td>
    </form>
</body>

</html>