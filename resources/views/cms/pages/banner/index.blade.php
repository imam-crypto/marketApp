@extends('cms.layouts.default')
@section('content')

<div class="col-md-12">
  
<div class="row">
    @if($message = Session::get('sukses'))
    <div class="alert alert-primary" role="alert">
       {{$message}}
      </div>
    
@endif    

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="btn-group">
                    <a href="#basic" id="sample_editable_1_new" class="btn sbold green" data-toggle="modal">  <i class="fa fa-plus"></i>Add New Banner
                    </a>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
          
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">

                        <div class="col-md-6 m-1" style="float: right">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th> Title </th>
                            <th> Slug </th>
                            <th> Description </th>
                            <th> Status </th>
                            <th> Photo </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                               1
                            </td>
                            <td> tes </td>
                            <td>
                                tes
                            </td>
                            <td>
                                <span class="label label-sm label-warning">tes </span>
                            </td>
                            <td class="center"> tes</td>
                            <td class="center"> tes</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="icon-flag"></i> Comments
                                                <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                     
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Form Add  Banner</h4>
                    </div>
                    <div class="modal-body"> 
                        <form role="form" method="POST" action="{{route('banner.store')}}" enctype="multipart/form-data">
                          @csrf    
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control @error('title')
                                    is-invalid
                                @enderror" id="form_control_1" name="title" value="{{old('title')}}">
                                    <label for="form_control_1">Title</label>
                                    @error('title')
                                    <div class="div" class="text-muted">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control" id="form_control_1" name="slug">
                                    <label for="form_control_1">Slug</label>
                                </div>
                             
                                <div class="form-group form-md-line-input">
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Description"></textarea>
                                    <label for="form_control_1">Description</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="file" class="form-control" id="form_control_1" name="photo">
                                    <label for="form_control_1">Photo</label>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <select class="form-control edited" id="form_control_1" name="status">
                                        <option value="">Select Status</option>
                                        <option value="active" {{old('status') == 'active' ? 'selected' :'' }}>Active</option>
                                        <option value="inactive" {{old('status') == 'inactive' ? 'selected' :'' }}>Inactive</option>
                                    </select>
                                    <label for="form_control_1">Dropdown sample</label>
                                </div>
                               
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">Submit</button>
                            </div>
                        </form>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script>
    CKEDITOR.replace('description');
    @if (count($errors) > 0)
    $('#basic').modal('show');
@endif
</script>


@endpush