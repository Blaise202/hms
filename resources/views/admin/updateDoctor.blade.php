

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A2Z Admin</title>

    <base href="/public">

    @include('admin.styles')
  </head>
  <body>
<div class="container-scroller">
      
      <!-- sidebar -->
      @include('admin.sidebar')
      <!-- navbar -->
      @include('admin.navbar')
      <!-- body -->
      <div class=" page-body page-body-wrapper">
        
        <div class="container">
            @if(session()->has('success'))
            <div class="alert alert-sussess">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" >X</button>   
            </div>
        @endif
            <form action="{{ url('editDoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5 "  >
                    <div class="col-12 col-sm-6 py-2">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control" style="color: rgb(133, 82, 82)" value="{{ $data->f_name }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label>Last Name</label>
                        <input type="text" class="form-control" style="color: rgb(133, 82, 82)"  name="l_name" value="{{ $data->l_name }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" style="color: rgb(133, 82, 82)"  value="{{ $data->phone }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label>Other Contact</label>
                        <input type="text" name="o_phone" class="form-control" style="color: rgb(133, 82, 82)" value="{{ $data->o_phone }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <label>Birthdate</label>
                        <input type="text" class="form-control" style="color: rgb(133, 82, 82)"  name="dob" value="{{ $data->dob }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label for="">Specialisation</label>
                        <input type="text" class="form-control" style="color: rgb(133, 82, 82)"  name="specialisation" value="{{ $data->specialisation }}">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control"  style="color: rgb(133, 82, 82)"  value="{{ $data->email }}"> 
                    </div>    
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label>Room Nº </label>
                        <input type="number" name="room" class="form-control"  style="color: rgb(133, 82, 82)"  value="{{ $data->room }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
                        <label>Profile Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="doctorimages/{{ $data->image }}" alt="ttt">
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary" >save</button>
            </form>
        </div>
      </div>
      
    
      @include('admin.scripts')
        
    
    
  </body>
</html> 
