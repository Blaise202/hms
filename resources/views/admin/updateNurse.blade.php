

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
            <form action="{{ url('editNurse', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5 "  >
                    <div class="col-12 col-sm-12 py-2">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" style="color: rgb(133, 82, 82)" value="{{ $data->name }}">
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
                        <input type="text" class="form-control" style="color: rgb(133, 82, 82)"  name="bdate" value="{{ $data->bdate }}">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label for="">Gender</label>
                        <select type="text" class="form-control" style="color: rgb(133, 82, 82)"  name="gender" value="">
                            <option value="">{{ $data->gender }}</option>
                            <option value="">male</option>
                            <option value="">female</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control"  style="color: rgb(133, 82, 82)"  value="{{ $data->email }}"> 
                    </div> 
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
                        <label>Profile Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="nursesimages/{{ $data->image }}" alt="ttt">
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary" >save</button>
            </form>
        </div>
      </div>
      
    
      @include('admin.scripts')
        
    
    
  </body>
</html> 
