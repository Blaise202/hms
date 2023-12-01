

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

        <div class="p-0"  align="center">
            @if (session()-> has("message"))
                <div class="alert alert-success">

                    <button type="button" class="close"data-dismiss="alert" >x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="pt-3">
                <table class="table table-info">
                    <tr>
                        <th colspan>Doctor Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Room</th>
                        <th>Specialisation</th>
                        <th>Modify</th>
                        
                    </tr>
                    @foreach ($data as $docData)
                        <tr>
                            <td>
                                {{$docData->f_name}}
                                {{$docData->l_name}}
                                <img style="width: 100px; height:100px" src="doctorimages/{{ $docData->image }}" alt="iii" />
                            </td>
                            <td>{{$docData->email}}</td>
                            <td>{{$docData->phone}}</td>
                            <td>{{$docData->room}}</td>
                            <td>{{ $docData->specialisation }}</td>
                            <td>
                                <a onclick="return confirm('Are you permanently deleting this Doctor?')" href="{{ url('deleteDoctor',$docData->id) }}" class="btn btn-danger"> Delete </a>
                                <a href="{{ url('updateDoctor',$docData->id) }}" class="btn btn-secondary"> Edit </a>
                            </td>
                        </tr>
                    @endforeach 
                   
                </table>
           </div>
        </div>
      </div>

      @include('admin.scripts')
        
    
    
  </body>
</html>