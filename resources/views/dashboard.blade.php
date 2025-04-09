<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hexagon Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    {{-- <link rel="stylesheet" href="./assets/css/tailwind.output.css" /> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="./assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-slate-200 relative "
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >

    <div class="flex items-center flex-shrink-0 px-6 text-gray-900 absolute gap-3 bg-white z-50 h-[74px] ml-[0.5]">
      <div>
        <img src="{{ asset('assets/img/logo.webp') }}" alt="Logo UNPAS" class="h-[50px] mt-2 mx-auto mb-2" />
      </div>    
      <div class="flex flex-col">
        <p class="text-xl font-bold">Universitas Pasundan</p>
        <small class="font-semibold"><i>Real Choice for Every Generations</i></small>
      </div>
    </div>

      <!-- Desktop sidebar -->
      <aside
        class="relative z-20 hidden w-64 overflow-y-auto md:block flex-shrink-0 bg-white"
      >
        <div class="py-4 text-gray-500 mt-10"> 
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 p-2"
                href="index.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>

           
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \"
                @click="togglePagesService"
                @click="isPagesServiceOpen = !isPagesServiceOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesServiceOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesServiceOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M3 7.5A1.5 1.5 0 014.5 6h15a1.5 1.5 0 011.5 1.5V9h-18V7.5z" />
                  <path d="M21 9v9a1.5 1.5 0 01-1.5 1.5h-15A1.5 1.5 0 013 18V9" />
                  <path d="M9 13.5h6" />
                </svg>
                
                

                  </svg>
                  <span class="ml-4">Service</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesServiceOpen" >
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">Faculties</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Departments
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Registration
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/404.html">USP</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Facilities</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Achievement</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Student Activities</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Testimonies</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Portofolios</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Supports</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">FAQs</a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \"
                @click="togglePagesBlog"
                @click="isPagesBlogOpen = !isPagesBlogOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesBlogOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesBlogOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M7 8h10M7 12h6m-6 4h10" />
                    <path d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" />
                  </svg>

                  <span class="ml-4">Blog & Agenda</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesBlogOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">Post</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Agenda
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \"
                @click="togglePagesProfil"
                @click="isPagesProfilOpen = !isPagesProfilOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesProfilOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesProfilOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M15.75 7.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                  <path d="M4.5 20.25a8.25 8.25 0 0115 0" />
                </svg>
                
                  <span class="ml-4">Profil</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesProfilOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">About Us</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Our Teams
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Data
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/404.html">Legals Document</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Partners</a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \ "
                @click="togglePagesSetting"
                @click="isPagesSettingOpen = !isPagesSettingOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesSettingOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesSettingOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.542-.94 3.41.928 2.47 2.47a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.542-.928 3.41-2.47 2.47a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.542.94-3.41-.928-2.47-2.47a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.542.928-3.41 2.47-2.47.996.608 2.296.07 2.572-1.065z"
                    />
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <span class="ml-4">Setting</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesSettingOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">Identity</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Header
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Side Banner
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/404.html">Slider</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Meta Pixel</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Google Analytics</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Welcome Chat</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">User</a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
         
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-[#034833] rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-black transition-colors duration-150 hover:text-gray-800 p-2"
                href="index.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \"
                @click="togglePagesService"
                @click="isPagesServiceOpen = !isPagesServiceOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesServiceOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesServiceOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M3 7.5A1.5 1.5 0 014.5 6h15a1.5 1.5 0 011.5 1.5V9h-18V7.5z" />
                  <path d="M21 9v9a1.5 1.5 0 01-1.5 1.5h-15A1.5 1.5 0 013 18V9" />
                  <path d="M9 13.5h6" />
                </svg>
                
                

                  </svg>
                  <span class="ml-4">Service</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesServiceOpen" >
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">Faculties</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Departments
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Registration
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/404.html">USP</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Facilities</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Achievement</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Student Activities</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Testimonies</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Portofolios</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Supports</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">FAQs</a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \"
                @click="togglePagesBlog"
                @click="isPagesBlogOpen = !isPagesBlogOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesBlogOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesBlogOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M7 8h10M7 12h6m-6 4h10" />
                    <path d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" />
                  </svg>

                  <span class="ml-4">Blog & Agenda</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesBlogOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">Post</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Agenda
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \"
                @click="togglePagesProfil"
                @click="isPagesProfilOpen = !isPagesProfilOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesProfilOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesProfilOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M15.75 7.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                  <path d="M4.5 20.25a8.25 8.25 0 0115 0" />
                </svg>
                
                  <span class="ml-4">Profil</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesProfilOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">About Us</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Our Teams
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Data
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/404.html">Legals Document</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Partners</a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative px-6 py-3">
              <button
                class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 text-black \ "
                @click="togglePagesSetting"
                @click="isPagesSettingOpen = !isPagesSettingOpen"
                :class="{
                'bg-[#034833] rounded-lg p-2 text-white': isPagesSettingOpen,
                'hover:bg-gray-200 rounded-lg p-2': !isPagesSettingOpen
                }"
                aria-haspopup="true"
              >
                <span class="inline-flex items-center">
                  <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.542-.94 3.41.928 2.47 2.47a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.542-.928 3.41-2.47 2.47a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.542.94-3.41-.928-2.47-2.47a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.542.928-3.41 2.47-2.47.996.608 2.296.07 2.572-1.065z"
                    />
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <span class="ml-4">Setting</span>
                </span>
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <template x-if="isPagesSettingOpen">
                <ul
                  x-transition:enter="transition-all ease-in-out duration-300"
                  x-transition:enter-start="opacity-25 max-h-0"
                  x-transition:enter-end="opacity-100 max-h-xl"
                  x-transition:leave="transition-all ease-in-out duration-300"
                  x-transition:leave-start="opacity-100 max-h-xl"
                  x-transition:leave-end="opacity-0 max-h-0"
                  class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-black rounded-md shadow-inner bg-gray-100  "
                  aria-label="submenu"
                >
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/login.html">Identity</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/create-account.html">
                      Header
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/forgot-password.html">
                      Side Banner
                    </a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/404.html">Slider</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Meta Pixel</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Google Analytics</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">Welcome Chat</a>
                  </li>
                  <li
                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 \"
                  >
                    <a class="w-full" href="pages/blank.html">User</a>
                  </li>
                </ul>
              </template>
            </li> 
          </ul>
       
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md h-20">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-[#034833]"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >     
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleButtonProfil"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isButtonProfil">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white rounded-md shadow-md border-2 border-[#034833]"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md text-[#034833] \"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                   
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md text-[#034833] \"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Dashboard
            </h2>
            
          
          
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs "
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full "
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    Total clients
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    6389
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs "
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    Account balance
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    $ 46,760.89
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs "
              >
                <div
                  class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    New sales
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    376
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs "
              >
                <div
                  class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600"
                  >
                    Pending contacts
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700"
                  >
                    35
                  </p>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
