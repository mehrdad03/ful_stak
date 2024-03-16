@push('links')
    <link rel="stylesheet" href="/frontend/css/profile.css"/>
    <link rel="stylesheet" href="/frontend/css/progresscircle.css"/>
@endpush

<div class="row container p-lg-0 mx-auto mx-lg-0">
    <!-- ====== sidebar ====== -->
    @include('livewire.client.profile.sidebar')

    <!-- ====== main content ====== -->
    <div class="col col-lg-10 p-0 px-lg-4">
        <!-- top menu -->
        @include('livewire.client.profile.status')
        <!-- course Type btn -->
        <div
            class="coursbtn w-75 rounded-4 p-2 my-5 mx-auto d-flex flex-column gap-3 gap-md-1 flex-lg-row justify-content-around align-items-center bg-secondary">
            <button
                type="button"
                class="px-4 py-3 active rounded-4 d-flex align-items-center column-gap-2">
                <svg
                    width="22"
                    height="18"
                    viewBox="0 0 22 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 13.1C1.96089 13.296 2.84294 13.7702 3.53638 14.4636C4.22982 15.1571 4.70403 16.0391 4.9 17M1 9.05C3.03079 9.27586 4.92428 10.186 6.36911 11.6309C7.81395 13.0757 8.72414 14.9692 8.95 17M1 5V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H19C19.5304 1 20.0391 1.21071 20.4142 1.58579C20.7893 1.96086 21 2.46957 21 3V15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H13"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M1 17H1.01"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
                <p class="m-0 text-white">دوره های جاری</p>
            </button>
            <button
                type="button"
                class="px-4 py-3 rounded-4 d-flex align-items-center column-gap-2">
                <svg
                    width="22"
                    height="18"
                    viewBox="0 0 22 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 13.1C1.96089 13.296 2.84294 13.7702 3.53638 14.4636C4.22982 15.1571 4.70403 16.0391 4.9 17M1 9.05C3.03079 9.27586 4.92428 10.186 6.36911 11.6309C7.81395 13.0757 8.72414 14.9692 8.95 17M1 5V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H19C19.5304 1 20.0391 1.21071 20.4142 1.58579C20.7893 1.96086 21 2.46957 21 3V15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H13"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M1 17H1.01"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
                <p class="m-0 text-white">دوره های خریداری شده</p>
            </button>
            <button
                type="button"
                class="px-4 py-3 rounded-4 d-flex align-items-center column-gap-2">
                <svg
                    width="22"
                    height="18"
                    viewBox="0 0 22 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 13.1C1.96089 13.296 2.84294 13.7702 3.53638 14.4636C4.22982 15.1571 4.70403 16.0391 4.9 17M1 9.05C3.03079 9.27586 4.92428 10.186 6.36911 11.6309C7.81395 13.0757 8.72414 14.9692 8.95 17M1 5V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H19C19.5304 1 20.0391 1.21071 20.4142 1.58579C20.7893 1.96086 21 2.46957 21 3V15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H13"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M1 17H1.01"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
                <p class="m-0 text-white">دوره های گذرانده شده</p>
            </button>
            <button
                type="button"
                class="px-4 py-3 rounded-4 d-flex align-items-center column-gap-2">
                <svg
                    width="22"
                    height="18"
                    viewBox="0 0 22 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 13.1C1.96089 13.296 2.84294 13.7702 3.53638 14.4636C4.22982 15.1571 4.70403 16.0391 4.9 17M1 9.05C3.03079 9.27586 4.92428 10.186 6.36911 11.6309C7.81395 13.0757 8.72414 14.9692 8.95 17M1 5V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H19C19.5304 1 20.0391 1.21071 20.4142 1.58579C20.7893 1.96086 21 2.46957 21 3V15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H13"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M1 17H1.01"
                        stroke="#23BF65"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
                <p class="m-0 text-white">دوره های غیر فعال</p>
            </button>
        </div>
        <!-- My Courses -->
        <section>
            <div class="d-flex justify-content-center justify-content-lg-start align-items-center flex-wrap gap-4 mt-4">
                @forelse($myCourses as $item)
                    @php
                        $title=explode('_',$item->course->title);
                        $currentYear=date('Y');
                    @endphp
                    @include('livewire.client.profile.course-item')
                @empty
                @endforelse
            </div>
        </section>
    </div>
</div>

@push('scripts')
    <script src="/frontend/js/profile.js"></script>
    <script src="/frontend/js/progresscircle.js"></script>
@endpush
