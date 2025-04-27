<x-layout>
  <main class="h-full pb-16 overflow-y-auto">
      <div class="container grid px-6 mx-auto">
        <h2
          class="my-6 text-2xl font-semibold text-gray-700"
        >
          Post
        </h2>



        <div class="flex items-center justify-between mb-2">
          <div class="flex items-center gap-4 mb-6">
            {{-- Tombol Add Post --}}
            <a href="{{ route('posts.create') }}"
               class="flex items-center gap-2 px-4 py-2 text-xs font-semibold text-white bg-primary rounded-full hover:bg-gray-900 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                <path d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z"/>
                <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5"/>
              </svg>
              <span>Add Post</span>
            </a>
          
            {{-- Tombol Categories --}}
            <a href="{{ route('category.index') }}"
               class="flex items-center gap-2 px-4 py-2 text-xs font-semibold text-white bg-primary rounded-full hover:bg-gray-900 transition">
              Categories
            </a>
          </div>
          

          <form action="{{ route('posts.index') }}" method="GET" class="mb-4 flex items-center gap-2">
              <input type="text" name="search" placeholder="Cari Data" value="{{ request('search') }}"
                  class="py-2 px-3 text-xs rounded-full" />
                  <div class="flex gap-1">
                      <button type="submit" class="py-2 px-3 text-xs rounded-full bg-primary text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search w-3" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                      </button>
                  </div>
          </form>
      </div>


        <!-- With avatar -->
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs h-auto">
          <div class="w-full overflow-x-auto">
           
            <table class="w-full whitespace-no-wrap">
              
              <thead>
                 
                <tr
                  class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50"
                >
                  <th class="px-4 py-3">No</th>
                  <th class="px-4 py-3">Title & Description</th>
                  <th class="px-4 py-3 pl-14">Image</th>
                  {{-- <th class="px-4 py-3 text-center">Action</th> --}}
                </tr>
              </thead>
            
                  
           
              <tbody
                class="bg-white divide-y "
              >
              @foreach ($posts as $post)
                <tr class="text-gray-700">
                 
                  <td class="px-4 py-3 text-sm">
                    {{ $loop->iteration }}
                  </td>
                  <td class="px-1 py-1">
                    <div class="flex items-center text-sm">
                      <!-- Avatar with inset shadow -->
                     
                      <div>
                        <p class="font-semibold">{{ $post->title }}</p>
                        <p class="text-xs text-gray-600 ">
                          {{ $post->publish }} | {{ $post->category->name }}
                        </p>

                        <div class="flex items-center space-x-4 text-sm mt-7">
                          <a
                            class="flex hover:bg-yellow-400 items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-primary rounded-lg focus:outline-none focus:shadow-outline-gray" href="/post/{{ $post->id }}/edit"
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
                          </a>
                          <a
                          class="flex hover:bg-yellow-400  items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-primary rounded-lg focus:outline-none focus:shadow-outline-gray"
                          href="/post/{{ $post->id }}/delete"
                          aria-label="Delete"
                          onclick="return confirm('Yakin ingin menghapus post ini?')"
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
                          </a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-xs">
                    <div
                    class="relative hidden w-auto h-auto mr-3 rounded-full md:block"
                  >
                    <img
                      class="object-cover w-36 h-36 rounded-lg "
                      src="{{ asset('storage/' . $post->image) }}"
                      alt=""
                      loading="lazy"
                    />
                    
                  </div>
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
            <div
            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9"
          >
          </div>
        <div class="py-5">
          {{ $posts->links() }}
        </div>
         

        </div>
      </div>

    </main>
</x-layout>