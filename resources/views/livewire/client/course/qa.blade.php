<section id="questions">
    <h3 class="text-primary fs-2 mb-5">پرسش و پاسخ</h3>
    <!-- btns -->
    <div class="d-flex justify-content-center column-gap-3">
        <button
            class="text-white main-btn d-flex px-3 py-2 rounded-5 addQ">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
            <p class="m-0">طرح سؤال جدید</p>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
        </button>
        <button
            class="text-white bg-secondary px-4 py-2 rounded-5 closeQ">
            دنبال کردن نظرات
        </button>
    </div>

    <!-- New Question -->
    <div class="newQ p-4" wire:ignore.self>
        <!-- title -->
        <div
            class="d-flex justify-content-center column-gap-2 border-bottom py-3">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon text-primary">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/>
            </svg>
            <p class="m-0 text-white">
                سؤال خود را میتوانید در کادر پایین مطرح کنید ، پاسخ به سؤال
                شما در سریع ترین زمان ممکن ارسال خواهد شد
            </p>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="qIcon text-primary">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/>
            </svg>
        </div>

        @if(!auth()->check())
            <!-- Auth alert -->
            <div
                class="bg-warning fw-bold mt-3  w-100 d-flex align-items-center justify-content-between   rounded-2 p-3">
                <p class="m-0">
                    برای ارسال دیدگاه لازم است وارد شده یا ثبت‌نام کنید
                </p>
                <a href="{{route('auth.client')}}">
                    ورود یا ثبت‌نام
                </a>
            </div>
        @endif

        @auth
            <form wire:submit="submitCourseComment(Object.fromEntries(new FormData($event.target)))" class="px-4 pb-2">
                <!-- Question -->
                <div class="text-white w-100 d-flex flex-column  {{session('message') ? 'd-none' : ''}}">
                    <label for="comment" class="my-3">سوال:</label>
                    <textarea
                        name="comment"
                        id="comment"
                        cols="30" maxlength="700"
                        rows="10" class="p-3" placeholder="متن مورد نظر خود رو وراد کنید . . ."></textarea>
                </div>

                @error('comment')
                <div
                    class="alert alert-danger rounded-2 mt-3 " wire:loading.remove>{{ $message }}</div>
                @enderror

                @if(session('message'))
                    <div class="alert alert-success mt-3">

                        {{ session('message') }}
                    </div>
                @endif

                <!-- buttons -->
                <div
                    class="w-100 mt-2 d-flex justify-content-end mt-4 column-gap-3 {{session('message') ? 'd-none' : ''}}">
                    <button
                        class="text-white bg-danger px-4 py-1 rounded-4 closeQ"
                        type="button">
                        انصراف
                    </button>
                    <button class="main-btn text-white px-4 py-1" type="submit">
                        <i class="fa fa-spinner fa-spin" wire:loading></i>
                        <span wire:loading.remove> ثبت</span>
                    </button>
                </div>
            </form>
        @endauth
    </div>

    @forelse($comments as $comment)

        <!-- question -->
        <div class="mt-5 question">
            <div
                class="d-flex justify-content-between align-items-center px-1 px-lg-4 pb-3 border-bottom">
                <div class="d-flex align-items-center column-gap-3">
                    <img
                        src="/frontend/assets/images/default.png"
                        alt="avatar"
                        class="avatar rounded-5 rounded-5 border border-white border-4"/>

                    <div>
                        <h6 class="text-white m-0">{{$comment->user->name}}</h6>
                        <p class="m-0 text-white-50">{{@$comment->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                <a href="#answer_{{$comment->id}}" class="main-btn text-white px-2 px-lg-5 py-1 reply">
                    پاسخ
                </a>
            </div>

                <?php
                $text = "    Line one\n    Line two\n    Line three";
                $cleanedText = preg_replace('/^\s+/m', '', $comment->comment);
                ?>
            <pre class="m-0 pt-3 p-3 text-white">{!! $cleanedText !!}</pre>


            <div class="newA px-4 py-0" id="answer_{{$comment->id}}" wire:ignore.self>
                <!-- title -->
                <hr class="text-light">
                @auth
                    <form
                        wire:submit="submitCourseCommentAnswer(Object.fromEntries(new FormData($event.target)),{{$comment->id}})"
                        class=" pb-2">
                        <!-- Question -->
                        <div class="text-white w-100 d-flex flex-column  {{session('answer_message') ? 'd-none' : ''}}">
                            <label for="answer" class="my-3">پاسخ به این دیدگاه</label>
                            <textarea name="answer" id="answer" cols="30" maxlength="700" rows="10" class="p-3"
                                      placeholder="متن مورد نظر خود رو وراد کنید . . ."></textarea>
                        </div>
                        @error('answer')
                        <div
                            class="alert alert-danger rounded-2 mt-3 " wire:loading.remove>{{ $message }}</div>
                        @enderror

                        @if(session('answer_message'))
                            <div class="alert alert-success mt-3">

                                {{ session('answer_message') }}
                            </div>
                        @endif


                        <!-- buttons -->
                        <div
                            class="w-100 mt-2 d-flex justify-content-end mt-4 column-gap-3 {{session('answer_message') ? 'd-none' : ''}} ">
                            <button class="text-white bg-danger px-4 py-1 rounded-4 closeQ" type="button">
                                انصراف
                            </button>
                            <button class="main-btn text-white px-4 py-1" type="submit">
                                <i class="fa fa-spinner fa-spin" wire:loading></i>
                                <span wire:loading.remove> ثبت</span>
                            </button>
                        </div>
                    </form>
                @else
                    <!-- Auth alert -->
                    <div
                        class="bg-warning fw-bold mt-3  w-100 d-flex align-items-center justify-content-between   rounded-2 p-3">
                        <p class="m-0">
                            برای ارسال دیدگاه لازم است وارد شده یا ثبت‌نام کنید
                        </p>
                        <a href="{{route('auth.client')}}">
                            ورود یا ثبت ‌نام
                        </a>
                    </div>
                @endauth

            </div>
        </div>

        <div>
            @forelse($comment->answers as $answer)
                <img
                    src="/frontend/assets/images/ans.png"
                    alt="answer"
                    class="ansBorder"/>
                <!-- answer -->
                <div class="answer text-white bg-primary btn-innerShadow rounded-4 p-1 p-lg-4 w-75 mb-5">
                    <div
                        class="d-flex justify-content-between align-items-center px-4 pb-3 border-bottom">
                        <div class="d-flex align-items-center column-gap-3">
                            <img
                                src="{{@$answer->user->picture}}"
                                alt="avatar"
                                class="avatar rounded-5 rounded-5 border border-white border-4"/>
                            <div>
                                <h6 class="text-white m-0">{{@$answer->user->name}}</h6>
                                {{--<p class="m-0 text-white-50">{{@$answer->created_at->diffForHumans()}}</p>--}}
                            </div>
                        </div>

                    </div>

                      <div class="p-3">
                          {!! @$answer->comment !!}
                      </div>
                </div>

            @empty
            @endforelse
        </div>
    @empty
    @endforelse

    {{$comments->links('layouts.pagination-admin')}}
    @push('scripts')
        <script>
            $('.page-item').on('click', function () {
                const section = document.getElementById('questions');
                section.scrollIntoView({behavior: 'smooth', block: 'start'});
            })
        </script>
    @endpush
</section>
