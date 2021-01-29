@extends('adminlte.master')

@section('content')
<section class="content">
      <!-- /.box -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Question </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="/questions" action="" method="POST">
            @csrf
              <!-- /.box-body -->

                <!-- textarea -->
                <div class="form-group">
                  <textarea class="form-control" rows="12" placeholder="Enter ..."></textarea>
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </section>
@endsection