<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                        <div class="">
                            <div class="">

                                <div class="grid grid-cols-1 md:grid-cols-2">
                                    <div class="p-6 bg-success m-1">
                                        <div class="flex items-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                class="w-8 h-8 text-gray-500">
                                                <path
                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                </path>
                                            </svg>
                                            <div class="ml-4 text-lg leading-7 font-semibold">
                                                <a href="{{ route('about.us') }}"
                                                    class="underline text-white">About</a>
                                            </div>
                                        </div>

                                        <div class="ml-12">
                                            <div class="mt-2 text-gray-600 text-gray-400 text-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eaque, et
                                                qui voluptatum quasi consectetur sed exercitationem? Velit ut, hic
                                                accusamus culpa, iste, fugit est fuga provident consequuntur modi
                                                dolorum!
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l bg-primary m-1">
                                        <div class="flex items-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                class="w-8 h-8 text-gray-500">
                                                <path
                                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                                </path>
                                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <div class="ml-4 text-lg leading-7 font-semibold">
                                                <a href="{{ route('contact.us') }}"
                                                    class="underline text-gray-900 dark:text-white">Contact</a>
                                            </div>
                                        </div>

                                        <div class="ml-12">
                                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam quos
                                                cupiditate illum labore, incidunt ratione adipisci magni, facere ipsam
                                                explicabo aperiam. Dolores magnam, id autem voluptatum blanditiis saepe
                                                vel commodi.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 bg-danger m-1">
                                        <div class="flex items-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                class="w-8 h-8 text-gray-500">
                                                <path
                                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                </path>
                                            </svg>
                                            <div class="ml-4 text-lg leading-7 font-semibold">
                                                <a href="{{ route('country') }}"
                                                    class="underline text-gray-900 dark:text-white">Country</a>
                                            </div>
                                        </div>

                                        <div class="ml-12">
                                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, fuga!
                                                Consectetur excepturi animi deserunt rerum voluptates, sed nulla a
                                                maxime similique cumque quidem maiores, accusamus voluptatum dicta quas
                                                mollitia tempora.
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l bg-info m-1">
                                        <div class="flex items-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                class="w-8 h-8 text-gray-500">
                                                <path
                                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                            <div class="ml-4 text-lg leading-7 font-semibold">
                                                <a href="{{ route('controller') }}">First Controllers</a>
                                            </div>
                                        </div>

                                        <div class="ml-12">
                                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eligendi
                                                consequatur sunt iusto ratione velit laboriosam, deserunt harum,
                                                molestias, magni iste odit beatae ad sapiente nemo tempore doloremque
                                                asperiores minus?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 bg-warning m-1">
                                        <div class="flex items-center">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                class="w-8 h-8 text-gray-500">
                                                <path
                                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                                </path>
                                            </svg>
                                            <div class="ml-4 text-lg leading-7 font-semibold">
                                                <a href="{{ route('csrf_token') }}"
                                                    class="underline text-gray-900 dark:text-white">Advance CSRF</a>
                                            </div>
                                        </div>

                                        <div class="ml-12">
                                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At ratione
                                                perspiciatis libero consectetur voluptates. Veritatis, corporis
                                                temporibus. Necessitatibus vitae, temporibus sint architecto a dolores
                                                nobis quam at earum suscipit numquam!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
