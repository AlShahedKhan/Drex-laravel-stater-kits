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
            <!--Admin Tools Start -->
            <h6 class="sidebar-menu-section-heading">
                {{ ___('cricket.admin') }} <span class="on-half-expanded"> {{ ___('cricket.tools') }}</span>
            </h6>
            <!--Admin Tools End -->

            <!-- parent menu list start  -->
            <ul class="sidebar-dropdown-menu parent-menu-list">
                <li class="sidebar-menu-item">
                    <a href="#" class="parent-item-content has-arrow">
                        {{-- <img src="{{ asset('backend') }}/assets/images/icons/notification-status.svg" alt="Dashboard" /> --}}
                        <i class="las la-tachometer-alt"></i>
                        <span class="on-half-expanded">{{ ___('common.dashboard') }}</span>
                    </a>
                    <ul class="child-menu-list">
                        <li class="sidebar-menu-item {{ set_menu(['dashboard']) }}">
                            <a href="{{ route('dashboard') }}">{{ ___('common.default_dashboard') }}</a>
                        </li>
                    </ul>
                </li>
                @if (hasPermission('user_read') || hasPermission('role_read'))
                    <li class="sidebar-menu-item {{ set_menu(['users*', 'roles*']) }}">
                        <a class="parent-item-content has-arrow">
                            {{-- <img src="{{ asset('backend') }}/assets/images/icons/clipboard.svg" alt="Dashboard" /> --}}
                            <i class="las la-user-tag"></i>
                            <span class="on-half-expanded">{{ ___('common.users_&_roles') }}</span>
                        </a>

                        <!-- second layer child menu list start  -->

                        <ul class="child-menu-list">
                            @if (hasPermission('role_read'))
                                <li class="sidebar-menu-item {{ set_menu(['roles*']) }}">
                                    <a href="{{ route('roles.index') }}">{{ ___('users_roles.roles') }}</a>
                                </li>
                            @endif
                            @if (hasPermission('user_read'))
                                <li class="sidebar-menu-item {{ set_menu(['users*']) }}">
                                    <a href="{{ route('users.index') }}">{{ ___('users_roles.users') }}</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif

                <!-- second layer child menu list end  -->

                <!-- Language layout start -->
                @if (hasPermission('language_read'))
                    <li class="sidebar-menu-item {{ set_menu(['languages*']) }}">
                        <a href="{{ route('languages.index') }}" class="parent-item-content">
                            <i class="las la-language"></i>
                            <span class="on-half-expanded">{{ ___('common.language') }}</span>
                        </a>
                    </li>
                @endif
                <!-- Language layout end -->

                <!-- Settings layout start -->
                @if (hasPermission('general_settings_read') ||
                    hasPermission('storage_settings_read') ||
                    hasPermission('recaptcha_settings_read') ||
                    hasPermission('email_settings_read'))
                    <li class="sidebar-menu-item {{ set_menu(['setting*']) }}">
                        <a href="#" class="parent-item-content has-arrow">
                            <i class="las la-cog"></i>
                            <span class="on-half-expanded">{{ ___('common.settings') }}</span>
                        </a>

                        <!-- second layer child menu list start  -->
                        <ul class="child-menu-list">
                            @if (hasPermission('general_settings_read'))
                                <li class="sidebar-menu-item {{ set_menu(['settings.general-settings']) }}">
                                    <a
                                        href="{{ route('settings.general-settings') }}">{{ ___('settings.general_settings') }}</a>
                                </li>
                            @endif

                            @if (hasPermission('storage_settings_read'))
                                <li class="sidebar-menu-item {{ set_menu(['settings.storagesetting']) }}">
                                    <a
                                        href="{{ route('settings.storagesetting') }}">{{ ___('settings.storage_settings') }}</a>
                                </li>
                            @endif

                            @if (hasPermission('recaptcha_settings_read'))
                                <li class="sidebar-menu-item {{ set_menu(['settings.recaptcha-setting']) }}">
                                    <a
                                        href="{{ route('settings.recaptcha-setting') }}">{{ ___('settings.recaptcha_settings') }}</a>
                                </li>
                            @endif

                            @if (hasPermission('email_settings_read'))
                                <li class="sidebar-menu-item {{ set_menu(['settings.mail-setting']) }}">
                                    <a
                                        href="{{ route('settings.mail-setting') }}">{{ ___('settings.email_settings') }}</a>
                                </li>
                            @endif
                        </ul>
                        <!-- second layer child menu list end  -->
                    </li>
                @endif
                <!-- Settings layout end -->

                <!-- Components Layout End -->
            </ul>
            <!-- parent menu list end  -->
            
            <!-- parent menu list start  -->
            <ul class="sidebar-dropdown-menu parent-menu-list">
                

                 <!--football Start -->
                 <!-- <li class="sidebar-menu-item {{ set_menu(['football_scores']) }}">
                    <a href="{{ url('football_scores') }}" class="parent-item-content">
                        <i class="fa-regular fa-futbol"></i>
                        <span class="on-half-expanded">{{ ___('football.football') }} </span>
                    </a>
                </li> -->
                <!--football End -->
            </ul>
            <!-- parent menu list end  -->
        </div>
    </div>
</aside>
