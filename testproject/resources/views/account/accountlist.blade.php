@extends('layout.bothlayout')

@section('title', 'Account')

@section('content')

  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          <div class="heading">
              <h1>Accounts</h1>
              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Add Account</button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">

                      <div class="modal-content">

                        <div class="modal-header">

                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="exampleModalLabel">Add Account</h4>

                        </div>

                                  <!-- general form elements disabled -->
                        <div class="box box-warning">
                          <!-- /.box-header -->
                          <div class="box-body">
                            <form role="form" action="/account" method="post">
                              <!-- text input -->
                              {{ csrf_field() }}
                              <div class="form-group">
                                <label>Account Name</label>
                                <input type="text" class="form-control" name="acc_name" placeholder="Enter Your Account Name">
                              </div>

                              <div class="form-group">
                                <label>Account Code</label>
                                <input type="text" class="form-control" name="acc_code" placeholder="Account Code">
                              </div>

                              <div class="form-group">
                                <label>Balance</label>
                                <input type="text" class="form-control" name="balance" placeholder="Enter Your Balance">
                              </div>

                               <!-- select -->
                              <div class="form-group">
                                <label for="type">Select Account type</label>
                                <select class="form-control" name="type">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                              
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
                              </div>

                              <div class="form-group">
                                <label>Date:</label>
                                <div class="input-group date">

                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>

                                  <input type="date" class="form-control pull-right" name="date" id="datepicker">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Save</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                              </div>

                            </form>
                          </div>
                          <!-- /.box-body -->
                      </div>
                  </div>
                </div>
              </div>
          </div>               
                  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Account Lists</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Account Name</th>
                  <th>Acc_code</th>
                  <th>Balance</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $row)
                  <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->acc_name}}</td>
                      <td>{{$row->acc_code}}</td>
                      <td>{{$row->balance}}</td>
                      <td>{{$row->description}}</td>
                      <td>
                          <a href="#">Edit</a> | <a href="#">Delete</a>
                      </td>
                  </tr>
              @endforeach

                </tbody>

                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </div>

@endsection