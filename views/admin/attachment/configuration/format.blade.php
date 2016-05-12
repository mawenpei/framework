@extends('admin::layouts')
@section('title')附件管理@endsection
@section('content')
    <div class="page clearfix">
        <ol class="breadcrumb breadcrumb-small">
            <li>后台首页</li>
            <li><a href="{{ url('admin/attachment') }}">附件管理</a></li>
            <li><a href="{{ url('admin/attachment/format') }}">附件格式配置</a></li>
        </ol>
        <div class="page-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-lined clearfix mb30">
                        <div class="panel-heading"><i>页面：附件格式配置</i></div>
                        <div class="row mt20">
                            <div class="col-md-12">
                                <form class="form-horizontal col-md-12" action="{{ url('admin/attachment/format') }}" autocomplete="off" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">允许上传的图片格式</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="allow_image_format" rows="3">{{ app('request')->old('allow_image_format', $allow_image_format) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">允许远程下载的文件格式</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="allow_catcher_format" rows="3">{{ app('request')->old('allow_catcher_format', $allow_catcher_format) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">允许上传的视频格式</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="allow_video_format" rows="3">{{ app('request')->old('allow_video_format', $allow_video_format) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">允许上传的文件格式</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="allow_file_format" rows="3">{{ app('request')->old('allow_file_format', $allow_file_format) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">允许管理的图片格式</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="allow_manager_image_format" rows="3">{{ app('request')->old('allow_manager_image_format', $allow_manager_image_format) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">允许管理的文件格式</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="allow_manager_file_format" rows="3">{{ app('request')->old('allow_manager_file_format', $allow_manager_file_format) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label">配置说明</label>
                                        <label class="col-md-4 control-label">使用半角分号分隔每一个格式</label>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary btn-sm" style="width: 100%;">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection