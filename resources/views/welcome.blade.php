@extends('layouts.app')
@section('content')

    {{-- Hero --}}
    <div class="bg-sky-950 w-full h-screen object-cover items-center flex bg-no-repeat">
        <div class="max-w-7xl mx-auto md:ml-5 text-6xl text-white md:text-start ">
            <h4 class="text-center text-2xl my-2 mx-auto sm:text-start capitalize">SELAMAT DATANG DI WEBSITE RESMI</h4>
            <h1>BAPENDA KOTA BANDUNG</h1>
            <h3 class="text-xl my-2 mx-auto">Cara Mudah Untuk Kamu Ingat Pajak</h3>
        </div>
        {{-- <div class="w-96 mx-auto flex md:ml-5">
            <img src="{{asset("img/hero.png")}}" alt="HeroPict">
        </div> --}}
    </div>

    {{-- Widget --}}
    {{-- <section class="counter-widget__container sticky top-[64px] md:top-[80px] xl:top-[96px] grid grid-cols-[319px,auto] md:grid-cols-[418px,auto] items-start max-w-max mb-6
        transition-transform ease-in duration-150 counter-widget__container--open" data-v-6616e47a="">
        <div class="w-full h-full max-h-[80vh] md:max-h-[600px] py-[18px] px-[26px] rounded-lg overflow-y-auto pointer-events-auto bg-[#1565C0]"
            data-v-6616e47a="">
            <div data-v-6616e47a="">
                <section class="mb-6" data-v-6616e47a="">
                    <h1 class="font-roboto text-white font-medium text-[28px] leading-[45px]" data-v-6616e47a="">
                        Statistik kunjungan
                    </h1>
                    <p class="font-roboto font-normal text-[14px] leading-[23px] text-white" data-v-6616e47a="">
                        Perhitungan jumlah kunjungan website
                    </p>
                </section>
                <section
                    class="bg-[#0D47A1] pl-[49px] pt-[36px] pb-[14px] mb-[15px] rounded-[10px] relative overflow-hidden"
                    data-v-6616e47a="">
                    <div class="flex flex-row gap-[15px] items-center pb-2.5" data-v-6616e47a="">
                        <div class="bg-[#1565C0] p-2 rounded-lg" data-v-6616e47a=""><img src="/icons/three-people.svg"
                                alt="people" width="19px" height="19px" data-v-6616e47a=""></div>
                    </div>
                    <p class="font-lato text-white text-[16px] leading-[26px] font-normal" data-v-6616e47a="">
                        Total visitor
                    </p>
                    <p class="font-roboto text-white text-[49px] leading-[79px] font-medium pb-2.5" data-v-6616e47a="">
                        64.422
                    </p>
                    <div class="flex flex-row bg-[#1565C0] w-fit rounded-lg" data-v-6616e47a="">
                        <div class="bg-green-500 w-2 h-2 rounded-[50%] m-2.5" data-v-6616e47a=""></div>
                        <p class="text-white font-lato text-[16px] leading-[26px] font-normal pr-2 rounded-lg"
                            data-v-6616e47a=""><span class="font-semibold" data-v-6616e47a="">7</span> Online
                        </p>
                    </div> <img src="/images/counter-widget/pattern-one.png" alt="counter widget pattern" width="275"
                        height="280" class="w-full h-full inset-0 left-[120px] absolute object-contain"
                        data-v-6616e47a="">
                </section>
                <section class="bg-[#0D47A1] pl-[49px] pt-[36px] pb-[14px] rounded-[10px] relative overflow-hidden"
                    data-v-6616e47a="">
                    <div class="flex flex-row gap-[15px] items-center pb-2.5" data-v-6616e47a="">
                        <div class="bg-[#1565C0] p-2 rounded-lg" data-v-6616e47a=""><img src="/icons/chart.svg"
                                alt="people" width="19px" height="19px" data-v-6616e47a=""></div>
                    </div>
                    <p class="font-lato text-white text-[16px] leading-[26px] font-normal" data-v-6616e47a="">
                        Total view
                    </p>
                    <p class="font-roboto text-white text-[49px] leading-[79px] font-medium pb-2.5" data-v-6616e47a="">
                        365.969
                    </p> <img src="/images/counter-widget/pattern-two.png" alt="counter widget pattern" width="275"
                        height="280" class="w-full h-full absolute inset-0 left-[110px] object-contain"
                        data-v-6616e47a="">
                </section>
            </div>
        </div>
        <div class="self-center relative left-[-65px] bg-[#1565C0] rounded-br-lg rounded-bl-lg
        text-white pointer-events-auto transform -rotate-90 cursor-pointer" data-v-6616e47a="">
            <div class="flex items-center gap-4 py-3 px-2" data-v-6616e47a="">
                <div class="bg-[#0D47A1] flex rounded-full items-center justify-center p-1" data-v-6616e47a="">
                    <div fill="white" class="flex justify-center items-center transform ease-in duration-150 rotate-180"
                        style="width:19px;height:19px;" data-v-6616e47a=""><i class="jds-icon"><svg width="20"
                                height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                class="jds-icon__svg"
                                style="width: 19px; height: 19px; transform: rotate(0deg); fill: currentcolor;">
                                <path
                                    d="M10.7024 14.7285L18.7124 7.15369C18.8979 6.97849 19 6.74462 19 6.49525C19 6.24588 18.8979 6.01201 18.7124 5.83682L18.1227 5.27898C17.7384 4.916 17.1138 4.916 16.7301 5.27898L10.0037 11.6397L3.26988 5.27193C3.08447 5.09673 2.8373 5 2.57374 5C2.30989 5 2.06272 5.09673 1.87716 5.27193L1.28756 5.82976C1.10214 6.00509 0.999999 6.23882 0.999999 6.48819C0.999999 6.73757 1.10214 6.97144 1.28756 7.14663L9.30496 14.7285C9.49095 14.9041 9.73929 15.0006 10.0033 15C10.2683 15.0006 10.5165 14.9041 10.7024 14.7285Z">
                                </path>
                            </svg></i></div>
                </div>
                <p class="text-sm font-medium whitespace-nowrap" data-v-6616e47a="">
                    Statistik Kunjungan
                </p>
            </div>
        </div>
    </section> --}}

    {{-- Caraousel Iklan Bapenda --}}
    <section class="flex items-center justify-center w-full mx-auto px-4 py-6 2xl:px-0 xl:w-full">
        <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://placeholder.com/1208x640" alt="dummy-iklan"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://placeholder.com/1208x640" alt="dummy-iklan"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://placeholder.com/1208x640" alt="dummy-iklan"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://placeholder.com/1208x640" alt="dummy-iklan"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://placeholder.com/1208x640" alt="dummy-iklan"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
            </div>
            <div class="flex justify-center items-center pt-4">
                <button type="button"
                    class="flex justify-center items-center mr-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    {{-- Caraousel Pelayanan Pajak --}}
    <section id="slider" class="pt-5 px-16">
        <div class="container">
            <h1 class="text-center text-2xl"><b>Pelayanan Pajak</b></h1>
            <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <div class="flex justify-center align-items-center mb-4">
                            <img src="https://placeholder.com/600x600" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Pajak Hotel</b></h5>
                        <p class="text-center p-4">Hotel adalah fasilitas penyedia jasa penginapan / peristirahatan
                            termasuk jasa terkait lainnya dengan dipungut bayaran, yang mencakup motel, losmen, gubuk
                            pariwisata, wisma pariwisata, pesanggrahan, rumah penginapan dan sejenisnya, serta rumah
                            kost dengan jumlah kamar lebih dari 10 (sepuluh)</p>
                    </div>
                    <div class="slider-card">
                        <div class="flex justify-center align-items-center mb-4">
                            <img src="https://placeholder.com/600x600" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Pajak Restaurant</b></h5>
                        <p class="text-center p-4">Restoran adalah fasilitas penyedian makanan dan/atau minuman dengan
                            dipungut bayaran, yang mencakup juga rumah makan, kafetaria, kantin, warung, termasuk jasa
                            boga/katering. Pelayanan penjualan makanan/minuman yang dikonsumsi oleh pembeli ditempat
                            pelayanan/ditempat lain</p>
                    </div>
                    <div class="slider-card">
                        <div class="flex justify-center align-items-center mb-4">
                            <img src="https://placeholder.com/600x600" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Pajak Parkir</b></h5>
                        <p class="text-center p-4">Pajak atas penyelenggaraan tempat parkir di luar badan jalan, baik
                            yang disediakan berkaitan dengan pokok usaha maupun yang disediakan sebagai suatu usaha,
                            termasuk penyediaan tempat penitipan kendaraan bermotor. Parkir adalah keadaan tidak
                            bergerak suatu kendaraan yang tidak bersifat sementara</p>
                    </div>
                    <div class="slider-card">
                        <div class="flex justify-center align-items-center mb-4">
                            <img src="https://placeholder.com/600x600" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Pajak BPTHB</b></h5>
                        <p class="text-center p-4">Bea Perolehan Hak atas Tanah dan Bangunan adalah perbuatan atau
                            peristiwa hukum (jual beli, hibah dan sebagainya) yang mengakibatkan diperolehnya pengalihan
                            hak atas tanah dan / atau bangunan oleh orang pribadi, kelompok organisasi atau badan hukum
                        </p>
                    </div>
                    <div class="slider-card">
                        <div class="flex justify-center align-items-center mb-4">
                            <img src="https://placeholder.com/600x600" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Pajak Penerangan</b></h5>
                        <p class="text-center p-4">Pajak atas penggunaan tenaga listrik, baik yang dihasilkan sendiri
                            maupun diperoleh dari sumber lain. Yang menjadi objek pajak adalah semua pengguna tenaga
                            listrik baik itu rumah tangga ataupun gedung perkantoran dan pengusaha penyedia tenaga
                            listrik non PLN (genset)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Portal Berita --}}
    <section class="flex items-center justify-center w-full mx-auto px-4 py-6">
        <div class="container h-screen mx-auto px-40 2xl:px-0 xl:max-w-7xl">
            <div class="">
                <p class="text-3xl text-center">Berita Terkini</p>
            </div>
            <div class="flex bg-white rounded mx-auto">
                <div class="">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/1600x900/?beach" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Headline
                                Berita</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Beatae odio minus praesentium aliquid non facere reiciendis
                            officia porro omnis veritatis, tempora nulla libero ea autem blanditiis nesciunt cumque at
                            expedita!</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-3/4">
                    <div class="p-5">
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                                data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="terbaru-tab"
                                        data-tabs-target="#terbaru" type="button" role="tab" aria-controls="terbaru"
                                        aria-selected="false">terbaru</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="terpopuler-tab" data-tabs-target="#terpopuler" type="button" role="tab"
                                        aria-controls="terpopuler" aria-selected="false">terpopuler</button>
                                </li>
                                <ul>
                                    <div id="myTabContent">
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="terbaru"
                                            role="tabpanel" aria-labelledby="terbaru-tab">
                                            
                                        </div>
                                    </div>
                                </ul>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="terpopuler"
                                    role="tabpanel" aria-labelledby="terpopuler-tab">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Iure, fugiat! Iste quam quo, ipsum ex doloribus
                                        perspiciatis molestias dolorum quisquam rem adipisci quaerat impedit? Ut nostrum
                                        ex
                                        suscipit doloribus fugit?
                                    </p>
                                </div>
                        </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="flex mx-auto px-10 items-center py-12">
        <div class="mx-auto bg-white items-center py-40">
            <p class="font-extrabold text-2xl text-green-400 py-5">
                Gallery BAPENDA <span> | </span> <span>Selengkapnya</span>Selengkapnya
            </p>
            <div class="grid grid-cols-4 gap-4 mx-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    <p class="text-2xl font-bold text-orange-500 py-2">
                        Hari, 00 Bulan 0000
                    </p>
                    <p class="py-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti ipsum sint saepe optio
                        repellendus quaerat deserunt
                    </p>
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    <p class="text-2xl font-bold text-orange-500 py-2">
                        Hari, 00 Bulan 0000
                    </p>
                    <p class="py-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti ipsum sint saepe optio
                        repellendus quaerat deserunt
                    </p>
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    <p class="text-2xl font-bold text-orange-500 py-2">
                        Hari, 00 Bulan 0000
                    </p>
                    <p class="py-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti ipsum sint saepe optio
                        repellendus quaerat deserunt
                    </p>
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    <p class="text-2xl font-bold text-orange-500 py-2">
                        Hari, 00 Bulan 0000
                    </p>
                    <p class="py-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti ipsum sint saepe optio
                        repellendus quaerat deserunt
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>





    {{-- <div class="grid grid-rows-3 grid-flow-col gap-4 bg-blue-950 w-full h-full">
            <div class="row-span-3">

                <div
                    class="max-w-xl  max-h-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/1600x900/?beach" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Headline
                                Berita</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Beatae odio minus praesentium aliquid non facere reiciendis
                            officia porro omnis veritatis, tempora nulla libero ea autem blanditiis nesciunt cumque at
                            expedita!</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-span-2 ...">02</div>
            <div class="row-span-2 col-span-2 ...">03</div>
        </div> --}}
    </div>
@endsection
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>