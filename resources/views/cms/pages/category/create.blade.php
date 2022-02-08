@extends('cms.layouts.default')
@section('content')
<div class="row" style="margin: 4px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Tambah Surat Penugasan</span>
                </div>

            </div>

        

            <div class="portlet-body form">

                <form id="frmPenugasan">
                @csrf
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Tittle" name="title" value="{{old('title')}}">
                                    <label for="form_control_1">Title</label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Slug" name="slug" value="{{old('slug')}}">
                                    <label for="form_control_1">Slug</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Summary" name="summary" value="{{old('summary')}}">
                                    <label for="form_control_1">Summary</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check is_parent"  name="is_parent" value="1">
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Is Parent </label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info" id="parent_cat_div" style="display: none">
                                        <select class="form-control" id="form_control_1" name="parent_id">
                                            <option value="">--- Parent Category ---</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                        <label for="form_control_1">Parent Category</label>
                                    </div>
                                </div>
                               
                                <button type="button" class="btn blue m-4" style="margin-left: 30px;"
                                    id="btnTunda">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
@push('after-script')
<script>
    $('.is_parent').change(function(e){
        e.preventDefault();
        var check = $('.is_parent').prop('checked');
       if(check){
           $('#parent_cat_div').css("display","none");
       }else{
        $('#parent_cat_div').show();

       }
    });

</script>
@endpush