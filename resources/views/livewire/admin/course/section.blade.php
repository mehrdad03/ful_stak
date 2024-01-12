<div class="content-wrapper-scroll">
    <div class="content-wrapper">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="field-wrapper w-25">
                                    <input style="background: #ffffff" class="form-control" type="text"
                                           wire:model.debounce.500ms="search">
                                    <div class="field-placeholder">جستجو براساس شماره سفارش و قیمت <span
                                            class="text-danger">*</span></div>
                                </div>
                            </div>
                            <table class="table v-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>دروس</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($sections as $section)

                                    <tr>
                                        <td>{{$section->id}}</td>
                                        <td>{{$section->title}}</td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                               href="{{route('admin.course.lecture',$section->id)}}">دروس</a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
