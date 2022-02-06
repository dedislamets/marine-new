@extends('home')
@section('content')
<style>
     #custom-search-input {
  background: #e8e6e7 none repeat scroll 0 0;
  margin: 0;
  padding: 10px;
}
   #custom-search-input .search-query {
   background: #fff none repeat scroll 0 0 !important;
   border-radius: 4px;
   height: 33px;
   margin-bottom: 0;
   padding-left: 7px;
   padding-right: 7px;
   }
   #custom-search-input button {
   background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
   border: 0 none;
   border-radius: 3px;
   color: #666666;
   left: auto;
   margin-bottom: 0;
   margin-top: 7px;
   padding: 2px 5px;
   position: absolute;
   right: 0;
   z-index: 9999;
   }
   .search-query:focus + button {
   z-index: 3;   
   }
   .all_conversation button {
   background: #f5f3f3 none repeat scroll 0 0;
   border: 1px solid #dddddd;
   height: 38px;
   text-align: left;
   width: 100%;
   }
   .all_conversation i {
   background: #e9e7e8 none repeat scroll 0 0;
   border-radius: 100px;
   color: #636363;
   font-size: 17px;
   height: 30px;
   line-height: 30px;
   text-align: center;
   width: 30px;
   }
   .all_conversation .caret {
   bottom: 0;
   margin: auto;
   position: absolute;
   right: 15px;
   top: 0;
   }
   .all_conversation .dropdown-menu {
   background: #f5f3f3 none repeat scroll 0 0;
   border-radius: 0;
   margin-top: 0;
   padding: 0;
   width: 100%;
   }
   .all_conversation ul li {
   border-bottom: 1px solid #dddddd;
   line-height: normal;
   width: 100%;
   }
   .all_conversation ul li a:hover {
   background: #dddddd none repeat scroll 0 0;
   color:#333;
   }
   .all_conversation ul li a {
  color: #333;
  line-height: 30px;
  padding: 3px 20px;
}
   .member_list .chat-body {
   margin-left: 47px;
   margin-top: 0;
   }
   .top_nav {
   overflow: visible;
   }
   .member_list .contact_sec {
   margin-top: 3px;
   }
   .member_list li {
   padding: 6px;
   }
   .member_list ul {
   border: 1px solid #dddddd;
   }
   .chat-img img {
   height: 34px;
   width: 34px;
   }
   .member_list li {
   border-bottom: 1px solid #dddddd;
   padding: 6px;
   }
   .member_list li:last-child {
   border-bottom:none;
   }
   .member_list {
   height: 380px;
   overflow-x: hidden;
   overflow-y: auto;
   }
   .sub_menu_ {
  background: #e8e6e7 none repeat scroll 0 0;
  left: 100%;
  max-width: 233px;
  position: absolute;
  width: 100%;
}
.sub_menu_ {
  background: #f5f3f3 none repeat scroll 0 0;
  border: 1px solid rgba(0, 0, 0, 0.15);
  display: none;
  left: 100%;
  margin-left: 0;
  max-width: 233px;
  position: absolute;
  top: 0;
  width: 100%;
}
.all_conversation ul li:hover .sub_menu_ {
  display: block;
}
.new_message_head button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
}
.new_message_head {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  font-size: 13px;
  font-weight: 600;
  padding: 18px 10px;
  width: 100%;
}
.message_section {
  border: 1px solid #dddddd;
}
.chat_area {
  float: left;
  height: 380px;
  overflow-x: hidden;
  overflow-y: auto;
  width: 100%;
}
.chat_area li {
  padding: 14px 14px 0;
}
.chat_area li .chat-img1 img {
  height: 40px;
  width: 40px;
}
.chat_area .chat-body1 {
  margin-left: 50px;
}
.chat-body1 p {
  background: #fbf9fa none repeat scroll 0 0;
  padding: 10px;
  border-radius:5px;
}
.chat_area .admin_chat .chat-body1 {
  margin-left: 0;
  margin-right: 50px;
}
.chat_area li:last-child {
  padding-bottom: 10px;
}
.message_write {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  padding: 15px;
  width: 100%;
}

.label-tgl {
    text-align: center;
    padding: 0px;
    font-weight: 700;
    font-style: italic;
    border-radius: 5px;
    height: 25px;
}
.message_write textarea.form-control {
  height: 70px;
  padding: 10px;
}
.chat_bottom {
  float: left;
  margin-top: 13px;
  width: 100%;
}
.upload_btn {
  color: #777777;
}
.sub_menu_ > li a, .sub_menu_ > li {
  float: left;
  width:100%;
}
.member_list li:hover {
  background: #428bca none repeat scroll 0 0;
  color: #fff;
  cursor:pointer;
}
.member-active {
    background: #428bca none repeat scroll 0 0;
    color: #fff;
    cursor: pointer;
}
</style>
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/widgets/calendar/calendar.css')}}">
<div id="page-title">
    <h2>History Chat</h2>
    <p>Halaman ini untuk melihat history chat.</p>
    @csrf
</div>

<div class="panel">
    <div class="panel-body">
        <div class="col-sm-12">
    <div class="main_section">
        <div class="">
            <div class="chat_container">
                <div class="col-sm-12">
                    <div class="col-sm-3 chat_sidebar">
                    	<div class="row">
                            <div id="custom-search-input">
                               <div class="input-group col-md-12">
                                  <input type="text" class="  search-query form-control" placeholder="Conversation" />
                                  <button class="btn btn-danger" type="button">
                                  <span class=" glyphicon glyphicon-search"></span>
                                  </button>
                               </div>
                            </div>
                            <div class="member_list">
                               <ul class="list-unstyled">
                                   @foreach($users as $user)
                                    <li class="left clearfix from" data-id="{{$user->id}}">
                                        <span class="chat-img pull-left">
                                            <img src="https://marinebusiness.co.id/uploads/profile/thumbnail/{{$user->thumbnail}}" alt="" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header_sec">
                                               <strong class="primary-font">{{$user->nama}}</strong> 
                                            </div>
                                            <div class="contact_sec">
                                               <strong class="primary-font">{{$user->email}}</strong> 
                                            </div>
                                        </div>
                                    </li>
                                   @endforeach
                               </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 chat_sidebar">
                    	<div class="row">
                            <div id="custom-search-input">
                               <div class="input-group col-md-12">
                                  <input type="text" class="  search-query form-control" placeholder="Conversation" />
                                  <button class="btn btn-danger" type="button">
                                  <span class=" glyphicon glyphicon-search"></span>
                                  </button>
                               </div>
                            </div>
                        
                            <div class="member_list">
                                <ul class="list-unstyled to-chat">
                                    <li class="left clearfix toc">
                                        <p>Empty Chat</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 chat_sidebar message_section">
        		    <div class="row">
        		        <div class="new_message_head">
        		            Chat Area
        		        </div><!--new_message_head-->
        		 
        		        <div class="chat_area">
        		            <ul class="list-unstyled">
        		                <template v-for="chat_date in chats_dates">
        		                    <li class="label-tgl">@{{ chat_date.DateOnly }}</li>
        		                    <template v-for="chat in chats[chat_date.DateOnly]">
                                        <li class="left clearfix" v-if="chat.from == $('.from.member-active').attr('data-id')">
                                            <span class="chat-img1 pull-left">
                                                <img :src='$(".from.member-active").find("img").attr("src")' alt="User Avatar" class="img-circle">
                                            </span>
                                            <div class="chat-body1 clearfix">
                                                <p style="border-radius:5px">@{{ chat.message }}</p>
                    					        <div class="chat_time pull-left">@{{ chat.periode }}</div>
                                            </div>
                                        </li>
                        				<li class="left clearfix admin_chat" v-else>
                                             <span class="chat-img1 pull-right">
                                             <img :src='$(".toc.member-active").find("img").attr("src")' alt="User Avatar" class="img-circle">
                                             </span>
                                             <div class="chat-body1 clearfix">
                                                <p style="text-align:right;background-color: #b4f9b4;border-radius:5px">@{{ chat.message }}</p>
                        						<div class="chat_time pull-right">@{{ chat.periode }}</div>
                                             </div>
                                        </li>
                                    </template>
                                </template>
        		            </ul>
        		        </div><!--chat_area-->
        		    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
@section('script')

<script type="text/javascript">
    var app_chat = new Vue({
        el: ".chat_area",                                     
        data: {
            chats: [],
            chats_dates: [],
          },
        methods: {
            resetData: function () {
              this.chats = [];
              this.chats_dates = [];
            },
            loadChat: function () {
              var that = this;
                jQuery.ajax({
                    type: "GET",
                    cache:false,
                    dataType: 'json',
                    url: '{{ url("/chat/get_chat") }}/' + $(".from.member-active").attr("data-id") + "/" + $(".toc.member-active").attr("data-id"),
                    success: function(response) {                                                                 
                        that.chats = response.chats;    
                        that.chats_dates = response.chats_dates; 
                        
                    },
                });
            },
        }
    });
    $(document).ready(function() {
        $(".from").click(function(e) {
            $(".from").removeClass("member-active");
            $(this).addClass("member-active");
        	var id= $(this).attr("data-id");
        	$(".to-chat").html('');
            $.ajax({
                type: "GET",
                url: '{{ url("/chat/from") }}/' + id,
                 success: function(response){
                     var html = '';
                    if(response["data"].length <=0){
                        html = "<p>Empty Person</p>";
                    }
                    for (var i in response["data"]) {
                            html += '<li class="left clearfix toc" data-id="'+ response["data"][i]["id_chat"] +'"><span class="chat-img pull-left">';
                            html +='             <img src="https://marinebusiness.co.id/uploads/profile/thumbnail/'+ response["data"][i]["thumbnail"] +'" alt="User Avatar" class="img-circle">';
                            html +='             </span>';
                            html +='             <div class="chat-body clearfix">';
                            html +='                <div class="header_sec">';
                            html +='                   <strong class="primary-font">'+ response["data"][i]["name"] +'</strong> ';
                            html +='                </div>';
                            html +='                <div class="contact_sec">';
                            html +='                   <strong class="primary-font">'+ response["data"][i]["email"] +'</strong>';
                            html +='                </div>';
                            html +='             </div>';
                            html +='        </li>';
                      
                    }
                    $(".to-chat").append(html);
                    app_chat.loadChat();
                },
                error: function(e){
                 console.log(e.responseText);
                }
            });
        });
        
        $(document).on('click', '.toc', function (e) {
            $(".toc").removeClass("member-active");
            $(this).addClass("member-active");
        	var id= $(this).attr("data-id");
        	app_chat.loadChat();
        });
    });
</script>
@endsection
