@extends('backend.layout')


@section('bar')
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

    @include('partial.session')

    <div class="card-body">


        <h4 class="header-title">Edit Admin Data </h4>
        <form method="post" action="{{Route('admin.edit.account')}}">
            @csrf
        <div class="form-group" >
            <label for="email"> Email </label>
            <input class="form-control email_input" id="email" name="email" type="text"  value="{{$admin->email}}">
            <div class="alert alert-warning" id="alert_email" style="display:none"></div>
        </div>

        <div class="form-group" >
            <label for="phone"> Phone </label>
            <input class="form-control" id="phone" name="phone" type="text"  value="{{$admin->phone}}">
            <div class="alert alert-warning" id="alert_phone" style="display:none"></div>
        </div>
        <div class="form-group" >
            <label for="notifyEmail"> Notify Email </label>
            <input class="form-control" id="notifyEmail" name="notifyEmail" type="text"  value="{{$admin->notifyMail}}">
            <div class="alert alert-warning" id="alert_notify_email" style="display:none"></div>
        </div>
        <div class="form-group" >
            <label for="from_email"> From Email </label>
            <input class="form-control" id="from_email" name="from_email" type="text"  value="{{$admin->from_email}}">
            <div class="alert alert-warning" id="alert_from_email" style="display:none"></div>
        </div>

        <div class="form-group" >
            <label for="old_password"> Old password </label>
            <input class="form-control" id="old_password" name="old_password" type="password"  value="">
        </div>
        <button type="submit" id="sub_admin_edit" class="btn btn-primary mt-4 pr-4 pl-4" style="margin-left: 40%">Submit</button>
        </form>
    </div>





    <div class="card-body">

        <h4 class="header-title">Edit Admin Password </h4>
        <form method="post" action="{{Route('admin.edit.password')}}">
            @method('put')
            @csrf
        <div class="form-group" >
            <label for="old_password"> Old password </label>
            <input class="form-control" id="old_password" name="old_password" type="password"  value="">
        </div>
        <div class="form-group" >
            <label for="newPassword"> New password </label>
            <input class="form-control" id="newPassword" name="newPassword" type="password"  value="">

        </div>

        <div class="form-group" >
            <label for="confirm_new_password"> Confirm New password </label>
            <input class="form-control" id="confirm_new_password" name="confirm_new_password" type="password"  value="">
            <div class="alert alert-warning" id="alert_new_password" style="display:none"></div>
        </div>
        <button type="submit" id="sub_admin_password" class="btn btn-primary mt-4 pr-4 pl-4" style="margin-left: 40%">Submit</button>
        </form>
    </div>



@endsection


@section('footer')
{{--    <script>--}}
{{--        $(document).ready(function(){--}}
{{--            $('#sub_admin_edit').on('click',function(event){--}}
{{--                event.preventDefault();--}}
{{--                let notifyEmail=$('#notifyEmail').val();--}}
{{--                let from_email=$('#from_email').val();--}}

{{--                let email = $('#email').val();--}}
{{--                let phone =$('#phone').val();--}}
{{--                let oldPassword=$('#oldPass').val();--}}

{{--                $.ajax({--}}
{{--                    type:'post' ,--}}
{{--                    url:'{{Route('admin.edit.account')}}',--}}
{{--                    data:{--}}
{{--                        '_token':"{{csrf_token()}}",--}}
{{--                        'notifyEmail':notifyEmail ,--}}
{{--                        'from_email':from_email ,--}}
{{--                        'email':email ,--}}
{{--                        'phone':phone ,--}}
{{--                        'old_password':oldPassword ,--}}
{{--                    },--}}
{{--                    success:function(data){--}}
{{--                       if(data.status===true)--}}
{{--                       {--}}
{{--                           $('#edit_admin').show(1300);--}}
{{--                           $('#notifyEmail').text(data.newNotifyEmail);--}}
{{--                           $('.email_input').text(data.newEmail);--}}
{{--                           $('#phone').text(data.newPhone);--}}
{{--                           $('#from_email').text(data.from_email);--}}

{{--                           setTimeout(function(){--}}
{{--                               $('#edit_admin').hide(1300);--}}
{{--                           },3100)--}}
{{--                       }--}}
{{--                       else if(data.status === false)--}}
{{--                        {--}}
{{--                            $('#wrong_password').show(1200);--}}
{{--                            setTimeout(function(){--}}

{{--                                $('#wrong_password').hide(1200);--}}

{{--                            },3100)--}}
{{--                        }--}}

{{--                    }--}}
{{--                })--}}
{{--            })--}}
{{--        })--}}
{{--        $(document).ready(function(){--}}
{{--            $('.email_input').on('blur',function(){--}}
{{--                let email = $('#email').val();--}}
{{--                let emailContainsAt = email.includes('@');--}}
{{--                let emailContainsCom=email.includes('.com');--}}
{{--                if(!emailContainsAt || !emailContainsCom)--}}
{{--                {--}}

{{--                    $('#alert_email').text('invalid Email').show();--}}
{{--                    $('.email_input').css('border','1px solid #F00');--}}
{{--                    setTimeout(()=>{--}}
{{--                        $('#alert_email').hide(1500);--}}
{{--                    },3000)--}}
{{--                }--}}
{{--                else{--}}

{{--                    $('.email_input').css('border','1px solid #080');--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--        $(document).ready(()=>{--}}
{{--            $('#phone').blur(()=>{--}}
{{--                let phone = $('#phone').val()--}}
{{--                if(isNaN(phone))--}}
{{--                {--}}
{{--                    $('#alert_phone').text('phone must be a number').show();--}}
{{--                    $('#phone').css('border','1px solid #F00');--}}
{{--                    setTimeout(function(){--}}
{{--                        $('#alert_phone').hide(1500);--}}
{{--                    },3000)--}}
{{--                }--}}

{{--                else if(phone.length<6){--}}
{{--                    $('#alert_phone').text('phone must be at least 6 numbers').show();--}}
{{--                    $('#phone').css('border','1px solid #F00');--}}
{{--                    setTimeout(function(){--}}
{{--                        $('#alert_phone').hide(1500);--}}
{{--                    },3000)--}}
{{--                }--}}
{{--                else{--}}
{{--                    $('#phone').css('border','1px solid #080');--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--        $(document).ready(function(){--}}
{{--            $('#notifyEmail').blur(function(){--}}
{{--                let notifyEmail = $('#notifyEmail').val();--}}
{{--                let notifyEmailContainsAt = notifyEmail.includes('@');--}}
{{--                let notifyEmailContainsCom=notifyEmail.includes('.com');--}}
{{--                if(!notifyEmailContainsAt || !notifyEmailContainsCom)--}}
{{--                {--}}

{{--                    $('#alert_notify_email').text('invalid Email').show();--}}
{{--                    $('.email_input').css('border','1px solid #F00');--}}
{{--                    setTimeout(()=>{--}}
{{--                        $('#alert_notify_email').hide(1500);--}}
{{--                    },3000)--}}
{{--                }--}}
{{--                else{--}}
{{--                    $('#notifyEmail').css('border','1px solid #080');--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--        $(document).ready(function(){--}}
{{--            $('#sub_admin_password').on('click',function(event){--}}
{{--                event.preventDefault();--}}

{{--                let oldPassword=$('#oldPassword').val();--}}
{{--                let newPassword=$('#newPass').val();--}}
{{--                let confirm_new_password=$('#confirm_new_password').val();--}}
{{--                $.ajax({--}}
{{--                    type:'PUT' ,--}}
{{--                    url:'{{Route('admin.edit.password')}}',--}}
{{--                    data:{--}}
{{--                        '_token':"{{csrf_token()}}",--}}
{{--                        'confirm_new_password':confirm_new_password,--}}
{{--                        'newPassword':newPassword,--}}
{{--                        'old_password':oldPassword ,--}}
{{--                    },--}}
{{--                    success:function(data){--}}
{{--                        if(data.status==='notConfirmed')--}}
{{--                        {--}}
{{--                            $('#wrong_confirm_password').show(1300);--}}
{{--                            setTimeout(function(){--}}
{{--                                $('#wrong_confirm_password').hide(1300);--}}
{{--                            },3100)--}}
{{--                        }--}}
{{--                        else if(data.status === 'notMatched')--}}
{{--                        {--}}
{{--                            $('#wrong_old_password').show(1300);--}}
{{--                            setTimeout(function(){--}}

{{--                                $('#wrong_old_password').hide(1300);--}}

{{--                            },3100)--}}
{{--                        }--}}
{{--                        else if(data.status === 'nullPass')--}}
{{--                        {--}}
{{--                            $('#password_null').show(1300);--}}
{{--                            setTimeout(function(){--}}

{{--                                $('#password_null').hide(1300);--}}

{{--                            },3100)--}}
{{--                        }--}}

{{--                        else if(data.status===true){--}}
{{--                            $('#edit_admin_password').show(1300)--}}
{{--                            setTimeout(function(){--}}

{{--                                $('#edit_admin_password').hide(1300);--}}

{{--                            },3100)--}}
{{--                        }--}}

{{--                    }--}}
{{--                })--}}
{{--            })--}}
{{--        })--}}
{{--        $(document).ready(function(){--}}
{{--            $('#confirm_new_password').blur(function(){--}}
{{--                let newPassword=$('#newPass').val();--}}
{{--                let confirm_new_password=$('#confirm_new_password').val();--}}
{{--                if(newPassword !== confirm_new_password){--}}
{{--                    $('#alert_new_password').text('the two password not matches ').show(1300);--}}
{{--                    $('#confirm_new_password').css('border','1px solid #F00');--}}
{{--                    $('#newPass').css('border','1px solid #F00');--}}
{{--                    setTimeout(function(){--}}
{{--                        $('#alert_new_password').hide(1300);--}}
{{--                    },3100)--}}
{{--                }--}}
{{--                else{--}}
{{--                    $('#confirm_new_password').css('border','1px solid #080');--}}
{{--                    $('#newPass').css('border','1px solid #080');--}}
{{--                }--}}
{{--            })--}}
{{--            $('#oldPassword').blur(function(){--}}
{{--                let oldPass=$('#oldPassword').val();--}}
{{--                if(!oldPass){--}}

{{--                    $('#oldPassword').css('border','1px solid #F00');--}}

{{--                }--}}
{{--                else{--}}
{{--                    $('#oldPassword').css('border','1px solid #080');--}}
{{--                }--}}
{{--            })--}}
{{--            $('#oldPass').blur(function(){--}}
{{--                let oldPass=$('#oldPass').val();--}}
{{--                if(!oldPass){--}}

{{--                    $('#oldPass').css('border','1px solid #F00');--}}

{{--                }--}}
{{--                else{--}}
{{--                    $('#oldPass').css('border','1px solid #080');--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}

@endsection
