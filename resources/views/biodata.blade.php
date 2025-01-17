<x-app-layout>
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black/50">
        @include('components.PopBio1')
    </div>
    <section id="Home"
        class="container bg-[#F2E5BF] text-[#66391c] mx-auto mt-20 py-24 flex flex-col items-center gap-6 text-center rounded-2xl drop-shadow-2xl">
        <h1 class="text-4xl md:text-6xl font-extrabold">BIODATA</h1>
        <p class="max-w-4xl text-gray-600 leading-relaxed">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure
            debitis deserunt consectetur? Nesciunt dignissimos veritatis, vero vel sequi obcaecati sint harum aliquam
            assumenda officiis repellat atque asperiores ullam iste quibusdam. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Consequatur, ut accusantium molestias laboriosam dolores, quidem eos voluptatibus
            excepturi quis qui praesentium odio. Ipsa voluptatibus odit iure facilis enim. Incidunt, reprehenderit!
        </p>
        <button id="openModal"
            class="bg-[#66391c] text-vanilla font-bold py-3 px-8 rounded-lg shadow-md hover:bg-[#5a321a] hover:scale-105 transition-transform">
            <a href="#">Klik untuk Simulasi PopUp</a>
        </button>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('modal');
            const modalContent = document.getElementById('modalContent');
            const openModalBtn = document.getElementById('openModal');
            const closeModalBtn = document.getElementById('closeModal');

            
            openModalBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modalContent.classList.add('opacity-100', 'scale-100');
                    modalContent.classList.remove('opacity-0', 'scale-95');
                }, 10); 
            });

            
            closeModalBtn.addEventListener('click', () => {
                modalContent.classList.add('opacity-0', 'scale-95');
                modalContent.classList.remove('opacity-100', 'scale-100');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300); 
            });

            
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModalBtn.click();
                }
            });
        });
    </script>
</x-app-layout>
