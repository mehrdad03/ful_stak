@push('links')
    <link rel="stylesheet" href="/frontend/css/login.css" />
@endpush
@auth
    awdawdawdawdawdawdawdawdawdawdawdawdawdawd
@endauth

<div
    class="form d-flex flex-column align-items-center justify-content-center">
    <img src="/frontend/assets/images/logo.png" alt="logo" class="logo" />
    <!-- PhoneNumber Input -->
    <form action="/" id="form">
        <div class="my-1 mt-4 my-md-3">
            <h1 class="text-white fs-5">ورود یا عضویت</h1>
            <div class="d-flex flex-column my-2 ">
                <label for="phoneNumber" class="text-white">تلفن</label>
                <input
                    type="number"
                    name="phoneNumber"
                    id="phoneNumber"
                    placeholder="شماره تلفن خود را وارد کنید" />
                <span id="error" class="text-danger"></span>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button class="my-2 py-2" type="submit" id="submit">
                    دریافت کد تایید
                </button>
            </div>
        </div>
    </form>
    <p class="text-white">ورود و ادامه با</p>
    <!-- Login Btns -->
    <div class="d-flex gap-2 align-items-center justify-content-between">
        <!-- Github Login -->
        <a
            href="#"
            class="d-flex bg-white align-items-center px-3 py-2 rounded-3">
            <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_27_19)">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12 0C5.37 0 0 5.37 0 12C0 17.31 3.435 21.795 8.205 23.385C8.805 23.49 9.03 23.13 9.03 22.815C9.03 22.53 9.015 21.585 9.015 20.58C6 21.135 5.22 19.845 4.98 19.17C4.845 18.825 4.26 17.76 3.75 17.475C3.33 17.25 2.73 16.695 3.735 16.68C4.68 16.665 5.355 17.55 5.58 17.91C6.66 19.725 8.385 19.215 9.075 18.9C9.18 18.12 9.495 17.595 9.84 17.295C7.17 16.995 4.38 15.96 4.38 11.37C4.38 10.065 4.845 8.985 5.61 8.145C5.49 7.845 5.07 6.615 5.73 4.965C5.73 4.965 6.735 4.65 9.03 6.195C9.99 5.925 11.01 5.79 12.03 5.79C13.05 5.79 14.07 5.925 15.03 6.195C17.325 4.635 18.33 4.965 18.33 4.965C18.99 6.615 18.57 7.845 18.45 8.145C19.215 8.985 19.68 10.05 19.68 11.37C19.68 15.975 16.875 16.995 14.205 17.295C14.64 17.67 15.015 18.39 15.015 19.515C15.015 21.12 15 22.41 15 22.815C15 23.13 15.225 23.505 15.825 23.385C18.2072 22.5807 20.2772 21.0497 21.7437 19.0074C23.2101 16.965 23.9993 14.5143 24 12C24 5.37 18.63 0 12 0Z"
                        fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_27_19">
                        <rect width="24" height="24" rx="12" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <p class="text-black fw-semibold m-0 mx-sm-4  d-md-block">
                Github
            </p>
        </a>
        <!-- Gmail Login -->
        <a
            href="{{route('auth.client.gmail')}}"
            class="d-flex bg-white align-items-center px-3 py-2 rounded-3">
            <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_27_11)">
                    <path
                        d="M23.7662 9.64963H22.7996V9.59983H11.9998V14.3998H18.7815C17.7921 17.1939 15.1335 19.1997 11.9998 19.1997C8.02366 19.1997 4.79992 15.9759 4.79992 11.9998C4.79992 8.02366 8.02366 4.79992 11.9998 4.79992C13.8352 4.79992 15.5049 5.4923 16.7763 6.62329L20.1705 3.22914C18.0273 1.23178 15.1605 0 11.9998 0C5.37291 0 0 5.37291 0 11.9998C0 18.6267 5.37291 23.9996 11.9998 23.9996C18.6267 23.9996 23.9996 18.6267 23.9996 11.9998C23.9996 11.1952 23.9168 10.4098 23.7662 9.64963Z"
                        fill="#FFC107" />
                    <path
                        d="M1.38281 6.41449L5.32534 9.30584C6.39213 6.66468 8.97568 4.79992 11.999 4.79992C13.8344 4.79992 15.5042 5.4923 16.7755 6.62328L20.1697 3.22914C18.0265 1.23178 15.1598 0 11.999 0C7.38991 0 3.39278 2.60215 1.38281 6.41449Z"
                        fill="#FF3D00" />
                    <path
                        d="M12 24.0001C15.0995 24.0001 17.9159 22.8139 20.0452 20.8849L16.3313 17.7422C15.086 18.6892 13.5644 19.2014 12 19.2001C8.87881 19.2001 6.22865 17.21 5.23027 14.4326L1.31714 17.4476C3.3031 21.3337 7.33623 24.0001 12 24.0001Z"
                        fill="#4CAF50" />
                    <path
                        d="M23.7662 9.64941H22.7996V9.59961H11.9998V14.3995H18.7815C18.3082 15.7294 17.4557 16.8914 16.3293 17.7421L16.3311 17.7409L20.0451 20.8836C19.7823 21.1224 23.9996 17.9995 23.9996 11.9996C23.9996 11.195 23.9168 10.4096 23.7662 9.64941Z"
                        fill="#1976D2" />
                </g>
                <defs>
                    <clipPath id="clip0_27_11">
                        <rect width="24" height="24" rx="12" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <p class="text-black fw-semibold m-0 mx-sm-4  d-md-block">
                Gmail
            </p>
        </a>
    </div>
</div>
@push('scripts')
    <script defer src="/frontend/js/login.js"></script>
@endpush
