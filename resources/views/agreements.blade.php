@extends('layouts.public')

@section('page-specific-css')
<!-- Page Specific CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="https://use.fontawesome.com/6120d7df05.js"></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row row-header-buttons justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Agreement</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    </div>
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