<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
     wire:ignore.self="">
    <div class="modal-dialog modal-dialog-centered 	modal-lg ">
        <div class="modal-content" style="background: #20222F">
            <div class="modal-header px-4">
                <h5 class="modal-title text-white" id="exampleModalLabel" wire:ignore></h5>
                <button type="button" class="btn-close  m-0" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times-rectangle fs-3 text-white"></i>
                </button>
            </div>
            <div class="modal-body">
                <video id="videoPlayer" class="w-100" controls>
                    <source src=""
                            type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>
            <div class="d-flex align-items-center justify-content-between px-4 mb-3 flex-wrap">

                @if(!$lessonCompleted)

                    <button type="button" class=" btn btn-outline-success" wire:click="completeLesson">
                        <i class="fa fa-spinner fa-spin" wire:loading></i>
                        <span wire:loading.remove>مشاهده کردم</span>
                    </button>
                @else
                    <div class="alert alert-primary d-flex align-items-center m-0" role="alert">
                        <i class="fa fa-info-circle ms-2"></i>
                        <div>
                            این جلسه قبلا یک بار دیده شده است!
                        </div>
                    </div>


                @endif

                <a href="" class="btn btn-outline-primary" wire:ignore>
                    گروه VIP رفع اشکال

                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32" fill="none">
                        <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"/>
                        <path
                            d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z"
                            fill="white"/>
                        <defs>
                            <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#37BBFE"/>
                                <stop offset="1" stop-color="#007DBB"/>
                            </linearGradient>
                        </defs>
                    </svg>

                </a>
            </div>

        </div>
    </div>
</div>
