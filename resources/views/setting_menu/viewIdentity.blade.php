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
  
          {{-- Upload Image --}}
          <div class="mt-4">
            <label for="image1" class="block text-sm font-medium text-gray-700">Upload Gambar 1</label>
            <input
              type="file"
              name="image1"
              id="image1"
              class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm
                file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-indigo-50 file:text-indigo-700
                hover:file:bg-indigo-100"
            />
              <div class="mt-2">
                <img src="{{ asset('storage/' . $identity->image1) }}" alt="Preview" class="w-32 rounded-md shadow">
              </div>
          </div>

          <div class="mt-4">
            <label for="image2" class="block text-sm font-medium text-gray-700">Upload Gambar 2</label>
            <input
              type="file"
              name="image2"
              id="image2"
              class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm
                file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-indigo-50 file:text-indigo-700
                hover:file:bg-indigo-100"
            />
              <div class="mt-2">
                <img src="{{ asset('storage/' . $identity->image2) }}" alt="Preview" class="w-32 rounded-md shadow">
              </div>
          </div>
  
          {{-- Button --}}
          <button
            type="submit"
            class="block w-auto px-4 py-2 mt-6 text-sm font-medium text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple"
          >
            Save
          </button>
        </form>
      </div>
    </div>
  </x-layout>
  