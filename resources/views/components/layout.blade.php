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
    <style>
      .cke_notification_warning {
          display: none !important;
      }
   </style>


    
    {{-- <link rel="stylesheet" href="./assets/css/tailwind.output.css" /> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="./assets/js/init-alpine.js"></script>
  </head>
  <body>
    @if (session()->has('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 border border-green-300 rounded-lg z-50 fixed top-0 right-0 m-4" role="alert">
            {{ session('success') }}
        </div>
      @endif
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


    
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('resume', {
          height: 100,
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
            { name: 'insert', items: ['Image', 'Table'] },
            { name: 'styles', items: ['Format'] },
            { name: 'tools', items: ['Maximize'] }
        ],
    });
    </script>   
    <script>
        CKEDITOR.replace('content', {
          height: 150,
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
            { name: 'insert', items: ['Image', 'Table'] },
            { name: 'styles', items: ['Format'] },
            { name: 'tools', items: ['Maximize'] }
        ],
    });
    </script>   
  
  
  </body>
  </html>