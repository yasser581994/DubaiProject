@extends('backend.layout')


@section('bar')
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6 ">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Admin panel</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="#">Home</a></li>
                        <li id="mess_nav"><span>Messages</span></li>
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
        <div id="message_deleted" class="alert-success" style="text-align: center;display: none">
            <h5>message has been deleted </h5>
        </div>
        <div class="single-table">

            <div class="table-responsive">




                <table class="table text-center">

                    <thead class="text-uppercase bg-light">

                    <tr>
                        <th scope="col">ID</th>

                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">utm_source</th>
                        <th scope="col">utm_medium</th>
                        <th scope="col">status</th>
                        <th scope="col">created_at</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Read</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="display: none" class="message_deleted_class">
                        <th colspan="11">
                            <div class="success alert-success text-center">
                                <h5>
                                    No Messages until now

                                </h5>

                            </div>
                        </th>

                    </tr>

                    @if(count($messages) == 0 )
                        <tr>
                            <th colspan="11">
                                <div class="success alert-success text-center">
                                    <h5>
                                        No Messages until now

                                    </h5>

                                </div>
                            </th>

                        </tr>

                    @else

                        @foreach($messages as $message)
                            <tr class="message{{$message->id}} {{$message->status}}">

                                <th scope="row">{{$message->id}}</th>

                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->utm_source}}</td>
                                <td>{{$message->utm_medium}}</td>
                                <td id="message_status_field{{$message->id}}">
                                    <a href="#"  class="messageStatus" message_status="{{$message->status}}">
                                        {{$message->status}}
                                    </a>
                                </td>
                                <td>
                                    {{$message->created_at}}
                                </td>


                                <td >
                                    <form >
                                        <button  id="xyz" >
                                            <i id="{{$message->id}}"  class="fa fa-remove fa-2x butt"></i>
                                            <input type="hidden" name="message_id" value="{{$message->id}}">
                                        </button>

                                    </form>
                                </td>

                                <td >

                                    @if($message->status=='unread' )
                                        <form class="message_form_status{{$message->id}}">
                                            <button  id="but" >
                                                <i  id="{{$message->id}}" class="fa fa-thumbs-up fa-2x read_btn" ></i>
                                            </button>

                                        </form>
                                    @endif


                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


@section('footer')
    <style>
        #but,#xyz{
            color: blue;
            border: none;
            background: none;
        }
    </style>

    <script>
$(document).ready(function(){
    $(document).on('click','.messageStatus',function (event){
        let anotherStatus ;
        let route='/adminPanel/messages'
        event.preventDefault();
        let status = $(event.target).attr('message_status');
        if(status ==='read')
            anotherStatus ='unread'
        else anotherStatus ='read';

        $('.'+status).show();
        $('.'+anotherStatus).hide();
        $('.breadcrumbs').empty().append(`<li><a href="#">Home</a></li><li><a href="${route}">Messages</a></li><li id=""><span>${status}</span></li>`);


    })
})
        $(document).on('click', '.butt', function (e) {
            e.preventDefault();
            let messageId = e.target.id

            $.ajax({
                type: 'DELETE',
                url: "{{route('delete.message')}}",
                data: {
                    '_token':"{{csrf_token()}}",
                    'message_id':messageId
                },
                success: function (data) {

                    $('.message'+data.id).remove();
                    $('#message_deleted').show();
                    if(data.count_messages==0)
                    {
                        $('.message_deleted_class').show()
                    }

                    setTimeout(function(){
                        $('#message_deleted').hide(1500);

                    },3000)


                }
            });
        });
        $(document).on('click', '.read_btn', function (e) {
            e.preventDefault();
            let messageId = e.target.id

            $.ajax({
                type: 'PUT',
                url: "{{route('read.message')}}",
                data: {
                    '_token':"{{csrf_token()}}",
                    'message_id':messageId
                },
                success: function (data) {
                    // try to replace all raw not just table data ;
                    $('#message_status_field'+data.message_id).parent().removeClass('unread').addClass('read').addClass(`message${data.message_id}`);
                    $('#message_status_field'+data.message_id).replaceWith(`<td id="message_status_field${data.message_id}"><a href="#"  class="messageStatus" message_status="${data.message_status}">read</a></td>`)

                    //      $('#message_status_field'+data.message_id).text(data.message_status);
                     $('.message_form_status'+data.message_id).remove();
                }
            });
        });
    </script>
@endsection





