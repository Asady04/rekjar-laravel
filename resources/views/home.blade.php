<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <!-- css-->
    <link href="{{ asset('css_landingpagebaru.css') }}" rel="stylesheet" />

    <!-- script -->
    <script defer="" src="{{ asset('js_app.js') }}"></script>
    <title>Home</title>
</head>

<body class="bg-white text-white">
    <div class="flex flex-1">
        <img alt="" class="w-full" src="{{ asset('images_home4.png') }}" />
    </div>
    <div class="container mx-auto sticky top-0 z-50" x-data="{ isOpen: false, LDetail: false }">
        <nav class="bg-blue-400 mx-12 rounded-xl">
            <div class="max-w-7xl mx-auto px-1 md:px-6 lg:px-8">
                <div class="relative flex items-center justify-center h-12">
                    <div class="flex items-center lg:hidden">
                        <!-- Mobile menu button-->
                        <button @click="isOpen = !isOpen" aria-controls="mobile-menu" aria-expanded="false"
                            class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            type="submit">
                            <svg aria-hidden="true" class="block h-6 w-6" fill="none" stroke="currentColor"
                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-between md:items-stretch md:justify-center">
                        <div class="hidden lg:block lg:ml-6">
                            <div
                                class="flex space-x-1 lg:space-x-7 xl:space-x-16 text-sm text-white font-sans uppercase">
                                <a aria-current="page" class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md"
                                    href="home">Beranda</a>
                                <a class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#Profil">Profil</a>
                                <a class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#Laboratorium">Laboratorium</a>
                                <a class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#Berita">Berita</a>
                                <a class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#Frequentask">FAQ</a>
                                <a class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#Download">Download</a>
                                <a class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#Kontak">Kontak</a>
                                <a @click="LDetail = !LDetail"
                                    class="hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md font-medium"
                                    href="#">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="mobile-navbar">
                <div @click.away="isOpen =false" class="px-2 pt-2 pb-3 space-y-1" x-show="isOpen">
                    <a aria-current="page" class="bg-white text-blue-500 px-3 py-2 block rounded-md text-sm font-medium"
                        href="#">Beranda</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#Profil">Profil</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#Laboratorium">Laboratorium</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#Berita">Berita</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#Frequentask">FAQ</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#Download">Download</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#Kontak">Kontak</a>
                    <a @click="LDetail = !LDetail"
                        class="text-white hover:bg-white hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium block"
                        href="#">Login</a>
                </div>
            </div>
            <!-- detail menu Login -->
            <div @click.away="LDetail =false"
                class="absolute max-w-sm w-2/3 sm:right-10 transform sm:-translate-x-1/4 mt-3 md:w-screen md:max-w-xs sm:px-0"
                x-show="LDetail">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-10 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        <a class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50" href="/inven">
                            <!-- Heroicon name: outline/bookmark-alt -->
                            <svg aria-hidden="true" class="flex-shrink-0 h-6 w-6 text-blue-500" fill="none"
                                stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-blue-500">
                                    Inventaris
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Pendataan inventaris Laboratorium.
                                </p>
                            </div>
                        </a>
                        <a class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50" href="/inven/peminjaman">
                            <!-- Heroicon name: outline/bookmark-alt -->
                            <svg aria-hidden="true" class="flex-shrink-0 h-6 w-6 text-blue-500" fill="none"
                                stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-blue-500">
                                    Peminjaman
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Form Peminjaman Barang
                                </p>
                            </div>
                        </a>
                        <a class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50"
                            href="/praktikum">
                            <!-- Heroicon name: outline/calendar -->
                            <svg aria-hidden="true" class="flex-shrink-0 h-6 w-6 text-blue-500" fill="none"
                                stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-blue-500">
                                    Praktikum
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Praktikum Mahasiswa dan aisten managemen.
                                </p>
                            </div>
                        </a>
                        <a class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50" href="pengawas">
                            <!-- Heroicon name: outline/calendar -->
                            <svg aria-hidden="true" class="flex-shrink-0 h-6 w-6 text-blue-500" fill="none"
                                stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            <div class="ml-4">
                                <p class="text-base font-medium text-blue-500">
                                    Pengawas
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Pengawas ujian oleh asisten.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Hero -->
    <section class="bg:h-16" id="Home" style="height: 80vh">
        <div class="container flex flex-1 flex-col justify-center mx-auto my-20 sm:flex-row">
            <div class="flex sm:justify-start sm:ml-14 sm:px-5 md:px-0 sm:w-3/6 justify-center">
                <img alt="" class="justify-center sm:w-full w-1/2" src="{{ asset('images_hero2.png') }}" />
            </div>
            <div class="flex justify-center text-left sm:mr-14 sm:px-5 md:px-0">
                <h1 class="text-2xl sm:text-5xl text-center tracking-tight text-gray-900 xl:text-6xl">
                    <span class="block sm:py-3 sm:px-2 font-extrabold">Dari Hujan</span>
                    <span class="block sm:py-3 sm:px-2 text-blue-500 font-extrabold">Bisa Belajar Dari Air</span>
                    <span class="block md:text-xl text-xs">Bagaimana Berkali-kali Jatuh Tanpa Sedikitpun Mengeluh Pada
                        Takdir</span>
                </h1>
            </div>
        </div>
    </section>
    <!-- konten Info -->
    <section class="min-h-screen items-center" id="Profil">
        <!-- header -->
        <div class="flex flex-col sm:mx-28 my-20 mx-14 min-h-screen items-center">
            <div class="mx-auto max-w-md w-auto">
                <div class="flex font-sans sm:text-4xl text-2xl justify-center mt-14">
                    <h1 class="text-blue-400 font-semibold">PROFIL</h1>
                </div>
                <div class="flex mb-5" id="konten-Profil">
                    <div class="flex flex-row h-1 mr-4 sm:mr-8 bg-blue-400 w-2"></div>
                    <div class="flex h-1 bg-blue-400 ml-3 sm:ml-6 w-7"></div>
                </div>
            </div>
            <div class="flex my-5 md:justify-between justify-center mx-auto md:flex-row flex-col">
                <div
                    class="text-gray-900 md:text-lg xl:text-xl space-y-10 md:w-3/6 w-auto mx-10 max-w-lg text-sm text-center md:text-left">
                    <p>SEELABS, School of Electrical Engineering Laboratories merupakan website Laboratorium Fakultas
                        Teknik Elektro Telkom University.</p>
                    <p>Fakultas Teknik Elektro terdiri dari program studi <br />S1 Teknik Telekomunikasi, <br />S1
                        Teknik Elektro, <br />S1 Teknik Komputer, <br />S1 Teknik Fisika, <br />S1 Teknik Biomedis,
                        <br />S1 Teknik Sistem Energi, dan <br />S2 Teknik Elektro Telekomunikasi. <br />Fasilitas
                        laboratorium FTE sebagai pendukung pembelajaran dan penelitian terdiri dari 6 Kelompok Keahlian,
                        19 Laboratorium, dan 51 Research Group.
                    </p>
                </div>
                <div class="md:w-3/6 w-auto bg-contain my-8 max-w-lg mx-10">
                    <img alt="" class="justify-end" src="{{ asset('images_Team.png') }}" />
                </div>
            </div>
            <div class="flex justify-center mt-14">
                <div class="flex h-1 mr-10 sm:mr-10 bg-blue-400 w-20"></div>
            </div>
        </div>
    </section>
    <!-- Laboratorium -->
    <section class="bg-blue-400 min-h-screen" id="Laboratorium">
        <div class="flex flex-col sm:mx-28 mx-14">
            <div class="mx-auto">
                <div class="flex font-sans sm:text-4xl text-2xl justify-center mt-14">
                    <h1 class="text-white font-semibold">LABORATORIUM</h1>
                </div>
                <div class="flex mb-5">
                    <div class="flex flex-row h-1 mr-4 sm:mr-8 bg-white w-2"></div>
                    <div class="flex h-1 bg-white ml-3 sm:ml-6 w-7"></div>
                </div>
            </div>
            <div class="my-5 space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-20 mx-auto"
                id="konten-Laboratorium">
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 md:text-lg text-base leading-6 font-medium text-gray-900">KK Transmisi
                            Telekomunikasi</p>
                    </dt>
                    <dd class="mt-2 ml-16 md:text-base text-sm text-white">
                        <li>Communication Laboratory
                        <li>Satellite Communication &amp; Radar Laboratory
                        <li>Wireless Communication Laboratory
                        </li>
                        </li>
                        </li>
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 md:text-lg text-base leading-6 font-medium text-gray-900">KK Control,
                            Electronics, and Intelligent Systems </p>
                    </dt>
                    <dd class="mt-2 ml-16 md:text-base text-sm text-white">
                        <li>Automation System and Intelligent Control Lab
                        <li>Electronic Device and Embedded System Lab
                        <li>Renwable Energy &amp; Advanced Electrical Eng. Lab
                        </li>
                        </li>
                        </li>
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 text-base md:text-lg leading-6 font-medium text-gray-900">KK Networking,
                            Cybernetics and Engineering Management</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-sm md:text-base text-white">
                        <li>Adaptive Network Laboratory
                        <li>Cyber Physical System Laboratory
                        <li>Multimedia App, Big data &amp; Cyber Security Lab
                        </li>
                        </li>
                        </li>
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 md:text-lg text-base leading-6 font-medium text-gray-900">KK Rekayasa Komputer
                        </p>
                    </dt>
                    <dd class="mt-2 ml-16 md:text-base text-sm text-white">
                        <li>Continuous Computing Laboratory
                        <li>Realm of Artificial Intelligent Design Lab
                        </li>
                        </li>
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 md:text-lg text-base leading-6 font-medium text-gray-900">KK Pengolahan Sinyal
                            Informasi</p>
                    </dt>
                    <dd class="mt-2 ml-16 md:text-base text-sm text-white">
                        <li>Audio and Speech Signal Processing Laboratory
                        <li>Image Processing and Vision Laboratory
                        <li>Signal Processing for Intelligent System Lab
                        </li>
                        </li>
                        </li>
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 text-base md:text-lg leading-6 font-medium text-gray-900">KK Rekayasa
                            Instrumentasi dan Energi</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-sm md:text-base text-white">
                        <li>Control &amp; Energy System Laboratory
                        <li>Instrumentation System Laboratory
                        <li>Material Engineering &amp; Modelling Laboratory
                        </li>
                        </li>
                        </li>
                    </dd>
                </div>
                <div class="relative">
                    <dt>
                        <div
                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400 shadow-md">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-16 text-base md:text-lg leading-6 font-medium text-gray-900">Lab Dasar</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-sm md:text-base text-white">
                        <li>Physics Laboratory
                        <li>Computer Laboratory
                        </li>
                        </li>
                    </dd>
                </div>
            </div>
            <div class="flex justify-center mt-14 mb-20">
                <div class="flex h-1 mr-10 sm:mr-10 bg-white w-20"></div>
            </div>
        </div>
    </section>
    <!---INSTAGRAM-->
    <section class="min-h-screen" id="Instagram">
        <div class="flex flex-col sm:mx-28 mx-14">
            <div class="mx-auto">
                <div class="flex font-sans sm:text-4xl text-2xl justify-center mt-14">
                    <h1 class="text-blue-400 font-semibold">INSTAGRAM POST</h1>
                </div>
                <div class="flex mb-5">
                    <div class="flex flex-row h-1 mr-4 sm:mr-8 bg-blue-400 w-2"></div>
                    <div class="flex h-1 bg-blue-400 ml-3 sm:ml-6 w-7"></div>
                </div>
            </div>
        </div>
        <div class="container mx-auto my-5">
            <div class="flex flex-row flex-wrap -mx-2 overflow-y-scroll scrollbar-hide" style="height: 50vh;">
                <div class="w-full sm:w-1/6 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CFwrJHyJ2dC/"
                        style="background-image: url(images/iglab/lab1.jpg);" title="Dasar Komputer">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/labfisdas_telu/"
                        style="background-image: url(images/iglab/lab2.jpg);" title="Fisika Dasar">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/BSMgnbBgrd8/"
                        style="background-image: url(images/iglab/lab3.jpg);" title="Access Network">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CUCiLpYpgIb/"
                        style="background-image: url(images/iglab/lab4.jpg);" title="Adaptive Network">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CFcRSUMM-6_/"
                        style="background-image: url(images/iglab/lab5.jpg);" title="Antena">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Application &amp; Security">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/B2LwD-8npXb/"
                        style="background-image: url(images/iglab/lab7.jpg);" title="Cyber Physical System">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CUUSW-7JTJP/"
                        style="background-image: url(images/iglab/lab8.jpg);" title="Dasar Transmisi ">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-fullh-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CHrwwi2pvG5/"
                        style="background-image: url(images/iglab/lab9.jpg);" title="Digital Signal Processing">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Digital Video Broadcasting">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CSJRnBBphKr/"
                        style="background-image: url(images/iglab/lab11.jpg);" title="Elektronika Komunikasi">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/Bsx2Ws1ghoC/"
                        style="background-image: url(images/iglab/lab12.jpg);" title="Gelombang Mikro">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CPh1So8JwrK/"
                        style="background-image: url(images/iglab/lab13.jpg);" title="Image Processing and Vision">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/B5xYXETJtfG/"
                        style="background-image: url(images/iglab/lab14.jpg);" title="Mobile Communication">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CL4HKrEpQNQ/"
                        style="background-image: url(images/iglab/lab15.jpg);"
                        title="Multimedia, Big Data, Cyber Security ">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/COeN_5YJP9p/"
                        style="background-image: url(images/iglab/lab16.jpg);" title="Nano Satelit">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/BoVKedBB780/"
                        style="background-image: url(images/iglab/lab17.jpg);" title="Sistem Komunikasi">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CTL_AqhpEsx/"
                        style="background-image: url(images/iglab/lab18.jpg);" title="Sistem Komunikasi Optik">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CTzZ9JeJ4UI/"
                        style="background-image: url(images/iglab/lab19.jpg);"
                        title="Biomedical Signal Processing and Instrumentation (BioSPIN)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CDVNNYkpR8e/"
                        style="background-image: url(images/iglab/lab20.jpg);" title="Dasar Sistem Kontrol">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/Bq_1Z1aA4lO/"
                        style="background-image: url(images/iglab/lab21.jpg);"
                        title="Electronics and Industrial Automation (ELITIA)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CEhBKMRJPb2/"
                        style="background-image: url(images/iglab/lab22.jpg);"
                        title="Electronics and Intelegence Robotics Research Group (EIRRG)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CP0Tsjrp3v7/"
                        style="background-image: url(images/iglab/lab23.jpg);" title="Elektronika">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CM1ChoMptti/"
                        style="background-image: url(images/iglab/lab24.jpg);"
                        title="Engineering Service Community (ESC)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CNcc98YpUDZ/"
                        style="background-image: url(images/iglab/lab25.jpg);"
                        title="Information and Autonomous Control System (Inacos)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/B_wKnskpZfX/"
                        style="background-image: url(images/iglab/lab26.jpg);" title="Mikroprosesor dan Antarmuka">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/labn302/"
                        style="background-image: url(images/iglab/unknownig.png);"
                        title="Pengukuran Sistem Elektronika/Pengukuran Besaran Elektrik">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Programmable Logic Controller">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CUMaL7MPe1j/"
                        style="background-image: url(images/iglab/lab29.jpg);" title="Rangkaian Listrik">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/B9D8dQ0nEKZ/"
                        style="background-image: url(images/iglab/lab30.jpg);" title="Teknik Digital">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/B-hQLVuJk7F/"
                        style="background-image: url(images/iglab/lab31.jpg);"
                        title="Aeromodelling and Payload Telemetry Reserch Group (APTRG)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CL1NK7BJia3/"
                        style="background-image: url(images/iglab/lab32.jpg);" title="Everything Connected (EvConn)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CDOcYu6JnLS/"
                        style="background-image: url(images/iglab/lab33.jpg);"
                        title="Intelligent &amp; Machine Learning (I-Smile)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/COXJY8yJuQo/"
                        style="background-image: url(images/iglab/lab34.jpg);"
                        title="Multimedia Arts Graphics Computation &amp; Simulation (MAGICS)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CLUTBYPpf17/"
                        style="background-image: url(images/iglab/lab35.jpg);"
                        title="Robotic and Embedded System Technology">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CUPaN6blrxf/"
                        style="background-image: url(images/iglab/lab36.jpg);" title="Security Laboratory (Seculab)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CUEgsGDPrJx/"
                        style="background-image: url(images/iglab/lab37.jpg);"
                        title="Software &amp; Application (SEA)">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Energy Assessment, Management, and Building">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Energy Monitoring, Testing, Control, and Optimization">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Environmental Monitoring">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Identification and Testing">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CMUZYMzpF-K/"
                        style="background-image: url(images/iglab/lab42.jpg);" title="Kontrol Automatik">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Material Functionalization">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Material Synthesis and Characterization">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Mechatronics">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Modelling and Computational">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CO9fJE7Jw0S/"
                        style="background-image: url(images/iglab/lab47.jpg);"
                        title="Rangkaian Listrik dan Elektronika">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="#" style="background-image: url(images/iglab/unknownig.png);"
                        title="Renewable Energy">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CA7yJKgpMp_/"
                        style="background-image: url(images/iglab/lab50.jpg);" title="Sensing and Measurement">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CMGhS1ZJKNA/"
                        style="background-image: url(images/iglab/lab51.jpg);" title="Teknik Konversi Energi">
                    </a>
                </div>
                <div class="w-full sm:w-1/6 h-32 md:h-52 px-2 py-2">
                    <a class="border-blue-400 border-2 block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-contain"
                        href="https://www.instagram.com/p/CJIdoOIJqIc/"
                        style="background-image: url(images/iglab/lab52.jpg);" title="Termodinamika Teknik">
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-14 mb-20">
            <div class="flex h-1 mr-10 sm:mr-10 bg-blue-400 w-20"></div>
        </div>

    </section>
    <!-- news/Gallery -->
    <!--popup berita-->
    <div x-data="{ msg: '', gmbr: '', judul: '' }">
        Flash Component
        <template
            x-on:modal.window="msg = $event.detail.msg; gmbr = $event.detail.gmbr; judul = $event.detail.judul;"></template>
        <template x-if="msg &amp;&amp; judul">
            <div class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75"
                x-on:click.away="imgModalSrc"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-end="opacity-0 transform scale-90"
                x-transition:leave-start="opacity-100 transform scale-100">
                <div class="h-3/4 w-11/12 md:w-3/4 py-5 px-10 bg-white rounded-md overflow-y-auto scrollbar-hide">
                    <div class="flex flex-col w-full h-auto">
                        <!-- Header -->
                        <div class="flex w-full h-auto justify-center items-center py-3">
                            <div
                                class="flex w-10/12 h-3/4 py-3 justify-center items-center text-2xl font-bold text-gray-900">
                            </div>
                            <div @click="judul=''" class="flex w-1/12 h-auto justify-end cursor-pointer mx-auto">
                                <svg class="feather feather-x" fill="none" height="24" stroke="#000000"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="18" x2="6" y1="6" y2="18"></line>
                                    <line x1="6" x2="18" y1="6" y2="18"></line>
                                </svg>
                            </div>
                            <!--Header End-->
                        </div>
                        <!-- Modal Content-->
                        <div
                            class="flex w-full h-auto py-10 p-5 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                            <div class="flex flex-col">
                                <h1 class="mb-10 font-sans font-semibold uppercase" x-text="judul"></h1>
                                <div class="flex h-2/4 w-auto">
                                    <img :alt="gmbr" :src="gmbr" class="w-auto" />
                                </div>
                            </div>
                        </div>
                        <div class="text-gray-900 justify-center mx-auto my-10">
                            <p x-text="msg"></p>
                        </div>
                        <!-- End of Modal Content-->
                    </div>
                </div>
            </div>
        </template>
    </div>
    <!--news code-->
    <section class="bg-blue-400 text-gray-900 min-h-screen" id="Berita">
        <div class="flex flex-col sm:mx-28 md:mx-14 mx-5">
            <div class="mx-auto">
                <div class="flex font-sans sm:text-4xl text-2xl justify-center mt-14">
                    <h1 class="text-white font-semibold uppercase">Berita Terbaru</h1>
                </div>
                <div class="flex mb-5">
                    <div class="flex flex-row h-1 mr-4 sm:mr-8 bg-white w-2"></div>
                    <div class="flex h-1 bg-white ml-3 sm:ml-6 w-7"></div>
                </div>
            </div>
            <div class="mx-auto my-5">
                <div class="flex flex-wrap max-w-screen-2xl">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg" x-data="{}">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6"
                                src="{{ asset('images_berita_kalender2024.jpg') }}" />
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Telkom
                                University</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Kalender Praktikum</h2>
                            <p class="leading-relaxed text-base">Kalender Pelaksanaan Praktikum Fakultas Teknik Elektro
                                Semester Ganjil 2024/2025 </p>
                            <button
                                @click="$dispatch('modal', { gmbr: 'images/berita/kalender2024.jpg', 
              msg: 'Baca Selengkapnya Di Intagram kita @seelabstelu', 
              judul:'Sekilas Info' })"
                                class="mt-12 w-full text-white text-center bg-blue-400 py-2 rounded-lg">
                                Read more</button>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4" x-data="{}">
                        <div class="bg-white p-6 rounded-lg">
                            <img alt="Image Size 720x400"
                                class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6"
                                src="{{ asset('images_berita_Pelaksanaan_praktikum_FTE_genap_2024.jpg') }}" />
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Telkom
                                University</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Praktikum FTE</h2>
                            <p class="leading-relaxed text-base">Pelaksanaan Praktikum Fakultas Teknik Elektro Semester
                                Genap 2023/2024.</p>
                            <button
                                @click="$dispatch('modal', { gmbr: 'images/berita/Pelaksanaan_praktikum_FTE_genap_2024.jpg', 
              msg: 'Pelaksanaan Praktikum semester Genap 2023/2024.', 
              judul:'Praktikum Fakultas FTE' })"
                                class="mt-12 w-full text-white text-center bg-blue-400 py-2 rounded-lg">
                                Read more</button>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4" x-data="{}">
                        <div class="bg-white p-6 rounded-lg">
                            <img alt="Image Size 720x400"
                                class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6"
                                src="{{ asset('images_berita_PraktikumSusulan2024.jpg') }}" />
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Telkom
                                University</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Praktikum FTE</h2>
                            <p class="leading-relaxed text-base">Peraturan Pengajuan Praktikum Susulan Fakultas Teknik
                                Elektro Semester Genap 2023/2024</p>
                            <button
                                @click="$dispatch('modal', { gmbr: 'images/berita/PraktikumSusulan2024.jpg', 
              msg: 'Peraturan Pengajuan Praktikum Susulan semester Genap 2023/2024',
              judul:'Praktikum Susulan' })"
                                class="mt-12 w-full text-white text-center bg-blue-400 py-2 rounded-lg">
                                Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-14 mb-20">
                <div class="flex h-1 mr-10 sm:mr-10 bg-white w-20"></div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="min-h-screen my-10" id="Frequentask">
        <div class="flex flex-col sm:mx-28 md:mx-14 mx-5 my-10">
            <div class="mx-auto">
                <div class="flex font-sans sm:text-4xl text-2xl justify-center mt-14">
                    <h1 class="text-blue-400 font-semibold">FAQ</h1>
                </div>
                <div class="flex mb-5">
                    <div class="flex flex-row h-1 mr-1 sm:mr-1 bg-blue-400 w-2"></div>
                    <div class="flex h-1 bg-blue-400 ml-1 sm:ml-4 w-7"></div>
                </div>
            </div>
            <div class="flex my-5 justify-center mx-auto md:flex-row flex-col" x-data="setup()">
                <div
                    class="text-white md:text-lg xl:text-xl space-y-10 md:w-1/6 w-full min-w-max mx-3 max-w-xs text-sm text-center md:text-left font-sans">
                    <div class="max-w-md rounded-lg shadow bg-blue-400 mt-1 border border-gray-100">
                        <template :key="index" x-for="(tab, index) in tabs">
                            <a :class="activeTab === index ? 'bg-white text-gray-900 border-blue-600' : ''"
                                @click="activeTab = index"
                                class="cursor-pointer block p-2 border-transparent border-l-4 hover:border-blue-600 hover:bg-white hover:text-gray-900"
                                x-text="tab"></a>
                        </template>
                    </div>
                    <div class="hidden md:block w-48 items-end h-72">
                        <img class="justify-end flex-grow" src="{{ asset('images_seelabsmo.png') }}" />
                    </div>
                </div>
                <div class="flex md:w-4/6 w-full max-w-6xl mx-3 my-2 md:my-0 md:mx-7 bg-blue-400 rounded shadow-md overflow-y-scroll scrollbar-hide"
                    style="height: 60vh;">
                    <ul class="flex flex-col m-4 rounded text-gray-900" x-show="activeTab===0">
                        <li class="bg-white my-2 shadow-xl rounded" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer text-gray-900">
                                <span class="max-w-xl">Kapan praktikum dimulai?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Praktikum dimulai mengikuti penjadwalan pada kalender praktikum yang dapat dilihat
                                    di <a class="text-blue-400"
                                        href="http://bit.ly/infopraktikumfte">bit.ly/infopraktikumfte</a> </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa sanksi apabila tidak mengumpulkan TP/TA?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Aturan pelaksanaan praktikum dan sanksi pelanggaran mengikuti kebijakan dan
                                    ketentuan dari masing-masing laboratorium.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(3)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika jadwal praktikum bentrok dengan
                                    kelas pengganti ?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan menggunakan fasilitas Tukar Jadwal yang bisa dikoordinasikan langsung dengan
                                    asisten lab. </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(4)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Bagaimana cara mendapat sif jadwal praktikum?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Jadwal sif praktikum dapat dipilih melalui akun seelabs masing-masing praktikan.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(5)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika tidak bisa memilih jadwal sif
                                    praktikum karena kuota sudah penuh?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan meminta kesediaan dari rekan seangkatan untuk menukar jadwal yang sama-sama
                                    sesuai.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(6)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika masih tidak menemukan teman yang
                                    bisa tukar jadwal sif praktikum? </span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan menghubungi asisten melalui media informasi LINE lab terkait untuk
                                    menyampaikan perihal tersebut supaya dapat ditambahkan kuota praktikum.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(7)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa saja izin prinsip yang diperbolehkan untuk mengikuti
                                    praktikum susulan?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Aturan pengajuan praktikum susulan dapat dilihat di menu Download.<br />
                                    Adapun izin prinsip yang ditentukan dalam dokumen tersebut meliputi Sakit
                                    Kritis/Rawat Jalan/Rawat Inap, Dispensasi, Musibah (Kematian, Kecelakaan), Ibadah,
                                    dan Kendala Teknis.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(8)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Bagaimana prosedur pengajuan praktikum susulan?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Pengajuan praktikum susulan melalui akun Line Seelabs.<br />
                                    Sampaikan pengajuan dan lampirkan berkas syarat pengajuan yang sudah ditetapkan
                                    dalam dokumen pengajuan tersebut.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(9)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apakah bisa mengajukan praktikum susulan jika akan menghadiri
                                    acara keluarga?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Tidak bisa.<br />
                                    Silakan menggunakan fasilitas tukar jadwal praktikum.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(10)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apakah bisa mengajukan praktikum susulan jika terlambat masuk
                                    praktikum?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Keterlambatan masuk praktikum menjadi tanggung jawab dari asisten lab dan tidak bisa
                                    diikutsertakan ke dalam pengajuan praktikum susulan.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(11)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apakah bisa mengikuti praktikum susulan jika sakit namun tidak
                                    termasuk ke dalam kriteria sakit pada aturan pengajuan praktikum susulan?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Tidak bisa. <br />
                                    Perlu diinformasikan bahwa tidak semua pengajuan praktikum susulan disetujui.
                                    Silakan melihat syarat pengajuan praktikum susulan terlebih dahulu. <a
                                        href="bit.ly/infopraktikumfte" target="blank">bit.ly/infopraktikumfte </a>
                                    sehat selalu.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(12)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika sudah memngajukan dan mengirimkan
                                    dokumen pendukung pengajuan praktikum susulan?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Mohon menunggu instruksi lanjutan yang dikomunikasikan lewat Line Seelabs.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(13)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika sudah mengisi form pengajuan
                                    praktikum susulan?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Praktikum Susulan akan dilaksanakan setelah semua modul praktikum selesai
                                    dilaksanakan oleh lab terkait. <br />
                                    Silakan menunggu informasi lanjutan di pekan setelah praktikum selesai dilaksanakan.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(14)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Dari mana saya bisa mendapat informasi pelaksanaan praktikum
                                    susulan?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Informasi pelaksanaan praktikum susulan akan disampaikan maksimal H+3 setelah
                                    praktikum selesai melalui OA Seelabs dan email praktikan yang terdaftar akan
                                    mengikuti praktikum susulan.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex flex-col m-4 rounded text-gray-900" x-show="activeTab===1">
                        <li class="bg-white my-2 shadow-xl rounded" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer text-gray-900">
                                <span>Apa akun line praktikum FTE?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan akses menu kontak untuk melihat akun official Seelabs dan klick medsos Line
                                    untuk diarahkan langsung ke akun official Line kami.</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex flex-col m-4 rounded text-gray-900" x-show="activeTab===2">
                        <li class="bg-white my-2 shadow-xl rounded" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer text-gray-900">
                                <span class="max-w-xl">Bagaimana cara masuk akun praktikum?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Akses <a class="text-blue-400"
                                        href="http:see.labs.telkomuniversity.ac.id/praktikum">LINK</a> berikut<br />
                                    Silakan login menggunakan username NIM dan password NIM.<br />
                                    Segera ubah password setelah berhasil login.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika masih tidak bisa masuk ke akun
                                    praktikum dengan username dan password NIM?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Mohon Mengirim KSM ke akun Line Seelabs dan sampaikan keluhan.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-xl rounded" x-data="accordion(3)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer text-gray-900">
                                <span class="max-w-xl">Apa yang harus dilakukan jika lupa password akun
                                    praktikum?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Praktikan dapat mengajukan keluhan dengan mengirim foto KTM ke akun Line Seelabs dan
                                    melakukan konsultasi dengan admin Line Seelabs.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex flex-col m-4 rounded text-gray-900" x-show="activeTab===3">
                        <li class="bg-white my-2 shadow-xl rounded" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer text-gray-900">
                                <span class="max-w-xl">Bagaimana prosedur peminjaman alat laboratorium?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan melengkapi formulir permohonan peminjaman alat. Format dapat diunduh dari
                                    menu Download.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Bagaimana prosedur peminjaman ruang laboratorium?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan melengkapi formulir permohonan peminjaman ruang. Format dapat diunduh dari
                                    menu Download.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex flex-col m-4 rounded text-gray-900" x-show="activeTab===4">
                        <li class="bg-white my-2 shadow-xl rounded" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer text-gray-900">
                                <span class="max-w-xl">Kenapa komponen nilai di akun praktikum masih kosong?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan menghubungi asisten praktikum terkait supaya dapat segera memasukkan nilai
                                    ke akun praktikum.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Kapan nilai praktikum keluar?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Nilai praktikum akhir akan diumumkan maksimal H+7 setelah pelaksanaan 12 pekan
                                    praktikum selesai.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(3)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Bagaimana cara mengetahui nilai akhir praktikum saya?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Nilai praktikum akhir akan diumumkan dalam bentuk link Google Sheet melalui OA
                                    Seelabs dan OA Praktikum.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(4)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Kapan proses pengajuan perubahan nilai sampai selesai berubah di
                                    iGracias?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Form perubahan nilai akan diproses melalui sidang akademik.<br />
                                    Mohon menunggu kelanjutannya dan akan dibantu untuk tindaklanjut.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(5)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Kenapa nilai di iGracias masih tidak sesuai dengan yang
                                    diperoleh?Saya sudah mengambil praktikum disemester sebelumnya, namun nilai saya
                                    masi E </span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silahkan menguhubungi OA Line Seelabs dan sertakan screenshot bukti nilai yang
                                    tertera pada iGracias.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(6)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika nilai saya belum keluar/tidak
                                    sesuai dan termasuk dalam praktikum mengulang/hanya mengambil mata praktikum
                                    sebagian karena sudah lulus di mata praktikum lainnya?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silahkan menguhubungi OA Line Seelabs dan sertakan screenshot bukti nilai yang
                                    tertera pada iGracias.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(7)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Kenapa nilai di Seelabs tidak sesuai dengan nilai di Google
                                    sheet?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan menghubungi OA Line Seelabs, sertakan NIM, dan mata praktikum yang belum
                                    sesuai nilainya.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(8)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Kenapa nilai di iGracias tidak sesuai dengan nilai di Google
                                    sheet?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Silakan menghubungi OA Line Seelabs, sertakan NIM dan screenshot nilai dari
                                    iGracias.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(9)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika sudah mengajukan komplain
                                    perbedaan nilai dan mengirimkan screenshot nilai dari iGracias?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    JIka komunikasi melalui OA Line Seelabs sudah selesai maka laporan komplain sudah
                                    terdata.<br />
                                    Mohon menunggu perubahan nilai melalui sidang akademik fakultas.<br />
                                    SIlakan follow up kembali dalam 14 hari kerja.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg rounded" x-data="accordion(10)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span class="max-w-xl">Apa yang harus dilakukan jika per-hari ini sudah 14 hari kerja
                                    semenjak mengajukan komplain nilai tapi nilai di iGracias masih belum sesuai?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                    viewbox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab">
                                <p class="p-3 text-gray-900">
                                    Mohon maaf. Akan segera kami periksa berkas perubahan nilainya ke fakultas. Mohon
                                    menunggu.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center mt-14 mb-20">
                <div class="flex h-1 mr-10 sm:mr-10 bg-blue-400 w-20"></div>
            </div>
        </div>
    </section>
    <!--Download-->
    <section class="bg-blue-400 text-gray-900 min-h-screen" id="Download">
        <div class="flex flex-col sm:mx-28 md:mx-14 mx-5">
            <div class="mx-auto">
                <div class="flex font-sans sm:text-4xl text-2xl justify-center mt-14">
                    <h1 class="text-white font-semibold uppercase">DOWNLOAD</h1>
                </div>
                <div class="flex mb-5">
                    <div class="flex flex-row h-1 mr-4 sm:mr-8 bg-white w-2"></div>
                    <div class="flex h-1 bg-white ml-3 sm:ml-6 w-7"></div>
                </div>
            </div>
            <div class="mx-auto w-full flex justify-center items-center">
                <div class="flex flex-wrap w-full md:max-w-screen-2xl">
                    <div class="xl:w-1/3 md:w-1/2 w-full p-4">
                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="text-center">
                                <h3
                                    class="tracking-widest w-full text-white text-base uppercase font-medium title-font bg-blue-400 rounded-xl p-3 justify-center shadow-md">
                                    Praktikum Ganjil</h3>
                            </div>
                            <div class="text-justify flex my-5">
                                <table class="text-left flex flex-col w-full">
                                    <thead class="bg-gray-900 flex text-white w-full rounded-lg shadow-md">
                                        <tr class="flex w-full mb-4">
                                            <th class="p-4 w-2/6">Prodi</th>
                                            <th class="p-4 w-4/6">MODUL PRAKTIKUM</th>
                                        </tr>
                                    </thead>
                                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                                    <tbody
                                        class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll scrollbar-hide w-full"
                                        style="height: 50vh;">
                                        <!-- <tr class="flex w-full mb-4 hover:bg-blue-100">
                  <td class="md:p-4 w-2/6">TT 1</td>
                  <td class="md:p-4 w-4/6 "><a>Rangkaian Listrik</a></td>
                  <td class="md:p-4 p-1 w-1/6 "><a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="16" height="16"
                    viewBox="0 0 30 30"
                    style=" fill:#000000;">    <path d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                  </svg></a></td>
                  <td class="md:p-4 p-1 w-1/6 "><a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="16" height="16"
                    viewBox="0 0 48 48"
                    style=" fill:#000000;"><path d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z"></path>
                  </svg></a></td>
                </tr> -->
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Sistem Komunikasi</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EUZV_wpcvLtOvs0bOzlvbSIB54fxVpHsHdRkpWqXYXYzdQ?e=KYlOee"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Antena dan Propagasi</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Et2Be4rh-29EpPp0UX1bjgUBIOhz04yOVLW2j0IK0Vvxgg?e=9i6rSN"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektromagnetika Telekomunikasi</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Eo8L-1pwmhpCrFV_hYDPqvcBq2Jf2hWd8qL-z1tGEqNIFg?e=k7KPUO"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Jaringan &amp; Trafik Telekomunikasi</a>
                                            </td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Eq0p65ZiFsNOnJLnBH-A3dsBJsqC9HkdzpDhXdTOTy_jvg?e=MAI2B4"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Rangkaian Listrik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Enx3rgfVbR5BtyiKQ72Kwi8BSzxRArTiIdHeIpPLGp53YQ?e=lyXFU4"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Pengolahan Sinyal Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EpNLXnGnmsVOjaYqx9VAQCQBXyrIkJl53U0gTQJYin1cpw?e=q4p7Og"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Komunikasi Optik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EiIKtspeXf5IhDKHWGQwbFoBLzN7OvUijQL_iya-19fgqw?e=6LqpgS"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektronika Komunikasi</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EuSwRNaFkAJDlwJVxqCwvhYBB1uxrDLLiWMbHETCHEbxUA?e=t7v1wE"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Keamanan data &amp; Blockchain</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EtmazBdiw0FGtddT093XGJYB0Ay8QsHDJmyOR2aBJihiWg?e=Y3krii"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>SOI &amp; PPI</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Eus5vMxWdGxIt-2fnbItkc0B1J3NcMcABdr8hUJ-xeZIEQ?e=5dEtCH"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Sistem Kendali</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Edlo6PY3jZxOlPdwFCdXbtkBfOeqBmlpyRuXvsRCSqFvRQ?e=bdePoo"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Rangkaian Listrik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Enx3rgfVbR5BtyiKQ72Kwi8BSzxRArTiIdHeIpPLGp53YQ?e=lyXFU4"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Pengolahan Sinyal Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EVaaAcwAaKpDsmBCxGKTbOEBTrHI6eec8Qf77MOwNTwb8A?e=7XVZJd"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Teknik Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EbGIF-o06RdOpMBYdWrTIREBz04c1KSAFXz8M5_eQ3Yb_g?e=XHt1yZ"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Mikrokomputer</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EgtkuxeC35NNhlh9cb2wE9oBaO5-U_eRPNwNLPmvXRmWgQ?e=HiCw3S"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Sensor Aktuator</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EQNqYVE0MsBLu5uBtG8Z0SgBD2G0mv4wktuF35zE9gqJeg?e=t9ATRx"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Kecerdasan Buatan</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/ESeg8ARu36xOiKtDdJJ_C9wBMOmNdO1a_x-4i0LyfxFkYw?e=iC8RVn"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Struktur Data</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EUcEiVJTuoZOn_VxAEHOOLwBmMmultyDtI4B1SVRW-ac_A?e=Kv2aiL"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Rangkaian Listrik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EZ7e9EzZnTBGrU8R4288bgYB4WxZAtUjnpnaBZEyt-7s5Q?e=LpDIfP"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Pengolahan Sinyal Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EQCQf0sU8BFJuEKJl5riuHsBB79D3wX0Q1KEfTjCNq1tog?e=BOJOYy"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Mikroprosesor dan Antarmuka</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EVASEmb7m2RKoQveZKR-QPwBnA5yoUqhRfrixRHZTP2jWA?e=IaoWi8"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TSE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Teknik Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EX0Vd749aiNGs0jet7dbzdoBT2T51C-OlVuOwXfxT-OeVg?e=1e3FlI"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TSE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Rangkaian Listrik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EfVGiHmZptBEh5gR-ygigwsBPKywimPtIYMB1CXc84T0bA?e=EerAez"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">DASAR</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Algoritma &amp; Pemrograman Kompute</a>
                                            </td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EV6lJM_uPUpFqGGdBndeiM8BA8uXf5_fLzkFxDA4dfgBeQ?e=a2pugR"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">DASAR</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Fisika Dasar</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EkZko6p3FvBPhAdPki0QB5IBTardSY-JTu0i1qZJZnOsFQ?e=WpOjcA"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Instrumentasi Biomedis</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Ea8ghgIsJOBIvB5u0VeRVdYBrzDiH05pDxL4bHz8c823eQ?e=RFevjS"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Teknik Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Ea8ghgIsJOBIvB5u0VeRVdYBrzDiH05pDxL4bHz8c823eQ?e=mVFiee"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Rangkaian Listrik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/ET8xNaA6ClNPqGMdA3-oQrUBQb7MqaSeaERhCYpQmJXpFg?e=A5uQfd"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Pengolahan Sinyal Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/ET8xNaA6ClNPqGMdA3-oQrUBQb7MqaSeaERhCYpQmJXpFg?e=ZFK2Kb"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Termodinamika Teknik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Efj25XHo2-hAi4lgPeBRixEB8Y40m0fJW7U4MSX6VCt7DQ?e=mA0q0y"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Pengolahan Sinyal</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EZ8Gf06bsS1Hkh3Yx3ABZ1kBsh28A-CPDAHUE_XSRA32Uw?e=jN75u3"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Teknik Pengukuran</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/ETP6KymuqS1Ik1k0Qwt3jlEBtL53kBjXnJxLkBTII6977Q?e=labf1A"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Rangkaian Listrik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EXmmPdgjFxZAp2Ax7Y9YJtcBNSHYJ6CwZZO3uBfuavXURA?e=7PkUXc"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektronika Dasar</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EbSewz1sqvdGquZA7yY6uIoBgQXAsy3gHiVEl6puoIeP1Q?e=aepjxd"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Sistem Kendali Dasar</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/EdPYHa0usDBFgnG-astL-sABzaQivtk55wm-FzuOzOPdUw?e=0R5XB1"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="text-center">
                                <h3
                                    class="tracking-widest w-full text-white text-base uppercase font-medium title-font bg-blue-400 rounded-xl p-3 justify-center">
                                    Dokumen</h3>
                            </div>
                            <div class="my-5">
                                <table class="flex flex-col w-full">
                                    <thead class="bg-gray-900 flex text-white w-full rounded-lg shadow-md">
                                        <tr class="flex w-full mb-4 justify-center">
                                            <th class="p-4 w-6/6">NAMA FILE</th>
                                        </tr>
                                    </thead>
                                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                                    <tbody
                                        class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll scrollbar-hide w-full"
                                        style="height: 50vh;">
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/EoWc1zGc2jlAlNVmv5fIpKsBgd7-pdbNo8lw-d7La9nW_w?e=advgWy"
                                                    target="_blank">Instruksi Kerja Praktikum</a></td>
                                        </tr>

                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://docs.google.com/document/d/1E4jp9V7wGVaeHRK4AQOfbQPJmDxH_f2W/edit?usp=sharing&amp;ouid=101816486655751363949&amp;rtpof=true&amp;sd=true"
                                                    target="_blank">Form Surat Izin Mahasiswa Akses Lab Saat
                                                    Pandemi</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/ESavdkPQsmJNveMA8DdGXcABayfgz2Kp1uJU3YIZU4g8QQ?download=1">Form
                                                    Surat Izin Aslab Akses Lab Saat Pandemi</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/EfyxPlWMBmREns7Oo4I1ffYBJidNXXJ_es9BjDMsaulmIw?download=1">Form
                                                    Peminjaman Ruang Lab FTE</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/Efzoxu4YLdJMmJM0-5LlFB0B8_oVAX8jK0zW4b4-Fl3jYQ?download=1">Form
                                                    Pengajuan Barang Insidental</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/Eb7Ijp3QKfFOoBfee1CQ9LcBS5Uzls9Uw3wOJX4PnxQF0g?download=1">Form
                                                    Perbaikan Alat/Barang FTE</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/EXIh6MEYqzhGlE-5mCcvGXABPLml3eHE8wp5qoNnvXh97w?download=1">Form
                                                    Peminjaman Alat/Barang FTE</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_telkomuniversity_ac_id/Ess0eTuyDPxHkX3f8WH8BUYBzzlamyHzNnuxkb6N0FEQmA?e=kD9v7P">Form
                                                    Pengajuan BHP &amp; NBHP Praktikum</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/Ee7nJpV0Y9BDj-OSEWTtliwBJlzjRB76qxTVotPh1mkAow?download=1">Pedoman
                                                    Laporan Akhir Asisten Praktikum</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/EaKd3hEKqu5OsqfHJ1615cMB4VR4iwt8bjQEc-pUKrWoMQ?download=1">Template
                                                    Penerbitan Surat Tugas Asisten FTE</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/EeHpuZvTrc1OpJZb3hac4rkB9zmcGoklMotpl_PZw5UKVg?download=1">Berita
                                                    Acara Training Asisten</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/Ef7zbmeynHBDqHGbUwwZYl0BLgI2dOFIgTpkpO7a-jdinQ?download=1">Berita
                                                    Acara Rekrutasi Asisten</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/ERvezxVNvExFgtopzZFkuzQBIc9ZapujOiZVlIXcDTsoiQ?e=UiipCe">Proposal
                                                    Kegiatan Training Asisten</a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="p-4 w-4/4"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/EWXej5i9Vv9EsQLs1vjIfU0B_qycSz6Dz3gsAA9KgcDDRA?download=1">Proposal
                                                    Kegiatan Rekrutasi Asisten</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 w-full p-4">
                        <div class="bg-white rounded-lg p-6 shadow-md">
                            <div class="text-center">
                                <h3
                                    class="tracking-widest w-full text-white text-base uppercase font-medium title-font bg-blue-400 rounded-xl p-3 justify-center">
                                    Praktikum Genap</h3>
                            </div>
                            <div class="text-justify my-5">
                                <table class="text-left flex flex-col w-full">
                                    <thead class="bg-gray-900 flex text-white w-full rounded-lg shadow-md">
                                        <tr class="flex w-full mb-4">
                                            <th class="p-4 w-2/6">Prodi</th>
                                            <th class="p-4 w-4/6"> MODUL PRAKTIKUM</th>
                                        </tr>
                                    </thead>
                                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                                    <tbody
                                        class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll scrollbar-hide w-full"
                                        style="height: 50vh;">
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Fisika II</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Jaringan Komunikasi Data</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektronika</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://tel-u.ac.id/modulelektronika"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Antena</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektronika Komunikasi</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Mikroprosessor &amp; IOT</a></td>
                                            <!-- <td class="md:p-4 p-1 w-1/6 "><a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="16" height="16"
                    viewBox="0 0 30 30"
                    style=" fill:#000000;">    <path d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                  </svg></a></td> -->
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/Es56zC49I6pBttLWqxn-YXoB4kBxq_jbOjVnYkHs0Jq0zQ?e=PpW1vk"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TT</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Algoritma dan Pemrograman</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/Etn3Ko6ynlJBpw1G8qw-hEsBKT00Skj2MWqRvxFtHu5Ogw?e=EyEv4p"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektronika</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/Eq4-Fav_VMtBgIPN_CqrEn8BMCo24X6zM8dQDqzxmNt-uw?e=esU0zH"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Mikrokomputer</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EoABMW29zNlOhrkMYIlCX4QBU7Q9FdytTIE6XQrLnBSC2w?e=v6RbyW"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>SOI</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EuRaMC3KwuFFhxLh_VUXjrUBKneVU0FHlFWNmsIu3jBXLw?e=CmIYwC"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>PPI</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EhyM0xu0s5RCiDBUyImRjCABoYGqTWVIK0VLWHgSCNRMyA?e=lDJP3z"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>FISIKA II</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>FISIKA II</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Desain Sistem Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/Ej6h2VOKP8JArjZZXTtTSr0B9r_9eI6fN3Y1aG6WkEZy3Q?e=GMEPqS"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Pengolahan Sistem Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/ElNw07myBTtBreq6IKJScfwBwt65uC-n7vVYFalz0P3jDA?e=HJTVBL"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Jaringan Komputer &amp; Data</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EpuEW6dIhTxHvUzf6SxdqtgB4iwAaVlwE3nCUZTvzx-sig?e=lsVgSQ"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TK</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Algoritma &amp; Pemrograman</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EvJFaqSO09hIg07g76XjNAABSFXiN-onCAaa0B9ol1tSow?e=zM6il6"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Fisika II</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Elektronika Digital</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EsZkkpj19pxDp7tZvh_hAQkB4Fj8KsTxmYWc_DvwHCs9Kw?e=EhGHux"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Analisis Termal</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EhWztds9qlZHvSORnGrFJu8BtwHpfxeco2vnUeIKsNP5Ig?e=VNATIg"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TF</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Kontrol Automatik</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EhAB1MQS90RMk2jE2kgxRukBIn9y0zN0DCYpe7VmO0jjpg?e=XcyYSn"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Fisika II</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Algoritma &amp; Pemrograman</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EvbnQyC3wmBMu0U145L40QsB8vkc-cbadKBJ37EZ55xZow?e=NKEDOc"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TB</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Mikrokomputer</a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/EoxMvrnOKaRPpTnFW7DlruoBkvFKC7xZ3oYUa7baXFKHYw?e=Jqjxl9"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TSE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>FISIKA II </a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/laboranfte_telkomuniversity_ac_id/Eav6yJXPcA5GulQj3jS6llcBJMeTXFVsT9HFpuC00rEMsA?e=zqgRnM"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr class="flex w-full mb-4 hover:bg-blue-100">
                                            <td class="md:p-4 p-1 w-2/6">TSE</td>
                                            <td class="md:p-4 p-1 w-4/6"><a>Algoritma dan Pemrograman </a></td>
                                            <td class="md:p-4 p-1 w-1/6"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/laboranfte_365_telkomuniversity_ac_id/Ev6eE-yQO_NHvFPUB70Xw_8Bj6EfoUohLlZ6Y4L7W7bIzQ?e=saBHl4"
                                                    rel="noopener noreferrer" target="_blank"><svg height="16"
                                                        style=" fill:#000000;" viewbox="0 0 48 48" width="16"
                                                        x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                        <path
                                                            d="M 12.5 4 C 10.019 4 8 6.019 8 8.5 L 8 39.5 C 8 41.981 10.019 44 12.5 44 L 35.5 44 C 37.981 44 40 41.981 40 39.5 L 40 20 L 28.5 20 C 26.019 20 24 17.981 24 15.5 L 24 4 L 12.5 4 z M 27 4.8789062 L 27 15.5 C 27 16.327 27.673 17 28.5 17 L 39.121094 17 L 27 4.8789062 z">
                                                        </path>
                                                    </svg></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-14 mb-20">
                <div class="flex h-1 mr-10 sm:mr-10 bg-white w-20"></div>
            </div>
        </div>
    </section>
    <!--tentang-->
    <section class="" id="Kontak">
        <div class="flex flex-col sm:mx-28 mx-14 text-gray-900">
            <div class="">
                <div class="max-w-6xl m-auto flex flex-wrap justify-first mt-9 text-blue-400">
                    <div class="text-2xl uppercase font-sans font-semibold sm:text-4xl">KONTAK</div>
                </div>
                <div class="flex justify-first mb-10 mt-2 m-auto max-w-6xl">
                    <div class="flex flex-row h-1 mr-4 sm:mr-8 bg-blue-400 w-2"></div>
                    <div class="flex h-1 bg-blue-400 ml-3 sm:ml-6 w-7"></div>
                </div>
                <div class="max-w-6xl m-auto flex flex-wrap justify-between">
                    <div class="p-5 md:w-max w-auto">
                        <div class="md:text-lg text-sm uppercase font-semibold">Laboran FTE</div>
                        <div class="my-5 w-auto md:w-max">
                            <a class="my-3 md:block flex">Gedung P Ruang 214
                                <span class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 md:block flex">Gedung TULT Ruang TULT 10.03
                                <span class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 md:block flex">Fakultas Teknik Elektro Telkom University
                                <span class="text-teal-600 text-xs p-1"></span></a>
                            <a class="my-3 md:block flex">Jl. Telekomunikasi | Terusan Buah Batu, Bandung
                                <span class="text-teal-600 text-xs p-1"></span></a>
                            <dt class="my-8 flex-col">
                                <div
                                    class="md:absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400">
                                    <svg height="46" style=" fill:#000000;" viewbox="0 0 172 172"
                                        width="46" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                        <g fill="none" fill-rule="nonzero" font-family="none"
                                            font-size="none" font-weight="none" stroke="none"
                                            stroke-dasharray="" stroke-dashoffset="0" stroke-linecap="butt"
                                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-width="1"
                                            style="mix-blend-mode: normal" text-anchor="none">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#29b6f6">
                                                <path
                                                    d="M26.875,28.66667c-6.923,0 -12.54167,5.61867 -12.54167,12.54167l71.66667,44.79167l71.66667,-44.79167c0,-6.923 -5.61867,-12.54167 -12.54167,-12.54167zM14.33333,55.55566v73.44434c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-73.44434l-71.66667,44.77767z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <p class="md:ml-16 ml-2 text-sm leading-6 font-medium text-gray-900">Email</p>
                                <a class="md:ml-16 ml-2 text-sm leading-6 text-gray-900"
                                    href="/#">laboranfte@telkomuniversity.ac.id</a>
                            </dt>
                            <div class="max-w-lg mt-20 mb-10">
                                <img alt="" class="justify-center w-2/3"
                                    src="{{ asset('images_Kontak.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="p-5 w-max justify-start">
                        <div class="text-lg uppercase font-medium">Media Informasi</div>
                        <div
                            class="w-max mt-5 mb-10 space-y-8 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-8">
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400">
                                        <svg height="46" style=" fill:#000000;" viewbox="0 0 24 24"
                                            width="46" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                            <path
                                                d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"
                                                fill="#29b6f6"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-sm leading-6 font-medium text-gray-900">Instagram</p>
                                    <a class="ml-16 text-sm leading-6 text-gray-900"
                                        href="https://www.instagram.com/seelabstelu/">@seelabstelu</a>
                                </dt>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400">
                                        <svg height="46" style=" fill:#000000;" viewbox="0 0 24 24"
                                            width="46" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                            <path
                                                d="M 4 3 C 2.9 3 2 3.9 2 5 L 2 17 L 5 14 L 14 14 C 15.1 14 16 13.1 16 12 L 16 5 C 16 3.9 15.1 3 14 3 L 4 3 z M 18 8 L 18 12 C 18 14.206 16.206 16 14 16 L 8 16 L 8 17 C 8 18.1 8.9 19 10 19 L 19 19 L 22 22 L 22 10 C 22 8.9 21.1 8 20 8 L 18 8 z"
                                                fill="#29b6f6"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-sm leading-6 font-medium text-gray-900">Line</p>
                                    <a class="ml-16 text-sm leading-6 text-gray-900"
                                        href="http://line.me/ti/p/~@jit0659i">@seelabstelu</a>
                                </dt>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400">
                                        <svg height="46" style=" fill:#000000;" viewbox="0 0 48 48"
                                            width="46" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                            <path d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z" fill="#29b6f6"></path>
                                            <path
                                                d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"
                                                fill="#fff"></path>
                                            <path
                                                d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"
                                                fill="#b0bec5"></path>
                                            <path
                                                d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"
                                                fill="#cfd8dc"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-sm leading-6 font-medium text-gray-900">Telegram</p>
                                    <a class="ml-16 text-sm leading-6 text-gray-900"
                                        href="http://bit.ly/gruppraktikanfte">bit.ly/gruppraktikanfte</a>
                                </dt>
                            </div>
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-white text-blue-400">
                                        <svg height="46" style=" fill:#000000;" viewbox="0 0 24 24"
                                            width="46" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                            <path
                                                d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,15.464V8.536L16,12L10,15.464z"
                                                fill="#29b6f6"></path>
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-sm leading-6 font-medium text-gray-900">Youtube</p>
                                    <a class="ml-16 text-sm leading-6 text-gray-900"
                                        href="https://www.youtube.com/channel/UCktbZTSLVkojtFmA3xKJUUg">Seelabs Telkom
                                        University</a>
                                </dt>
                            </div>
                        </div>
                        <div class="text-lg uppercase font-medium my-5">Link Terkait</div>
                        <div>
                            <dt><a href="https://see.telkomuniversity.ac.id/">Fakultas Teknik Elektro</a>
                            </dt>
                            <dt><a href="https://bte.telkomuniversity.ac.id/">Program Studi S1 Teknik
                                    Telekomunikasi</a>
                            </dt>
                            <dt><a href="https://bee.telkomuniversity.ac.id/">Program Studi S1 Teknik Elektro</a>
                            </dt>
                            <dt><a href="https://bsk.telkomuniversity.ac.id/">Program Studi S1 Teknik Komputer</a>
                            </dt>
                            <dt><a href="https://bpe.telkomuniversity.ac.id/">Program Studi S1 Teknik Fisika</a>
                            </dt>
                            <dt><a href="https://bbe.telkomuniversity.ac.id/">Program Studi S1 Teknik Biomedis</a>
                            </dt>
                            <dt><a href="https://mce.telkomuniversity.ac.id/">Program Studi S2 Teknik Elektro
                                    Telekomunikasi</a>
                            </dt>
                            <dt><a href="">Program Studi Teknik Sistem Energi</a>
                            </dt>
                            <dt><a href="https://transtel.rg.telkomuniversity.ac.id/">KK Transmisi dan
                                    Telekomunikasi</a>
                            </dt>
                            <dt><a href="https://network.rg.telkomuniversity.ac.id/">KK Networking, Cybernetics and
                                    Engineering Management</a>
                            </dt>
                            <dt><a href="https://psi.rg.telkomuniversity.ac.id/">KK Pengolahan Sinyal Informasi</a>
                            </dt>
                            <dt><a href="https://ceis.rg.telkomuniversity.ac.id/">KK Control, Electronics, and
                                    Intelligent</a>
                            </dt>
                            <dt><a href="https://rekom.rg.telkomuniversity.ac.id/">KK Rekayasa Komputer</a>
                            </dt>
                            <dt><a href="https://rie.rg.telkomuniversity.ac.id/">KK Rekayasa Instrumentasi dan
                                    Energi</a>
                            </dt>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2">
                <div class="flex pb-5 px-3 m-auto pt-5 border-t text-sm flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">© Copyright 2020. All Rights Reserved.</div>
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                        <a class="w-6 mx-1" href="https://www.youtube.com/channel/UCktbZTSLVkojtFmA3xKJUUg">
                            <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400"
                                height="100%"
                                style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;"
                                version="1.1" viewbox="0 0 24 24" width="100%" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_1">
                                    <circle cx="12" cy="12" id="Oval" r="12"></circle>
                                    <path d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                      -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                      -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                      -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                      -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                      0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                      2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                      1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                      0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                      -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                      -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                      -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                      0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                      0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" id="Shape"
                                        style="fill: rgb(255, 255, 255);"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--coba-->
</body>
<!--script-->
<script>
    function setup() {
        return {
            activeTab: 0,
            tabs: [
                "Praktikum",
                "Media Informasi",
                "Akun Praktikum",
                "Peminjaman Alat/Lab",
                "Nilai Praktikum",
            ]
        };
    };

    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })

    window.addEventListener('DOMContentLoaded', () => {

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                const konten = entry.target.getAttribute('');
                if (entry.intersectionRatio > 0.001) {
                    document.querySelector(`nav div a[href="#${id}"]`).classList.add(
                        'bg-white');
                    document.querySelector(`nav div a[href="#${id}"]`).classList.add(
                        'text-blue-400');
                } else {
                    document.querySelector(`nav  div a[href="#${id}"]`).classList.remove(
                        'bg-white');
                    document.querySelector(`nav  div a[href="#${id}"]`).classList.remove(
                        'text-blue-400');
                }
            });
        });

        // Track all sections that have an `id` applied
        document.querySelectorAll('section[id]').forEach((section) => {
            observer.observe(section);
        });

    });
</script>

</html>
