<nav class="sidebar-wrapper">
    @php
        $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
        $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
        /*$adminType=\Illuminate\Support\Facades\Auth::guard('admin')->user()->admin_type_id;*/

/*dd($rout_name)*/

    @endphp

    <style>
        .default-sidebar-wrapper .default-sidebar-menu .default-sidebar-dropdown > a:after {
            font-family: "icomoon";
            font-weight: 700;
            font-size: 1rem;
            content: "\e9ef";
            display: inline-block;
            position: absolute;
            left: 15px;
            top: 18px;
            -webkit-transition: -webkit-transform .3s ease;
            transition: -webkit-transform .3s ease;
            transition: transform .3s ease;
            transition: transform .3s ease, -webkit-transform .3s ease;
        }
    </style>

    <div class="default-sidebar-wrapper">

        <div class="default-sidebar-brand">
            <a href="{{route('admin.dashboard')}}" class="logo justify-content-center">
                <img src="/images/logo.webp"/>
            </a>
        </div>

        <div class="defaultSidebarMenuScroll">
            <div class="default-sidebar-menu">
                <ul>
                    <li {{@$adminType!=1 ? 'hidden':'' }} class="{{@$rout_name=='admin.dashboard'?'active':''}}">
                        <a wire:navigate="" href="{{--{{route('admin.dashboard')}}--}}" class="current-page">
                            <i class="icon-home2"></i>
                            <span class="menu-text">داشبورد</span>
                        </a>
                    </li>
                    <li  class="{{$rout_name=='admin.course.index'?'active':''}}">
                        <a wire:navigate="" href="{{route('admin.course.index')}}" class="current-page">
                            <i class="fa fa-video-camera"></i>
                            <span class="menu-text">دوره ها</span>
                        </a>
                    </li>
                    <li class="{{$rout_name=='admin.users'?'active':''}}">
                        <a wire:navigate="" href="{{route('admin.users')}}" class="current-page">
                            <i class="fa fa-users"></i>
                            <span class="menu-text">کاربران</span>
                        </a>
                    </li>
                    <li class="{{$rout_name=='admin.orders'?'active':''}}">
                        <a wire:navigate="" href="{{route('admin.orders')}}" class="current-page">
                            <i class="fa fa-users"></i>
                            <span class="menu-text">سفارشات</span>
                        </a>
                    </li>
                    <li class="default-sidebar-dropdown {{$rout_name=='admin.transactions.index'?'active':''}}">
                        <a class="position-relative" href="#">
                            <i class="icon-list"></i>
                            <span class="menu-text">تراکنشها</span>
                            <span style="position: absolute;left: 45px;top: 18px;"
                                  class="badge rounded-pill bg-badge bg-primary me-2 ">
                                            {{$totalTransactions}}
                                         </span>
                            @if($failedTransactions!=0)
                                <span style="position: absolute;left: 79px;top: 18px;"
                                      class="badge rounded-pill bg-badge btn-danger me-2 ">
                                            {{$failedTransactions}}
                                         </span>
                            @endif
                        </a>
                        <div class="default-sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="/admin/transactions/?status=all"
                                       class="{{@$_GET['status']=='all'?'current-page':''}}">کل تراکنشها</a>
                                </li>
                                <li class="position-relative">
                                    <a class=" {{ @$_GET['status']==1?'current-page':''}}"
                                       href="/admin/transactions/?status=1">موفق
                                    </a>
                                    <span style="position: absolute;left: 25px;top: 10px;"
                                          class="badge rounded-pill bg-success me-2 ">
                                             {{$successTransactions}}
                                         </span>
                                </li>
                                <li class="position-relative">
                                    <a class=" {{ @$_GET['status']==0?'current-page':''}}"
                                       href="/admin/transactions/?status=0">ناموفق
                                    </a>
                                    <span style="position: absolute;left: 25px;top: 10px;"
                                          class="badge rounded-pill bg-danger me-2 ">
                                             {{$failedTransactions}}
                                         </span>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown position-relative @if($rout_name=='admin.service.index' or $rout_name=='admin.service.create') active @endif">
                         <a href="#">
                             <i class="icon-image"></i>
                             <span class="menu-text">خدمات</span>

                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="{{route('admin.service.index')}}"
                                        class="{{$rout_name=='admin.service.index'?'current-page':''}}">لیست خدمات</a>
                                 </li>

                                 <li>
                                     <a href="{{route('admin.service.create')}}"
                                        class="{{$rout_name=='admin.service.create'?'current-page':''}}">افزودن سرویس
                                         جدید</a>
                                 </li>

                             </ul>
                         </div>
                     </li>


                     <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown {{$rout_name=='admin.transactions.index'?'active':''}}">
                         <a class="position-relative" href="#">
                             <i class="icon-list"></i>
                             <span class="menu-text">تراکنشها</span>
                             <span style="position: absolute;left: 45px;top: 18px;"
                                   class="badge rounded-pill bg-badge bg-primary me-2 ">
                                            {{$totalTransactions}}
                                         </span>
                             @if($failedTransactions!=0)
                                 <span style="position: absolute;left: 79px;top: 18px;"
                                       class="badge rounded-pill bg-badge btn-danger me-2 ">
                                            {{$failedTransactions}}
                                         </span>
                             @endif
                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="/admin/transactions/?status=all"
                                        class="{{@$_GET['status']=='all'?'current-page':''}}">کل تراکنشها</a>
                                 </li>
                                     <li class="position-relative">
                                         <a class=" {{ @$_GET['status']==1?'current-page':''}}"
                                            href="/admin/transactions/?status=1">موفق
                                         </a>
                                         <span style="position: absolute;left: 25px;top: 10px;"
                                               class="badge rounded-pill bg-success me-2 ">
                                             {{$successTransactions}}
                                         </span>
                                     </li>
                                 <li class="position-relative">
                                     <a class=" {{ @$_GET['status']==0?'current-page':''}}"
                                        href="/admin/transactions/?status=0">ناموفق
                                     </a>
                                     <span style="position: absolute;left: 25px;top: 10px;"
                                           class="badge rounded-pill bg-danger me-2 ">
                                             {{$failedTransactions}}
                                         </span>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown @if($rout_name=='admin.users' or $rout_name=='admin.users.admins') active @endif">
                         <a href="#">
                             <i class="icon-users"></i>
                             <span class="menu-text">کاربران</span>
                             <span style="position: absolute;left: 45px;top: 18px;"
                                   class="badge rounded-pill bg-badge bg-primary me-2 ">
                                            {{$totalUsers}}
                                         </span>
                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="/admin/users/?level=all"
                                        class="{{@$_GET['level']=='all'?'current-page':''}}">لیست کاربران</a>
                                 </li>
                                 @forelse($userLevels as $level)
                                     <li>
                                         <a href="/admin/users/?level={{$level->id}}"
                                            class="{{@$_GET['level']==$level->id?'current-page':''}}">{{$level->title}}</a>
                                     </li>
                                 @empty
                                 @endforelse
                                 <li>
                                     <a href="{{route('admin.users.admins')}}"
                                        class="{{$rout_name=='admin.users.admins'?'current-page':''}}">مدیریت ادمین
                                         ها</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown {{$rout_name=='admin.tickets.index'?'active':''}}">
                         <a href="#">
                             <i class="icon-message-square"></i>
                             <span class="menu-text">تیک ها</span>
                             <span style="position: absolute;left: 45px;top: 18px;"
                                   class="badge rounded-pill bg-badge bg-primary me-2 ">
                                            {{$totalTickets}}
                                         </span>
                             @if($unansweredTickets!=0)
                                 <span style="position: absolute;left: 79px;top: 18px;"
                                       class="badge rounded-pill bg-badge bg-light me-2 ">
                                            {{$unansweredTickets}}
                                         </span>
                             @endif
                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="/admin/tickets/?status=all"
                                        class="{{@$_GET['status']=='all'?'current-page':''}}">لیست تیکت ها</a>

                                 </li>

                                 <li class="position-relative">
                                     <a href="/admin/tickets/?status=0"
                                        class="{{@$_GET['status']==0?'current-page':''}}">بی
                                         پاسخ</a>
                                     <span style="position: absolute;left: 45px;top: 10px;"
                                           class="badge rounded-pill bg-badge bg-light me-2 ">
                                            {{$unansweredTickets}}
                                         </span>
                                 </li>
                                 <li class="position-relative">
                                     <a href="/admin/tickets/?status=1"
                                        class="{{@$_GET['status']==1?'current-page':''}}">پاسخ داده شده</a>
                                     <span style="position: absolute;left: 45px;top: 10px;"
                                           class="badge rounded-pill bg-badge bg-success me-2 ">
                                            {{$answeredTickets}}
                                         </span>
                                 </li>

                             </ul>
                         </div>
                     </li>
                     <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown @if($rout_name=='admin.page' or $rout_name=='admin.page.slider') active @endif">
                         <a href="#">
                             <i class="icon-image"></i>
                             <span class="menu-text">بنرهای سایت</span>
                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="{{route('admin.page')}}"
                                        class="{{$rout_name=='admin.page'?'active':''}}">مدیریت جایگاه بنرها</a>
                                 </li>
                                 <li>
                                     <a href="{{route('admin.page.slider')}}"
                                        class="{{$rout_name=='admin.page.slider'?'active':''}}">مدیریت اسلایدرها</a>
                                 </li>

                             </ul>
                         </div>
                     </li>
                     <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown @if($rout_name=='admin.setting' or $rout_name=='admin.setting.faq') active @endif">
                         <a href="#">
                             <i class="icon-settings1"></i>
                             <span class="menu-text">تنظیمات صفحات سایت</span>
                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="{{route('admin.setting.faq')}}"
                                        class="{{$rout_name=='admin.setting.faq'?'active':''}}">سوالات متداول سایت</a>
                                 </li>

                             </ul>
                         </div>
                     </li>
                     <li {{$adminType!=1 ? 'hidden':'' }} class="default-sidebar-dropdown @if($rout_name=='admin.accounts' or $rout_name=='admin.accounts.factor') active @endif">
                         <a href="#">
                             <i class="icon-check-circle"></i>
                             <span class="menu-text">حسابداری</span>
                         </a>
                         <div class="default-sidebar-submenu">
                             <ul>
                                 <li>
                                     <a href="{{route('admin.accounts.index')}}"
                                        class="{{$rout_name=='admin.accounts.index'?'active':''}}">فاکتورها</a>
                                 </li><li>
                                     <a href="{{route('admin.accounts.factor')}}"
                                        class="{{$rout_name=='admin.accounts.index'?'active':''}}">انواع فاکتور</a>
                                 </li>

                             </ul>
                         </div>
                     </li>--}}
                </ul>
            </div>
        </div>


    </div>


</nav>

