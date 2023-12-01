
@include('sweetalert::alert')
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
            Alert::success('NurseAdded','Anew nurse is successifully added');
            @endif
            <form action="{{ url('UploadNurse') }}" method="post" enctype="multipart/form-data" class="main-form" >
                @csrf
                <div class="row mt-5 " >
                    <div class="col-12 col-sm-12 py-2 wow fadeInLeft">
                        <label >Full Name</label>
                        <input type="text" name="name" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label for="">Gender</label>
                        <br>
                        <select name="gender" style="color:rgb(136, 105, 105);" id="">
                            <option>-----Please Select your Gender here-----</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <label >Birthdate</label>
                        <input type="date" class="form-control" name="bdate" style="color:rgb(136, 105, 105);">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label >Phone Number</label>
                        <input type="text" name="phone" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label >Any Other Contact(Optional)</label>
                        <input type="text" name="o_phone" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    
                    
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <label >Email Address</label>
                        <input type="text" name="email" style="color:rgb(136, 105, 105);" class="form-control"> 
                    </div>    
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" >
                        <label >Profile Image </label>
                        <input type="file" name="image" style="color:rgb(136, 105, 105);" class="form-control">
                    </div>
                    
                </div>
                <button onclick="Alert::success('NurseAdded','Anew nurse is successifully added');" type="submit" class="btn btn-primary" >save</button>
            </form>
        </div>
      </div>

      @include('admin.scripts')
        
    
    
  </body>
</html>