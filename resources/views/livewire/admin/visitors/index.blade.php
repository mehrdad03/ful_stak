<div class="content-wrapper">
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css/css/flag-icon.min.css">

    @endpush
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="field-wrapper">
                                <input style="background: #ffffff" class="form-control" type="text"
                                       wire:model.live.debounce.150ms="search">
                                <div class="field-placeholder">جستجو <span class="text-danger">*</span></div>
                            </div>
                            {{ $visitors->links('layouts.pagination-admin') }}
                        </div>
                        <table class="table v-middle">
                            <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>ip_address</th>
                                <th>country-city</th>
                                <th>device_type</th>
                                <th>referer</th>
                                <th>device_type</th>
                                <th>Created at</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--@dd($visitors)--}}
                            @foreach($visitors as $visitor)
                                <tr role="row" class="odd">
                                    <td>{{$visitor->id}}</td>
                                    <td>   {{@$visitor->ip_address}}
                                        <br>
                                        <span class="text-warning">
                                                    ( {{@$visitor->created_at->diffForHumans()}} )
                                        </span>
                                    </td>
                                    <td class="d-flex">
                                        @if ($visitor->countryCode !== 'unknown')
                                            <span style="width: 60px;height: 60px;margin-left: 5px"
                                                  class="flag-icon flag-icon-{{ $visitor->countryCode }}"></span>
                                        @endif
                                        <div>
                                            {{@$visitor->countryName}}
                                            <br>
                                            {{@$visitor->regionName}}
                                            <br>
                                            {{@$visitor->cityName}}
                                        </div>
                                    </td>
                                    <td>{{ $visitor->device_type }}</td>
                                    <td>{{ $visitor->referer }}</td>
                                    <td>{{ $visitor->user_agent }}</td>
                                    <td>{{ $visitor->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $visitors->links('layouts.pagination-admin') }}
                    </div>

                </div>
            </div>

        </div>
    </div>
    @push('script')
        <script>
            window.addEventListener('swal:alert-success', event => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'عملیات با موفقیت انجام شد',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
    @endpush
</div>

