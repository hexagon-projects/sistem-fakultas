<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
      <h4 class="mb-4 text-lg font-semibold text-gray-600">
        Identity
      </h4>
  
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto">
        <form 
          action="{{ route('identity.update') }} " 
          method="POST" 
          enctype="multipart/form-data"
          class="px-4 py-3 bg-white rounded-lg shadow-md"
        >
        @method('PUT')
          @csrf
          
  
          {{-- Title --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Title</span>
            <input
              name="title"
              type="text"
              value="{{ old('title', $identity->title) }}"
              class="block w-full mt-1 text-sm form-input border-gray-300 border-2 p-2 rounded-md focus:border-[#034833] focus:outline-none focus:shadow-outline-purple"
            />
          </label>
  
          {{-- Meta --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Meta Description</span>
            <textarea
              name="meta"
                id="meta"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            >{{ old('adress', $identity->meta ) }}</textarea>
          </label>
  
          {{-- Alamat --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Adress</span>
            <textarea
              name="adress"
                id="adress"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            >{{ old('adress', $identity->adress ) }}</textarea>
          </label>
  
          {{-- Link Map --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Link Map</span>
            <textarea
              name="link_map"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            >{{ old('link_map', $identity->link_map ) }}</textarea>
          </label>
  
          {{-- Grid: Phone & Email --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Phone</label>
              <input
                type="text"
                name="phone"
                value="{{ old('phone', $identity->phone ) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm"
              />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">Email</label>
              <input
                type="email"
                name="email"
                value="{{ old('email', $identity->email ) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm"
              />
            </div>
          </div>
  
          {{-- Grid: Sosmed --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Facebook</label>
              <input name="fb" type="text" value="{{ old('fb', $identity->fb ) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">Instagram</label>
              <input name="ig" type="text" value="{{ old('ig', $identity->ig ) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">TikTok</label>
              <input name="tiktok" type="text" value="{{ old('tiktok', $identity->tiktok ) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">YouTube</label>
              <input name="yt" type="text" value="{{ old('yt', $identity->yt ) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
          </div>
  
          {{-- Service --}}
          <label class="block text-sm mt-4">
            <span class="text-gray-700 font-semibold">Time Service</span>
            <input
              name="time_service"
              type="text"
              value="{{ old('service', $identity->time_service ) }}"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>
            <span class="text-gray-700 font-semibold">Day Service</span>
            <input
              name="day_service"
              type="text"
              value="{{ old('service', $identity->day_service ) }}"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>
  

          <div class="flex flex-row gap-4 mt-6">
            {{-- Upload Image 1 --}}
            <div class="mt-4 w-full">
              <div class="mt-2">
                <img id="preview-image1" src="{{ asset('storage/' . $identity->image1) }}" alt="Preview" class="w-[600px] h-[500px] rounded-md shadow object-cover ">
              </div>
              <label for="dropzone-file1"
                class="dropzone-label flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition mt-4">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M7 16v-4m0 0l-3 3m3-3l3 3m0-6a4 4 0 014 4v1h2a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 012-2h2v-1a4 4 0 014-4z" />
                  </svg>
                  <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Drag and drop</span> or click to upload</p>
                  <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 750kb)</p>
                </div>
                <input id="dropzone-file1" type="file" class="hidden" name="image1" accept="image/*" onchange="previewImage(event, 'preview-image1')" />
              </label>
            </div>
          
            {{-- Upload Image 2 --}}
            <div class="mt-4 w-full">
              <div class="mt-2">
                <img id="preview-image2" src="{{ asset('storage/' . $identity->image2) }}" alt="Preview" class="w-52 h-52 rounded-md shadow object-cover">
              </div>
              <label for="dropzone-file2"
                class="dropzone-label flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition mt-4">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M7 16v-4m0 0l-3 3m3-3l3 3m0-6a4 4 0 014 4v1h2a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 012-2h2v-1a4 4 0 014-4z" />
                  </svg>
                  <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Drag and drop</span> or click to upload</p>
                  <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 750kb)</p>
                </div>
                <input id="dropzone-file2" type="file" class="hidden" name="image2" accept="image/*" onchange="previewImage(event, 'preview-image2')" />
              </label>
            </div>
          </div>
  
          {{-- Button --}}
          <button
            type="submit"
            class="block w-auto px-4 py-2 mt-6 text-sm font-medium text-white transition-colors duration-150 bg-primary border border-transparent rounded-lg active:bg-[#034833] hover:bg-gray-900 focus:outline-none focus:shadow-outline-purple"
          >
            Save
          </button>
        </form>
      </div>
    </div>

    
    <script>
      function previewImage(event, targetId) {
        const reader = new FileReader();
        const image = document.getElementById(targetId);
        const file = event.target.files[0];
    
        if (file) {
          reader.onload = function(e) {
            image.src = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      }
    </script>
  </x-layout>
  