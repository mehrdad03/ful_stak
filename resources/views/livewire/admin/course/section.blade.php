<div class="content-wrapper">
    <style>
        .actions i {
            font-size: 18px;
        }

        .ma-t {
            margin-top: 40px;
        }

        .ma-ts {
            margin-top: 20px;
        }

        .t1 {
            align-items: center;
            display: flex;
        }

    </style>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card position-sticky" style="top: 0">
                <div class="card-header">
                    <div class="card-title">
                        افزودن سرفصل:
                        {{$courseTitle}}
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="saveSection(Object.fromEntries(new FormData($event.target)))">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="field-wrapper">
                                <input name="title" id="title" value="{{@$title}}"
                                       class="form-control @error('title') error-input-border @enderror"
                                       type="text">
                                <div class="field-placeholder">عنوان<span class="text-danger">*</span>
                                </div>
                                @foreach ($errors->get('title') as $message)
                                    <div wire:loading.remove
                                         class="text-white d-flex invalid-tooltip">{{$message}}</div>
                                @endforeach
                            </div>

                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start ma-ts">
                            <button type="submit" class="btn  btn-primary add-success-noti-admin">ذحیره</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>عنوان</th>
                                    <th>دروس</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sections as $section)
                                    <tr role="row" class="odd" wire:key="{{$section->id}}">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{ $section->id }}</td>
                                        <td>{{ $section->title }}</td>
                                        <td><a wire:navigate
                                               href="{{route('admin.course.section.lecture',$section->id)}}"
                                               class="btn btn-sm btn-outline-warning">دروس</a></td>

                                        <td>
                                            <div class="actions t1">
                                                <a href="javascript:0"
                                                   wire:click="editSection({{$section->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="ویرایش">
                                                    <i class="fa fa-edit text-info ms-2"></i>
                                                </a>
                                                <a href="javascript:0"
                                                   wire:confirm="با حذف این فصل دروس مرتبط با این درس هم حذف خواهند شد!"
                                                   wire:click="delete({{$section->id}})"
                                                   data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                   data-bs-original-title="حذف">
                                                    <i class="fa fa-trash text-danger ms-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('swal:confirm', event => {
                Swal.fire({
                    title: ' مطمئن هستی ؟',
                    text: "!!!!دسته بندی مورد نظر حذف میشود",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'بله , مشکلی نیست !',
                    cancelButtonText: 'لغو',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('delete', event.detail.id)
                        // window.location.reload()
                    }
                });
            });
        </script>
        <script>
            window.addEventListener('swal:alert-success', event => {
                Swal.fire({
                    position: 'content',
                    icon: 'success',
                    title: 'عملیات با موفقیت انجام شد!',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush
</div>
