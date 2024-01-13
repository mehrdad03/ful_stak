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
                                    <th>ویدیو</th>
                                    <th>عنوان</th>
                                    <th>دروس</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($lectures as $lecture)
                                    <tr >
                                        <td>{{$lecture->id}}</td>
                                        <td>
                                            <div class="media-box  align-items-center row">
                                                <img src="/{{@$category->image->file}}"
                                                     style="width: 307px;border-radius: 5%"
                                                     class=" ms-2 media-avatar"
                                                     alt="Product">
                                            </div>
                                            <form class="mt-2 d-inline-flex align-items-center p-1"
                                                  style="background: #575757;border-radius: 5px"
                                                  wire:submit="convertVideo({{$lecture->id}})">

                                                <input style="display: -webkit-inline-box;" type="file" wire:model="video">
                                                <button class="btn btn-sm btn-success" type="submit">
                                                    ذخیره
                                                    <div wire:loading
                                                         wire:target="convertVideo({{$lecture->id}})"
                                                         class="spinner-border spinner-border-sm"></div>
                                                </button>

                                            </form>
                                            @if($videoError and explode('_',$videoError)[0] == $lecture->id)

                                                <span style="position: absolute;top: 7px;height: 75%;border-radius: 10px;width: 285px;background: #c65148f0!important;"
                                                      class="alert alert-danger position-absolute d-flex align-items-center justify-content-center">{{@explode('_',$videoError)[1]}}</span>
                                            @endif
                                        </td>

                                        <td>{{$lecture->title}}</td>
                                        <td>
                                            <a class="btn btn-outline-warning"
                                               href="{{--{{route('admin.course.video',$lecture->id)}}--}}">دروس</a>
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
