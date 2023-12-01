

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A2Z Admin</title>

    @include('admin.styles')
  </head>
  <body>
    <div class="container-scroller">
      <!-- sidebar -->
      @include('admin.sidebar')
      <!-- navbar -->
      @include('admin.navbar')
      <!-- body -->
      <div class="container-fluid page-body page-body-wrapper">

        <div class="container">
            @if (session()-> has("message"))
                <div class="alert alert-success">

                    <button type="button" class="close"data-dismiss="alert" >x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ url('sendemail',$data->id) }}" method="post"  class="main-form" >
                @csrf
                <div class="row mt-5 " >
                    <div class="col-12 col-sm-12 py-2 wow fadeInRight">
                        <label>Greetings</label>
                        <input type="text" class="form-control" style="color:rgb(136, 105, 105);" name="greetings">
                    </div>
                    <div class="col-12 py-2  mb-2 wow fadeInUp">
                        <label>Body</label>
                        <textarea name="body" class="form-control h-100" rows="5" placeholder="Enter Your Message here..." style="color:rgb(136, 105, 105);"></textarea>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label >Action text</label>
                        <input type="text" name="actiontext" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label >Action url</label>
                        <input type="text" name="actionurl" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    
                    <div class="col-12 col-sm-12 py-2 wow fadeInLeft">
                        <label >End part</label>
                        <input type="text" name="endpart" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" >send mail</button>
            </form>
        </div>
      </div>

      @include('admin.scripts')
        
    
    
  </body>
</html>