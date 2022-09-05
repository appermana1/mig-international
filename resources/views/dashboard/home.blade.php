<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<div>
<div>
  <header class="fixed top-0 left-0 right-0 z-50">
    <div class="relative bg-transparent transform transition duration-75" id="navbar">
      <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-4 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Workflow</span>
              <img class="h-14 w-auto logo-white-desktop" src="{{ asset('images/logo.png') }}" alt="">
              <img class="h-14 w-auto logo-blue-desktop hidden" src="{{ asset('images/logo-biru.png') }}" alt="">
          </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
          <button type="button" id="btn-mobile-open" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <nav class="hidden md:flex space-x-10">
          <a href="#" class="nav-link relative after:absolute after:top-8 after:left-0 after:right-0 after:m-auto after:w-[0%] after:content-[''] after:bg-white after:h-1 hover:after:w-[100%] text-lg font-medium text-white after:transition-all after:duration-200"> Products </a>
          <a href="#" class="nav-link relative after:absolute after:top-8 after:left-0 after:right-0 after:m-auto after:w-[0%] after:content-[''] after:bg-white after:h-1 hover:after:w-[100%] text-lg font-medium text-white after:transition-all after:duration-200"> About Us </a>
          <a href="#" class="nav-link relative after:absolute after:top-8 after:left-0 after:right-0 after:m-auto after:w-[0%] after:content-[''] after:bg-white after:h-1 hover:after:w-[100%] text-lg font-medium text-white after:transition-all after:duration-200"> Contact Us </a>
        </nav>
      </div>

      <!--
        Mobile menu, show/hide based on mobile menu state.

        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden duration-1000 ease-out" id="layer-menu">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
          <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
                <img class="h-14 w-auto logo-blue-mobile" src="{{ asset('images/logo-biru.png') }}" alt="">
              </div>
              <div class="-mr-2">
                <button type="button" id="btn-mobile-close" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">Products</div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">About Us</div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">Contact Us</div>
                </a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="overflow-hidden">
    <!-- Hero section -->
    <section class="relative h-[80vh] sm:min-h-screen">
            <div class="absolute inset-0">
              <div class="bg-fixed bg-cover bg-center h-full w-full object-top" style="background-image: url(https://www.bisaekspor.com/_next/static/media/background-main.8c423325.jpeg)"></div>
              <div class="absolute inset-0 bg-indigo-100 mix-blend-multiply"></div>
            </div>
            <div class="relative px-4 pt-40 sm:px-6 sm:pt-56 lg:py-56 lg:px-8 animate__animated animate__fadeInUp">
              <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl sm:tracking-tight lg:text-6xl lg:tracking-tight">
                <span class="block text-white">Export Your Things as</span>
                <span class="block text-indigo-300">Sayuran</span>
              </h1>
              <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-300 sm:max-w-3xl py-2 leading-7">Andalin Trade is a platform that connects B2B buyer and supplier with end-to-end services in one platform.</p>
              <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:gap-5">
                  <a href="#bawah" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8"> Explore </a>
                </div>
              </div>
            </div>
      </section>

    <!-- Logo Cloud -->
    <div class="bg-gray-100" id="bawah">
      <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 animate__animated animate__fadeInUp">
        <p class="text-center text-xl font-semibold text-gray-500 mb-10">Our Partners</p>
        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
          </div>
          <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
          </div>
        </div>
      </div>
    </div>

    <!-- Alternating Feature Sections -->
    <div class="relative pt-16 pb-32 overflow-hidden">
      <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
      <h1 class="text-center text-xl font-semibold text-gray-600 mb-10 lg:mb-20 relative" data-aos="fade-down" data-aos-duration="1000">Our Features</h1>
      <div class="space-y-40">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
          <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0">
            <div>
              <div>
                <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600">
                  <!-- Heroicon name: outline/sparkles -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                  </svg>
                </span>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Better understand your customers</h2>
                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0">
            <div class="pr-4 -mr-48 sm:pr-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:scale-[1.2] lg:left-5 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface">
            </div>
          </div>
        </div>
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
          <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
            <div>
              <div>
                <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600">
                  <!-- Heroicon name: outline/sparkles -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                  </svg>
                </span>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Better understand your customers</h2>
                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
            <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:scale-[1.2] lg:right-5 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Gradient Feature Section -->
    <div class="bg-gradient-to-r from-purple-800 to-indigo-700">
      <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
        <h2 class="text-3xl font-bold text-white tracking-tight">Inbox support built for efficiency</h2>
        <p class="mt-4 max-w-3xl text-lg text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis. Blandit aliquam sit nisl euismod mattis in.</p>
        <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/inbox -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Unlimited Inboxes</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/users -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Manage Team Members</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/trash -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Spam Report</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/pencil-alt -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Compose in Markdown</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/document-report -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Team Reporting</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/reply -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Saved Replies</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/chat-alt -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Email Commenting</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>

          <div>
            <div>
              <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                <!-- Heroicon name: outline/heart -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h3 class="text-lg font-medium text-white">Connect with Customers</h3>
              <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats section -->
    <div class="relative bg-gray-900">
      <div class="h-80 absolute inset-x-0 bottom-0 xl:top-0 xl:h-full">
        <div class="h-full w-full xl:grid xl:grid-cols-2">
          <div class="h-full xl:relative xl:col-start-2">
            <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
          </div>
        </div>
      </div>
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000">
        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
          <h2 class="text-base font-semibold">
            <span class="bg-gradient-to-r from-purple-300 to-indigo-300 bg-clip-text text-transparent">Valuable Metrics</span>
          </h2>
          <p class="mt-3 text-3xl tracking-tight font-bold text-white">Get actionable data that will help grow your business</p>
          <p class="mt-5 text-lg text-gray-300">Rhoncus sagittis risus arcu erat lectus bibendum. Ut in adipiscing quis in viverra tristique sem. Ornare feugiat viverra eleifend fusce orci in quis amet. Sit in et vitae tortor, massa. Dapibus laoreet amet lacus nibh integer quis. Eu vulputate diam sit tellus quis at.</p>
          <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
            <p>
              <span class="block text-2xl font-bold text-white">8K+</span>
              <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Companies</span> use laoreet amet lacus nibh integer quis.</span>
            </p>

            <p>
              <span class="block text-2xl font-bold text-white">25K+</span>
              <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Countries around the globe</span> lacus nibh integer quis.</span>
            </p>

            <p>
              <span class="block text-2xl font-bold text-white">98%</span>
              <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Customer satisfaction</span> laoreet amet lacus nibh integer quis.</span>
            </p>

            <p>
              <span class="block text-2xl font-bold text-white">12M+</span>
              <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Issues resolved</span> lacus nibh integer quis.</span>
            </p>
          </div>
        </div>
      </div>
    </div>   

    <!-- gallery -->
    <section class="bg-gray-100">
    <h1 class="text-center py-16 md:py-12 text-xl font-semibold text-gray-600" data-aos="fade-down" data-aos-duration="1000">Client's Testimonials</h1>
    <div class="relative min-h-[70vh] md:min-h-[80vh] pb-3" data-aos="fade-up" data-aos-duration="1000">
      <div class="w-auto mx-auto" style="scroll-snap-type: x mandatory;">
            <!-- first -->
            <div class="">
               <input class="sr-only peer" type="radio" name="carousel" id="carousel-1" checked />
               <!-- content #1 -->
               <div
                  class="w-[90%]  md:max-w-5xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                  <div class="relative py-24 px-8 bg-indigo-500 rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
          <div class="absolute inset-0 opacity-50 filter saturate-0 mix-blend-multiply">
            <img src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1216&q=80" alt="" class="w-full h-full object-cover">
          </div>
          <div class="relative lg:col-span-1">
            <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-white.svg" alt="">
            <blockquote class="mt-6 text-white">
              <p class="text-xl font-medium sm:text-2xl">Workflow has completely transformed how we interact with customers. We've seen record bookings, higher customer satisfaction, and reduced churn.</p>
              <footer class="mt-6">
                <p class="flex flex-col font-medium">
                  <span>Marie Chilvers</span>
                  <span>CEO, Workcation</span>
                </p>
              </footer>
            </blockquote>
          </div>
        </div>
                  <!-- controls -->
                  <div class="absolute top-1/2 w-full flex justify-between z-20">
                     <label for="carousel-3" class="inline-block text-red-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                        </svg>
                     </label>
                     <label for="carousel-2" class="inline-block text-red-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                     </label>
                  </div>
               </div>
            </div>
            <!-- second -->
            <div class="">
               <input class="sr-only peer" type="radio" name="carousel" id="carousel-2" />
               <!-- content #2 -->
               <div
                  class=" w-[90%]  md:max-w-5xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                  <div class="relative py-24 px-8 bg-indigo-500 rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
          <div class="absolute inset-0 opacity-50 filter saturate-0 mix-blend-multiply">
            <img src="https://images.unsplash.com/photo-1661636754817-6ebc7acac66e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="" class="w-full h-full object-cover">
          </div>
          <div class="relative lg:col-span-1">
            <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-white.svg" alt="">
            <blockquote class="mt-6 text-white">
              <p class="text-xl font-medium sm:text-2xl">Workflow has completely transformed how we interact with customers. We've seen record bookings, higher customer satisfaction, and reduced churn.</p>
              <footer class="mt-6">
                <p class="flex flex-col font-medium">
                  <span>Marie Chilvers</span>
                  <span>CEO, Workcation</span>
                </p>
              </footer>
            </blockquote>
          </div>
        </div>
                  <!-- controls -->
                  <div class="absolute top-1/2 w-full flex justify-between z-20">
                     <label for="carousel-1" class="inline-block text-blue-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                        </svg>
                     </label>
                     <label for="carousel-3" class="inline-block text-blue-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                     </label>
                  </div>
               </div>
            </div>
            <!-- three -->
            <div class="">
               <input class="sr-only peer" type="radio" name="carousel" id="carousel-3" />
               <!-- content #3 -->
               <div
                  class="w-[90%]  md:max-w-5xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0">
                  <div class="relative py-24 px-8 bg-indigo-500 rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
          <div class="absolute inset-0 opacity-50 filter saturate-0 mix-blend-multiply">
            <img src="https://images.unsplash.com/photo-1661637051124-15a46f74f30b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="w-full h-full object-cover">
          </div>
          <div class="relative lg:col-span-1">
            <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-white.svg" alt="">
            <blockquote class="mt-6 text-white">
              <p class="text-xl font-medium sm:text-2xl">Workflow has completely transformed how we interact with customers. We've seen record bookings, higher customer satisfaction, and reduced churn.</p>
              <footer class="mt-6">
                <p class="flex flex-col font-medium">
                  <span>Marie Chilvers</span>
                  <span>CEO, Workcation</span>
                </p>
              </footer>
            </blockquote>
          </div>
        </div>
                  <!-- controls -->
                  <div class="absolute top-1/2 w-full flex justify-between z-20">
                     <label for="carousel-2" class="inline-block text-yellow-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                        </svg>
                     </label>
                     <label for="carousel-1" class="inline-block text-yellow-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                     </label>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </section>
    <!-- gallery -->

    <section class="overflow-hidden text-gray-700 py-16 px-4">
    <h1 class="text-center py-16 md:py-12 text-xl font-semibold text-gray-600" data-aos="fade-down" data-aos-duration="1000">Gallery</h1>

  <div class="max-w-5xl lg:max-w-6xl py-2 mx-auto">
    <div class="md:flex md:flex-wrap -m-1 md:-m-2">
      <div class="md:flex md:flex-wrap md:w-1/2">
        <div class="md:w-1/2 p-1 md:p-2 ">
          <div class="gallery-images relative after:absolute after:bottom-0 after:w-[100%] hover:after:h-[100%] hover:after:transition-all hover:after:duration-150 hover:after:bg-transparent/25 hover:cursor-pointer after:rounded-lg">
          <div></div>
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
        </div>
        <div class="md:w-1/2 p-1 md:p-2">
        <div class="gallery-images relative after:absolute after:bottom-0 after:w-[100%] hover:after:h-[100%] hover:after:transition-all hover:after:duration-150 hover:after:bg-transparent/25 hover:cursor-pointer after:rounded-lg">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
        </div>
        <div class="w-full p-1 md:p-2">
        <div class="gallery-images relative after:absolute after:bottom-0 after:w-[100%] hover:after:h-[100%] hover:after:transition-all hover:after:duration-150 hover:after:bg-transparent/25 hover:cursor-pointer after:rounded-lg">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
        </div>
      </div>
      <div class="md:flex md:flex-wrap md:w-1/2">
      <div class="w-full p-1 md:p-2">
      <div class="gallery-images relative after:absolute after:bottom-0 after:w-[100%] hover:after:h-[100%] hover:after:transition-all hover:after:duration-150 hover:after:bg-transparent/25 hover:cursor-pointer after:rounded-lg">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
        </div>
        <div class="md:w-1/2 p-1 md:p-2">
        <div class="gallery-images relative after:absolute after:bottom-0 after:w-[100%] hover:after:h-[100%] hover:after:transition-all hover:after:duration-150 hover:after:bg-transparent/25 hover:cursor-pointer after:rounded-lg">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
        </div>
        <div class="md:w-1/2 p-1 md:p-2">
        <div class="gallery-images relative after:absolute after:bottom-0 after:w-[100%] hover:after:h-[100%] hover:after:transition-all hover:after:duration-150 hover:after:bg-transparent/25 hover:cursor-pointer after:rounded-lg">
          <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg "
            src="https://images.unsplash.com/photo-1661775085411-7ad692c9a436?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80">
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>

    <!-- CTA Section -->
    <!-- <div class="bg-white">
      <div class="max-w-4xl mx-auto py-16 px-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:tracking-tight">
          <span class="block">Ready to get started?</span>
          <span class="-mb-1 pb-1 block bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Get in touch or create an account.</span>
        </h2>
        <div class="mt-6 space-y-4 sm:space-y-0 sm:flex sm:space-x-5">
          <a href="#" class="flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-purple-700 hover:to-indigo-700"> Learn more </a>
          <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-800 bg-indigo-50 hover:bg-indigo-100"> Get started </a>
        </div>
      </div>
    </div> -->

  <!-- <div class="bg-gradient-to-r from-purple-800 to-indigo-700">
    <img class="w-full h-1/2 bg-cover bg-center" src="" alt="" srcset="">
  </div> -->

  <section class="relative h-[50vh] sm:h-[70vh]">
    <div class="absolute inset-0">
     <div class="bg-fixed bg-cover bg-center h-full w-full object-top" style="background-image: url(https://images.unsplash.com/photo-1622675363311-3e1904dc1885?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80)"></div>
     <div class="absolute inset-0 bg-gradient-to-r from-purple-800 to-indigo-700 mix-blend-multiply"></div>
     <div class="absolute inset-0 max-w-4xl mx-auto py-16 px-4 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 lg:flex lg:items-center lg:justify-center">
        <div class="text-center">
          <h2 class="text-2xl font-bold text-white sm:text-4xl">
            <span class="block">Anda siap bekerja sama dengan kami?</span>
          </h2>
          <div class="mt-10 mx-auto flex justify-center items-center">
            <a href="#" class="flex items-center justify-center px-10 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-indigo-800 bg-indigo-50 hover:bg-indigo-100"> Hubungi Kami </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>

  <footer class="bg-gray-50" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
      
      <div class="md:flex md:space-x-20">
            <div class="flex justify-center items-center sm:items-start sm:justify-start">
              <div class="w-32 h-44 md:w-40 md:h-52">
                <img class="w-full h-full" src="{{ asset('images/logo-footer.png') }}" alt="" srcset="">
              </div>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-base font-medium text-gray-900">Office</h3>
              <ul role="list" class="mt-4 space-y-6">
                <li class="flex space-x-2 group">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                  </svg>
                  <p class="text-base text-gray-500 "> Jl. Abadi Praja I Blok I-A 10/27 Balikpapan </p>
                </li>

                <li class="flex space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                  </svg>
                  <p class="text-base text-gray-500 "> 0815-2001-234 / 0542-870000 </p>
                </li>

                <li class="flex space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                  </svg>
                  <p class="text-base text-gray-500 "> client@gmail.com </p>
                </li>
              </ul>
            </div>
      </div>
      
      <div class="mt-12 border-t border-gray-200  pt-8 md:flex md:items-center md:justify-between lg:mt-16">
        <div class="flex space-x-6 md:order-2 justify-center md:justify-start">
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Twitter</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>          
        </div>
        <div class="flex justify-center items-center md:justify-start md:items-start mt-8 md:mt-0 md:order-1">
          <p class="text-base text-gray-400 ">&copy; 2022 Manrino International Group</p>
        </div>
      </div>
    </div>
  </footer>
</div>

</div>

<!-- modal -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative hidden z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed z-10 inset-0 overflow-y-auto flex justify-center justify-items-center modal-exit">
    <div class="flex items-center justify-center w-full p-4 text-center sm:p-0">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative bg-white rounded-lg p-5 text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
          <div class="mx-auto flex items-center justify-center h-10 w-10 rounded-full group bg-red-100 hover:bg-red-200 transform transition-all duration-300 mb-2 hover:cursor-pointer">
            <svg class="h-6 w-6 text-red-600 group-hover:text-red-700 transform transition-all duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
          <div class="template-gallery">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
          </div>
      </div>
    </div>
  </div>
</div>

<!-- modal -->

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
  $('document').ready(function(){
    //untuk membuka navbar mobile
    $('#btn-mobile-open').click(()=>{
      $('#layer-menu').removeClass('hidden')
      // $('#layer-menu').addClass('duration-1000')
    })

    //untuk menutup navbar mobile
    $('#btn-mobile-close').click(()=>{
      // $('#layer-menu').removeClass('block duration-500 ease-out opacity-100 scale-100')
      // $('#layer-menu').addClass('hidden duration-100 ease-in-out opacity-0 scale-95')
      $('#layer-menu').addClass('hidden')
    })

    //merubah background navbar ketika di scroll
    $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 75) { // check if user scrolled more than 50 from top of the browser window
          //navbar
          $("#navbar").removeClass('bg-transparent')
          $("#navbar").addClass('bg-white border-b-2 border-gray-100 shadow-xl')

          //text inside navbar
          $(".nav-link").removeClass('after:bg-white text-white')
          $(".nav-link").addClass('after:bg-gray-500 text-gray-500')

          //untuk merubah logo ketika discroll
          $('.logo-white-desktop').addClass('hidden')
          $('.logo-blue-desktop').removeClass('hidden')
          
        } else {
          //navbar
          $("#navbar").removeClass('bg-white border-b-2 border-gray-100 shadow-xl')
          $("#navbar").addClass('bg-transparent')

          //text inside navbar
          $(".nav-link").removeClass('after:bg-gray-500 text-gray-500')
          $(".nav-link").addClass('after:bg-white text-white')

          //untuk merubah logo ketika discroll
          $('.logo-blue-desktop').addClass('hidden')
          $('.logo-white-desktop').removeClass('hidden')
        }
      });

    // modal

    // click gallery
    // $('.gallery-images').on('click',()=>{
    //   console.log($('.gallery-images img'))
    //   if ($('#modal').hasClass('hidden')) {
    //     $('#modal').removeClass('hidden')
    //   } else {
    //     $('#modal').addClass('hidden')
    //   }
    // })
    $( ".gallery-images" ).each(function(index) {
      $(this).on("click", function(){
          var src = $(this).children('img').attr('src')
          if ($('#modal').hasClass('hidden')) {
          $('.template-gallery img').attr('src', src)
          $('#modal').removeClass('hidden')
        } else {
          $('#modal').addClass('hidden')
        }
      });
    });
  
    
    //modal exit
    $('.modal-exit').on('click',()=> {
      if ($('#modal').hasClass('hidden')) {
        $('#modal').removeClass('hidden')
      } else {
        $('#modal').addClass('hidden')
      }
    })
    
});
</script>

</html>