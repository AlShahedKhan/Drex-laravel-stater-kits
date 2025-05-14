<header class="header">
    <button class="close-toggle sidebar-toggle p-0">
        <img src="{{ asset('backend') }}/assets/images/icons/hammenu-2.svg" alt="" />
    </button>
    <div class="spacing-icon">
        <div class="header-search tab-none">
            <div class="search-icon">
                <i class="las la-search"></i>
            </div>

            {{--  --}}
            <input class="search-field ot-input" type="text" placeholder="Search Page" id="menuSearch"/>
            <div id="autoCompleteData" class="d-nones">
            </div>
        </div>

        <div class="header-controls">
            <div class="header-control-item md-none">
                <div class="item-content language-currceny-container">
                    <button class="language-currency-btn d-flex align-items-center mt-0" type="button" id="language_change"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="icon-flag">
                            <i class="{{ @$data['language']->icon_class }} rounded-circle icon"></i>
                        </div>
                        <h6>{{ @$data['language']->name }}</h6>
                    </button>

                    <div class="language-currency-dropdown dropdown-menu dropdown-menu-end top-navbar-dropdown-menu ot-card"
                        aria-labelledby="language_change">

                        <div class="lanuage-currency-">
                            <div class="dropdown-item-list language-list mb-20">
                                <h5>{{ ___('common.language') }}</h5>
                                <select name="language" id="language_with_flag"
                                    class="form-select ot-input mb-3 language-change" aria-label="Default select example">
                                    @foreach ($data['languages'] as $row)
                                        <option data-icon="{{ $row->icon_class }}" value="{{ $row->code }}"
                                            {{ $row->code == \Cache::get('locale') ? 'selected' : '' }}>
                                            {{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="header-control-item">
                <div class="item-content dropdown md-none">
                    <button class="mt-0" onclick="javascript:toggleFullScreen()">
                        <img class="icon" src="{{ asset('backend/assets/images/icons/full-screen.svg') }}" alt="check in" />
                    </button>
                </div>
            </div>
        </div>

    </div>
</header>


