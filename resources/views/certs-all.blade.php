@extends('layouts.public')

@section('page-specific-css')
<!-- Page Specific CSS -->
    <script src="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="starter-template">
      <h1>All Certs</h1>
      <p class="lead">This is the same table as the main page, but with all certs (from all time?)</p>
    </div>
  </div>
</div><!-- /.container -->
@endsection

@section('page-specific-js')
<!-- Page Specific JS -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection