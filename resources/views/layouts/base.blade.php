<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Winkle I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('theme/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/bower_components/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/linea-icon.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/pe-icon-7-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/filter.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/bower_components/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/dist/css/lightgallery.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

    <!-- Data table CSS -->
    <link href="{{asset('theme/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Toast CSS -->
    <link href="{{asset('theme/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet"
        type="text/css">

    <!-- Morris Charts CSS -->
    <link href="{{asset('theme/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- bootstrap-select CSS -->
    <link href="{{asset('theme/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet"
        type="text/css" />


    <!-- vector map CSS -->
    <link href="{{asset('theme/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('theme/dist/css/style.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-1-active navbar-top-light">

        <!-- Top Menu Items -->
        <x-layout.navbar></x-layout.navbar>
        <!-- /Top Menu Items -->

        <x-layout.sidebar></x-layout.sidebar>

        <!-- Right Sidebar Menu belongs to setting icon menu-->
        {{-- <div class="fixed-sidebar-right">
            <ul class="right-sidebar">
                <li>
                    <div class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                            <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab"
                                    role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn"
                                    role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" id="todo_tab_btn"
                                    role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
                        </ul>
                        <div class="tab-content" id="right_sidebar_content">
                            <div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
                                <div class="chat-cmplt-wrap">
                                    <div class="chat-box-wrap">
                                        <div class="add-friend">
                                            <a href="javascript:void(0)" class="inline-block txt-grey">
                                                <i class="zmdi zmdi-more"></i>
                                            </a>
                                            <span class="inline-block txt-dark">users</span>
                                            <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                    class="zmdi zmdi-plus"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <form role="search" class="chat-search pl-15 pr-15 pb-15">
                                            <div class="input-group">
                                                <input type="text" id="example-input1-group2"
                                                    name="example-input1-group2" class="form-control"
                                                    placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn  btn-default"><i
                                                            class="zmdi zmdi-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                        <div id="chat_list_scroll">
                                            <div class="nicescroll-bar">
                                                <ul class="chat-list-wrap">
                                                    <li class="chat-list">
                                                        <div class="chat-body">
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Clay
                                                                            Masse</span>
                                                                        <span class="time block truncate txt-grey">No
                                                                            one saves us but ourselves.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user1.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Evie
                                                                            Ono</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Unity
                                                                            is strength</span>
                                                                    </div>
                                                                    <div class="status offline"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user2.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Madalyn
                                                                            Rascon</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Respect
                                                                            yourself if you would have others respect
                                                                            you.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user3.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Mitsuko
                                                                            Heid</span>
                                                                        <span class="time block truncate txt-grey">I’m
                                                                            thankful.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Ezequiel
                                                                            Merideth</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Patience
                                                                            is bitter.</span>
                                                                    </div>
                                                                    <div class="status offline"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user1.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Jonnie
                                                                            Metoyer</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Genius
                                                                            is eternal patience.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user2.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Angelic
                                                                            Lauver</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Every
                                                                            burden is a blessing.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user3.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Priscila
                                                                            Shy</span>
                                                                        <span class="time block truncate txt-grey">Wise
                                                                            to resolve, and patient to perform.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user4.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Linda
                                                                            Stack</span>
                                                                        <span class="time block truncate txt-grey">Our
                                                                            patience will achieve more than our
                                                                            force.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-chat-box-wrap">
                                        <div class="recent-chat-wrap">
                                            <div class="panel-heading ma-0">
                                                <div class="goto-back">
                                                    <a id="goto_back" href="javascript:void(0)"
                                                        class="inline-block txt-grey">
                                                        <i class="zmdi zmdi-chevron-left"></i>
                                                    </a>
                                                    <span class="inline-block txt-dark">ryan</span>
                                                    <a href="javascript:void(0)"
                                                        class="inline-block text-right txt-grey"><i
                                                            class="zmdi zmdi-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="chat-content">
                                                        <ul class="nicescroll-bar pt-20">
                                                            <li class="friend">
                                                                <div class="friend-msg-wrap">
                                                                    <img class="user-img img-circle block pull-left"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="msg pull-left">
                                                                        <p>Hello Jason, how are you, it's been a long
                                                                            time since we last met?</p>
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-grey">2:30
                                                                                PM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="self mb-10">
                                                                <div class="self-msg-wrap">
                                                                    <div class="msg block pull-right"> Oh, hi Sarah I'm
                                                                        have got a new job now and is going great.
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-grey">2:31
                                                                                pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="self">
                                                                <div class="self-msg-wrap">
                                                                    <div class="msg block pull-right"> How about you?
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-grey">2:31
                                                                                pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="friend">
                                                                <div class="friend-msg-wrap">
                                                                    <img class="user-img img-circle block pull-left"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="msg pull-left">
                                                                        <p>Not too bad.</p>
                                                                        <div class="msg-per-detail  text-right">
                                                                            <span class="msg-time txt-grey">2:35
                                                                                pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" id="input_msg_send" name="send-msg"
                                                            class="input-msg-send form-control"
                                                            placeholder="Type something">
                                                        <div class="input-group-btn emojis">
                                                            <div class="dropup">
                                                                <button type="button"
                                                                    class="btn  btn-default  dropdown-toggle"
                                                                    data-toggle="dropdown"><i
                                                                        class="zmdi zmdi-mood"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                                    <li><a href="javascript:void(0)">Another action</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="javascript:void(0)">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-btn attachment">
                                                            <div class="fileupload btn  btn-default"><i
                                                                    class="zmdi zmdi-attachment-alt"></i>
                                                                <input type="file" class="upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="messages_tab" class="tab-pane fade" role="tabpanel">
                                <div class="message-box-wrap">
                                    <div class="msg-search">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">messages</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-search"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="set-height-wrap">
                                        <div class="streamline message-box nicescroll-bar">
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Clay
                                                            Masse</span>
                                                        <span
                                                            class="inline-block font-11  pull-right message-time">12:28
                                                            AM</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Themeforest message
                                                            sent via your envato market profile</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsu messm quia dolor sit amet, consectetur,
                                                            adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user1.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Evie
                                                            Ono</span>
                                                        <span class="inline-block font-11  pull-right message-time">1
                                                            Feb</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Pogody theme
                                                            support</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user2.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Madalyn
                                                            Rascon</span>
                                                        <span class="inline-block font-11  pull-right message-time">31
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Congratulations from
                                                            design nominees</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user3.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Ezequiel
                                                            Merideth</span>
                                                        <span class="inline-block font-11  pull-right message-time">29
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Themeforest item
                                                            support message</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user4.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Jonnie
                                                            Metoyer</span>
                                                        <span class="inline-block font-11  pull-right message-time">27
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Help with beavis
                                                            contact form</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Priscila
                                                            Shy</span>
                                                        <span class="inline-block font-11  pull-right message-time">19
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Your uploaded theme is
                                                            been selected</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user1.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Linda
                                                            Stack</span>
                                                        <span class="inline-block font-11  pull-right message-time">13
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject"> A new rating has been
                                                            received</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="todo_tab" class="tab-pane fade" role="tabpanel">
                                <div class="todo-box-wrap">
                                    <div class="add-todo">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">todo list</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-plus"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="set-height-wrap">
                                        <!-- Todo-List -->
                                        <ul class="todo-list nicescroll-bar">
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-default">
                                                    <input type="checkbox" id="checkbox01" />
                                                    <label for="checkbox01">Record The First Episode</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-pink">
                                                    <input type="checkbox" id="checkbox02" />
                                                    <label for="checkbox02">Prepare The Conference Schedule</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-warning">
                                                    <input type="checkbox" id="checkbox03" checked />
                                                    <label for="checkbox03">Decide The Live Discussion Time</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="checkbox04" checked />
                                                    <label for="checkbox04">Prepare For The Next Project</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-danger">
                                                    <input type="checkbox" id="checkbox05" checked />
                                                    <label for="checkbox05">Finish Up AngularJs Tutorial</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-purple">
                                                    <input type="checkbox" id="checkbox06" checked />
                                                    <label for="checkbox06">Finish Infinity Project</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                        </ul>
                                        <!-- /Todo-List -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div> --}}
        <!-- /Right Sidebar Menu -->



        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid pt-30">

            </div>

            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p>2018 &copy; Winkle. Pampered by Hencework</p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{asset('theme/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Data table JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('theme/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('theme/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{asset('theme/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

    <!-- Owl JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

    <!-- EChartJS JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
    <script src="{{asset('theme/vendors/echarts-liquidfill.min.js')}}"></script>

    <!-- Vector Maps JavaScript -->
    <script src="{{asset('theme/vendors/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('theme/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('theme/dist/js/vectormap-data.js')}}"></script>

    <!-- Toast JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

    <!-- Piety JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('theme/dist/js/peity-data.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

    <!-- Bootstrap Select JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

    <!-- Flot Charts JavaScript -->
    <script src="{{asset('theme/vendors/bower_components/Flot/excanvas.min.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/Flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('theme/vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('theme/dist/js/flot-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('theme/dist/js/init.js')}}"></script>
    <script src="{{asset('theme/dist/js/dashboard2-data.js')}}"></script>
</body>

</html>
