<div class="row mb-5">
    <div class="col-12">

        <div class="stories d-flex justify-content-start">

            <div
                class="item text-center mx-2 {{!$checkPurchase?'msgBeforePurchase':''}} {{$latestStory && $checkPurchase ?'msgLatestStory':''}}"
                data-msg="هنوز تو دروه شرکت نکردی!" data-toggle="modal"
                data-target="{{$checkPurchase?'#add-story':''}}">
                <button class="add-btn rounded-circle fw-bold fs-1">+</button>
                <p class="username">افزودن</p>
            </div>

            @foreach($stories  as $story)

                <div class="item text-center mx-2" data-toggle="modal" data-target="#show-story"
                     data-video="{{config('app.ftp_url').@$story->media->path}}">
                    <img src="{{@$story->user->picture}}" alt="Story 1" class="img-fluid rounded-circle">
                    <p class="username">{{$story->user->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
