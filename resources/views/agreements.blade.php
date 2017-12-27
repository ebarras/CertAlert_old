@extends('layouts.public')

@section('page-specific-css')
<!-- Page Specific CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="table">
        <table id="home-agreements-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Agreement</th>
                    <th># of Contact Emails</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agreements as $agreement)
                <tr>
                    <td>{{ $agreement->name }}</td>
                    <td>{{ $agreement->contacts_count }}</td>
                    <td><button type="button" class="btn btn-secondary">Edit</button></td>
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
          $('#home-agreements-table').DataTable();
        } );
    </script>
@endsection