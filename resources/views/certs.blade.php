@extends('layouts.public')

@section('page-specific-css')
<!-- Page Specific CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">

  <!-- <div class="starter-template">
    <h1>Certs Ordered By Need</h1>
    <p class="lead">Certs that need action here. Blank if no action needed?</p>
  </div> -->

  <div class="table">
    <table id="home-certs-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Days Left</th>
                <th>Expiration Date</th>
                <th>URL</th>
                <th>Last Email</th>
                <th>Incident #</th>
                <th>Agreement</th>
                <th>Options</th>
            </tr>
        </thead>
        <!-- <tfoot>
            <tr>
                <th>Days Left</th>
                <th>Expiration Date</th>
                <th>URL</th>
                <th>Last Email</th>
                <th>Incident #</th>
                <th>Agreement</th>
                <th>Options</th>
            </tr>
        </tfoot> -->
        <tbody>
            @foreach ($certs as $cert)
            <tr>
                <td>{{ \App\Http\Controllers\Helpers::DaysFromNow($cert->expiration_date) }}</td>
                <td>{{ $cert->expiration_date }}</td>
                <td>{{ $cert->url }}</td>
                <td>{{ $cert->last_email or 'No Emails' }}</td>
                <td>{{ $cert->incident or 'No Incident' }}</td>
                <td>{{ $cert->agreement->name  }}</td>
                <td><button type="button" class="btn btn-secondary" style="line-height: .55">Send Mail</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

</div><!-- /.container -->
@endsection

@section('page-specific-js')
<!-- Page Specific JS -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#home-certs-table').DataTable();
        } );
    </script>
@endsection