@php
    $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
    $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
@endphp

<div>
<span class="modal-backdrop"></span>
<div class="sidebar bg-secondary rounded-4 col-2">
<span class="d-flex justify-content-end mt-4 d-md-none text-primary" id="close">
            <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>            
          </span>
    <div class="d-flex flex-column align-items-center my-2">
        <img
            src="{{\Illuminate\Support\Facades\Auth::user()->picture}}"
            alt="User Profile"
            class="profileImg" />
        <h5 class="text-white fw-bold my-2">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
        <p class="text-primary">{{\Illuminate\Support\Facades\Auth::user()->mobile}}</p>
    </div>

    <ul class="p-0">
        <div class="me-md-3 w-100">
            <!-- dashboard -->
            <li class="{{@$rout_name=='client.profile.dashboard'?'active':''}}">
                <a href="{{route('client.profile.dashboard')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 45 45"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_576_212)">
                                <path
                                    d="M36.125 9.375V8.875H35.625H28.125H27.625V9.375V13.125V13.625H28.125H35.625H36.125V13.125V9.375ZM17.375 9.375V8.875H16.875H9.375H8.875V9.375V20.625V21.125H9.375H16.875H17.375V20.625V9.375ZM36.125 24.375V23.875H35.625H28.125H27.625V24.375V35.625V36.125H28.125H35.625H36.125V35.625V24.375ZM17.375 31.875V31.375H16.875H9.375H8.875V31.875V35.625V36.125H9.375H16.875H17.375V35.625V31.875ZM24.875 16.375V6.125H38.875V16.375H24.875ZM20.125 6.125V23.875H6.125V6.125H20.125ZM24.875 38.875V21.125H38.875V38.875H24.875ZM6.125 38.875V28.625H20.125V38.875H6.125Z"
                                    fill="#23BF65"
                                    stroke="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_576_212">
                                    <rect width="45" height="45" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="text">داشبورد</div>
                </a>
            </li>
            <!-- courses -->
            <li class="{{@$rout_name=='client.profile.my-courses'?'active':''}}">
                <a href="{{route('client.profile.my-courses')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 45 45"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M39.375 31.8751V16.8751C39.3743 16.2174 39.2007 15.5716 38.8716 15.0022C38.5425 14.4329 38.0695 13.9601 37.5 13.6313L24.375 6.13131C23.8049 5.80218 23.1583 5.62891 22.5 5.62891C21.8417 5.62891 21.1951 5.80218 20.625 6.13131L7.5 13.6313C6.93049 13.9601 6.45746 14.4329 6.12837 15.0022C5.79927 15.5716 5.62567 16.2174 5.625 16.8751V31.8751C5.62567 32.5327 5.79927 33.1785 6.12837 33.7479C6.45746 34.3172 6.93049 34.79 7.5 35.1188L20.625 42.6188C21.1951 42.9479 21.8417 43.1212 22.5 43.1212C23.1583 43.1212 23.8049 42.9479 24.375 42.6188L37.5 35.1188C38.0695 34.79 38.5425 34.3172 38.8716 33.7479C39.2007 33.1785 39.3743 32.5327 39.375 31.8751Z"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.0625 9.76953L22.5 14.6445L30.9375 9.76953"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.0625 38.9813V29.25L5.625 24.375"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M39.375 24.375L30.9375 29.25V38.9813"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M6.13135 14.9258L22.5001 24.3945L38.8688 14.9258"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M22.5 43.275V24.375"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text">دوره ها</div>
                </a>
            </li>
            <!-- faq -->
            <li class="{{@$rout_name=='client.profile.questions'?'active':''}}">
                <a href="{{route('client.profile.questions')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 45 45"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.5 41.25C32.8553 41.25 41.25 32.8553 41.25 22.5C41.25 12.1447 32.8553 3.75 22.5 3.75C12.1447 3.75 3.75 12.1447 3.75 22.5C3.75 32.8553 12.1447 41.25 22.5 41.25Z"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M17.0437 16.8756C17.4845 15.6225 18.3546 14.5658 19.4999 13.8927C20.6451 13.2196 21.9916 12.9736 23.3009 13.1982C24.6102 13.4227 25.7977 14.1034 26.6532 15.1197C27.5087 16.136 27.9769 17.4222 27.975 18.7506C27.975 22.5006 22.35 24.3756 22.35 24.3756"
                                stroke="#23BF65"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M22.5 31.875H22.5188"
                                stroke="#23BF65"
                                stroke-width="4"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text">پرسش و پاسخ</div>
                </a>
            </li>
            <!-- payment -->
            <li class="{{@$rout_name=='client.profile.financial'?'active':''}}">
                <a href="{{route('client.profile.financial')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 46 46"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M40.2783 8.19141H6.52832C4.45725 8.19141 2.77832 9.87034 2.77832 11.9414V34.4414C2.77832 36.5125 4.45725 38.1914 6.52832 38.1914H40.2783C42.3494 38.1914 44.0283 36.5125 44.0283 34.4414V11.9414C44.0283 9.87034 42.3494 8.19141 40.2783 8.19141Z"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M2.77832 19.4414H44.0283"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text">مالی</div>
                </a>
            </li>
            <!-- comments -->
            <li class="{{@$rout_name=='client.profile.comments'?'active':''}}">
                <a href="{{route('client.profile.comments')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 46 46"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.40332 37.2539C8.40332 36.0107 8.89718 34.8184 9.77626 33.9393C10.6553 33.0603 11.8476 32.5664 13.0908 32.5664H38.4033"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M13.0908 4.44141H38.4033V41.9414H13.0908C11.8476 41.9414 10.6553 41.4475 9.77626 40.5685C8.89718 39.6894 8.40332 38.4971 8.40332 37.2539V9.12891C8.40332 7.8857 8.89718 6.69342 9.77626 5.81434C10.6553 4.93527 11.8476 4.44141 13.0908 4.44141Z"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text">نظرات</div>
                </a>
            </li>
            <!-- notfication -->
            <li class="{{@$rout_name=='client.profile.messages'?'active':''}}">
                <a href="{{route('client.profile.messages')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 45 45"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.75 15C33.75 12.0163 32.5647 9.15483 30.455 7.04505C28.3452 4.93526 25.4837 3.75 22.5 3.75C19.5163 3.75 16.6548 4.93526 14.545 7.04505C12.4353 9.15483 11.25 12.0163 11.25 15C11.25 28.125 5.625 31.875 5.625 31.875H39.375C39.375 31.875 33.75 28.125 33.75 15Z"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M25.7437 39.375C25.4141 39.9433 24.9409 40.415 24.3716 40.7429C23.8024 41.0708 23.1569 41.2434 22.5 41.2434C21.843 41.2434 21.1976 41.0708 20.6283 40.7429C20.059 40.415 19.5859 39.9433 19.2562 39.375"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text">پیغام</div>
                </a>
            </li>
            <!-- Logout -->
            <li class="{{@$rout_name=='client.profile.messages'?'active':''}}">
                <a href="{{route('client.logout')}}">
                    <div class="icon">
                        <svg
                            width="30"
                            height="30"
                            viewBox="0 0 45 45"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.875 39.375H9.375C8.38044 39.375 7.42661 38.9799 6.72335 38.2766C6.02009 37.5734 5.625 36.6196 5.625 35.625V9.375C5.625 8.38044 6.02009 7.42661 6.72335 6.72335C7.42661 6.02009 8.38044 5.625 9.375 5.625H16.875"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M30 31.875L39.375 22.5L30 13.125"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M39.375 22.5H16.875"
                                stroke="#23BF65"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text">خروج</div>
                </a>
            </li>
        </div>
    </ul>
</div>
</div>
