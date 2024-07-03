
<div class="bg-secondary rounded-4 col-lg-4 mx-2 position-relative mt-4 mb-3 " style="padding: 80px 20px 30px">
    <div class="text-center item-cover position-absolute">
        <img src="/{{$item->course->coverImage->path}}"  width="100" alt="">
    </div>

    <!-- course name -->
    <div class="d-flex align-items-center" >

        <a wire:navigate href="{{route('client.course',$item->course->url_slug)}}" class="m-0 fw-bold text-white mb-4 mt-3">
            {{$title[0]}}
            <span class="text-primary">{{$title[1]}}</span>
            {{$title[2]}}|<span class="me-1 text-primary">{{$currentYear}}</span>
        </a>
    </div>

    <div class="d-flex align-items-center justify-content-between">
        <!-- Circle progress -->
        <div class="w-100">
            <p class="text-white">
                درصد مشاهده
                : <span>{{@$item->course->courseUserProgress->progress?$item->course->courseUserProgress->progress:0}}%</span> </p>
            <div class="progress-container">
                <div class="progress-bar" style="width: {{@$item->course->courseUserProgress->progress?$item->course->courseUserProgress->progress:0}}%;"></div>
            </div>
        </div>

        {{-- @include('livewire.client.course.circle-progress')--}}
    </div>
</div>
