<div>
    <div class="flex bg-white border border-gray-200 rounded-lg shadow-xs mb-8">             
        <div class="p-6 flex-1">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> {{ $post->title }} </h5>
            </a>

            <div class="mb-3 font-normal text-gray-700"> {{ Str::words($post->content, 20) }} </div>

            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg  shadow-xs hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Read more
                <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
            </a>
        </div>

        <a href="#">
            <img class="w-48 h-full object-cover rounded-r-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
        </a>
    </div>
</div>