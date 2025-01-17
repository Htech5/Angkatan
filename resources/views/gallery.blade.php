<x-app-layout>
  <section id="gallery" class="container bg-vanilla text-[#66391c] mx-auto mt-20 py-24 px-6 rounded-2xl drop-shadow-2xl">
      <h1 class="text-4xl md:text-5xl font-extrabold text-center mb-8">Our Gallery</h1>
      <div class="flex justify-center mb-12">
          <div id="categoryButtons" class="flex gap-4 bg-mocca px-4 py-2 rounded-full text-sm font-semibold">
              <button data-category="all" class="px-4 py-2 bg-[#66391c] text-vanilla hover:bg-[#F2E5BF] rounded-full category-button">all</button>
              <button data-category="proker" class="px-4 py-2 text-[#66391c] hover:bg-[#F2E5BF] rounded-full category-button">proker</button>
              <button data-category="prestasi" class="px-4 py-2 text-[#66391c] hover:bg-[#F2E5BF] rounded-full category-button">prestasi</button>
              <button data-category="tweets" class="px-4 py-2 text-[#66391c] hover:bg-[#F2E5BF] rounded-full category-button">tweets</button>
          </div>
      </div>
      <div id="galleryGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
          @foreach ($items as $item)
              <div class="gallery-item bg-cards/20 rounded-lg shadow-lg overflow-hidden" data-category="{{ $item['category'] }}">
                  <img src="https://via.placeholder.com/300x200" alt="Gallery Image" class="w-full">
                  <div class="p-4">
                      <span class="text-sm bg-mocca text-[#66391c] py-1 px-2 rounded-full font-semibold uppercase">{{ $item['category'] }}</span>
                      <h3 class="text-xl font-bold mt-4">{{ $item['title'] }}</h3>
                      <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a href="#" class="text-[#66391c] font-bold text-sm mt-4 inline-block hover:underline">read more →</a>
                  </div>
              </div>
          @endforeach
      </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.category-button');
    const items = document.querySelectorAll('.gallery-item');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');
            
            buttons.forEach(btn => {
                btn.classList.remove('bg-[#66391c]', 'text-vanilla');
                btn.classList.add('text-[#66391c]');
            });

            button.classList.add('bg-[#66391c]', 'text-vanilla');
            button.classList.remove('text-[#66391c]');

            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
  </script>
</x-app-layout>
