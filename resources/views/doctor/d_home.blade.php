<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A2Z Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

    @include('admin.styles')
  </head>
  <body>
<div class="container-scroller">
      <!-- sidebar -->
      @include('admin.sidebar')
      <!-- navbar -->
      @include('admin.navbar')
      <!-- body -->
      @include('admin.body')
    
      @include('admin.scripts')
        
</div> 
    
  </body>
</html> 