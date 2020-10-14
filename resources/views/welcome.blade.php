<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    <title>LiveWire</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @livewire('persona-component')
      </div>
    </div>
  </div>

  @livewireScripts

</body>
</html>
