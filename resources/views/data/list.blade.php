@extends('layouts.app')
@section('css')
<!-- BEGIN OF PAGE LEVEL CSS -->
<link href="{{ URL::asset('css/common/plugins.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/common/dashboard.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/plugins/components-rounded.min.css') }}" rel="stylesheet" type="text/css" />  
<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />  
<!-- END OF PAGE LEVEL CSS -->
<style>

    placeholder {
        color: red;
    }
</style>
@endsection
@section('content')
<!-- BEGIN OF PAGE CONTENT WRAPPPER BODY -->
<div class="row px-5">                 
    <div class="col-12 row ">
        <div class="cust-container-desc-title float-left row" style="margin-bottom: 0px;">
            <div class=" col-md-8 p-2">
                <h3 class="cust-container-desc-title-h3 cus-school-teachers-head custom_teachers_count cus-font-family-lato ">
                    <span class="cus-admin-logo">Data List</span>
                </h3>
            </div>
            <div class="col-md-4 p-2">
                
                <a href="/create-data"><input type="button" value="Create" class="btn btn-success"></a>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reportModal"> Open Modal</button>

        </div>

    </div>
    <a href="/activate-data"><input type="button" value="Activate" class="btn btn-success"></a>
    <a href="/dashboard"><input type="button" value="Back" class="btn btn-info"></a>

    <div class="col-12 p-0">
        <hr class="cus-hr-1 mt-0 p-0">
    </div>
    <div class="col-12 p-0">
        @if ($message = Session::get('success'))
        <div class="alert alert-success ">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
        <div style="overflow-x:auto;">

                <table class="table table-bordered cus-table-css custom_class_table" id="sample_4" style="word-wrap: normal" >
                    <thead class="cus-table-th" style="background-color: transparent !important;">
                        <tr>
                            <th  class="cus-align-center cus-font-family-lato" >S.No.</th>
                            <th class="cus-align-center cus-font-family-lato" >Name </th>
                            <th class="cus-align-center cus-font-family-lato" >Description</th>
                            <th class="cus-align-center cus-font-family-lato">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($datas as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->description}}</td>
                            <td>
                                <a href="{{url('edit-data?id='.$data['id'])}}"><input type="button" value="EDIT" class="btn btn-info"></a> 

                                <a href="{{url('delete-data?id='.$data['id'])}}"><input type="button" value="DELETE" class="btn btn-danger"></a>  
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6">Data not found!</td></tr>
                        @endforelse
     
                    </tbody>
                </table>
            </div>

            //
            <!-- Modal --> 
                <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                <div class="modal-dialog" role="document">     
               <div class="modal-content"> 
                   <div class="modal-header"> 
                      <h5 class="modal-title" id="exampleModalLabel">New Modal</h5>
                 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> 
            </button> 
            </div> 
                <div class="modal-body"> add here all things+ </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                </div> 
                  </div> 
               </div> 
            </div>
            //
        
    </div>                           
</div> 
@endsection

@section('js')
<script type="text/javascript">
    
</script>

@endsection