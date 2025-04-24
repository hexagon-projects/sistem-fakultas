<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
      <h4 class="mb-4 text-lg font-semibold text-gray-600">
        Our Team
      </h4>
  
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto">
        <form 
          action="{{ route('ourteam.update', $ourteam->id) }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="px-4 py-3 bg-white rounded-lg shadow-md"
        >
          @csrf
        @method('PUT')
            
         
  
          {{-- Departement --}}
          <label class="block text-sm">
            <span class="text-gray-700 font-semibold">Departement</span>
            <select name="id_departement" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
              <option value="">-- Pilih Departemen --</option>
              @foreach ($departements as $dept)
                <option value="{{ $dept->id }}" {{ (old('id_departement', $ourteam->id_departement ) == $dept->id) ? 'selected' : '' }}>
                  {{ $dept->name }}
                </option>
              @endforeach
            </select>
          </label>
  
          {{-- Title --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Nama</span>
            <input
              name="name"
              value="{{ old('name', $ourteam->name) }}"
              type="text"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Title</span>
            <input
              name="title"
              value="{{ old('title', $ourteam->title) }}"
              type="text"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>

        {{-- Grid: Phone & Email --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Phone</label>
              <input
                type="text"
                value="{{ old('phone', $ourteam->phone) }}"
                name="phone"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm"
              />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">Email</label>
              <input
                type="email"
                value="{{ old('email', $ourteam->email) }}"
                name="email"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm"
              />
            </div>
          </div>
  
          {{-- Grid: Sosmed --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
              <label class="block text-sm font-medium text-gray-700">Facebook</label>
              <input name="fb" type="text" value="{{ old('fb', $ourteam->fb) }}" 
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">Instagram</label>
              <input name="ig" type="text" value="{{ old('ig', $ourteam->ig) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">TikTok</label>
              <input name="tiktok" type="text" value="{{ old('tiktok', $ourteam->tiktok) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
  
            <div>
              <label class="block text-sm font-medium text-gray-700">YouTube</label>
              <input name="yt" type="text" value="{{ old('yt', $ourteam->yt) }}"
                class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md text-sm" />
            </div>
          </div>
  
          {{-- Home --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Tampilkan di Home?</span>
            <select name="home" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
              <option value="ya" {{ old('home', $ourteam->home ) == 'ya' ? 'selected' : '' }}>Ya</option>
              <option value="tidak" {{ old('home', $ourteam->home ) == 'tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
          </label>
  
          <div class="mt-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image </label>
            <input
              type="file"
              name="image"
              id="image"
              class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm text-sm
                file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-indigo-50 file:text-indigo-700
                hover:file:bg-indigo-100"
            />
            <div class="mt-2">
                <img src="{{ asset('storage/' . $ourteam->image) }}" alt="Preview" class="w-1/2 h-1/2 rounded-md shadow">
              </div>
             
          </div>

          
  
          {{-- Submit --}}
          <button
            type="submit"
            class="block w-auto px-4 py-2 mt-6 text-sm font-medium text-white bg-yellow-500 rounded-lg hover:bg-[#034833] transition-colors"
          >
            Simpan
          </button>
        </form>
      </div>
    </div>

    
  </x-layout>
  