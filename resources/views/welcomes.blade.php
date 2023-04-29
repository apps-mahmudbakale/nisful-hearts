<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nisful Qalb</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/js/app.js'])
    </head>
    <body>

       <!-- This Hero Section -->
       <section>
        <div class="relative overflow-hidden bg-white" id="#home">
          <div class="mx-auto max-w-7xl">
            <div class="relative z-10 bg-white pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32">
              <svg class="absolute inset-y-0 right-0 hidden h-full w-48 translate-x-1/2 transform text-white lg:block" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
              </svg>
        
              <div>
                <div class="relative px-4 pt-6 sm:px-6 lg:px-8">
                  <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                    <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
                      <div class="flex w-full items-center justify-between md:w-auto">
                        <a href="#">
                          <span class="sr-only">Your Company</span>
                          <img alt="Your Company" class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600">
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                          <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="hidden md:ml-10 md:block md:space-x-8 md:pr-4">
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Home</a>
        
                      <a href="#about" class="font-medium text-gray-500 hover:text-gray-900">About</a>
        
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Services</a>
        
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Contact</a>
                    </div>
                  </nav>
                </div>
        
                <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                  <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                    <div class="flex items-center justify-between px-5 pt-4">
                      <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                      </div>
                      <div class="-mr-2">
                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                          <span class="sr-only">Close main menu</span>
                          <!-- Heroicon name: outline/x-mark -->
                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                    </div>
                    <div class="space-y-1 px-2 pt-2 pb-3">
                      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Product</a>
        
                      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Features</a>
        
                      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Marketplace</a>
        
                      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Company</a>
                    </div>
                  </div>
                </div>
              </div>
        
              <main class="mx-auto mt-10 max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                  <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl md:text-4xl">
                    <span class="block xl:inline">Welcome To</span>
                    <span class="block text-indigo-600 xl:inline">Nisful Hearts</span>
                  </h1>
                  <p class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0">Welcome to Nisful Qalb, where love is just a click away! Meet new people, find your match and start your love story today!</p>
                  <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                      <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">Get started</a>
                    </div>
                  </div>
                </div>
              </main>
            </div>
          </div>
          <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-full" src="{{asset('Online dating-pana.svg')}}" alt="">
          </div>
        </div>
       </section>

<!-- This About About Section-->
  {{-- <div class="overflow-hidden bg-gray-50 py-16">
    <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-prose text-base lg:max-w-none">
        <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">What makes us different</p>
      </div>
      <div class="relative z-10 mx-auto max-w-prose text-base lg:mx-0 lg:max-w-5xl lg:pr-72">
        <p class="text-lg text-gray-500">Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.</p>
      </div>
      <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-8">
        <div class="relative z-10">
          <div class="prose prose-indigo mx-auto text-gray-500 lg:max-w-none">
            <p>Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.</p>
            <ul role="list">
              <li>Quis elit egestas venenatis mattis dignissim.</li>
              <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
              <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
            </ul>
            <p>Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.</p>
            <h3>We’re here to help</h3>
            <p>Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet. Laoreet sem est phasellus eu proin massa, lectus. Diam rutrum posuere donec ultricies non morbi. Mi a platea auctor mi.</p>
          </div>
          <div class="mx-auto mt-10 flex max-w-prose text-base lg:max-w-none">
            <div class="rounded-md shadow">
              <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Contact sales</a>
            </div>
            <div class="ml-4 rounded-md shadow">
              <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50">Learn more</a>
            </div>
          </div>
        </div>
        <div class="relative mx-auto mt-12 max-w-prose text-base lg:mt-0 lg:max-w-none">
          <svg class="absolute top-0 right-0 -mt-20 -mr-20 lg:top-auto lg:right-auto lg:bottom-1/2 lg:left-1/2 lg:mt-0 lg:mr-0 xl:top-0 xl:right-0 xl:-mt-20 xl:-mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
            <defs>
              <pattern id="bedc54bc-7371-44a2-a2bc-dc68d819ae60" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#bedc54bc-7371-44a2-a2bc-dc68d819ae60)" />
          </svg>
            <img src="{{asset('Online dating-rafiki.svg')}}" alt="">
        </div>
      </div>
    </div>
  </div> --}}
  <section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Who We Are</h2>
            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet eum obcaecati minima qui maiores deleniti libero iusto, nobis quod aliquid voluptatum officia voluptate dolores mollitia provident unde ea autem iste.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{asset('Online dating-rafiki.svg')}}" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('Online dating-bro.svg')}}" alt="office content 2">
        </div>
    </div>
</section>  
  </body>
</html>
