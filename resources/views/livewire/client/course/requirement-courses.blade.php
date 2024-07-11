<div class="modal fade" id="requirementCourses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
     wire:ignore.self="">
    <div class="modal-dialog modal-dialog-centered 	modal-lg ">
        <div class="modal-content" style="background: #20222F">
            <div class="modal-header px-4">
                <h5 class="modal-title text-white" id="exampleModalLabel" wire:ignore>دوره های پیش نیاز این دوره</h5>
                <button type="button" class="btn-close  m-0" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times-rectangle fs-3 text-white"></i>
                </button>
            </div>
            <div class="modal-body row text-white">
                @foreach($course->requirementsCourses as $item)
                    @php
                        $title=explode('_',$item->course->title);
                    @endphp
                    <div class="col-md-4">
                        <a href="{{route('client.course',$item->course->url_slug)}}" class="d-block cover text-center text-white p-2">
                            <img src="/{{@$item->course->coverImage->path }}" class="w-50" alt="">
                        </a>
                        <a href="{{route('client.course',$item->course->url_slug)}}" class="d-block title text-center text-white my-4">
                            {{@$title[0]}}
                            <span class="me-1 text-primary">
                            {{@$title[1]}}
                            </span>
                            {{@$title[2]}}
                        </a>
                        <div class="action text-center">
                            <button class=" btn btn-outline-success"
                                    wire:click="addToBasket('{{$item->course->url_slug}}')">
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                @endforeach


            </div>
            <hr class="text-white">
            <div class="d-flex align-items-center justify-content-between px-4 mb-3 flex-wrap">


                <button type="button" class=" btn btn-success"  wire:click="addToBasket('all')">
                    <i class="fa fa-spinner fa-spin" wire:loading></i>
                    <span wire:loading.remove>افزودن همه و رفتن به سبد خرید</span>
                </button>


                <a href="{{route('client.basket')}}" wire:navigate class="btn btn-outline-primary">
                   نیازی ندارم برو به سبد خرید!
                </a>
            </div>

        </div>
    </div>
</div>
