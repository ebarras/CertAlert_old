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
                <th>Customer</th>
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
                <th>Customer</th>
                <th>Options</th>
            </tr>
        </tfoot> -->
        <tbody>
            <tr>
                <td>7</td>
                <td>2017-09-23</td>
                <td>www.website.com</td>
                <td>2017-09-09</td>
                <td>INC000000344621</td>
                <td>FSA0801</td>
                <td><button type="button" class="btn btn-secondary" style="line-height: .55">Send Mail</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>2017-09-23</td>
                <td>www.google.com</td>
                <td>2017-09-09</td>
                <td>INC000000344621</td>
                <td>FSA0801</td>
                <td><button type="button" class="btn btn-secondary" style="line-height: .55">Send Mail</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>2017-09-23</td>
                <td>www.fbi.com</td>
                <td>2017-09-09</td>
                <td>INC000000344621</td>
                <td>FSA0801</td>
                <td><button type="button" class="btn btn-secondary" style="line-height: .55">Send Mail</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>2017-09-23</td>
                <td>www.randomwebsiteijustmade.net</td>
                <td>2017-09-09</td>
                <td>INC000000344621</td>
                <td>FSA0801</td>
                <td><button type="button" class="btn btn-secondary" style="line-height: .55">Send Mail</button></td>
            </tr>
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