<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="{{ route('dashboard') }}">
                <input type="hidden" name="global_light_logo" id="global_light_logo"
                    value="{{ @globalAsset(setting('light_logo'), '154x38.png') }}" />
                <input type="hidden" name="global_dark_logo" id="global_dark_logo"
                    value="{{ @globalAsset(setting('dark_logo'), '154x38.png') }}" />

                <img id="sidebar_full_logo" class="full-logo setting-image"
                    src="{{ userTheme() == 'default-theme' ? @globalAsset(setting('light_logo'), '154x38.png') : @globalAsset(setting('dark_logo'), '154x38.png') }}"
                    alt="" />

                <img class="half-logo" src="{{ globalAsset(setting('favicon'), '38x38.png') }}" alt="" />
            </a>
        </div>

        <button class="half-expand-toggle sidebar-toggle">
            <img src="{{ asset('backend') }}/assets/images/icons/collapse-arrow.svg" alt="" />
        </button>
        <button class="close-toggle sidebar-toggle">
            <img src="{{ asset('backend') }}/assets/images/icons/collapse-arrow.svg" alt="" />
        </button>
    </div>

    <div class="sidebar-menu srollbar">
        <div class="sidebar-menu-section">

            <!--Cricket Start -->
            <h6 class="sidebar-menu-section-heading">
                {{ ___('cricket.cricket') }} <span class="on-half-expanded">{{ ___('cricket.features') }}</span>
            </h6>

            <ul>
                <!--Curve Start -->
                <li class="sidebar-menu-item">
                    <a href="{{ url('public_scores') }}" class="parent-item-content has-arrow">
                        <i class="fa-thin fa-football-helmet"></i>
                        <span class="on-half-expanded">{{ ___('cricket.cricket') }} </span>
                    </a>
                    {{-- <ul class="child-menu-list">
                        <li class="sidebar-menu-item {{ set_menu(['public_scores']) }}">
                            <a href="#">{{ ___('cricket.home') }}</a>
                        </li>
                    </ul> --}}
                </li>
                <!--Curve End -->
            </ul>

            <!--Football Featurs Start -->
            <h6 class="sidebar-menu-section-heading">
                {{ ___('football.football') }} <span class="on-half-expanded">{{ ___('cricket.features') }}</span>
            </h6>

            <ul>
                <!--football Start -->
                <li class="sidebar-menu-item {{ set_menu(['football_scores']) }}">
                    <a href="{{ url('football_scores') }}" class="parent-item-content">
                        <i class="fa-regular fa-futbol"></i>
                        <span class="on-half-expanded">{{ ___('football.football') }} </span>
                    </a>
                </li>
                <!--football End -->
            </ul>
            <!--Football Featurs End -->
        </div>
    </div>
</aside>
