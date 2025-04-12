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
    class="flex bg-slate-200 relative  "
    :class="{ 'overflow-hidden': isSideMenuOpen }"
  >
  
        <x-navbar></x-navbar>
      
      <div class="flex flex-col flex-1 w-full h-auto">
          <x-header></x-header>
          <main> 
              <div>
              {{ $slot }}
              </div>
          </main>
      </div>

    </div>
  </body>
  </html>