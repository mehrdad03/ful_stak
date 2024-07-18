@push('links')
    <link rel="stylesheet" href="/frontend/css/login.css"/>
@endpush
<div
    class="form d-flex flex-column align-items-center justify-content-center">
    <a href="{{route('client.home')}}">
        <img src="/frontend/assets/images/logo.png" alt="logo" class="logo"/>
    </a>

    @if($showInsertCodeView)
        <form wire:submit.prevent="submitUserWithMobile(Object.fromEntries(new FormData($event.target)))" id="form">
            <div class="my-1 mt-4 my-md-3">
                <h1 class="text-white fs-4 text-center">ورود | ثبت ‌نام</h1>
                <div class="d-flex flex-column my-2 ">
                    <label for="code" class="m-2 fw-bold text-white">کد تایید</label>
                    <input class="text-center"
                           type="text"
                           name="code"
                           wire:model="code"
                           maxlength="4"
                           id="phoneNumber"
                           placeholder="کد رو وارد کنید"/>
                    @error('code')
                    <span
                        class="text-danger d-block mt-2">{{ $message }}</span>
                    @enderror
                    @if($codeInvalidError)
                        <span class="text-danger mt-2">کد احراز نامعتبر است !</span>
                    @endif

                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button class="my-2 py-3" type="submit" id="submit" style="text-align: -webkit-center;height: 45px ">
                        <span wire:loading.remove>
                               تایید
                        </span>
                        <span wire:loading class="loader" style="width:30px ; border-width: 4px"

                        ></span>
                    </button>
                </div>
            </div>
        </form>

    @else

        <form wire:submit.prevent="sendCode(Object.fromEntries(new FormData($event.target)))" id="form">
            <div class="my-1 mt-4 my-md-3">
                <h1 class="text-white fs-4 text-center">ورود یا عضویت در فول استک</h1>
                <div class="d-flex flex-column my-2 ">
                    <label for="phoneNumber" class="m-2 fw-bold text-white">شماره موبایل :</label>
                    <input class="text-center"
                           type="text"
                           name="mobile"
                           id="phoneNumber"
                           maxlength="11"
                           placeholder="09121111111"/>
                    @if($sendCodeSmsError)
                        <span class="text-danger">ارسال پیامک با خطا رو به رو شد !! </span>
                    @endif
                    @error('mobile')
                    <span
                        class="text-danger d-block mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button class="my-2 py-2 authWithSms" type="submit" id="submit" style="text-align: -webkit-center;height: 45px ">
                        <span wire:loading.remove>
                            دریافت کد تایید
                        </span>
                        <span wire:loading class="loader" style="width:30px ; border-width: 4px"

                        ></span>
                    </button>
                </div>
            </div>
        </form>
        <p class="text-white">و یا </p>
        <div class="d-flex gap-2 align-items-center justify-content-between w-100">
            <!-- Gmail Login -->
            <a
                href="{{route('auth.client.gmail')}}" id="authWithGmail"
                class="d-flex bg-white align-items-center p-3 rounded-3 w-100 justify-content-center">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_27_11)">
                        <path
                            d="M23.7662 9.64963H22.7996V9.59983H11.9998V14.3998H18.7815C17.7921 17.1939 15.1335 19.1997 11.9998 19.1997C8.02366 19.1997 4.79992 15.9759 4.79992 11.9998C4.79992 8.02366 8.02366 4.79992 11.9998 4.79992C13.8352 4.79992 15.5049 5.4923 16.7763 6.62329L20.1705 3.22914C18.0273 1.23178 15.1605 0 11.9998 0C5.37291 0 0 5.37291 0 11.9998C0 18.6267 5.37291 23.9996 11.9998 23.9996C18.6267 23.9996 23.9996 18.6267 23.9996 11.9998C23.9996 11.1952 23.9168 10.4098 23.7662 9.64963Z"
                            fill="#FFC107"/>
                        <path
                            d="M1.38281 6.41449L5.32534 9.30584C6.39213 6.66468 8.97568 4.79992 11.999 4.79992C13.8344 4.79992 15.5042 5.4923 16.7755 6.62328L20.1697 3.22914C18.0265 1.23178 15.1598 0 11.999 0C7.38991 0 3.39278 2.60215 1.38281 6.41449Z"
                            fill="#FF3D00"/>
                        <path
                            d="M12 24.0001C15.0995 24.0001 17.9159 22.8139 20.0452 20.8849L16.3313 17.7422C15.086 18.6892 13.5644 19.2014 12 19.2001C8.87881 19.2001 6.22865 17.21 5.23027 14.4326L1.31714 17.4476C3.3031 21.3337 7.33623 24.0001 12 24.0001Z"
                            fill="#4CAF50"/>
                        <path
                            d="M23.7662 9.64941H22.7996V9.59961H11.9998V14.3995H18.7815C18.3082 15.7294 17.4557 16.8914 16.3293 17.7421L16.3311 17.7409L20.0451 20.8836C19.7823 21.1224 23.9996 17.9995 23.9996 11.9996C23.9996 11.195 23.9168 10.4096 23.7662 9.64941Z"
                            fill="#1976D2"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_27_11">
                            <rect width="24" height="24" rx="12" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-black fw-semibold m-0 mx-sm-4  d-md-block">
                    ورود و ثبت نام با گوگل
                </p>
            </a>

        </div>

    @endif

</div>
@push('scripts')
    <script defer src="/frontend/js/login.js"></script>
@endpush
