<!DOCTYPE html>
<html lang="en">
  <head>
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

                    <button type="button" class="close" data-dismiss="alert" >x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ url('UploadDoctor') }}" method="post" enctype="multipart/form-data" class="main-form" >
                @csrf
                <div class="row mt-5 " >
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label >First Name</label>
                        <input type="text" name="f_name" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label> Last Name</label>
                        <input type="text" class="form-control" style="color:rgb(136, 105, 105);" name="l_name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label >Phone Number</label>
                        <input type="text" name="phone" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label >Any Other Contact(Optional)</label>
                        <input type="text" name="o_phone" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <label >Birthdate</label>
                        <input type="date" class="form-control" name="dob" style="color:rgb(136, 105, 105);">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label for="">Specialisation</label>
                        <br>
                        <select name="specialisation" style="color:rgb(136, 105, 105);" id="">
                            <option>--Please Select your specialisation here--</option>
                            <option>cardiologists</option>
                            <option>endocrinologists</option>
                            <option>gastroenterologists</option>
                            <option>nephrologists</option>
                            <option>pulmonologists</option>
                            <option>medical geneticists</option>
                            <option>surgeon</option>
                            <option>therapist</option>
                            <option>dentist</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <label >Email Address</label>
                        <input type="text" name="email" style="color:rgb(136, 105, 105);" class="form-control"> 
                    </div>    
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label >Room Nº </label>
                        <input type="number" name="room" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
                        <label >Profile Image </label>
                        <input type="file" name="image" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary" >save</button>
            </form>
        </div>
      </div>

      @include('admin.scripts')
        
    
    
  </body>
</html>