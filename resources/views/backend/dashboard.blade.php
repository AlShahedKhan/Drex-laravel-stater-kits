@extends('backend.master')

@section('title')
    {{ ___('common.Dashboard') }}
@endsection

@section('content')
    <div class="page-content">
        <div class="row g-4">
            <div class="col-12">
                <div class="row">
                    <div class="dashboard-heading row align-items-center mb-10">
                        <div class="col-12 col-md-6 col-xl-6 col-lg-6">
                            <h3 class="title">{{ ___('common.hello') }} {{ Auth::user()->name }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Summery Card Start -->
            <div class="col-12 summery-card">
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 ">
                        <div class="card summery-card ot-card h-100 ">
                            <div class="card-heading d-flex align-items-center">
                                <div class="card-icon icon-circle-2">
                                    <i class="las la-users"></i>
                                </div>
                                <div class="card-content">
                                    <h4>{{ ___('common.total_user') }}</h4>
                                    <h1>{{ withLeadingZero(@$users['total']) }}</h1>
                                </div>
                            </div>
                            <div class="card-bottom mt-20">
                                <div class="card-states">
                                    <div class="card-badge up">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-up.svg" alt="" />
                                        <span class="count">{{ withLeadingZero(@$users['active']) }}</span>
                                        <span class="status">{{ ___('common.active') }}</span>
                                    </div>
                                    <div class="card-badge down">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-donw.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$users['inactive']) }}</span>
                                        <span class="status">{{ ___('common.inactive') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 ">
                        <div class="card summery-card ot-card h-100 ">
                            <div class="card-heading d-flex">
                                <div class="card-icon icon-circle-3">

                                    <i class="las la-user-tag"></i>
                                </div>
                                <div class="card-content">
                                    <h4>{{ ___('common.roles') }}</h4>
                                    <h1>{{ withLeadingZero(@$roles['total']) }}</h1>
                                </div>
                            </div>
                            <div class="card-bottom mt-20">
                                <div class="card-states">
                                    <div class="card-badge up">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-up.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$roles['active']) }}</span>
                                        <span class="status">{{ ___('common.active') }}</span>
                                    </div>

                                    <div class="card-badge down">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-donw.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$roles['inactive']) }}</span>
                                        <span class="status">{{ ___('common.inactive') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 ">
                        <div class="card summery-card ot-card h-100 ">
                            <div class="card-heading d-flex">
                                <div class="card-icon icon-circle-1">

                                    <i class="las la-language"></i>
                                </div>
                                <div class="card-content">
                                    <h4>{{ ___('common.languages') }}</h4>
                                    <h1>{{ withLeadingZero(@$languages['total']) }}</h1>
                                   </div>
                            </div>
                            <div class="card-bottom mt-20">
                                <div class="card-states">
                                    <div class="card-badge up">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-up.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$languages['active']) }}</span>
                                        <span class="status">{{ ___('common.active') }}</span>
                                    </div>

                                    <div class="card-badge down">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-donw.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$languages['inactive']) }}</span>
                                        <span class="status">{{ ___('common.inactive') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card summery-card ot-card h-100 ">
                            <div class="card-heading d-flex">
                                <div class="card-icon icon-circle-4">

                                    <i class="las la-key"></i>
                                </div>
                                <div class="card-content">
                                    <h4>{{ ___('common.permissions') }}</h4>
                                    <h1>{{ withLeadingZero(@$permissions['total']) }}</h1>
                                </div>
                            </div>
                            <div class="card-bottom mt-20">
                                <div class="card-states">
                                    <div class="card-badge up">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-up.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$permissions['active']) }}</span>
                                        <span class="status">{{ ___('common.active') }}</span>
                                    </div>

                                    <div class="card-badge down">
                                        <img src="{{ asset('backend') }}/assets/images/icons/arrow-donw.svg"
                                            alt="" />

                                        <span class="count">{{ withLeadingZero(@$permissions['inactive']) }}</span>
                                        <span class="status">{{ ___('common.inactive') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Summery Card End -->
            <div class="col-12 statistic-card">
                <div class="row g-4">
                    <!-- Dashboard Statistic start  -->
                    <div class="ot-charts col-12 col-xxl-8">
                        <div class="card statistic-card ot-card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4>{{ ___('common.revenue') }}</h4>
                                </div>
                                <div class="dropdown card-button">
                                    <button class="btn btn-secondary ot-dropdown-btn dropdown-toggle" type="button"
                                        id="revenueBtn1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>{{ ___('common.last_07_days') }}</span>
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="revenueBtn1">
                                        <li>
                                            <a class="dropdown-item" href="#">{{ ___('common.last_07_days') }}</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">{{ ___('common.last_month') }}</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">{{ ___('common.last_year') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="revenueChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="ot-charts col-12 col-xxl-4">
                        <div class="card ot-card ot-visit-chart h-100">
                            <div class="card-header mb-20">
                                <div class="card-title">
                                    <h4>{{ ___('common.visit_customer') }}</h4>
                                </div>
                                <div class="dropdown card-button">
                                    <button class="btn btn-secondary ot-dropdown-btn dropdown-toggle" type="button"
                                        id="revenueBtn2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>{{ ___('common.last_07_days') }}</span>
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="revenueBtn2">
                                        <li>
                                            <a class="dropdown-item" href="#">{{ ___('common.last_07_days') }}</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">{{ ___('common.last_month') }}</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">{{ ___('common.last_year') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p>
                                <span class="ot-badge primary card-badge up">
                                <img src="../assets/images/icons/arrow-up.svg" alt=""/>36.8% </span> vs. Sep 8, 2021 visitor increased
                            </p>
                            <div class="card-body">
                                <div id="visited_customer_chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Statistic end  -->
                </div>
            </div>

            <!--  table content start -->

            <div class="col-12 table-content table-basic">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-20">
                            <h4>User Table</h4>
                        </div>

                        <div class="table-responsive table-height-350 niceScroll">
                            <table class="table table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th class="serial">{{ ___('common.sr_no.') }}</th>
                                        <th class="purchase">{{ ___('common.name') }}</th>
                                        <th class="purchase">{{ ___('common.email') }}</th>
                                        <th class="purchase">{{ ___('common.phone') }}</th>
                                        <th class="purchase">{{ ___('common.status') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @foreach ($user as $key => $row)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <div class="">
                                                    <a href="#">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="{{ globalAsset(@$row->image->path) }}"
                                                                    alt="{{ $row->name }}">
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="tb-lead">{{ $row->name }} <span
                                                                        class="dot dot-success d-md-none ml-1"></span></span>
                                                                {{-- <span>{{ $row->email }}</span> --}}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->phone }}</td>
                                            <td>
                                                @if ($row->status == App\Enums\Status::ACTIVE)
                                                    <span class="badge-basic-success-text">{{ ___('common.active') }}</span>
                                                @else
                                                    <span class="badge-basic-danger-text">{{ ___('common.inactive') }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--  table end -->
                        <!--  pagination start -->
                        @php
                            echo getPagination($user);
                        @endphp
                        <!--  pagination end -->
                    </div>
                </div>
            </div>
            <!--  table content end -->


            <!--  table content start -->
            <div class="col-12 table-content table-basic">
                <div class="card">
                    <div class="card-header"><h4>Basic Datatable</h4></div>
                    <div class="card-body">
                        <!-- toolbar table start -->
                        <div
                            class="table-toolbar d-flex flex-wrap gap-2 flex-column flex-xl-row justify-content-center justify-content-xxl-between align-content-center pb-3">
                            <div class="align-self-center">
                                <div
                                    class="d-flex flex-wrap gap-2 flex-column flex-lg-row justify-content-center align-content-center">
                                    <!-- show per page -->
                                    <div class="align-self-center">
                                        <form action="" method="POST">
                                            @csrf
                                            @method('GET')
                                            <label>
                                                <span class="mr-8">Show</span>
                                                <select class="form-select d-inline-block" id="table_show">
                                                    <option value="10" @selected($users->perPage() <= 10)>10</option>
                                                    <option value="25" @selected($users->perPage() <= 25 && $users->perPage() > 10)>25</option>
                                                    <option value="50" @selected($users->perPage() <= 50 && $users->perPage() > 25)>50</option>
                                                    <option value="100" @selected($users->perPage() <= 100 && $users->perPage() > 50)>100</option>
                                                </select>
                                                <span class="ml-8">Entries</span>
                                            </label>
                                        </form>
                                    </div>

                                    <div class="align-self-center d-flex gap-2">
                                        <!-- add btn -->
                                        <div class="align-self-center">
                                            <a href="{{ route('users.create') }}" role="button" class="btn-add"
                                                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Add">
                                                <span><i class="fa-solid fa-plus"></i> </span>
                                                <span class="d-none d-xl-inline">Add</span>
                                            </a>
                                        </div>
                                        <!-- daterange -->
                                        <div class="align-self-center">
                                            <form action="" method="post">
                                                @csrf
                                                @method('GET')
                                                <button type="button" class="btn-daterange" id="table_daterange"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-title="Date Range">
                                                    <span class="icon"><i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <span class="d-none d-xl-inline">Date Range</span>
                                                </button>
                                            </form>
                                        </div>
                                        <!-- Designation -->
                                        <div class="align-self-center">
                                            <div class="dropdown dropdown-designation" data-bs-toggle="tooltip"
                                                data-bs-placement="right" data-bs-title="Designation">
                                                <button type="button" class="btn-designation" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="icon"><i class="fa-solid fa-user-shield"></i></span>
                                                    <span class="d-none d-xl-inline">Designation</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <div class="search-content">
                                                        @if (Request::get('designation'))
                                                            @php
                                                                $designation = Request::get('designation');
                                                                $str = explode(',', $designation);
                                                            @endphp
                                                        @endif
                                                        <form action="" method="post">
                                                            @csrf
                                                            @method('GET')
                                                            <select
                                                                class="form-select select2-input ot-input mb-3js-example-basic-multiple"
                                                                name="designation[]" multiple="multiple"
                                                                id="designation">
                                                                @foreach ($designations as $designation)
                                                                    <option value="{{ $designation->id }}"
                                                                        @selected(in_array($designation->id, $str ?? []))>
                                                                        {{ $designation->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- search -->
                                    <div class="align-self-center">
                                        <form action="" method="post">
                                            @csrf
                                            @method('GET')
                                            <div class="search-box d-flex">
                                                <input class="form-control" placeholder="Search" name="search"
                                                    id="table_search" />
                                                <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- dropdown action -->
                                    <div class="align-self-center">
                                        <div class="dropdown dropdown-action" data-bs-toggle="tooltip"
                                            data-bs-placement="right" data-bs-title="Action">
                                            <button type="button" class="btn-dropdown" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        onclick="tableAction('active','{{ route('users.status') }}')"><span
                                                            class="icon mr-10"><i class="fa-solid fa-eye"></i></span>
                                                        Make Active <span class="count">(0)</span></a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        onclick="tableAction('inactive','{{ route('users.status') }}')"
                                                        aria-current="true"><span class="icon mr-8"><i
                                                                class="fa-solid fa-eye-slash"></i></span>
                                                        Make Inactive <span class="count">(0)</span></a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        onclick="tableAction('delete','{{ route('users.deletes', 0) }}')">
                                                        <span class="icon mr-16"><i
                                                                class="fa-solid fa-trash-can"></i></span>Delete <span
                                                            class="count">(0)</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- export -->
                            <div class="align-self-center">
                                <div class="d-flex justify-content-center justify-content-xl-end align-content-center">
                                    <div class="dropdown dropdown-export" data-bs-toggle="tooltip"
                                        data-bs-placement="right" data-bs-title="Export">
                                        <button type="button" class="btn-export" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="icon"><i
                                                    class="fa-solid fa-arrow-up-right-from-square"></i></span>

                                            <span class="d-none d-xl-inline">Export</span>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    onclick="selectElementContents(document.getElementById('table'))">
                                                    <span class="icon mr-8"><i class="fa-solid fa-copy"></i></span>
                                                    Copy
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" id="exportExel" aria-current="true">
                                                    <span class="icon mr-10">
                                                    <i  class="fa-solid fa-file-excel"></i></span>
                                                    Exel File
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" id="exportCSV">
                                                    <span class="icon mr-14">
                                                    <i class="fa-solid fa-file-csv"></i></span>
                                                    Csv File
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" id="exportPDF">
                                                    <span class="icon mr-14">
                                                    <i class="fa-solid fa-file-pdf"></i></span>
                                                    Pdf File
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);" id="exportJSON">
                                                    <span class="icon mr-8">
                                                        <i class="fa-solid fa-code"></i>
                                                    </span>
                                                    Json File
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- toolbar table end -->

                        <!--  table start -->
                        <div class="table-responsive table-height-350 niceScroll">
                            <table class="table table-bordered" id="table">
                                <thead class="thead">
                                    <tr>
                                        <th class="sorting_asc">
                                            <div class="check-box">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="all_checked" />
                                                </div>
                                            </div>
                                        </th>
                                        <th class="sorting_desc">SR No.</th>
                                        <th class="sorting_desc">User</th>
                                        <th class="sorting_desc">Designation</th>
                                        <th class="sorting_desc">Email</th>
                                        <th class="sorting_desc">Phone</th>
                                        <th class="sorting_desc">Create Date</th>
                                        <th class="sorting_desc">Status</th>
                                        <th class="sorting_desc">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @foreach ($users as $key => $user)
                                        <tr id="row_{{ $user->id }}">
                                            <td>
                                                <div class="check-box">
                                                    <div class="form-check">
                                                        <input class="form-check-input column_checked" type="checkbox"
                                                            id="column_{{ $user->id }}" value="{{ $user->id }}"
                                                            onclick="columnChecked({{ $user->id }})" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <div>
                                                    <a href="javascript:void(0);">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="{{ globalAsset(@$user->image->path) }}"
                                                                    alt="{{ $user->name }}">
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="tb-lead">{{ $user->name }}
                                                                <span class="dot dot-success d-md-none ml-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ @$user->designation->title }} </td>
                                            <td>{{ $user->email }} </td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->created_at->diffForHumans() }} </td>
                                            <td>
                                                @if ($user->status == App\Enums\Status::ACTIVE)
                                                    <span class="badge-basic-success-text">{{ ___('common.active') }}</span>
                                                @else
                                                    <span class="badge-basic-danger-text">{{ ___('common.inactive') }}</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <button type="button" class="btn-dropdown" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('users.edit', $user->id) }}"><span
                                                                    class="icon mr-12"><i
                                                                        class="fa-solid fa-pen-to-square"></i></span>
                                                                Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);"
                                                                onclick="delete_row('users/delete', {{ $user->id }})">
                                                                <span class="icon mr-16"><i
                                                                        class="fa-solid fa-trash-can"></i></span>Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--  table end -->

                        <!--  pagination start -->
                        @php
                            echo getPagination(
                                $users->appends([
                                    'search' => Request::get('search'),
                                    'from' => Request::get('from'),
                                    'to' => Request::get('to'),
                                ]),
                            );
                        @endphp
                        <!--  pagination end -->
                        
                    </div>
                </div>
            </div>
            <!--  table content end -->

        </div>
        <!-- table leave container end -->
    </div>
@endsection

@push('script')
    @include('backend.partials.delete-ajax')
    <script src="{{ asset('backend/assets/js/tables/export/excel.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tables/export/pdf.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tables/export/jspdf.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tables/export/exportMethod.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tables/export/__export.js') }}"></script>
    <script src="{{ asset('backend/assets/js/basic-datatable.js') }}"></script>
@endpush
