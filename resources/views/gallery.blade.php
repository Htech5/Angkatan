 <!-- Define item disini Rawrr -->
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
 <x-app-layout>
     <section id="gallery" class="container mx-auto mt-20 py-24 px-6 bg-vanilla">
         <h1 class="text-4xl md:text-5xl font-extrabold text-center mb-8 text-[#66391c]">Our Gallery</h1>

         <!-- Ini buat desktop! -->
         <div class="hidden lg:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="galleryGrid">
             @foreach ($items as $item)
                 <div class="gallery-item bg-cards/20 rounded-lg shadow-lg overflow-hidden">
                     <img src="https://placehold.co/300" alt="Gallery Image" class="w-full">
                     <div class="p-4">
                         <span
                             class="text-sm bg-mocca text-[#66391c] py-1 px-2 rounded-full font-semibold uppercase">{{ $item['category'] }}</span>
                         <h3 class="text-xl font-bold mt-4">{{ $item['title'] }}</h3>
                         <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         </p>
                         <a href="#"
                             class="text-[#66391c] font-bold text-sm mt-4 inline-block hover:underline">read more →</a>
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
                                 <!-- buat nge Wrap Content -->
                                 <div class="absolute inset-0 flex flex-col justify-between p-4 z-10">
                                     <!-- Text nya kasih di gambar -->
                                     <div>
                                         <span
                                             class="text-sm bg-mocca text-[#66391c] py-1 px-2 rounded-full font-semibold uppercase">{{ $item['category'] }}</span>
                                         <h3 class="text-xl font-bold mt-2 text-white">{{ $item['title'] }}</h3>
                                     </div>
                                     <!-- Ini buat read more nya juga di gambar -->
                                     <div class="text-right">
                                         <a href="#"
                                             class="text-[#66391c] font-bold text-sm hover:underline bg-white py-1 px-2 rounded">read
                                             more →</a>
                                     </div>
                                 </div>
                                 <!-- ini ya.. gambar nya jadi background -->
                                 <img src="https://placehold.co/300" alt="Gallery Image"
                                     class="w-full h-auto object-cover">
                             </div>
                         </div>
                     @endforeach
                 </div>
                 <!-- ini Pagination -->
                 {{-- <div class="swiper-pagination"></div> --}}

                 <!-- ini Navigation -->
                 {{-- <div class="swiper-button-next"></div> --}}
                 {{-- <div class="swiper-button-prev"></div> --}}

             </div>
         </div>
     </section>

     <!-- Ini library Swiper nya -->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
             });

         });
     </script>
 </x-app-layout>
