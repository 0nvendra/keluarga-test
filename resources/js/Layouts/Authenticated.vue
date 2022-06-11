<template>
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <div
                id="kt_aside"
                class="aside aside-light aside-hoverable drawer drawer-start"
                data-kt-drawer="true"
                data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle"
                style="width: 250px !important"
            >
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <h1>FAMILY TREE - NOVENDRA</h1>
                    <!--end::Logo-->
                    <!--begin::Aside toggler-->
                    <div
                        id="kt_aside_toggle"
                        class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                        data-kt-toggle="true"
                        data-kt-toggle-state="active"
                        data-kt-toggle-target="body"
                        data-kt-toggle-name="aside-minimize"
                    >
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    opacity="0.5"
                                    d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                    fill="black"
                                />
                                <path
                                    d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                    fill="black"
                                />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside toggler-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div
                        class="hover-scroll-overlay-y my-5 my-lg-5"
                        id="kt_aside_menu_wrapper"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside_menu"
                        data-kt-scroll-offset="0"
                    >
                        <!--begin::Menu-->
                        <div
                            class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu"
                            data-kt-menu="true"
                        >
                            <div class="menu-item">
                                <NavLink
                                    :href="route('keluarga.index')"
                                    class="menu-link"
                                >
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16"
                                                height="16"
                                                fill="currentColor"
                                                class="bi bi-people"
                                                viewBox="0 0 16 16"
                                            >
                                                <path
                                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"
                                                />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">KELUARGA</span>
                                </NavLink>
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
            </div>
            <div
                class="content d-flex flex-column flex-column-fluid"
                id="kt_content"
            >
                <!--begin::Post-->
                <div id="kt_header" class="header" style="top: -30px">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex align-items-stretch justify-content-between"
                    >
                        <!--begin::Aside mobile toggle-->
                        <div
                            class="d-flex align-items-center d-lg-none ms-n3 me-1"
                            title="Show aside menu"
                        >
                            <div
                                class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_aside_mobile_toggle"
                            >
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2x mt-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black"
                                        ></path>
                                        <path
                                            opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black"
                                        ></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Wrapper-->
                        <div
                            class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        >
                            <!--begin::Navbar-->
                            <div
                                class="d-flex align-items-stretch"
                                id="kt_header_nav"
                            >
                                <!--begin::Menu wrapper-->
                                <div
                                    class="header-menu align-items-stretch"
                                    data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}"
                                    data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="end"
                                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                                    data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}"
                                >
                                    <!--begin::Menu-->

                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div
                                class="d-flex align-items-stretch flex-shrink-0"
                            >
                                <!--begin::Toolbar wrapper-->
                                <div
                                    class="d-flex align-items-stretch flex-shrink-0"
                                >
                                    <!--begin::User-->
                                    <div
                                        class="d-flex align-items-center ms-1 ms-lg-3"
                                        id="kt_header_user_menu_toggle"
                                    >
                                        <!--begin::Menu wrapper-->
                                        <div
                                            class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click"
                                            data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end"
                                        >
                                            User Statik
                                        </div>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                            data-kt-menu="true"
                                        >
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div
                                                    class="menu-content d-flex align-items-center px-3"
                                                >
                                                    <!--begin::Avatar-->
                                                    <div
                                                        class="symbol symbol-50px me-5"
                                                    >
                                                        <img
                                                            alt="Logo"
                                                            src="assets/media/avatars/150-26.jpg"
                                                        />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div
                                                        class="d-flex flex-column"
                                                    >
                                                        <div
                                                            class="fw-bolder d-flex align-items-center fs-5"
                                                        >
                                                            Max Smith
                                                            <span
                                                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"
                                                                >Pro</span
                                                            >
                                                        </div>
                                                        <a
                                                            href="#"
                                                            class="fw-bold text-muted text-hover-primary fs-7"
                                                            >max@kt.com</a
                                                        >
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a
                                                    href="../../demo1/dist/account/overview.html"
                                                    class="menu-link px-5"
                                                    >My Profile</a
                                                >
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a
                                                    href="../../demo1/dist/pages/projects/list.html"
                                                    class="menu-link px-5"
                                                >
                                                    <span class="menu-text"
                                                        >My Projects</span
                                                    >
                                                    <span class="menu-badge">
                                                        <span
                                                            class="badge badge-light-danger badge-circle fw-bolder fs-7"
                                                            >3</span
                                                        >
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div
                                                class="menu-item px-5"
                                                data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="left-start"
                                            >
                                                <a
                                                    href="#"
                                                    class="menu-link px-5"
                                                >
                                                    <span class="menu-title"
                                                        >My Subscription</span
                                                    >
                                                    <span
                                                        class="menu-arrow"
                                                    ></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-dropdown w-175px py-4"
                                                >
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/referrals.html"
                                                            class="menu-link px-5"
                                                            >Referrals</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/billing.html"
                                                            class="menu-link px-5"
                                                            >Billing</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/statements.html"
                                                            class="menu-link px-5"
                                                            >Payments</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/statements.html"
                                                            class="menu-link d-flex flex-stack px-5"
                                                            >Statements
                                                            <i
                                                                class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title=""
                                                                data-bs-original-title="View your statements"
                                                                aria-label="View your statements"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div
                                                        class="separator my-2"
                                                    ></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div
                                                            class="menu-content px-3"
                                                        >
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid"
                                                            >
                                                                <input
                                                                    class="form-check-input w-30px h-20px"
                                                                    type="checkbox"
                                                                    value="1"
                                                                    checked="checked"
                                                                    name="notifications"
                                                                />
                                                                <span
                                                                    class="form-check-label text-muted fs-7"
                                                                    >Notifications</span
                                                                >
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a
                                                    href="../../demo1/dist/account/statements.html"
                                                    class="menu-link px-5"
                                                    >My Statements</a
                                                >
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div
                                                class="menu-item px-5"
                                                data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="left-start"
                                            >
                                                <a
                                                    href="#"
                                                    class="menu-link px-5"
                                                >
                                                    <span
                                                        class="menu-title position-relative"
                                                        >Language
                                                        <span
                                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0"
                                                            >English
                                                            <img
                                                                class="w-15px h-15px rounded-1 ms-2"
                                                                src="assets/media/flags/united-states.svg"
                                                                alt="" /></span
                                                    ></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-dropdown w-175px py-4"
                                                >
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/settings.html"
                                                            class="menu-link d-flex px-5 active"
                                                        >
                                                            <span
                                                                class="symbol symbol-20px me-4"
                                                            >
                                                                <img
                                                                    class="rounded-1"
                                                                    src="assets/media/flags/united-states.svg"
                                                                    alt=""
                                                                /> </span
                                                            >English</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/settings.html"
                                                            class="menu-link d-flex px-5"
                                                        >
                                                            <span
                                                                class="symbol symbol-20px me-4"
                                                            >
                                                                <img
                                                                    class="rounded-1"
                                                                    src="assets/media/flags/spain.svg"
                                                                    alt=""
                                                                /> </span
                                                            >Spanish</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/settings.html"
                                                            class="menu-link d-flex px-5"
                                                        >
                                                            <span
                                                                class="symbol symbol-20px me-4"
                                                            >
                                                                <img
                                                                    class="rounded-1"
                                                                    src="assets/media/flags/germany.svg"
                                                                    alt=""
                                                                /> </span
                                                            >German</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/settings.html"
                                                            class="menu-link d-flex px-5"
                                                        >
                                                            <span
                                                                class="symbol symbol-20px me-4"
                                                            >
                                                                <img
                                                                    class="rounded-1"
                                                                    src="assets/media/flags/japan.svg"
                                                                    alt=""
                                                                /> </span
                                                            >Japanese</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a
                                                            href="../../demo1/dist/account/settings.html"
                                                            class="menu-link d-flex px-5"
                                                        >
                                                            <span
                                                                class="symbol symbol-20px me-4"
                                                            >
                                                                <img
                                                                    class="rounded-1"
                                                                    src="assets/media/flags/france.svg"
                                                                    alt=""
                                                                /> </span
                                                            >French</a
                                                        >
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a
                                                    href="../../demo1/dist/account/settings.html"
                                                    class="menu-link px-5"
                                                    >Account Settings</a
                                                >
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a
                                                    class="menu-link px-5"
                                                    >Sign Out</a
                                                >
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div
                                        class="d-flex align-items-center d-lg-none ms-2 me-n3"
                                        title="Show header menu"
                                    >
                                        <div
                                            class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                            id="kt_header_menu_mobile_toggle"
                                        >
                                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                                        fill="black"
                                                    ></path>
                                                    <path
                                                        opacity="0.3"
                                                        d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                                        fill="black"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xl">
                        <slot />
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
        </div>
        <!--end::Page-->
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
            >
                <rect
                    opacity="0.5"
                    x="13"
                    y="6"
                    width="13"
                    height="2"
                    rx="1"
                    transform="rotate(90 13 6)"
                    fill="black"
                />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black"
                />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
</template>
<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import NavLink from "@/components/ResponsiveNavLink.vue";
export default {
    components: {
        Head,
        Link,
        NavLink,
    },
    data() {
        return {};
    },
    created() {},

    methods: {},
};
</script>
