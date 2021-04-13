@extends('backend.layout')


@section('bar')
    @include('partial.session')

    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Admin panel</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="#">Home</a></li>
                        <li><span>Settings</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('admin/images/author/avatar.png')}}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{'Admin'}}<i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{Route('admin.account')}}">Account</a>
                        <a class="dropdown-item" href="{{Route('admin.logout')}}">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card-body">





        <h4 class="header-title"> Site Setting </h4>
            <form id="form_id" method="post" action="{{route('admin.edit.settings')}}">
                @csrf
        @foreach($settings as $setting)
                <div class="form-group" >
                    <label for="{{$setting->setting_name}}"> {{$setting->setting_name}} </label>
                    <input  class="form-control" id="{{$setting->setting_name}}" name="{{$setting->setting_name}}" type="{{($setting->setting_name=='email'?'email':'text')}}"  value="{{$setting->setting_value}}" required>

                </div>

            @endforeach
        <button type="submit" id="submit_site_setting_info" class="btn btn-primary mt-4 pr-4 pl-4" style="margin-left: 40%">Submit</button>
            </form>
    </div>
@endsection


@section('footer')


@endsection



