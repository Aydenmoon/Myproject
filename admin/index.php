<?php
session_start();
include "../koneksi/koneksi.php";

if (!isset($_SESSION["admin"])) {
  echo "<script>alert('Login Terlebih Dahulu');</script>";
  echo "<script>location='login.php';</script>";
}
?>

<!doctype html>
<html
    lang="en"
    class="light scroll-smooth group"
    data-layout="vertical"
    data-sidebar="light"
    data-sidebar-size="lg"
    data-mode="light"
    data-topbar="light"
    data-skin="default"
    data-navbar="sticky"
    data-content="fluid"
    dir="ltr"
>
    <head>
        <meta charset="utf-8" />
        <title>Bill's Store</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no"
        />
        <meta content="Minimal Admin & Dashboard Template" name="description" />
        <meta content="StarCode Kh" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/logobrand.png" />
        <!-- Layout config Js -->
        <script src="../assets/js/layout.js"></script>
        <!-- Icons CSS -->
        <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
        <!-- StarCode CSS -->
        <link rel="stylesheet" href="../assets/css/starcode2.css" />
    </head>

    <body
        class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700"
    >
        <div
            class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative"
        >
            <div
                class="app-menu w-vertical-menu bg-vertical-menu ltr:border-r rtl:border-l border-vertical-menu-border fixed bottom-0 top-0 z-[1003] transition-all duration-75 ease-linear group-data-[sidebar-size=md]:w-vertical-menu-md group-data-[sidebar-size=sm]:w-vertical-menu-sm group-data-[sidebar-size=sm]:pt-header group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:border-vertical-menu-dark group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=brand]:border-vertical-menu-brand group-data-[sidebar=modern]:bg-gradient-to-tr group-data-[sidebar=modern]:to-vertical-menu-to-modern group-data-[sidebar=modern]:from-vertical-menu-form-modern group-data-[layout=horizontal]:w-full group-data-[layout=horizontal]:bottom-auto group-data-[layout=horizontal]:top-header hidden md:block print:hidden group-data-[sidebar-size=sm]:absolute group-data-[sidebar=modern]:border-vertical-menu-border-modern group-data-[layout=horizontal]:dark:bg-zink-700 group-data-[layout=horizontal]:border-t group-data-[layout=horizontal]:dark:border-zink-500 group-data-[layout=horizontal]:border-r-0 group-data-[sidebar=dark]:dark:bg-zink-700 group-data-[sidebar=dark]:dark:border-zink-600 group-data-[layout=horizontal]:group-data-[navbar=scroll]:absolute group-data-[layout=horizontal]:group-data-[navbar=bordered]:top-[calc(theme('spacing.header')_+_theme('spacing.4'))] group-data-[layout=horizontal]:group-data-[navbar=bordered]:inset-x-4 group-data-[layout=horizontal]:group-data-[navbar=hidden]:top-0 group-data-[layout=horizontal]:group-data-[navbar=hidden]:h-16 group-data-[layout=horizontal]:group-data-[navbar=bordered]:w-[calc(100%_-_2rem)] group-data-[layout=horizontal]:group-data-[navbar=bordered]:[&.sticky]:top-header group-data-[layout=horizontal]:group-data-[navbar=bordered]:rounded-b-md group-data-[layout=horizontal]:shadow-md group-data-[layout=horizontal]:shadow-slate-500/10 group-data-[layout=horizontal]:dark:shadow-zink-500/10 group-data-[layout=horizontal]:opacity-0"
            >
                <div
                    class="flex items-center justify-center px-5 text-center h-header group-data-[layout=horizontal]:hidden group-data-[sidebar-size=sm]:fixed group-data-[sidebar-size=sm]:top-0 group-data-[sidebar-size=sm]:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:bg-gradient-to-br group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:to-vertical-menu-to-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:from-vertical-menu-form-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:bg-vertical-menu-modern group-data-[sidebar-size=sm]:z-10 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_-_1px)] group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:dark:bg-zink-700"
                >
                    <a
                        href="index.php"
                        class="group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden group-data-[sidebar=modern]:hidden"
                    >
                        <span class="hidden group-data-[sidebar-size=sm]:block">
                            <img
                                src="../assets/images/logobrand.png"
                                alt=""
                                width="100"
                                class="h-6 mx-auto"
                            />
                        </span>
                        <span class="group-data-[sidebar-size=sm]:hidden">
                            <img
                                src="../assets/images/logobrand.png"
                                alt=""
                                width="100"
                                class="h-6 mx-auto"
                            />
                        </span>
                    </a>
                    <a
                        href="index.php"
                        class="hidden group-data-[sidebar=dark]:block group-data-[sidebar=brand]:block group-data-[sidebar=modern]:block"
                    >
                        <span class="hidden group-data-[sidebar-size=sm]:block">
                            <img
                                src="../assets/images/logobrand.png"
                                alt=""
                                width="100"
                                class="h-6 mx-auto"
                            />
                        </span>
                        <span class="group-data-[sidebar-size=sm]:hidden">
                            <img
                                src="../assets/images/logobrand.png"
                                alt=""
                                width="100"
                                class="h-6 mx-auto"
                            />
                        </span>
                    </a>
                    <button
                        type="button"
                        class="hidden p-0 float-end"
                        id="vertical-hover"
                    >
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div
                    id="scrollbar"
                    class="group-data-[sidebar-size=md]:max-h-[calc(100vh_-_theme('spacing.header')_*_1.2)] group-data-[sidebar-size=lg]:max-h-[calc(100vh_-_theme('spacing.header')_*_1.2)] group-data-[layout=horizontal]:h-56 group-data-[layout=horizontal]:md:h-auto group-data-[layout=horizontal]:overflow-auto group-data-[layout=horizontal]:md:overflow-visible group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:mx-auto"
                >
                    <div>
                        <ul
                            class="group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:flex-col group-data-[layout=horizontal]:md:flex-row"
                            id="navbar-nav"
                        >
                            <li
                                class="px-4 py-1 text-vertical-menu-item group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern uppercase font-medium text-[11px] cursor-default tracking-wider group-data-[sidebar-size=sm]:hidden group-data-[layout=horizontal]:hidden inline-block group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:underline group-data-[sidebar-size=md]:text-center group-data-[sidebar=dark]:dark:text-zink-200"
                            >
                                <span data-key="t-menu">Menu</span>
                            </li>

                            <li
                                class="relative group-data-[layout=horizontal]:shrink-0 group/sm"
                            >
                                <a
                                    class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0"
                                    href="index.php"
                                >
                                    <span
                                        class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"
                                        ><i
                                            data-lucide="monitor-dot"
                                            class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"
                                        ></i
                                    ></span>
                                    <span
                                        class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden"
                                        data-key="t-chat"
                                        >Dashboard</span
                                    >
                                </a>
                            </li>

                            <li
                                class="relative group-data-[layout=horizontal]:shrink-0 group/sm"
                            >
                                <a
                                    class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0"
                                    href="index.php?halaman=kategori"
                                >
                                    <span
                                        class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"
                                        ><i
                                            data-lucide="combine"
                                            class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"
                                        ></i
                                    ></span>
                                    <span
                                        class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden"
                                        data-key="t-email"
                                        >Kategori</span
                                    >
                                </a>
                            </li>
                            <li
                                class="relative group-data-[layout=horizontal]:shrink-0 group/sm"
                            >
                                <a
                                    class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0"
                                    href="index.php?halaman=produk"
                                >
                                    <span
                                        class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"
                                        ><i
                                            data-lucide="dices"
                                            class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"
                                        ></i
                                    ></span>
                                    <span
                                        class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden"
                                        data-key="t-email"
                                        >Produk</span
                                    >
                                </a>
                            </li>

                            <li
                                class="relative group-data-[layout=horizontal]:shrink-0 group/sm"
                            >
                                <a
                                    class="relative dropdown-button flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0"
                                    href="#!"
                                >
                                    <span
                                        class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"
                                        ><i
                                            data-lucide="file-text"
                                            class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"
                                        ></i
                                    ></span>
                                    <span
                                        class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden"
                                        data-key="t-calendar"
                                        >Data</span
                                    >
                                </a>
                                <div
                                    class="dropdown-content group-data-[sidebar-size=sm]:ltr:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:right-vertical-menu-sm group-data-[sidebar-size=sm]:w-[calc(theme('spacing.vertical-menu-sm')_*_2.8)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:rounded-b-sm bg-vertical-menu group-data-[sidebar=dark]:bg-vertical-menu-dark group-data-[sidebar=dark]:dark:bg-zink-700 group-data-[sidebar=brand]:bg-vertical-menu-brand group-data-[sidebar=modern]:bg-transparent group-data-[layout=horizontal]:md:absolute group-data-[layout=horizontal]:top-full group-data-[layout=horizontal]:md:w-44 group-data-[layout=horizontal]:py-2 group-data-[layout=horizontal]:rounded-b-md group-data-[layout=horizontal]:md:shadow-lg group-data-[layout=horizontal]:md:shadow-slate-500/10 group-data-[layout=horizontal]:dark:bg-zink-700 group-data-[layout=horizontal]:dark:md:shadow-zink-600/20 hidden group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:ltr:rounded-br-md group-data-[sidebar-size=sm]:rtl:rounded-br-md group-data-[sidebar-size=sm]:shadow-lg group-data-[sidebar-size=sm]:shadow-slate-700/10 group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:to-vertical-menu-to-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:from-vertical-menu-from-modern group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-gradient-to-tr"
                                >
                                    <ul
                                        class="ltr:pl-[1.75rem] rtl:pr-[1.75rem] group-data-[sidebar-size=md]:ltr:pl-0 group-data-[sidebar-size=md]:rtl:pr-0 group-data-[sidebar-size=sm]:ltr:pl-0 group-data-[sidebar-size=sm]:rtl:pr-0 group-data-[sidebar-size=sm]:py-2 group-data-[layout=horizontal]:ltr:pl-0 group-data-[layout=horizontal]:rtl:pr-0"
                                    >
                                        <li>
                                            <a
                                                href="index.php?halaman=pembelian"
                                                class="relative flex items-center px-6 py-2 text-vertical-menu-item-font-size transition-all duration-75 ease-linear text-vertical-menu-sub-item hover:text-vertical-menu-sub-item-hover [&.active]:text-vertical-menu-sub-item-active before:absolute ltr:before:left-1.5 rtl:before:right-1.5 before:top-4 before:w-1 before:h-1 before:rounded before:transition-all before:duration-75 before:ease-linear before:bg-vertical-menu-sub-item hover:before:bg-vertical-menu-sub-item-hover [&.active]:before:bg-vertical-menu-sub-item-active group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:text-vertical-menu-sub-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-sub-item-active-dark group-data-[sidebar=dark]:dark:[&.active]:text-custom-500 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 group-data-[sidebar=dark]:before:bg-vertical-menu-sub-item-dark/50 group-data-[sidebar=dark]:hover:before:bg-vertical-menu-sub-item-hover-dark group-data-[sidebar=dark]:dark:hover:before:bg-custom-500 group-data-[sidebar=dark]:[&.active]:before:bg-vertical-menu-sub-item-active-dark group-data-[sidebar=dark]:dark:[&.active]:before:bg-custom-500 group-data-[sidebar=brand]:text-vertical-menu-sub-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-sub-item-hover-brand group-data-[sidebar=brand]:before:bg-vertical-menu-sub-item-brand/80 group-data-[sidebar=brand]:hover:before:bg-vertical-menu-sub-item-hover-brand/80 group-data-[sidebar=brand]:[&.active]:before:bg-vertical-menu-sub-item-active-brand/80 group-data-[sidebar=brand]:[&.active]:text-vertical-menu-sub-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-sub-item-modern group-data-[sidebar=modern]:before:bg-vertical-menu-sub-item-modern/70 group-data-[sidebar=modern]:hover:text-vertical-menu-sub-item-hover-modern group-data-[sidebar=modern]:before:hover:bg-vertical-menu-sub-item-hover-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-sub-item-active-modern group-data-[sidebar=modern]:before:[&.active]:text-vertical-menu-sub-item-active-modern group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:before:hidden group-data-[layout=horizontal]:before:left-[1.4rem] group-data-[layout=horizontal]:md:before:hidden group-data-[layout=horizontal]:ltr:pl-10 group-data-[layout=horizontal]:rtl:pr-10 group-data-[layout=horizontal]:ltr:pr-5 group-data-[layout=horizontal]:rtl:pl-5 group-data-[layout=horizontal]:md:!px-5"
                                                data-key="t-default"
                                            >
                                                Pembelian
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="index.php?halaman=pelanggan"
                                                class="relative flex items-center px-6 py-2 text-vertical-menu-item-font-size transition-all duration-75 ease-linear text-vertical-menu-sub-item hover:text-vertical-menu-sub-item-hover [&.active]:text-vertical-menu-sub-item-active before:absolute ltr:before:left-1.5 rtl:before:right-1.5 before:top-4 before:w-1 before:h-1 before:rounded before:transition-all before:duration-75 before:ease-linear before:bg-vertical-menu-sub-item hover:before:bg-vertical-menu-sub-item-hover [&.active]:before:bg-vertical-menu-sub-item-active group-data-[sidebar=dark]:text-vertical-menu-sub-item-dark group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:text-vertical-menu-sub-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-sub-item-active-dark group-data-[sidebar=dark]:dark:[&.active]:text-custom-500 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 group-data-[sidebar=dark]:before:bg-vertical-menu-sub-item-dark/50 group-data-[sidebar=dark]:hover:before:bg-vertical-menu-sub-item-hover-dark group-data-[sidebar=dark]:dark:hover:before:bg-custom-500 group-data-[sidebar=dark]:[&.active]:before:bg-vertical-menu-sub-item-active-dark group-data-[sidebar=dark]:dark:[&.active]:before:bg-custom-500 group-data-[sidebar=brand]:text-vertical-menu-sub-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-sub-item-hover-brand group-data-[sidebar=brand]:before:bg-vertical-menu-sub-item-brand/80 group-data-[sidebar=brand]:hover:before:bg-vertical-menu-sub-item-hover-brand/80 group-data-[sidebar=brand]:[&.active]:before:bg-vertical-menu-sub-item-active-brand/80 group-data-[sidebar=brand]:[&.active]:text-vertical-menu-sub-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-sub-item-modern group-data-[sidebar=modern]:before:bg-vertical-menu-sub-item-modern/70 group-data-[sidebar=modern]:hover:text-vertical-menu-sub-item-hover-modern group-data-[sidebar=modern]:before:hover:bg-vertical-menu-sub-item-hover-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-sub-item-active-modern group-data-[sidebar=modern]:before:[&.active]:text-vertical-menu-sub-item-active-modern group-data-[sidebar-size=md]:before:hidden group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:before:hidden group-data-[layout=horizontal]:before:left-[1.4rem] group-data-[layout=horizontal]:md:before:hidden group-data-[layout=horizontal]:ltr:pl-10 group-data-[layout=horizontal]:rtl:pr-10 group-data-[layout=horizontal]:ltr:pr-5 group-data-[layout=horizontal]:rtl:pl-5 group-data-[layout=horizontal]:md:!px-5"
                                                data-key="t-month-grid"
                                            >
                                                Pelanggan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li
                                class="group-data-[layout=horizontal]:shrink-0 group/sm"
                            >
                                <a
                                    class="relative flex items-center ltr:pl-3 rtl:pr-3 ltr:pr-5 rtl:pl-5 mx-3 my-1 group/menu-link text-vertical-menu-item-font-size font-normal transition-all duration-75 ease-linear rounded-md py-2.5 text-vertical-menu-item hover:text-vertical-menu-item-hover hover:bg-vertical-menu-item-bg-hover [&.active]:text-vertical-menu-item-active [&.active]:bg-vertical-menu-item-bg-active group-data-[sidebar=dark]:text-vertical-menu-item-dark group-data-[sidebar=dark]:hover:text-vertical-menu-item-hover-dark group-data-[sidebar=dark]:dark:hover:text-custom-500 group-data-[layout=horizontal]:dark:hover:text-custom-500 group-data-[sidebar=dark]:hover:bg-vertical-menu-item-bg-hover-dark group-data-[sidebar=dark]:dark:hover:bg-zink-600 group-data-[sidebar=dark]:[&.active]:text-vertical-menu-item-active-dark group-data-[sidebar=dark]:[&.active]:bg-vertical-menu-item-bg-active-dark group-data-[sidebar=brand]:text-vertical-menu-item-brand group-data-[sidebar=brand]:hover:text-vertical-menu-item-hover-brand group-data-[sidebar=brand]:hover:bg-vertical-menu-item-bg-hover-brand group-data-[sidebar=brand]:[&.active]:bg-vertical-menu-item-bg-active-brand group-data-[sidebar=brand]:[&.active]:text-vertical-menu-item-active-brand group-data-[sidebar=modern]:text-vertical-menu-item-modern group-data-[sidebar=modern]:hover:bg-vertical-menu-item-bg-hover-modern group-data-[sidebar=modern]:hover:text-vertical-menu-item-hover-modern group-data-[sidebar=modern]:[&.active]:bg-vertical-menu-item-bg-active-modern group-data-[sidebar=modern]:[&.active]:text-vertical-menu-item-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:text-center group-data-[sidebar-size=sm]:group-hover/sm:w-[calc(theme('spacing.vertical-menu-sm')_*_3.63)] group-data-[sidebar-size=sm]:group-hover/sm:bg-vertical-menu group-data-[sidebar-size=sm]:group-data-[sidebar=dark]:group-hover/sm:bg-vertical-menu-dark group-data-[sidebar-size=sm]:group-data-[sidebar=modern]:group-hover/sm:bg-vertical-menu-border-modern group-data-[sidebar-size=sm]:group-data-[sidebar=brand]:group-hover/sm:bg-vertical-menu-brand group-data-[sidebar-size=sm]:my-0 group-data-[sidebar-size=sm]:rounded-b-none group-data-[layout=horizontal]:m-0 group-data-[layout=horizontal]:ltr:pr-8 group-data-[layout=horizontal]:rtl:pl-8 group-data-[layout=horizontal]:hover:bg-transparent group-data-[layout=horizontal]:[&.active]:bg-transparent [&.dropdown-button]:before:absolute [&.dropdown-button]:[&.show]:before:content-['\ea4e'] [&.dropdown-button]:before:content-['\ea6e'] [&.dropdown-button]:before:font-remix ltr:[&.dropdown-button]:before:right-2 rtl:[&.dropdown-button]:before:left-2 [&.dropdown-button]:before:text-16 group-data-[sidebar-size=sm]:[&.dropdown-button]:before:hidden group-data-[sidebar-size=md]:[&.dropdown-button]:before:hidden group-data-[sidebar=dark]:dark:text-zink-200 group-data-[layout=horizontal]:dark:text-zink-200 group-data-[sidebar=dark]:[&.active]:dark:bg-zink-600 group-data-[layout=horizontal]:dark:[&.active]:text-custom-500 rtl:[&.dropdown-button]:before:rotate-180 group-data-[layout=horizontal]:[&.dropdown-button]:before:rotate-90 group-data-[layout=horizontal]:[&.dropdown-button]:[&.show]:before:rotate-0 rtl:[&.dropdown-button]:[&.show]:before:rotate-0"
                                    href="index.php?halaman=laporan"
                                >
                                    <span
                                        class="min-w-[1.75rem] group-data-[sidebar-size=sm]:h-[1.75rem] inline-block text-start text-[16px] group-data-[sidebar-size=md]:block group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:items-center"
                                        ><i
                                            data-lucide="scroll-text"
                                            class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"
                                        ></i
                                    ></span>
                                    <span
                                        class="group-data-[sidebar-size=sm]:ltr:pl-10 group-data-[sidebar-size=sm]:rtl:pr-10 align-middle group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:hidden"
                                        data-key="t-notes"
                                        >Laporan</span
                                    >
                                </a>
                            </li>
                            <!-- -->
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <div
                id="sidebar-overlay"
                class="absolute inset-0 z-[1002] bg-slate-500/30 hidden"
            ></div>
            <header
                id="page-topbar"
                class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm group-data-[layout=horizontal]:ltr:left-0 group-data-[layout=horizontal]:rtl:right-0 fixed right-0 z-[1000] left-0 print:hidden group-data-[navbar=bordered]:m-4 group-data-[navbar=bordered]:[&.is-sticky]:mt-0 transition-all ease-linear duration-300 group-data-[navbar=hidden]:hidden group-data-[navbar=scroll]:absolute group/topbar group-data-[layout=horizontal]:z-[1004]"
            >
                <div class="layout-width">
                    <div
                        class="flex items-center px-4 mx-auto bg-topbar border-b-2 border-topbar group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand shadow-md h-header shadow-slate-200/50 group-data-[navbar=bordered]:rounded-md group-data-[navbar=bordered]:group-[.is-sticky]/topbar:rounded-t-none group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-700 dark:shadow-none group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-zink-500 group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-md group-data-[navbar=bordered]:shadow-none group-data-[layout=horizontal]:group-data-[navbar=bordered]:rounded-b-none group-data-[layout=horizontal]:shadow-none group-data-[layout=horizontal]:dark:group-[.is-sticky]/topbar:shadow-none"
                    >
                        <div
                            class="flex items-center w-full group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl navbar-header group-data-[layout=horizontal]:ltr:xl:pr-3 group-data-[layout=horizontal]:rtl:xl:pl-3"
                        >
                            <!-- LOGO -->

                            <button
                                type="button"
                                class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-75 ease-linear bg-topbar rounded-md btn hover:bg-slate-100 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:dark:border-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:md:hidden hamburger-icon"
                                id="topnav-hamburger-icon"
                            >
                                <i
                                    data-lucide="chevrons-left"
                                    class="w-5 h-5 group-data-[sidebar-size=sm]:hidden"
                                ></i>
                                <i
                                    data-lucide="chevrons-right"
                                    class="hidden w-5 h-5 group-data-[sidebar-size=sm]:block"
                                ></i>
                            </button>

                            <div class="flex gap-3 ms-auto">
                                <div
                                    class="relative flex items-center h-header"
                                >
                                    <button
                                        type="button"
                                        class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark"
                                        id="light-dark-mode"
                                    >
                                        <i
                                            data-lucide="sun"
                                            class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"
                                        ></i>
                                    </button>
                                </div>
                                <!-- Pesan -->
                                <div
                                    class="relative flex items-center dropdown h-header"
                                >
                                    <button
                                        type="button"
                                        class="inline-flex justify-center relative items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark"
                                        id="notificationDropdown"
                                        data-bs-toggle="dropdown"
                                    >
                                        <i
                                            data-lucide="mail"
                                            class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"
                                        ></i>
                                        <span
                                            class="absolute flex items-center justify-center w-[16px] h-[16px] text-xs text-white bg-red-400 border-white rounded-full -top-1 -right-1"
                                            >1
                                            <span
                                                class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-red-400"
                                            ></span>
                                        </span>
                                    </button>
                                    <div
                                        class="absolute z-50 hidden ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[20rem] lg:min-w-[26rem] dark:bg-zink-600"
                                        aria-labelledby="notificationDropdown"
                                    >
                                        <div class="p-4">
                                            <h6 class="mb-4 text-16">Pesan</h6>
                                            <ul
                                                class="flex flex-wrap w-full p-1 mb-2 text-sm font-medium text-center rounded-md filter-btns text-slate-500 bg-slate-100 nav-tabs dark:bg-zink-500 dark:text-zink-200"
                                                data-filter-target="notification-list"
                                            >
                                                <li class="grow">
                                                    <a
                                                        href="javascript:void(0);"
                                                        data-filter="all"
                                                        class="inline-block nav-link px-1.5 w-full py-1 text-xs transition-all duration-300 ease-linear rounded-md text-slate-500 border border-transparent [&.active]:bg-white [&.active]:text-custom-500 hover:text-custom-500 active:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:[&.active]:bg-zink-600 -mb-[1px] active"
                                                        >Semua Pesan</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            data-simplebar=""
                                            class="max-h-[350px]"
                                        >
                                            <div
                                                class="flex flex-col gap-1"
                                                id="notification-list"
                                            >
                                                <!-- Untuk Ngisi Notip -->
                                                <a
                                                    href="#!"
                                                    class="flex gap-3 p-4 product-item hover:bg-slate-50 dark:hover:bg-zink-500 follower"
                                                >
                                                    <div
                                                        class="w-10 h-10 rounded-md shrink-0 bg-slate-100"
                                                    >
                                                        <img
                                                            src="../assets/images/avatar-3.png"
                                                            alt=""
                                                            class="rounded-md"
                                                        />
                                                    </div>
                                                    <div class="grow">
                                                        <h6
                                                            class="mb-1 font-medium"
                                                        >
                                                            <b
                                                                >@willie_passem</b
                                                            >
                                                            followed you
                                                        </h6>
                                                        <p
                                                            class="mb-0 text-sm text-slate-500 dark:text-zink-300"
                                                        >
                                                            <i
                                                                data-lucide="clock"
                                                                class="inline-block w-3.5 h-3.5 mr-1"
                                                            ></i>
                                                            <span
                                                                class="align-middle"
                                                                >Wednesday 03:42
                                                                PM</span
                                                            >
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="flex items-center self-start gap-2 text-xs text-slate-500 shrink-0 dark:text-zink-300"
                                                    >
                                                        <div
                                                            class="w-1.5 h-1.5 bg-custom-500 rounded-full"
                                                        ></div>
                                                        4 sec
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-2 p-4 border-t border-slate-200 dark:border-zink-500"
                                        >
                                            <div class="grow">
                                                <a href="#!">Manage Message</a>
                                            </div>
                                            <div class="shrink-0">
                                                <button
                                                    type="button"
                                                    class="px-2 py-1.5 text-xs text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100"
                                                >
                                                    Lihat Semua Pesan
                                                    <i
                                                        data-lucide="move-right"
                                                        class="inline-block w-3.5 h-3.5 ml-1"
                                                    ></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notip -->
                                <div
                                    class="relative flex items-center dropdown h-header"
                                >
                                    <button
                                        type="button"
                                        class="inline-flex justify-center relative items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark"
                                        id="notificationDropdown"
                                        data-bs-toggle="dropdown"
                                    >
                                        <i
                                            data-lucide="bell-ring"
                                            class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"
                                        ></i>
                                        <span
                                            class="absolute flex items-center justify-center w-[16px] h-[16px] text-xs text-white bg-red-400 border-white rounded-full -top-1 -right-1"
                                            >3
                                            <span
                                                class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-red-400"
                                            ></span>
                                        </span>
                                    </button>
                                    <div
                                        class="absolute z-50 hidden ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[20rem] lg:min-w-[26rem] dark:bg-zink-600"
                                        aria-labelledby="notificationDropdown"
                                    >
                                        <div class="p-4">
                                            <h6 class="mb-4 text-16">
                                                Notifications
                                            </h6>
                                            <ul
                                                class="flex flex-wrap w-full p-1 mb-2 text-sm font-medium text-center rounded-md filter-btns text-slate-500 bg-slate-100 nav-tabs dark:bg-zink-500 dark:text-zink-200"
                                                data-filter-target="notification-list"
                                            >
                                                <li class="grow">
                                                    <a
                                                        href="javascript:void(0);"
                                                        data-filter="all"
                                                        class="inline-block nav-link px-1.5 w-full py-1 text-xs transition-all duration-300 ease-linear rounded-md text-slate-500 border border-transparent [&.active]:bg-white [&.active]:text-custom-500 hover:text-custom-500 active:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:[&.active]:bg-zink-600 -mb-[1px] active"
                                                        >View All</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                            data-simplebar=""
                                            class="max-h-[350px]"
                                        >
                                            <div
                                                class="flex flex-col gap-1"
                                                id="notification-list"
                                            >
                                                <!-- Untuk Ngisi Notip -->
                                                <a
                                                    href="#!"
                                                    class="flex gap-3 p-4 product-item hover:bg-slate-50 dark:hover:bg-zink-500 follower"
                                                >
                                                    <div
                                                        class="w-10 h-10 rounded-md shrink-0 bg-slate-100"
                                                    >
                                                        <img
                                                            src="../assets/images/avatar-3.png"
                                                            alt=""
                                                            class="rounded-md"
                                                        />
                                                    </div>
                                                    <div class="grow">
                                                        <h6
                                                            class="mb-1 font-medium"
                                                        >
                                                            <b
                                                                >@willie_passem</b
                                                            >
                                                            followed you
                                                        </h6>
                                                        <p
                                                            class="mb-0 text-sm text-slate-500 dark:text-zink-300"
                                                        >
                                                            <i
                                                                data-lucide="clock"
                                                                class="inline-block w-3.5 h-3.5 mr-1"
                                                            ></i>
                                                            <span
                                                                class="align-middle"
                                                                >Wednesday 03:42
                                                                PM</span
                                                            >
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="flex items-center self-start gap-2 text-xs text-slate-500 shrink-0 dark:text-zink-300"
                                                    >
                                                        <div
                                                            class="w-1.5 h-1.5 bg-custom-500 rounded-full"
                                                        ></div>
                                                        4 sec
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center gap-2 p-4 border-t border-slate-200 dark:border-zink-500"
                                        >
                                            <div class="grow">
                                                <a href="#!"
                                                    >Manage Notification</a
                                                >
                                            </div>
                                            <div class="shrink-0">
                                                <button
                                                    type="button"
                                                    class="px-2 py-1.5 text-xs text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100"
                                                >
                                                    View All Notification
                                                    <i
                                                        data-lucide="move-right"
                                                        class="inline-block w-3.5 h-3.5 ml-1"
                                                    ></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="relative items-center hidden h-header md:flex"
                                >
                                    <button
                                        data-drawer-target="customizerButton"
                                        type="button"
                                        class="inline-flex justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar group-data-[topbar=dark]:text-topbar-item-dark rounded-md btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200"
                                    >
                                        <i
                                            data-lucide="settings"
                                            class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"
                                        ></i>
                                    </button>
                                </div>

                                <div
                                    class="relative flex items-center dropdown h-header"
                                >
                                    <button
                                        type="button"
                                        class="inline-block p-0 transition-all duration-200 ease-linear bg-topbar rounded-full text-topbar-item dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200"
                                        id="dropdownMenuButton"
                                        data-bs-toggle="dropdown"
                                    >
                                        <div class="bg-pink-100 rounded-full">
                                            <img
                                                src="../assets/images/logoprofill.jpg"
                                                alt=""
                                                class="w-[37.5px] h-[37.5px] rounded-full"
                                            />
                                        </div>
                                    </button>
                                    <div
                                        class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[14rem] dark:bg-zink-600"
                                        aria-labelledby="dropdownMenuButton"
                                    >
                                        <h6
                                            class="mb-2 text-sm font-normal text-slate-500 dark:text-zink-300"
                                        >
                                            Selamat Datang
                                        </h6>
                                        <a href="#!" class="flex gap-3 mb-3">
                                            <div
                                                class="relative inline-block shrink-0"
                                            >
                                                <div
                                                    class="rounded bg-slate-100 dark:bg-zink-500"
                                                >
                                                    <img
                                                        src="../assets/images/logoprofill.jpg"
                                                        alt=""
                                                        class="w-12 h-12 rounded"
                                                    />
                                                </div>
                                                <span
                                                    class="-top-1 ltr:-right-1 rtl:-left-1 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white rounded-full dark:border-zink-600"
                                                ></span>
                                            </div>
                                            <div>
                                                <h6 class="mb-1 text-15">
                                                    No Name
                                                </h6>
                                                <p
                                                    class="text-slate-500 dark:text-zink-300"
                                                >
                                                    Admin
                                                </p>
                                            </div>
                                        </a>
                                        <ul>
                                            <li>
                                                <a
                                                    class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"
                                                    href="pages-account.html"
                                                    ><i
                                                        data-lucide="user-2"
                                                        class="inline-block size-4 ltr:mr-2 rtl:ml-2"
                                                    ></i>
                                                    Profile</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"
                                                    href="apps-mailbox.html"
                                                    ><i
                                                        data-lucide="mail"
                                                        class="inline-block size-4 ltr:mr-2 rtl:ml-2"
                                                    ></i>
                                                    Pesan
                                                    <span
                                                        class="inline-flex items-center justify-center w-5 h-5 ltr:ml-2 rtl:mr-2 text-[11px] font-medium border rounded-full text-white bg-red-500 border-red-500"
                                                        >1</span
                                                    ></a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"
                                                    href="apps-chat.html"
                                                    ><i
                                                        data-lucide="messages-square"
                                                        class="inline-block size-4 ltr:mr-2 rtl:ml-2"
                                                    ></i>
                                                    Chat</a
                                                >
                                            </li>
                                            <li
                                                class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500"
                                            >
                                                <a
                                                    class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"
                                                    href="index.php?halaman=logout"
                                                    ><i
                                                        data-lucide="log-out"
                                                        class="inline-block size-4 ltr:mr-2 rtl:ml-2"
                                                    ></i>
                                                    Log Out</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div
                class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm"
            >
                <div
                    class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]"
                >
                    <!-- container-fluid Start Coding -->
                    
                    <?php if (isset($_GET["halaman"])) {
                      // Halaman Kategori
                      if ($_GET["halaman"] == "kategori") {
                        include "kategori.php";
                      } elseif ($_GET["halaman"] == "tambah_kategori") {
                        include "tambah/tambah_kategori.php";
                      } elseif ($_GET["halaman"] == "edit_kategori") {
                        include "edit/edit_kategori.php";
                      } elseif ($_GET["halaman"] == "hapus_kategori") {
                        include "hapus/hapus_kategori.php";
                      }
                      // Halaman Produk
                      elseif ($_GET["halaman"] == "produk") {
                        include "produk.php";
                      } elseif ($_GET["halaman"] == "tambah_produk") {
                        include "tambah/tambah_produk.php";
                      } elseif ($_GET["halaman"] == "detail_produk") {
                        include "detail/detail_produk.php";
                      } elseif ($_GET["halaman"] == "hapus_foto") {
                        include "hapus/hapus_foto.php";
                      } elseif ($_GET["halaman"] == "edit_produk") {
                        include "edit/edit_produk.php";
                      } elseif ($_GET["halaman"] == "hapus_produk") {
                        include "hapus/hapus_produk.php";
                      }
                      // Halaman Pembelian
                      elseif ($_GET["halaman"] == "pembelian") {
                        include "pembelian.php";
                      } elseif ($_GET["halaman"] == "detail_pembelian") {
                        include "detail/detail_pembelian.php";
                      }
                      // Halaman Logout
                      elseif ($_GET["halaman"] == "logout") {
                        include "logout.php";
                      }
                      // Halaman Pelanggan
                      elseif ($_GET["halaman"] == "pelanggan") {
                        include "pelanggan.php";
                      }
                    } else {
                      include "dashboard.php";
                    } ?>
                    
                </div>
                <!-- End Page-content -->

                <footer
                    class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm absolute right-0 bottom-0 px-4 h-14 group-data-[layout=horizontal]:ltr:left-0 group-data-[layout=horizontal]:rtl:right-0 left-0 border-t py-3 flex items-center dark:border-zink-600"
                >
                    <div
                        class="group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl w-full"
                    >
                        <div
                            class="grid items-center grid-cols-1 text-center lg:grid-cols-2 text-slate-400 dark:text-zink-200 ltr:lg:text-left rtl:lg:text-right"
                        >
                            <div>
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                Ayden
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- end main content -->

        <div
            class="fixed items-center hidden bottom-6 right-12 h-header group-data-[navbar=hidden]:flex"
        >
            <button
                data-drawer-target="customizerButton"
                type="button"
                class="inline-flex items-center justify-center w-12 h-12 p-0 transition-all duration-200 ease-linear rounded-md shadow-lg text-sky-50 bg-sky-500"
            >
                <i data-lucide="settings" class="inline-block w-5 h-5"></i>
            </button>
        </div>

        <div
            id="customizerButton"
            drawer-end=""
            class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-96 z-drawer show dark:bg-zink-600"
        >
            <div
                class="flex justify-between p-4 border-b border-slate-200 dark:border-zink-500"
            >
                <div class="grow">
                    <h5 class="mb-1 text-16">Theme Customizer</h5>
                    <p class="font-normal text-slate-500 dark:text-zink-200">
                        Choose your themes & layouts etc.
                    </p>
                </div>
                <div class="shrink-0">
                    <button
                        data-drawer-close="customizerButton"
                        class="transition-all duration-150 ease-linear text-slate-500 hover:text-slate-800 dark:text-zink-200 dark:hover:text-zink-50"
                    >
                        <i data-lucide="x" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
            <div class="h-full p-6 overflow-y-auto">
                <div>
                    <h5 class="mb-3 underline capitalize text-15">
                        Choose Layouts
                    </h5>
                    <div class="grid grid-cols-1 mb-5 gap-7 sm:grid-cols-2">
                        <div class="relative">
                            <input
                                id="layout-one"
                                name="dataLayout"
                                class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500"
                                type="radio"
                                value="vertical"
                                checked=""
                            />
                            <label
                                class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500"
                                for="layout-one"
                            >
                                <span class="flex h-full gap-0">
                                    <span class="shrink-0">
                                        <span
                                            class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500"
                                        >
                                            <span
                                                class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                        </span>
                                    </span>
                                    <span class="grow">
                                        <span class="flex flex-col h-full">
                                            <span
                                                class="block h-3 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block h-3 mt-auto bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                            <h5 class="mt-2 text-center text-15">Vertical</h5>
                        </div>

                        <div class="relative">
                            <input
                                id="layout-two"
                                name="dataLayout"
                                class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500"
                                type="radio"
                                value="horizontal"
                            />
                            <label
                                class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500"
                                for="layout-two"
                            >
                                <span class="flex flex-col h-full gap-1">
                                    <span
                                        class="flex items-center gap-1 p-1 bg-slate-100 dark:bg-zink-500"
                                    >
                                        <span
                                            class="block p-1 ml-1 bg-white rounded dark:bg-zink-500"
                                        ></span>
                                        <span
                                            class="block p-1 px-2 pb-0 bg-white dark:bg-zink-500 ms-auto"
                                        ></span>
                                        <span
                                            class="block p-1 px-2 pb-0 bg-white dark:bg-zink-500"
                                        ></span>
                                    </span>
                                    <span
                                        class="block p-1 bg-slate-100 dark:bg-zink-500"
                                    ></span>
                                    <span
                                        class="block p-1 mt-auto bg-slate-100 dark:bg-zink-500"
                                    ></span>
                                </span>
                            </label>
                            <h5 class="mt-2 text-center text-15">Horizontal</h5>
                        </div>
                    </div>

                    <div id="semi-dark">
                        <div class="flex items-center">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle transition duration-200 ease-in"
                            >
                                <input
                                    type="checkbox"
                                    name="customDefaultSwitch"
                                    value="dark"
                                    id="customDefaultSwitch"
                                    class="absolute block w-5 h-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 bg-white/80 peer/published checked:bg-white checked:right-0 checked:border-custom-500 arrow-none dark:border-zink-500 dark:bg-zink-500 dark:checked:bg-zink-400 checked:bg-none"
                                />
                                <label
                                    for="customDefaultSwitch"
                                    class="block h-5 overflow-hidden transition duration-300 ease-linear border rounded-full cursor-pointer border-slate-200 bg-slate-200 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500 dark:border-zink-500 dark:bg-zink-600"
                                ></label>
                            </div>
                            <label
                                for="customDefaultSwitch"
                                class="inline-block text-base font-medium"
                                >Semi Dark (Sidebar & Header)</label
                            >
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <!-- data-skin="" -->
                    <h5 class="mb-3 underline capitalize text-15">
                        Skin Layouts
                    </h5>
                    <div class="grid grid-cols-1 mb-5 gap-7 sm:grid-cols-2">
                        <div class="relative">
                            <input
                                id="layoutSkitOne"
                                name="dataLayoutSkin"
                                class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500"
                                type="radio"
                                value="default"
                            />
                            <label
                                class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500 bg-slate-50 dark:bg-zink-600"
                                for="layoutSkitOne"
                            >
                                <span class="flex h-full gap-0">
                                    <span class="shrink-0">
                                        <span
                                            class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500"
                                        >
                                            <span
                                                class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                        </span>
                                    </span>
                                    <span class="grow">
                                        <span class="flex flex-col h-full">
                                            <span
                                                class="block h-3 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block h-3 mt-auto bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                            <h5 class="mt-2 text-center text-15">Default</h5>
                        </div>

                        <div class="relative">
                            <input
                                id="layoutSkitTwo"
                                name="dataLayoutSkin"
                                class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500"
                                type="radio"
                                value="bordered"
                                checked=""
                            />
                            <label
                                class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500"
                                for="layoutSkitTwo"
                            >
                                <span class="flex h-full gap-0">
                                    <span class="shrink-0">
                                        <span
                                            class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500"
                                        >
                                            <span
                                                class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                            <span
                                                class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"
                                            ></span>
                                        </span>
                                    </span>
                                    <span class="grow">
                                        <span class="flex flex-col h-full">
                                            <span
                                                class="block h-3 border-b border-slate-200 dark:border-zink-500"
                                            ></span>
                                            <span
                                                class="block h-3 mt-auto border-t border-slate-200 dark:border-zink-500"
                                            ></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                            <h5 class="mt-2 text-center text-15">Bordered</h5>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <!-- data-mode="" -->
                    <h5 class="mb-3 underline capitalize text-15">
                        Light & Dark
                    </h5>
                    <div class="flex gap-3">
                        <button
                            type="button"
                            id="dataModeOne"
                            name="dataMode"
                            value="light"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active"
                        >
                            Light Mode
                        </button>
                        <button
                            type="button"
                            id="dataModeTwo"
                            name="dataMode"
                            value="dark"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Dark Mode
                        </button>
                    </div>
                </div>

                <div class="mt-6">
                    <!-- dir="ltr" -->
                    <h5 class="mb-3 underline capitalize text-15">LTR & RTL</h5>
                    <div class="flex flex-wrap gap-3">
                        <button
                            type="button"
                            id="diractionOne"
                            name="dir"
                            value="ltr"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active"
                        >
                            LTR Mode
                        </button>
                        <button
                            type="button"
                            id="diractionTwo"
                            name="dir"
                            value="rtl"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            RTL Mode
                        </button>
                    </div>
                </div>

                <div class="mt-6">
                    <!-- data-content -->
                    <h5 class="mb-3 underline capitalize text-15">
                        Content Width
                    </h5>
                    <div class="flex gap-3">
                        <button
                            type="button"
                            id="datawidthOne"
                            name="datawidth"
                            value="fluid"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active"
                        >
                            Fluid
                        </button>
                        <button
                            type="button"
                            id="datawidthTwo"
                            name="datawidth"
                            value="boxed"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Boxed
                        </button>
                    </div>
                </div>

                <div class="mt-6" id="sidebar-size">
                    <!-- data-sidebar-size="" -->
                    <h5 class="mb-3 underline capitalize text-15">
                        Sidebar Size
                    </h5>
                    <div class="flex flex-wrap gap-3">
                        <button
                            type="button"
                            id="sidebarSizeOne"
                            name="sidebarSize"
                            value="lg"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active"
                        >
                            Default
                        </button>
                        <button
                            type="button"
                            id="sidebarSizeTwo"
                            name="sidebarSize"
                            value="md"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Compact
                        </button>
                        <button
                            type="button"
                            id="sidebarSizeThree"
                            name="sidebarSize"
                            value="sm"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Small (Icon)
                        </button>
                    </div>
                </div>

                <div class="mt-6" id="navigation-type">
                    <!-- data-navbar="" -->
                    <h5 class="mb-3 underline capitalize text-15">
                        Navigation Type
                    </h5>
                    <div class="flex flex-wrap gap-3">
                        <button
                            type="button"
                            id="navbarTwo"
                            name="navbar"
                            value="sticky"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active"
                        >
                            Sticky
                        </button>
                        <button
                            type="button"
                            id="navbarOne"
                            name="navbar"
                            value="scroll"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Scroll
                        </button>
                        <button
                            type="button"
                            id="navbarThree"
                            name="navbar"
                            value="bordered"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Bordered
                        </button>
                        <button
                            type="button"
                            id="navbarFour"
                            name="navbar"
                            value="hidden"
                            class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500"
                        >
                            Hidden
                        </button>
                    </div>
                </div>

                <div class="mt-6" id="sidebar-color">
                    <!-- data-sidebar="" light, dark, brand, modern-->
                    <h5 class="mb-3 underline capitalize text-15">
                        Sizebar Colors
                    </h5>
                    <div class="flex flex-wrap gap-3">
                        <button
                            type="button"
                            id="sidebarColorOne"
                            name="sidebarColor"
                            value="light"
                            class="flex items-center justify-center w-10 h-10 bg-white border rounded-md border-slate-200 group active"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-slate-600"
                            ></i>
                        </button>
                        <button
                            type="button"
                            id="sidebarColorTwo"
                            name="sidebarColor"
                            value="dark"
                            class="flex items-center justify-center w-10 h-10 border rounded-md border-zink-900 bg-zink-900 group"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-white"
                            ></i>
                        </button>
                        <button
                            type="button"
                            id="sidebarColorThree"
                            name="sidebarColor"
                            value="brand"
                            class="flex items-center justify-center w-10 h-10 border rounded-md border-custom-800 bg-custom-800 group"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-white"
                            ></i>
                        </button>
                        <button
                            type="button"
                            id="sidebarColorFour"
                            name="sidebarColor"
                            value="modern"
                            class="flex items-center justify-center w-10 h-10 border rounded-md border-purple-950 bg-gradient-to-t from-red-400 to-purple-500 group"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-white"
                            ></i>
                        </button>
                    </div>
                </div>

                <div class="mt-6">
                    <!-- data-topbar="" light, dark, brand, modern-->
                    <h5 class="mb-3 underline capitalize text-15">
                        Topbar Colors
                    </h5>
                    <div class="flex flex-wrap gap-3">
                        <button
                            type="button"
                            id="topbarColorOne"
                            name="topbarColor"
                            value="light"
                            class="flex items-center justify-center w-10 h-10 bg-white border rounded-md border-slate-200 group active"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-slate-600"
                            ></i>
                        </button>
                        <button
                            type="button"
                            id="topbarColorTwo"
                            name="topbarColor"
                            value="dark"
                            class="flex items-center justify-center w-10 h-10 border rounded-md border-zink-900 bg-zink-900 group"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-white"
                            ></i>
                        </button>
                        <button
                            type="button"
                            id="topbarColorThree"
                            name="topbarColor"
                            value="brand"
                            class="flex items-center justify-center w-10 h-10 border rounded-md border-custom-800 bg-custom-800 group"
                        >
                            <i
                                data-lucide="check"
                                class="w-5 h-5 hidden group-[.active]:inline-block text-white"
                            ></i>
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center justify-between gap-3 p-4 border-t border-slate-200 dark:border-zink-500"
            >
                <button
                    type="button"
                    id="reset-layout"
                    class="w-full transition-all duration-200 ease-linear text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100"
                >
                    Reset
                </button>
            </div>
        </div>
        <script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="../assets/libs/%40popperjs/core/umd/popper.min.js"></script>
        <script src="../assets/libs/tippy.js/tippy-bundle.umd.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/prismjs/prism.js"></script>
        <script src="../assets/libs/lucide/umd/lucide.js"></script>
        <script src="../assets/js/starcode.bundle.js"></script>
        <!--apexchart js-->
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>
        <!--dashboard ecommerce init js-->
        <script src="../assets/js/pages/dashboards-ecommerce.init.js"></script>
        <!-- App js -->
        <script src="../assets/js/app.js"></script>
        <!--buttons dataTables-->
        <script src="../assets/js/datatables/jquery-3.7.0.js"></script>
        <script src="../assets/js/datatables/data-tables.min.js"></script>
        <script src="../assets/js/datatables/data-tables.tailwindcss.min.js"></script>
        <script src="../assets/js/datatables/datatables.buttons.min.js"></script>
        <script src="../assets/js/datatables/jszip.min.js"></script>
        <script src="../assets/js/datatables/pdfmake.min.js"></script>
        <script src="../assets/js/datatables/buttons.html5.min.js"></script>
        <script src="../assets/js/datatables/buttons.print.min.js"></script>
        <script src="../assets/js/datatables/datatables.init.js"></script>
        <!-- Sweet Alerts js -->
       <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>
       <!--sweet alert init js-->
       <script src="../assets/js/pages/sweetalert.init.js"></script>
       <!-- Ajax Js -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script>
        $(document).ready(function(){
         $(".btn-tambah").on("click", function(){
          $(".input-foto").append("<input name='foto[]' type='file' class='cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500' placeholder='Enter your name'>");
         })
        })
       </script>
    </body>
</html>
