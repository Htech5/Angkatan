@php
    $items = [
        ['category' => 'proker', 'title' => 'Proker Event 1'],
        ['category' => 'prestasi', 'title' => 'Prestasi Award 1'],
        ['category' => 'tweets', 'title' => 'Tweet Update 1'],
        ['category' => 'proker', 'title' => 'Proker Event 2'],
        ['category' => 'prestasi', 'title' => 'Prestasi Award 2'],
        ['category' => 'tweets', 'title' => 'Tweet Update 2'],
    ];
@endphp

<x-app-layout class="bg-vanilla">
    <section id="carousel-gambar">
        {{-- carousel gambar --}}
        <div class="relative w-full h-[50vh] md:h-[60vh] drop-shadow-xl overflow-hidden mt-16">
            <!-- Carousel Wrapper -->
            <div id="carousel-items" class="flex transition-all duration-500">
                <!-- Carousel Items -->
                <div class="w-full h-[50vh] md:h-[60vh] flex-shrink-0">
                    <div
                        class="w-full h-[50vh] md:h-[60vh] flex justify-center items-center bg-gradient-to-b absolute
                 z-10 from-black/50 from- via-transparent to-black-30">
                        <h1
                            class="text-2xl md:text-5xl drop-shadow-2xl rounded-xl bg-black/5 p-4 backdrop-blur-[1px] font-bold font-montserrat text-vanilla">
                            WELCOME TO OUR PAGE</h1>
                    </div>
                    <img src="assets/foto-angkatan(1).jpg" class="object-center h-full object-cover relative w-full"
                        alt="Image 1">
                </div>
                <div class="w-full h-[50vh] md:h-[60vh] flex-shrink-0">
                    <img src="assets/foto-angkatan(2).jpg" class="w-full object-center h-full object-cover"
                        alt="Image 2">
                </div>
                <div class="w-full h-[50vh] md:h-[60vh] flex-shrink-0">
                    <img src="assets/foto-angkatan(3).jpg" class="w-full object-center h-full object-cover"
                        alt="Image 2">
                </div>
                <div class="w-full h-[50vh] md:h-[60vh] flex-shrink-0">
                    <img src="assets/foto-angkatan(4).jpg" class="w-full object-center h-full object-cover"
                        alt="Image 2">
                </div>

                <!-- Add more items as needed -->
            </div>
            <!-- Navigation Controls -->
            <button id="prev"
                class="absolute top-1/2 left-2 -translate-y-1/2 font-montserrat text-lg hover:text-2xl bg-black/10 hover:bg-black/30 hover:w-[5vh] hover:h-[5vh] transition-all  backdrop-blur-sm text-white/50 w-[4vh] h-[4vh]  rounded-full">
                << /button>
                    <button id="next"
                        class="absolute top-1/2 right-2 -translate-y-1/2 font-montserrat text-lg hover:text-2xl bg-black/10 hover:bg-black/30 hover:w-[5vh] hover:h-[5vh] transition-all  backdrop-blur-sm text-white/50 w-[4vh] h-[4vh]  rounded-full">></button>

                    <!-- Indicators -->
                    <div id="indicators"
                        class="absolute transition-all duration-500 bottom-0 left-0 right-0 flex justify-center space-x-2 bg-gradient-to-t bg-opacity-20 from-black/50 w-full py-4">
                        <!-- Indicators will be generated here -->
                    </div>
        </div>
    </section>

    <section id="Gallery" class="container mx-auto mt-20 py-24 px-6 bg-white">
        <h1 class="text-4xl md:text-5xl font-extrabold text-start mb-8 text-[#66391c]">GALLERY</h1>
        <p class="max-w-4xl text-[#66391c] font-semibold leading-relaxed">Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Iure debitis deserunt consectetur? Nesciunt dignissimos veritatis.</p>

        <!-- Ini buat desktop! -->
        <div class="flex justify-center mb-12 hidden lg:flex">
            <div id="categoryButtons" class="flex gap-4 bg-white px-4 py-2 text-lg font-bold">
                <button data-category="all"
                    class="px-4 text-[#66391c] border-b-4 hover:text-[#F2E5BF] category-button">all</button>
                <button data-category="proker" class="px-4 text-[#66391c] hover:text-[#F2E5BF] category-button"> proker
                </button>
                <button data-category="prestasi" class="px-4 text-[#66391c] hover:text-[#F2E5BF] category-button">
                    prestasi </button>
                <button data-category="tweets" class="px-4 text-[#66391c] hover:text-[#F2E5BF] category-button"> tweets
                </button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                if (window.innerWidth >= 1024) {
                    const buttons = document.querySelectorAll('.category-button');
                    const items = document.querySelectorAll('.gallery-item');
                    buttons.forEach(button => {
                        button.addEventListener('click', () => {
                            const category = button.getAttribute('data-category');

                            buttons.forEach(btn => {
                                btn.classList.remove('border-b-4');
                                btn.classList.add('text-[#66391c]');
                            });
                            button.classList.add('border-b-4');
                            button.classList.remove('text-[#66391c]');

                            items.forEach(item => {
                                if (category === 'all' || item.getAttribute('data-category') ===
                                    category) {
                                    item.style.display = 'block';
                                } else {
                                    item.style.display = 'none';
                                }
                            });
                        });
                    });
                }

                // Optional: Kalo mau bisa nge handle resize windows
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 1024) {
                        // kasih kode aja
                    }
                });
            });
        </script>

        <div class="hidden lg:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="galleryGrid">
            @foreach ($items as $item)
                <div class="gallery-item bg-white rounded-lg shadow-lg overflow-hidden"
                    data-category="{{ $item['category'] }}">
                    <img src="https://placehold.co/300" alt="Gallery Image" class="w-full">
                    <div class="p-4">
                        <span
                            class="text-sm bg-mocca/20 text-[#66391c] py-1 px-2 rounded-full font-semibold uppercase">{{ $item['category'] }}</span>
                        <h3 class="text-xl font-bold mt-4">{{ $item['title'] }}</h3>
                        <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <a href="#" class="text-[#66391c] font-bold text-sm mt-4 inline-block hover:underline">see
                            more →</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Ini buat mobile! -->
        <div class="lg:hidden">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($items as $item)
                        <div class="swiper-slide relative">
                            <div class="gallery-item bg-cards/20 rounded-lg shadow-lg overflow-hidden">
                                <!-- Semua overlay -->
                                <div class="absolute inset-0 flex flex-col justify-between p-4 z-10">
                                    <!-- Judul sama kategori -->
                                    <div>
                                        <span
                                            class="text-sm bg-mocca text-[#66391c] py-1 px-2 rounded-full font-semibold uppercase">{{ $item['category'] }}</span>
                                        <h3 class="text-xl font-bold mt-2 text-white">{{ $item['title'] }}</h3>
                                    </div>
                                    <!-- Ini read More nya -->
                                    <div class="flex justify-center mt-auto">
                                        <a href="#"
                                            class="text-[#66391c] font-bold text-xl py-1 px-2 rounded mx-4 flex flex-col items-center">
                                            <span class="text-lg">&#8593;</span> <!-- Upward arrow -->
                                            open
                                        </a>
                                    </div>
                                </div>
                                <!-- Gambarnya -->
                                <img src="https://placehold.co/300" alt="Gallery Image" class="swiper-image w-full">
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination dan Navigation Opsional -->
                {{-- <div class="swiper-pagination"></div> --}}
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Ini library Swiper nya -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        @media (max-width: 768px) {
            .swiper-slide {
                position: relative;
                overflow: hidden;
                border-radius: 50px;
            }

            .swiper-image {
                height: 500px;
                object-fit: cover;
                object-position: center center;
            }
        }

        .swiper-slide .absolute {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1rem;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #66391c;
            stroke-width: 30px
        }
    </style>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                effect: 'coverflow',
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>

    <section id="carousel-proker">
        <div class="flex my-10 items-center justify-center">
            <div class="w-1/4 md:w-1/3 h-1 bg-mocca shadow-lg"></div>
            <div class="w-4 rounded-full bg-mocca h-4 shadow-xl"></div>
            <div class="text-2xl md:text-4xl md:w-1/3 w-2/4 font-bold flex justify-center text-mocca">
                <h2> Program Kerja</h2>
            </div>
            <div class="w-4 rounded-full bg-mocca h-4 shadow-xl"></div>
            <div class="w-1/4 md:w-1/3 h-1 bg-mocca shadow-lg"></div>
        </div>
        {{-- carousel proker --}}
        <div class="w-full justify-center flex overflow-hidden my-20">
            <div class="relative w-full">
                <!-- Slider Wrapper -->
                <div id="carousel2" class="w-full h-[35vh] flex transition-transform duration-500">

                    <!-- Cards -->
                    <div class="flex-shrink-0 h-full w-1/2 relative mx-4">
                        <div
                            class=" w-full h-1/4 absolute rounded-3xl top-0 overflow-hidden left-0 p-7  bg-gradient-to-b from-black/30">
                            <h3
                                class="text-lg md:text-2xl text-vanilla font-medium absolute top-5 md:top-10 font-montserrat drop-shadow-md">
                                23 - 12 - 2024</h3>
                        </div>
                        <div
                            class=" w-full h-1/2 rounded-3xl absolute bottom-0 overflow-hidden left-0 p-7  bg-gradient-to-t from-black/60">
                            <h3
                                class="text-xl md:text-4xl text-vanilla font-bold absolute bottom-16 md:bottom-16 font-montserrat drop-shadow-md">
                                Teks Apapun</h3>
                            <p style="scrollbar-width: none; -ms-overflow-style: none;"
                                class="text-xs text-vanilla font-base absolute top-2/3 md:bottom-8 md:text-lg md:h-full h-8 overflow-y-auto font-montserrat">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam facilis quae error
                                quibusdam, reiciendis accusantium explicabo doloribus odio commodi. Ducimus voluptatum,
                                sit doloribus consequatur, nam voluptatem sint velit illum, impedit eligendi quos quod
                                explicabo magnam! Blanditiis illum mollitia voluptatibus repellat quos, magni similique
                                voluptatem nobis. Aut labore porro praesentium asperiores nisi eius assumenda soluta
                                sint nostrum beatae. Laudantium, dicta inventore. Libero nesciunt, repudiandae rerum
                                ducimus laboriosam obcaecati placeat facilis quod reiciendis quam blanditiis eaque quo
                                nemo. Cumque ratione ea amet voluptatem error modi nisi ullam debitis sit dolorum, ut
                                pariatur alias beatae laboriosam. Quo, ab iste minima magni voluptatem molestiae!</p>
                        </div>
                        <div class="w-full rounded-3xl h-full bg-mocca shadow-lg overflow-hidden ">
                            <img src="assets/foto-angkatan(4).jpg" class=" object-cover w-full h-full object-center"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-shrink-0 h-full w-1/2 relative mx-4">
                        <div
                            class=" w-full h-1/4 absolute rounded-3xl top-0 overflow-hidden left-0 p-7  bg-gradient-to-b from-black/30">
                            <h3
                                class="text-lg md:text-2xl text-vanilla font-medium absolute top-5 md:top-10 font-montserrat drop-shadow-md">
                                23 - 12 - 2024</h3>
                        </div>
                        <div
                            class=" w-full h-1/2 rounded-3xl absolute bottom-0 overflow-hidden left-0 p-7  bg-gradient-to-t from-black/60">
                            <h3
                                class="text-xl md:text-4xl text-vanilla font-bold absolute bottom-16 md:bottom-16 font-montserrat drop-shadow-md">
                                Teks Apapun</h3>
                            <p style="scrollbar-width: none; -ms-overflow-style: none;"
                                class="text-xs text-vanilla font-base absolute top-2/3 md:bottom-8 md:text-lg md:h-full h-8 overflow-y-auto font-montserrat">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam facilis quae error
                                quibusdam, reiciendis accusantium explicabo doloribus odio commodi. Ducimus voluptatum,
                                sit doloribus consequatur, nam voluptatem sint velit illum, impedit eligendi quos quod
                                explicabo magnam! Blanditiis illum mollitia voluptatibus repellat quos, magni similique
                                voluptatem nobis. Aut labore porro praesentium asperiores nisi eius assumenda soluta
                                sint nostrum beatae. Laudantium, dicta inventore. Libero nesciunt, repudiandae rerum
                                ducimus laboriosam obcaecati placeat facilis quod reiciendis quam blanditiis eaque quo
                                nemo. Cumque ratione ea amet voluptatem error modi nisi ullam debitis sit dolorum, ut
                                pariatur alias beatae laboriosam. Quo, ab iste minima magni voluptatem molestiae!</p>
                        </div>
                        <div class="w-full rounded-3xl h-full bg-mocca shadow-lg overflow-hidden ">
                            <img src="assets/foto-angkatan(1).jpg" class=" object-cover w-full h-full object-center"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-shrink-0 h-full w-1/2 relative mx-4">
                        <div
                            class=" w-full h-1/4 absolute rounded-3xl top-0 overflow-hidden left-0 p-7  bg-gradient-to-b from-black/30">
                            <h3
                                class="text-lg md:text-2xl text-vanilla font-medium absolute top-5 md:top-10 font-montserrat drop-shadow-md">
                                23 - 12 - 2024</h3>
                        </div>
                        <div
                            class=" w-full h-1/2 rounded-3xl absolute bottom-0 overflow-hidden left-0 p-7  bg-gradient-to-t from-black/60">
                            <h3
                                class="text-xl md:text-4xl text-vanilla font-bold absolute bottom-16 md:bottom-16 font-montserrat drop-shadow-md">
                                Teks Apapun</h3>
                            <p style="scrollbar-width: none; -ms-overflow-style: none;"
                                class="text-xs text-vanilla font-base absolute top-2/3 md:bottom-8 md:text-lg md:h-full h-8 overflow-y-auto font-montserrat">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam facilis quae error
                                quibusdam, reiciendis accusantium explicabo doloribus odio commodi. Ducimus voluptatum,
                                sit doloribus consequatur, nam voluptatem sint velit illum, impedit eligendi quos quod
                                explicabo magnam! Blanditiis illum mollitia voluptatibus repellat quos, magni similique
                                voluptatem nobis. Aut labore porro praesentium asperiores nisi eius assumenda soluta
                                sint nostrum beatae. Laudantium, dicta inventore. Libero nesciunt, repudiandae rerum
                                ducimus laboriosam obcaecati placeat facilis quod reiciendis quam blanditiis eaque quo
                                nemo. Cumque ratione ea amet voluptatem error modi nisi ullam debitis sit dolorum, ut
                                pariatur alias beatae laboriosam. Quo, ab iste minima magni voluptatem molestiae!</p>
                        </div>
                        <div class="w-full rounded-3xl h-full bg-mocca shadow-lg overflow-hidden ">
                            <img src="assets/foto-angkatan(2).jpg" class=" object-cover w-full h-full object-center"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-shrink-0 h-full w-1/2 relative mx-4">
                        <div
                            class=" w-full h-1/4 absolute rounded-3xl top-0 overflow-hidden left-0 p-7  bg-gradient-to-b from-black/30">
                            <h3
                                class="text-lg md:text-2xl text-vanilla font-medium absolute top-5 md:top-10 font-montserrat drop-shadow-md">
                                23 - 12 - 2024</h3>
                        </div>
                        <div
                            class=" w-full h-1/2 rounded-3xl absolute bottom-0 overflow-hidden left-0 p-7  bg-gradient-to-t from-black/60">
                            <h3
                                class="text-xl md:text-4xl text-vanilla font-bold absolute bottom-16 md:bottom-16 font-montserrat drop-shadow-md">
                                Teks Apapun</h3>
                            <p style="scrollbar-width: none; -ms-overflow-style: none;"
                                class="text-xs text-vanilla font-base absolute top-2/3 md:bottom-8 md:text-lg md:h-full h-8 overflow-y-auto font-montserrat">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam facilis quae error
                                quibusdam, reiciendis accusantium explicabo doloribus odio commodi. Ducimus voluptatum,
                                sit doloribus consequatur, nam voluptatem sint velit illum, impedit eligendi quos quod
                                explicabo magnam! Blanditiis illum mollitia voluptatibus repellat quos, magni similique
                                voluptatem nobis. Aut labore porro praesentium asperiores nisi eius assumenda soluta
                                sint nostrum beatae. Laudantium, dicta inventore. Libero nesciunt, repudiandae rerum
                                ducimus laboriosam obcaecati placeat facilis quod reiciendis quam blanditiis eaque quo
                                nemo. Cumque ratione ea amet voluptatem error modi nisi ullam debitis sit dolorum, ut
                                pariatur alias beatae laboriosam. Quo, ab iste minima magni voluptatem molestiae!</p>
                        </div>
                        <div class="w-full rounded-3xl h-full bg-mocca shadow-lg overflow-hidden ">
                            <img src="assets/foto-angkatan(3).jpg" class=" object-cover w-full h-full object-center"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-shrink-0 h-full w-1/2 relative mx-4">
                        <div
                            class=" w-full h-1/4 absolute rounded-3xl top-0 overflow-hidden left-0 p-7  bg-gradient-to-b from-black/30">
                            <h3
                                class="text-lg md:text-2xl text-vanilla font-medium absolute top-5 md:top-10 font-montserrat drop-shadow-md">
                                23 - 12 - 2024</h3>
                        </div>
                        <div
                            class=" w-full h-1/2 rounded-3xl absolute bottom-0 overflow-hidden left-0 p-7  bg-gradient-to-t from-black/60">
                            <h3
                                class="text-xl md:text-4xl text-vanilla font-bold absolute bottom-16 md:bottom-16 font-montserrat drop-shadow-md">
                                Teks Apapun</h3>
                            <p style="scrollbar-width: none; -ms-overflow-style: none;"
                                class="text-xs text-vanilla font-base absolute top-2/3 md:bottom-8 md:text-lg md:h-full h-8 overflow-y-auto font-montserrat">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam facilis quae error
                                quibusdam, reiciendis accusantium explicabo doloribus odio commodi. Ducimus voluptatum,
                                sit doloribus consequatur, nam voluptatem sint velit illum, impedit eligendi quos quod
                                explicabo magnam! Blanditiis illum mollitia voluptatibus repellat quos, magni similique
                                voluptatem nobis. Aut labore porro praesentium asperiores nisi eius assumenda soluta
                                sint nostrum beatae. Laudantium, dicta inventore. Libero nesciunt, repudiandae rerum
                                ducimus laboriosam obcaecati placeat facilis quod reiciendis quam blanditiis eaque quo
                                nemo. Cumque ratione ea amet voluptatem error modi nisi ullam debitis sit dolorum, ut
                                pariatur alias beatae laboriosam. Quo, ab iste minima magni voluptatem molestiae!</p>
                        </div>
                        <div class="w-full rounded-3xl h-full bg-mocca shadow-lg overflow-hidden ">
                            <img src="assets/foto-angkatan(1).jpg" class=" object-cover w-full h-full object-center"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-shrink-0 h-full w-1/2 relative mx-4">
                        <div
                            class=" w-full h-1/4 absolute rounded-3xl top-0 overflow-hidden left-0 p-7  bg-gradient-to-b from-black/30">
                            <h3
                                class="text-lg md:text-2xl text-vanilla font-medium absolute top-5 md:top-10 font-montserrat drop-shadow-md">
                                23 - 12 - 2024</h3>
                        </div>
                        <div
                            class=" w-full h-1/2 rounded-3xl absolute bottom-0 overflow-hidden left-0 p-7  bg-gradient-to-t from-black/60">
                            <h3
                                class="text-xl md:text-4xl text-vanilla font-bold absolute bottom-16 md:bottom-16 font-montserrat drop-shadow-md">
                                Teks Apapun</h3>
                            <p style="scrollbar-width: none; -ms-overflow-style: none;"
                                class="text-xs text-vanilla font-base absolute top-2/3 md:bottom-8 md:text-lg md:h-full h-8 overflow-y-auto font-montserrat">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam facilis quae error
                                quibusdam, reiciendis accusantium explicabo doloribus odio commodi. Ducimus voluptatum,
                                sit doloribus consequatur, nam voluptatem sint velit illum, impedit eligendi quos quod
                                explicabo magnam! Blanditiis illum mollitia voluptatibus repellat quos, magni similique
                                voluptatem nobis. Aut labore porro praesentium asperiores nisi eius assumenda soluta
                                sint nostrum beatae. Laudantium, dicta inventore. Libero nesciunt, repudiandae rerum
                                ducimus laboriosam obcaecati placeat facilis quod reiciendis quam blanditiis eaque quo
                                nemo. Cumque ratione ea amet voluptatem error modi nisi ullam debitis sit dolorum, ut
                                pariatur alias beatae laboriosam. Quo, ab iste minima magni voluptatem molestiae!</p>
                        </div>
                        <div class="w-full rounded-3xl h-full bg-mocca shadow-lg overflow-hidden ">
                            <img src="assets/foto-angkatan(2).jpg" class=" object-cover w-full h-full object-center"
                                alt="">
                        </div>
                    </div>

                    {{-- <div class="flex-shrink-0 md:w-0 w-1/2 h-full bg-transparent relative mx-4"></div> --}}
                </div>
                <!-- Navigation Buttons -->
                <button id="prev2"
                    class="absolute top-1/2 left-2 -translate-y-1/2 font-montserrat text-lg hover:text-2xl bg-black/10 hover:bg-black/30 hover:w-[5vh] hover:h-[5vh] transition-all  backdrop-blur-sm text-white/50 w-[3vh] h-[3vh]  rounded-full">&#10525;</button>
                <button id="next2"
                    class="absolute top-1/2 right-2 -translate-y-1/2 font-montserrat text-lg hover:text-2xl bg-black/10 hover:bg-black/30 hover:w-[5vh] hover:h-[5vh] transition-all  backdrop-blur-sm text-white/50 w-[3vh] h-[3vh]  rounded-full">&#10526;</button>
            </div>
        </div>
    </section>


    {{-- carousel gambar --}}
    <script>
        const carousel = document.getElementById('carousel-items');
        const items = carousel.children;
        const totalItems = items.length;
        let currentIndex = 0;
        let interval;

        // Generate indicators
        const indicatorsContainer = document.getElementById('indicators');
        const indicators = [];

        for (let i = 0; i < totalItems; i++) {
            const indicator = document.createElement('button');
            indicator.classList.add('w-3', 'shadow-xl', 'border', 'h-2', 'rounded-full', 'bg-gray-300', 'transition-all',
                'duration-500');
            indicator.setAttribute('aria-label', `Slide ${i + 1}`);
            indicator.addEventListener('click', () => {
                currentIndex = i;
                updateCarousel();
                resetInterval();
            });
            indicatorsContainer.appendChild(indicator);
            indicators.push(indicator);
        }

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalItems - 1;
            updateCarousel();
            resetInterval();
        });

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex < totalItems - 1) ? currentIndex + 1 : 0;
            updateCarousel();
            resetInterval();
        });

        function updateCarousel() {
            const offset = -currentIndex * 100;
            carousel.style.transform = `translateX(${offset}%)`;
            updateIndicators();
        }

        function updateIndicators() {
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.remove('bg-gray-300', 'w-3', 'opacity-30');
                    indicator.classList.add('opacity-100', 'w-10', 'bg-vanilla');
                } else {
                    indicator.classList.remove('w-10', 'bg-vanilla', 'opacity-100');
                    indicator.classList.add('opacity-30', 'w-3', 'bg-gray-300');
                }
            });
        }

        function startCarousel() {
            const duration = currentIndex === 0 ? 3000 : 2500;
            interval = setTimeout(() => {
                currentIndex = (currentIndex < totalItems - 1) ? currentIndex + 1 : 0;
                updateCarousel();
                startCarousel();
            }, duration);
        }

        function resetInterval() {
            clearTimeout(interval);
            startCarousel();
        }

        // Initialize the carousel
        updateCarousel();
        startCarousel();
    </script>
    {{-- carousel proker --}}
    <script>
        const carousel2 = document.getElementById('carousel2');
        const prevButton2 = document.getElementById('prev2');
        const nextButton2 = document.getElementById('next2');
        let currentIndex2 = 0;
        let isDragging = false;
        let startX = 0;
        let currentX = 0;
        let moveX = 0;

        // Function to update carousel position
        function updateCarousel2() {
            const slideWidth = carousel2.clientWidth;
            const offset = -currentIndex2 * 50;
            carousel2.style.transform = `translateX(${offset}%)`;
            // carousel2.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        // Event listeners for navigation buttons
        prevButton2.addEventListener('click', () => {
            currentIndex2 = (currentIndex2 === 0) ? carousel2.children.length - 1 : currentIndex2 - 1;
            updateCarousel2();
        });

        nextButton2.addEventListener('click', () => {
            currentIndex2 = (currentIndex2 === carousel2.children.length - 1) ? 0 : currentIndex2 + 1;
            updateCarousel2();
        });

        // Ensure carousel updates when window is resized
        window.addEventListener('resize', () => {
            updateCarousel2(); // Recalculate position on resize
        });

        // Initialize the carousel
        updateCarousel2(); // Call this to position the carousel correctly on page load
        carousel2.style.transform = 'translateX(-25%)';

        // Drag functionality for mouse and touch
        carousel2.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.clientX || e.touches[0].clientX;
        });

        carousel2.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            currentX = e.clientX || e.touches[0].clientX;
            moveX = startX - currentX;

            carousel2.style.transform = `translateX(calc(-30% - ${moveX}px))`;
        });

        carousel2.addEventListener('mouseup', () => {
            isDragging = false;
            const slideWidth = carousel2.clientWidth;
            if (Math.abs(moveX) > slideWidth / 3) {
                if (moveX > 0) {
                    currentIndex2 = (currentIndex2 === carousel2.children.length - 1) ? 0 : currentIndex2 + 1;
                } else {
                    currentIndex2 = (currentIndex2 === 0) ? carousel2.children.length - 1 : currentIndex2 - 1;
                }
            }
            updateCarousel2();
        });

        // For touch events
        carousel2.addEventListener('touchstart', (e) => {
            isDragging = true;
            startX = e.touches[0].clientX;
        });

        carousel2.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
            moveX = startX - currentX;

            carousel2.style.transform = `translateX(calc(-30% - ${moveX}px))`;
        });

        carousel2.addEventListener('touchend', () => {
            isDragging = false;
            const slideWidth = carousel2.clientWidth;
            if (Math.abs(moveX) > slideWidth / 3) {
                if (moveX > 0) {
                    currentIndex2 = (currentIndex2 === carousel2.children.length - 1) ? 0 : currentIndex2 + 1;
                } else {
                    currentIndex2 = (currentIndex2 === 0) ? carousel2.children.length - 1 : currentIndex2 - 1;
                }
            }
            updateCarousel2();
        });
    </script>
</x-app-layout>
