@extends('layouts.public')

@section('page-specific-css')
<!-- Page Specific CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
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
            <tbody>
                @foreach ($certs as $cert)
                <tr>
                    <td>{{ \App\Http\Controllers\Helpers::DaysFromNow($cert->expiration_date) }}</td>
                    <td>{{ $cert->expiration_date }}</td>
                    <td>{{ $cert->url }}</td>
                    <td>{{ $cert->last_email or 'No Emails' }}</td>
                    <td>{{ $cert->incident or 'No Incident' }}</td>
                    <td>{{ $cert->agreement->name  }}</td>
                    <td><button type="button" class="btn btn-secondary">Send Mail</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
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