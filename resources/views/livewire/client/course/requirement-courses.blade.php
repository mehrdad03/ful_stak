<div class="modal fade" id="requirementCourses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
     wire:ignore.self="">
    <div class="modal-dialog modal-dialog-centered 	modal-lg ">
        <div class="modal-content" style="background: #20222F">
            <div class="modal-header px-4">
                <h5 class="modal-title text-white" id="exampleModalLabel" wire:ignore>
                    دوره های پیش نیاز این دوره
                    @if($isMasterCourse)
                        <span class="text-danger">(رایگان)</span>
                    @endif


                </h5>
                <button type="button" class="close px-2 fs-4 rounded-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body row text-white">
                @if($isMasterCourse)
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            در صورت شرکت در دوره مستر کلاس
                            پیش نیاز این دوره به ملبغ
                            <strong> {{number_format($masterCourseRequirementsTotalPrice)}}</strong>
                            تومان
                            برای شما <span class="text-danger fw-bold">رایگان</span> خواهد بود.
                        </div>
                    </div>
                @endif

                @foreach($course->requirementsCourses as $item)
                    @php
                        $title=explode('_',$item->course->title);
                    @endphp
                    <div class="col-md-4">
                        <a href="{{route('client.course',$item->course->url_slug)}}"
                           class="d-block cover text-center text-white p-2">
                            <img loading="lazy" src="/{{@$item->course->coverImage->path }}" width="70" alt="">
                        </a>
                        <a href="{{route('client.course',$item->course->url_slug)}}"
                           class="d-block title text-center text-white my-2">
                            {{@$title[0]}}
                            <span class="me-1 text-primary fw-bold d-block">
                            {{@$title[1]}}
                            </span>
                            {{@$title[2]}}
                        </a>
                        @if($isMasterCourse)
                            <div class="mb-2 text-white text-center fw-medium">
                                <span class="m-0 text-danger fw-bold me-1">رایگان</span>
                            </div>
                            <div class="mb-2 text-white text-center fw-medium text-decoration-line-through">
                                {{number_format($item->course->price)}}
                                <span class="m-0 text-white fw-bold me-1">تومان</span>
                            </div>

                        @else
                            <div class="mb-2 text-white text-center fw-medium">
                                {{number_format($item->course->price)}}
                                <span class="m-0 text-white fw-bold me-1">تومان</span>
                            </div>


                            <div class="action text-center" wire:ignore>
                                <button class=" btn btn-outline-success"
                                        wire:click="addToBasket('{{$item->course->url_slug}}')">
                                    افزودن به سبد خرید
                                </button>
                                <span class="text-center text-info in-basket-msg" style="display: none">
                            <i class="fa fa-check-circle"></i>
                                <span>
                                    موجود در سبد خرید
                                </span>
                            </span>
                            </div>
                        @endif




                    </div>
                @endforeach


            </div>
            <hr class="text-white">
            <div class="d-flex align-items-center justify-content-between px-4 mb-3 flex-wrap">


                <button type="button" class=" btn btn-success" wire:click="addToBasket('all')">
                    <span class="d-flex align-items-center">
                       <i wire:loading.remove="" class="fa fa-plus ms-2"></i>
                        <span class="loader ms-2" wire:loading style="width:20px ; border-width: 3px"></span>
                        <span> افزودن همه و رفتن به سبد خرید</span>

                    </span>

                </button>


                <a href="{{route('client.basket')}}" wire:navigate
                   class="btn btn-outline-primary d-flex align-items-center">
                    <i class="fa fa-shopping-cart ms-2"></i>
                    برو به سبد خرید!
                </a>
            </div>

        </div>
    </div>

    @push('scripts')

        <script>

            $(document).ready(function () {
                $('#requirementCourses .action .btn').on('click', function () {
                    $(this).hide(); // دکمه را مخفی می‌کند
                    $(this).siblings('.in-basket-msg').show(); // span را نمایش می‌دهد
                });
            });

        </script>
    @endpush
</div>
