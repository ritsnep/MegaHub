<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><Form></Form></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
  <div class="container">
    <h1>  Welcome to MegaHub</h1>
    <form action="{{url('/')}}/register", method="get">
        @csrf
      <x-input type="text" name="name" label="Enter your name"/>
      <x-input type="email" name="eMail" label="Enter your email"/>
      <x-input type="password" name="Password" label="Enter your password"/>
            <x-input type="password" name="Re-Password" label="Enter your password again"/>  
        <button class="btn btn-default">Submit</button>
      </form>
  </div>
</body>
</html>