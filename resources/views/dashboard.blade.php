<x-app-layout>
    
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <ul class="flex flex-wrap justify-center items-center text-sm font-medium text-center text-gray-50 dark:text-gray-400">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active" aria-current="page">All</a>
                        </li>

                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"  class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100"> {{ $category->name }} </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="mt-8 text-gray-900">
        
                @foreach ($posts as $post)
                    

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

                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
