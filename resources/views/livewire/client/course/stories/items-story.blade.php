<div class="row">
    <div class="col-12">

        <div class="stories d-flex justify-content-between">

            <div
                class="item text-center mx-2 {{!$checkPurchase?'msgBeforePurchase':''}} {{$latestStory && $checkPurchase ?'msgLatestStory':''}}"
                data-msg="هنوز تو دروه شرکت نکردی!" data-toggle="modal"
                data-target="{{$checkPurchase?'#add-story':''}}">
                <button class="add-btn rounded-circle fw-bold fs-1">+</button>
                <p class="username">افزودن</p>
            </div>

            @if($firstStory)

                <div class="item text-center mx-2" data-toggle="modal" data-target="#show-story"
                     data-video="{{config('app.ftp_url').@$firstStory->media->path}}">
                       <img loading="lazy"  src="{{@$firstStory->user->picture}}" alt="{{$course->title}}"
                         class="img-fluid rounded-circle">
                    <p class="username">{{$firstStory->title}}</p>
                </div>
            @endif

            @foreach($otherStories  as $story)

                <div class="item text-center mx-2" data-toggle="modal" data-target="#show-story"
                     data-story="{{$story->id}}"
                     data-video="{{config('app.ftp_url').@$story->media->path}}">
                       <img loading="lazy"  src="{{@$story->user->picture}}" alt="Story 1" class="img-fluid rounded-circle">
                    <p class="username">{{$story->title}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
<hr class="text-white mb-5">
