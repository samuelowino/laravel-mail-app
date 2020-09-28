<!DOCTYPE html>
<html>
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>{{$appname ?? 'Mail Demo'}}</title>
    </head>
<body>
    <div class="container">
    <h2>Email Send Demo</h2>
        <form action="{{ route('sendMail') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                Title:<br>
                <input type="text" name="title" id="title"><br> 
            </div>
            <div class="form-group">
                E-mail:<br>
                <input type="email" name="email" id="email"><br>
            </div>
            <div class="form-group">
                Body:<br>
                <input type="text" name="body" size="50" id="body"><br><br>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>