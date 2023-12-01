

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
      <div class="page-body page-body-wrapper" style="font-family:Arial Narrow;">

        <div class="pt-2">
            @if (session()-> has("message"))
                <div class="alert alert-success">

                    <button type="button" class="close"data-dismiss="alert" >x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-info">
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Approve</th>
                            <th>Cancel</th>
                            <th>Send Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $appoints)
                        <tr>
                            <td>{{$appoints->name}}</td>
                            <td>{{$appoints->email}}</td>
                            <td>{{$appoints->phone}}</td>
                            <td>{{$appoints->dr_name}}</td>
                            <td>{{$appoints->date}}</td>
                            <td>{{$appoints->message}}</td>
                            <td>{{$appoints->status}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{url('approved',$appoints->id)}}">
                                    Approved
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{url('canceled',$appoints->id)}}">
                                    Canceled
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{url('emailview',$appoints->id)}}">
                                    Mail
                                </a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>            
        </div>
      </div>
      @include('admin.scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>