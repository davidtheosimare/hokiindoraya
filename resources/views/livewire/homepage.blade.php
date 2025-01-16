@section('meta')
<meta name="description" content="{{$description}}">
<meta name="keywords" content="{{$keywords}}">
<meta name="robots" content="index, follow">

 <!-- Open Graph Tags untuk Facebook dan WhatsApp -->
 <meta property="og:title" content="{{$title}}">
 <meta property="og:description" content="{{$description}}">
 <meta property="og:image" content="{{$image}}">
 <meta property="og:url" content="{{$url}}">
 <meta property="og:type" content="website">

 <!-- Twitter Card Tags -->
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:title" content="{{$title}}">
 <meta name="twitter:description" content="{{$description}}">
 <meta name="twitter:image" content="{{$image}}">
 <title>{{$title ?? 'Hokiindo Raya'}}</title>

@endsection

<header>
    <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Hokiindo Raya</span>
            </a>
            <div class="flex items-center>
                <!-- Search Bar -->

                <form class="max-w-md mx-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>






                <div class="flex items-center lg:space-x-2">

                    <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button" class="inline-flex items-center justify-center p-2 text-sm font-medium leading-none text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">
                      <span class="sr-only">
                        Cart
                      </span>
                      <svg class="w-5 h-5 lg:me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                      </svg>
                      <span class="hidden sm:flex">My Cart</span>
                      <svg class="hidden w-4 h-4 text-gray-900 sm:flex dark:text-white ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                      </svg>
                    </button>

                    <div id="myCartDropdown1" class="z-10 hidden max-w-sm p-4 mx-auto space-y-4 overflow-hidden antialiased bg-white rounded-lg shadow-lg dark:bg-gray-800">
                      <div class="grid grid-cols-2">
                        <div>
                          <a href="#" class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple iPhone 15</a>
                          <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$599</p>
                        </div>

                        <div class="flex items-center justify-end gap-6">
                          <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1</p>

                          <button data-tooltip-target="tooltipRemoveItem1a" type="button" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                            <span class="sr-only"> Remove </span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                            </svg>
                          </button>
                          <div id="tooltipRemoveItem1a" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Remove item
                            <div class="tooltip-arrow" data-popper-arrow></div>
                          </div>
                        </div>
                      </div>

                      <div class="grid grid-cols-2">
                        <div>
                          <a href="#" class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple iPad Air</a>
                          <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$499</p>
                        </div>

                        <div class="flex items-center justify-end gap-6">
                          <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1</p>

                          <button data-tooltip-target="tooltipRemoveItem2a" type="button" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                            <span class="sr-only"> Remove </span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                            </svg>
                          </button>
                          <div id="tooltipRemoveItem2a" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Remove item
                            <div class="tooltip-arrow" data-popper-arrow></div>
                          </div>
                        </div>
                      </div>

                      <div class="grid grid-cols-2">
                        <div>
                          <a href="#" class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple Watch SE</a>
                          <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$598</p>
                        </div>

                        <div class="flex items-center justify-end gap-6">
                          <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 2</p>

                          <button data-tooltip-target="tooltipRemoveItem3b" type="button" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                            <span class="sr-only"> Remove </span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                            </svg>
                          </button>
                          <div id="tooltipRemoveItem3b" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Remove item
                            <div class="tooltip-arrow" data-popper-arrow></div>
                          </div>
                        </div>
                      </div>

                      <div class="grid grid-cols-2">
                        <div>
                          <a href="#" class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Sony Playstation 5</a>
                          <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$799</p>
                        </div>

                        <div class="flex items-center justify-end gap-6">
                          <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 1</p>

                          <button data-tooltip-target="tooltipRemoveItem4b" type="button" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                            <span class="sr-only"> Remove </span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                            </svg>
                          </button>
                          <div id="tooltipRemoveItem4b" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Remove item
                            <div class="tooltip-arrow" data-popper-arrow></div>
                          </div>
                        </div>
                      </div>

                      <div class="grid grid-cols-2">
                        <div>
                          <a href="#" class="text-sm font-semibold leading-none text-gray-900 truncate dark:text-white hover:underline">Apple iMac 20"</a>
                          <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">$8,997</p>
                        </div>

                        <div class="flex items-center justify-end gap-6">
                          <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: 3</p>

                          <button data-tooltip-target="tooltipRemoveItem5b" type="button" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                            <span class="sr-only"> Remove </span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                              <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                            </svg>
                          </button>
                          <div id="tooltipRemoveItem5b" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Remove item
                            <div class="tooltip-arrow" data-popper-arrow></div>
                          </div>
                        </div>
                      </div>

                      <a href="#" title="" class="mb-2 me-2 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button"> Proceed to Checkout </a>
                    </div>

                    <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button" class="inline-flex items-center justify-center p-2 text-sm font-medium leading-none text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white">
                      <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                      </svg>
                      Account
                      <svg class="w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                      </svg>
                    </button>

                    <div id="userDropdown1" class="z-10 hidden w-56 overflow-hidden overflow-y-auto antialiased bg-white divide-y divide-gray-100 rounded-lg shadow dark:divide-gray-600 dark:bg-gray-700">
                      <ul class="p-2 text-sm font-medium text-gray-900 text-start dark:text-white">
                        <li><a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> My Account </a></li>
                        <li><a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> My Orders </a></li>
                        <li><a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> Settings </a></li>
                        <li><a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> Favourites </a></li>
                        <li><a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> Delivery Addresses </a></li>
                        <li><a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> Billing Data </a></li>
                      </ul>

                      <div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
                        <a href="#" title="" class="inline-flex items-center w-full gap-2 px-3 py-2 text-sm rounded-md hover:bg-gray-100 dark:hover:bg-gray-600"> Sign Out </a>
                      </div>
                    </div>


                  </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="bg-white border-gray-20 dark:border-gray-600 border-y">
        <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
            <div class="flex items-center">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdown-button-megamenu" data-collapse-toggle="megamenu"
                            class="flex items-center justify-between w-full font-medium dark:hover:text-primary-500 md:p-0 md:w-auto dark:text-white hover:text-primary-500 dark:focus:text-primary-500">Company
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                    <li class="hidden md:inline">
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Marketplace</a>
                    </li>
                    <li class="hidden md:inline">
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Resources</a>
                    </li>
                    <li class="hidden md:inline">
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Forum</a>
                    </li>
                    <li class="hidden md:inline">
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Support</a>
                    </li>
                </ul>
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" data-dropdown-placement="bottom"
                    class="text-gray-500 md:hidden dark:hover:bg-gray-600 dark:text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-1.5">
                    <svg class="w-5 h-5 text-gray-700 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                        </path>
                    </svg>
                </button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Marketplace</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Resources</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Forum</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <nav id="megamenu" class="hidden bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-600">
        <div
            class="grid max-w-screen-xl px-4 py-4 mx-auto text-gray-900 dark:text-white md:grid-cols-2 lg:grid-cols-4 md:px-6">
            <ul class="col-span-2 md:col-span-1">
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Online Stores</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Segmentation</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Marketing CRM</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="col-span-2 md:col-span-1">
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Audience Management</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Creative Tools</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Marketing Automation</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="hidden lg:block">
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Dynamic Content</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Integrations</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <div class="font-semibold">Careers</div>
                            <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with
                                third-party tools that you're already using.</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="col-span-2 p-4 lg:col-span-1">
                <h2 class="mb-2 font-semibold text-gray-900 dark:text-white">Our brands</h2>
                <p class="mb-2 font-light text-gray-500 dark:text-gray-400">At JBS Foods, we pride ourselves on a
                    portfolio of brands that cater to a variety of preferences.</p>
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-primary-600 hover:text-primary-600 dark:text-primary-500 dark:hover:text-primary-400">
                    Explore our brands <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Block end -->
