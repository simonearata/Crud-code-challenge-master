<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
</head>
<body>
  
  <header>
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn-success">Home</a>
      <a href="{{ route('inputs.create') }}" class="btn btn-success">Crea input</a>
    </div>
  </header>

</body>
</html>