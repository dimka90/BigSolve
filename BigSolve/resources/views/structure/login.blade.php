<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">
      .form-container {
            margin: 17% 40% 0px 40%;
            border: 1px solid rgb(141, 132, 132);
            border-radius: 5px;
            box-shadow: 8px 9px 9px -9px rgba(0, 0, 0, 0.75);
        }
        .form-container h1 {
            background-color: #f9004d;
            padding-left: 100px;
            margin-bottom: 10px;
            margin-top: 0;
            color: white;
            font-size: 40px;
            font-weight: 600;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .form-group {
            padding-left: 50px;
            padding-bottom: 10px;
            padding-top: 20px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding-bottom: 5px;
        }
        .form-group input {
            padding: 5px 10px;
            outline: none;
            border: 1px solid rgb(189, 181, 181);
        }
        .btn {
            margin: 10px 0px 10px 53px;
            font-weight: 600;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f9004d;
            color: white;
            font-size: 17px;
            border: 1px solid rgb(117, 113, 113);
            border-radius: 5px;
        }
        .btn:hover {
            background-color: transparent;
            border: 1px solid #f9004d;
            color: #f9004d;
            border-radius: 0px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BigSolve</title>
</head>
<body>


    <div class="form-container">
        <h1>Log In</h1>
        <form action="{{url('postlogin/{local}')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email">
                @if($errors)
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                @endif
            </div>
    
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
                @if($errors)
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                @endif
            </div>    
    
            <button class="btn" type="submit">Submit</button>
        </form>
</body>
</html>