

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
      <div class="page-body page-body-wrapper block">

        <div class=" container-fluid pt-2 ">
            @if (session()-> has("message"))
                <div class="alert alert-success">

                    <button type="button" class="close"data-dismiss="alert" >x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="">
                <table class="table table-info">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>BirhtDate</th>
                            <th>Email</th>					
                            <th>Phone</th>
                            <th>o_phone</th>
                            <th>Remove</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                     <tbody>
                        @foreach ($data as $nurseData)
                        <tr>
                            <td>
                                {{$nurseData->name}}
                                <img src="nursesimages/{{ $nurseData->image }}" style="height: 80px; width:80px;"> 
                            </td>
                            <td>{{$nurseData->gender}}</td>
                            <td>{{$nurseData->bdate}}</td>
                            <td>{{$nurseData->email}}</td>
                            <td>{{$nurseData->phone}}</td>
                            <td>{{$nurseData->o_phone}}</td>
                            <td>
                                <a onclick="return confirm('Are you permanently deleting this Nurse?')" class="btn btn-danger" href="{{url('DeleteNurse',$nurseData->id)}}">
                                    Remove
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{url('UpdateNurse',$nurseData->id)}}">
                                    Update
                                </a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>            
        </div>
        <div class="col-md-3 p-2 mb-0 mt-3 ">
            <a class="nav-link btn btn-success create-new-button"aria-expanded="false" href="{{ url('AddNurse') }}">Add New</a>
        </div>  
    </div>
        
    </div>
      @include('admin.scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>