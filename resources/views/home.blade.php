<x-app-layout>
    <section id="Home" class="container mt-20 mx-auto">
        <div class="slider w-screen max-w-full xl:h-[600px] h-[500px] mx-auto relative overflow-hidden">
            <div class="list absolute w-max h-full left-0 top-0 flex transition duration-1000">
                <div class="item w-screen flex justify-center max-w-full py-24">
                    <div class="w-[90vw] lg:w-[65vw] xl:w-[80vw] grid grid-cols-12 items-center shadow-2xl shadow-chocolate bg-mocca bg-opacity-10 rounded-3xl xl:px-24 text-justify text-chocolate">
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="prev1"><</button>
                        <div class="flex items-center col-span-10 pr-8">
                            <img src="{{ asset('assets/logo-encryptour.png') }}" alt="logo" class="w-auto h-[200px] md:h-[300px] xl:h-[400px]">
                            <h2 class="text-4xl font-bold">About Us</h2>
                        </div>
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="next1">></button>
                    </div>
                </div>
                <div class="item w-screen flex justify-center max-w-full py-24">
                    <div class="w-[90vw] lg:w-[65vw] xl:w-[80vw] grid grid-cols-12 items-center shadow-2xl shadow-chocolate bg-mocca bg-opacity-10 rounded-3xl xl:px-24 text-justify text-chocolate">
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="prev2"><</button>
                        <div class="flex items-center col-span-10 pr-8">
                            <img src="{{ asset('assets/logo-encryptour.png') }}" alt="logo" class="w-auto h-[200px] md:h-[300px] xl:h-[400px]">
                            <p>ENCRYPTOUR (enkriptour) memiliki akronim yaitu  ENgineers of Computer, Young Pioneers Twenty fOUR.</p>
                        </div>
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="next2">></button>
                    </div>
                </div>
                <div class="item w-screen flex justify-center max-w-full py-24">
                    <div class="w-[90vw] lg:w-[65vw] xl:w-[80vw] grid grid-cols-12 items-center shadow-2xl shadow-chocolate bg-mocca bg-opacity-10 rounded-3xl xl:px-24 text-justify text-chocolate">
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="prev3"><</button>
                        <div class="flex items-center col-span-10 pr-8">
                            <img src="{{ asset('assets/logo-encryptour.png') }}" alt="logo" class="w-auto h-[200px] md:h-[300px] xl:h-[400px]">
                            <p>Diambil dari kata “enkripsi” yang artinya melindungi suatu data.</p>
                        </div>
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="next3">></button>
                    </div>
                </div>
                <div class="item w-screen flex justify-center max-w-full py-24">
                    <div class="w-[90vw] lg:w-[65vw] xl:w-[80vw] grid grid-cols-12 items-center shadow-2xl shadow-chocolate bg-mocca bg-opacity-10 rounded-3xl xl:px-24 text-justify text-chocolate">
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="prev4"><</button>
                        <div class="flex items-center col-span-10 pr-8">
                            <img src="{{ asset('assets/logo-encryptour.png') }}" alt="logo" class="w-auto h-[150px] md:h-[300px] xl:h-[400px]">
                            <p>Young Pioneer maksudnya adalah kami penggerak muda dari Teknik Komputer angkatan 2024.</p>
                        </div>
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="next4">></button>
                    </div>
                </div>
                <div class="item w-screen flex justify-center max-w-full py-24">
                    <div class="w-[90vw] lg:w-[65vw] xl:w-[80vw] grid grid-cols-12 items-center shadow-2xl shadow-chocolate bg-mocca bg-opacity-10 rounded-3xl xl:px-24 text-justify text-chocolate">
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="prev5"><</button>
                        <div class="flex items-center col-span-10 pr-8">
                            <img src="{{ asset('assets/logo-encryptour.png') }}" alt="logo" class="w-auto h-[150px] md:h-[300px] xl:h-[400px]">
                            <p>Kami sebagai angkatan memiliki keharusan dan tanggung jawab dalam saling melindungi satu sama lain.</p>
                        </div>
                        <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="next5">></button>
                    </div>
                </div>
            </div>
            <ul class="dots absolute bottom-[100px] left-0 text-white w-full m-0 p-0 flex justify-center">
                <li class="active list-none w-[10px] h-[10px] bg-white m-[10px] rounded-[20px] transition duration-500"></li>
                <li class="list-none w-[10px] h-[10px] bg-white m-[10px] rounded-[20px] transition duration-500"></li>
                <li class="list-none w-[10px] h-[10px] bg-white m-[10px] rounded-[20px] transition duration-500"></li>
                <li class="list-none w-[10px] h-[10px] bg-white m-[10px] rounded-[20px] transition duration-500"></li>
                <li class="list-none w-[10px] h-[10px] bg-white m-[10px] rounded-[20px] transition duration-500"></li>
            </ul>
        </div>
        <div id="biodata" class="absolute left-0 right-0 flex justify-center bg-mocca">
            <h1 class="bg-vanilla rounded-full py-4 px-24 text-chocolate text-4xl font-bold">Biodata</h1>
        </div>
        <div class="mt-32 grid grid-cols-12 items-center justify-center">
            <a class="col-span-1 mx-auto" href="{{ url('/?page=1&#biodata') }}">
                <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="prev"><</button>
            </a>
            <div class="col-span-10 container grid grid-cols-3 gap-2">
                @forelse ($data as $item)
                <div class="overflow-hidden group flex justify-between items-end mx-auto aspect-square xl:w-[350px] lg:w-[280px] sm:w-[210px] w-[108px] transition-all duration-700 ease-in-out border-chocolate border-2 hover:bg-chocolate hover:text-vanilla :hover:text-opacity-75">
                    <div class="flex flex-col mb-2 sm:mb-4 lg:mb-12 ml-1 sm:ml-2 lg:ml-6 z-10">
                        <div class="text-xs sm:text-sm">{{ $item['nama_lengkap'] }}</div>
                        <div class="hidden sm:block text-2xl font-bold mb-2">{{ $item['nama_panggilan'] }}</div>
                        <div class="hidden sm:block text-sm">{{ $item['nim'] }}</div>
                        <div class="hidden sm:block text-sm">{{ $item['asal'] }}</div>
                    </div>
                    <div class="z-0
                    xl:group-hover:scale-125 group-hover:scale-150
                    xl:group-hover:-translate-x-6 lg:group-hover:-translate-x-8 sm:group-hover:-translate-x-6 group-hover:-translate-x-1
                    xl:group-hover:-translate-y-8 lg:group-hover:-translate-y-12 sm:group-hover:-translate-y-8 group-hover:-translate-y-2
                    transition-transform">
                        <img src="{{ '/assets/foto-formal/'.$item['formal_picture'] }}" alt="" srcset="" class="object-cover w-full h-full max-w-[360px] max-h-[360px]">
                    </div>
                </div>
                @empty
                <div>No data found.</div>
                @endforelse
            </div>
            <a class="col-span-1 mx-auto" href="{{ url('/?page=2&#biodata') }}">
                <button class="w-[50px] h-[50px] rounded-full text-chocolate border-none font-mono font-bold" id="next">></button>
            </a>
        </div>
        <div class="container my-10 mx-auto flex gap-2 justify-center">
            <a href="{{ url('/biodata') }}">
                <button class="text-chocolate border-chocolate border-2 py-2 px-4 rounded-lg hover:bg-chocolate hover:text-vanilla">
                    See More
                </button>
            </a>
        </div>
        <script type="text/javascript">
        let slider = document.querySelector('.slider .list');
        let items = document.querySelectorAll('.slider .list .item');
        let dots = document.querySelectorAll('.slider .dots li');
        let lengthItems = items.length - 1;
        let active = 0;

        for (let i = 1; i <= 5; i++) {
        let next = document.getElementById(`next${i}`);
        let prev = document.getElementById(`prev${i}`);

            next.onclick = function(){
                active = active + 1 <= lengthItems ? active + 1 : 0;
                reloadSlider();
            }
            prev.onclick = function(){
                active = active - 1 >= 0 ? active - 1 : lengthItems;
                reloadSlider();
            }
        }
        // let refreshInterval = setInterval(()=> {next.click()}, 3000);
        function reloadSlider(){
            slider.style.left = -items[active].offsetLeft + 'px';
            //
            let last_active_dot = document.querySelector('.slider .dots li.active');
            last_active_dot.classList.remove('active');
            dots[active].classList.add('active');

            // clearInterval(refreshInterval);
            // refreshInterval = setInterval(()=> {next.click()}, 3000);
        }

        dots.forEach((li, key) => {
            li.addEventListener('click', ()=>{
                active = key;
                reloadSlider();
            })
        })
        window.onresize = function(event) {
            reloadSlider();
        };
        </script>
    </section>
</x-app-layout>
