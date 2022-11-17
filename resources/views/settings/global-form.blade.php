@extends('layouts.admin')

@section('title', 'الاعدادات')
@section('content-header', 'الاعدادات')

@section('content')

<div class="card">
    <div class="card-body">
    <style>


        .btn.red:not(.btn-outline) {
            color: #fff;
            background-color: #e7505a;
            border-color: #e7505a;
        }
        .btn.default:not(.btn-outline) {
            color: #666;
            background-color: #e1e5ec;
            border-color: #e1e5ec;
        }
    </style>
    <script type="text/javascript">

        $("a[data-dismiss='fileinput']").on("click",function(){
            $("input[name='rmv_image']").attr("value","true");
            $("input[name='image']").attr("value","");
        });

    </script>
    <div class="box">
        <div class="box-body">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="{{$route}}">
                    {!! csrf_field() !!}
                    <div class="portlet-body form">
                        <div class="portlet light">

                        @foreach($settings as $setting)


                            @if($setting->type == 0)
                            {{--input--}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="global_meta_title">
                                    {{trans('settings.'.$setting->key)}}
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" id="global_meta_title" placeholder="{{trans('settings.'.$setting->key)}}" name="{{$setting->key}}" class="form-control" value="{{$setting->value}}" />
                                </div>
                            </div>


                                    @elseif($setting->type == 2)

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="global_meta_title">
                                                {{trans('settings.'.$setting->key)}}
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" id="global_meta_title" placeholder="{{trans('settings.'.$setting->key)}}" name="{{$setting->key}}" class="form-control" value="{{$setting->value}}" />

                                            <select name="{{$setting->key}}">
                                                <option value="">اختار الدوله</option>
                                                @foreach(Countries() as $country)
                                                    <option value="{{$country->name_en}}" @if($setting->value ==$country->name_en ) selected @endif>{{$country->name_ar}}</option>

                                                @endforeach
                                            </select>
                                            </div>
                                        </div>

                                @elseif($setting->type == 1)

                            {{--image--}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">  {{trans('settings.'.$setting->key)}}</label>
                                <div class="col-md-3">
                                    <div class="fileinput @if($setting->value) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; background-color: #0c0c0c ;">
                                                <img class="fileinput-filename" src="{{ asset('uploads/setting') }}/{{$setting->value}}" alt="" />
                                            </div>
                                            <div>
                                            <span class="btn default btn-file">
                                                <span class="fileinput-exists">  {{trans('app.change')}} </span>
                                                <input type="file" name="{{$setting->key}}" value="{{$setting->value}}">
                                                <input type="hidden" name="rmv_image" value="false">
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
@endforeach
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-4">
                                               <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            $('.select2').select2();
            $('input[name="api_mnadib"]').on('switchChange.bootstrapSwitch', function(event, state) {
                if(state == true){
                    $(this).attr("value",1);
                }else{
                    $(this).attr("value",0);
                }
            });
        </script>

    </div>
    </div>

    </div>
</div>
@endsection
