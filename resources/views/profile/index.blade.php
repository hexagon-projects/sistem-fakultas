<x-layout>
      
        <div class="container px-6 mx-auto mt-4">
         
          

          <!-- General elements -->
          <h4
            class="mb-4 text-lg font-semibold text-black"
          >
            Profile
          </h4>
          <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto">
            <div class="flex flex-col md:flex-row gap-4">
              
              <!-- Kolom Kiri -->
              <div class="md:w-1/2">
                <button
                class="block w-auto px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-[#034833] border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple"
               type="submit"
              >
                Enable Two Factor
              </button>
              </div>
          
              <!-- Kolom Kanan -->
              <div class="md:w-1/2">
                <h3 class="text-lg font-semibold text-gray-700">
                    Edit Profile
                </h3>
                <hr class="my-2 border-gray-300" />
                <form action="{{ route('profile.update', auth()->user()->id) }}" method="post" class="user">
                  @csrf
                  @method('PUT')
                  @if (session()->has('success'))
                      <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 border border-green-300 rounded-lg z-50 fixed top-0 right-0 m-4" role="alert">
                          {{ session('success') }}
                      </div>
                    @endif
                <label class="block text-sm mt-3">
                  <span class="text-gray-700">Full Name</span>
                  <input
                    class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md" value="{{ old('name', auth()->user()->name) }}"
                    type="text" name="name"
                    placeholder=""
                  />
                </label>
                <label class="block text-sm mt-3">
                  <span class="text-gray-700">Email</span>
                  <input
                    class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md" value="{{ old('email', auth()->user()->email) }}" name="email"
                    type="email"
                    placeholder=""
                  />
                </label>
                <button
                class="block w-auto px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-[#034833] border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple"
               type="submit"
              >
                UPDATE PROFILE
              </button>
            </form>


              {{-- UPDATE PASSWORD --}}
              <h3 class="text-lg font-semibold text-gray-700 mt-10">
                Update Password
            </h3>
            <hr class="my-2 border-gray-300" />
            <label class="block text-sm mt-3">
              <span class="text-gray-700">Old Password</span>
              <input
                class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md"
                placeholder=""
              />
            </label>
            <label class="block text-sm mt-3">
              <span class="text-gray-700">New Password</span>
              <input
                class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md"
                placeholder=""
              />
            </label>

            <label class="block text-sm mt-3">
              <span class="text-gray-700">Confirm New Password</span>
              <input
                class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md"
                placeholder=""
              />
            </label>
            <button
            class="block w-auto px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-[#034833] border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple mb-5"
           type="submit"
          >
            UPDATE PASSWORD
          </button>

              </div>
          
            </div>
          </div>
 
                                  <!-- With actions -->
                                  <h4
                                  class="mb-4 text-lg font-semibold text-gray-600"
                                >
                                  Role Users
                                </h4>
                                <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
                                  <div class="w-full overflow-x-auto">
                                    <table class="w-full whitespace-no-wrap">
                                      <thead>
                                        <tr
                                          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-50"
                                        >
                                        <th class="px-4 py-3">No</th>
                                          <th class="px-4 py-3">Name</th>
                                          <th class="px-4 py-3">Email</th>
                                          <th class="px-4 py-3">Role</th>
                                          <th class="px-4 py-3">Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody
                                        class="bg-white divide-y "
                                      >
                                      @foreach ($users as $user)
                                          
                                  
                                        <tr class="text-gray-700 ">
                                            <td class="px-4 py-3 text-sm font-semibold">1</td>
                                          <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                              <div>
                                                <p class="font-semibold">{{ $user->name }}</p>
                                              
                                              </div>
                                            </div>
                                          </td>
                                          <td class="px-4 py-3 text-sm">
                                            {{ $user->email }}
                                          </td>
                                          <td class="px-4 py-3 text-xs">
                                            <span
                                              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full"
                                            >
                                              {{ $user->role }}
                                            </span>
                                          </td>
                                          <td class="px-4 py-3">
                                            <div class="flex items-center space-x-4 text-sm">
                                              <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit"
                                              >
                                                <svg
                                                  class="w-5 h-5"
                                                  aria-hidden="true"
                                                  fill="currentColor"
                                                  viewBox="0 0 20 20"
                                                >
                                                  <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                                  ></path>
                                                </svg>
                                              </button>
                                              <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg  focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"
                                              >
                                                <svg
                                                  class="w-5 h-5"
                                                  aria-hidden="true"
                                                  fill="currentColor"
                                                  viewBox="0 0 20 20"
                                                >
                                                  <path
                                                    fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"
                                                  ></path>
                                                </svg>
                                              </button>
                                            </div>
                                          </td>
                                        </tr>
                    
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <div
                                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9 "
                                  >
                                    <span class="flex items-center col-span-3">
                                      Showing 21-30 of 100
                                    </span>
                                    <span class="col-span-2"></span>
                                    <!-- Pagination -->
                                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                      <nav aria-label="Table navigation">
                                        <ul class="inline-flex items-center">
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                              aria-label="Previous"
                                            >
                                              <svg
                                                class="w-4 h-4 fill-current"
                                                aria-hidden="true"
                                                viewBox="0 0 20 20"
                                              >
                                                <path
                                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                  clip-rule="evenodd"
                                                  fill-rule="evenodd"
                                                ></path>
                                              </svg>
                                            </button>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                            >
                                              1
                                            </button>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                            >
                                              2
                                            </button>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                            >
                                              3
                                            </button>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                            >
                                              4
                                            </button>
                                          </li>
                                          <li>
                                            <span class="px-3 py-1">...</span>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                            >
                                              8
                                            </button>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                            >
                                              9
                                            </button>
                                          </li>
                                          <li>
                                            <button
                                              class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                              aria-label="Next"
                                            >
                                              <svg
                                                class="w-4 h-4 fill-current"
                                                aria-hidden="true"
                                                viewBox="0 0 20 20"
                                              >
                                                <path
                                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                  clip-rule="evenodd"
                                                  fill-rule="evenodd"
                                                ></path>
                                              </svg>
                                            </button>
                                          </li>
                                        </ul>
                                      </nav>
                                    </span>
                                  </div>
                                </div>

        
</x-layout>