<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akses Masuk</title>
    <link rel="shortcut icon" href="{{ asset('assets/icons/unpas.png') }}" type="image/x-icon">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
   
  
  
  <div class="flex items-center min-h-screen p-6 bg-gray-100">
    <div
      class="flex-1 h-full max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl"
    >
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
          <div class="w-full">
            <h1
              class="mb-4 text-xl text-center font-semibold text-gray-700"
            >
              Login Content Management System
            </h1>
            
            <form action="{{ route('login') }}" method="POST" class="user">
              @csrf
            <label class="block text-sm font-semibold">
              <span class="text-gray-700">Email</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input @error('email') @enderror"
                placeholder="Jane Doe" type="email"
                name="email"
              />

              @error('email')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
             @enderror
            </label>
            <label class="block mt-4 text-sm font-semibold">
              <span class="text-gray-700 ">Password</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input @error('password') @enderror"
                placeholder="***************"
                type="password"
                name="password"
              />

              @error('password')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
             @enderror
            </label>

            <!-- You should use a button here, as the anchor is only used for the example  -->
            <button
              class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-[#5676ff] border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
             type="submit"
            >
              Log in
            </button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
