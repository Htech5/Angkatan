<x-app-layout>
    <div class="container mt-20 mx-auto grid grid-cols-3 gap-6">
        <div class="flex gap-2 xl:w-[350px] lg:w-[280px] sm:w-[210px] w-[108px] mx-auto font-semibold">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sort-ascending-letters"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4" /><path d="M19 21h-4l4 -7h-4" /><path d="M4 15l3 3l3 -3" /><path d="M7 6v12" /></svg>
            Sort
        </div>
        <div></div>
        <form class="flex justify-end mx-auto gap-2 xl:w-[350px] lg:w-[280px] sm:w-[210px] w-[108px]" method="GET" action="{{ url('/biodata') }}">
            <input class="w-[30vw] bg-transparent placeholder:text-chocolate placeholder:font-semibold" type="text" name="search" placeholder="Search" value="{{ $searchQuery ?? '' }}">
            <button type="submit">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
            </button>
        </form>
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
                <img src="{{ asset('/assets/foto-formal/'.$item['formal_picture']) }}" alt="" srcset="" class="object-cover w-full h-full max-w-[360px] max-h-[360px]">
            </div>
        </div>
        @empty
        <div>No data found.</div>
        @endforelse
    </div>
    <div class="container my-20 mx-auto flex gap-2 justify-center">
        @if ($currentPage > 1)
        <a href="{{ url('/biodata?page='.$currentPage-1) }}">
            <button class="flex gap-2 text-chocolate hover:border-mocca hover:border-2 py-2 px-4 rounded-xl">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                Previous</button>
        </a>
        @else
        <div class="flex gap-2 text-chocolate py-2 px-4 rounded-xl hover:cursor-default">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
            <div class="text-gray-500">Previous</div>
        </div>
        @endif
        @for ($i = 1; $i < $totalPages + 1; $i++)
            @if ($currentPage == $i)
            <a href="{{ url('/biodata?page='.$i) }}">
                <button class="bg-mocca text-white py-2 px-4 rounded-xl">
                    {{ $i }}
                </button>
            </a>
            @else
            <a href="{{ url('/biodata?page='.$i) }}">
                <button class="text-mocca hover:border-mocca hover:border-2 py-2 px-4 rounded-xl">
                    {{ $i }}
                </button>
            </a>
            @endif
        @endfor
        @if ($currentPage < $totalPages)
        <a href="{{ url('/biodata?page='.$currentPage+1) }}">
            <button class="flex gap-2 text-chocolate hover:border-mocca hover:border-2 py-2 px-4 rounded-xl">
                Next
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg></button>
        </a>
                @else
        <div class="flex gap-2 text-chocolate py-2 px-4 rounded-xl hover:cursor-default">
            <div class="text-gray-500">Next</div>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg></button>
        </div>
        @endif
    </div>
</x-app-layout>
