<x-layout>
    <div class="container grid px-6 mx-auto mt-8 mb-12">
      <h4 class="mb-4 text-lg font-semibold text-gray-600">Partners</h4>
  
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <form 
          action="{{ route('partner.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="bg-white"
        >
          @csrf
  
          <div class="flex flex-col lg:flex-row gap-6">
            {{-- Kiri: Form --}}
            <div class="w-full lg:w-2/3">
                <label class="inline-flex items-center mt-3">
                    <input 
                      type="checkbox" 
                      name="home" 
                      value="1" 
                      class="form-checkbox h-5 w-5 text-green-600"
                      {{ old('home', $partner->home) == '1' ? 'checked' : '' }}
                    >
                    <span class="ml-2 text-sm text-gray-700 font-semibold">Display on Home?</span>
                  </label>

              <label class="block text-sm mb-3 mt-2">
                <span class="text-gray-700 font-semibold">Partner's Name</span>
                <input
                  name="name"
                  value="{{ old('name', $partner->name) }}"
                  type="text"
                  class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
                />
              </label>
  
              <label class="block text-sm mb-3">
                <span class="text-gray-700 font-semibold">Partner's Web Address</span>
                <input
                  name="url"
                  value="{{ old('url', $partner->url) }}"
                  type="text"
                  class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
                />
              </label>
  
              <label class="block text-sm mb-3">
                <span class="text-gray-700 font-semibold">Partner Description</span>
                <textarea
                  name="description"
                  class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
                >{{ old('detail', $partner->description) }}</textarea>
              </label>
  
              <label class="block text-sm mb-3">
                <span class="text-gray-700 font-semibold">Partnership Details</span>
                <textarea
                  name="detail"
              
                  class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
                >{{ old('detail', $partner->detail) }}</textarea>
              </label>
  
              <label class="block text-sm mb-3">
                <span class="text-gray-700 font-semibold">Departement</span>
                <select name="id_departement" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
                  <option value="">-- Pilih Departement --</option>
                  @foreach ($departements as $dept)
                    <option value="{{ $dept->id }} {{ (old('id_departement', $partner->id_departement ) == $dept->id) ? 'selected' : '' }}">{{ $dept->name }}</option>
                  @endforeach
                </select>
              </label>
  
              <label class="block text-sm mb-3">
                <span class="text-gray-700 font-semibold">Status</span>
                <input
                  name="status"
                  value="{{ old('status', $partner->status) }}"
                  type="text"
                  class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
                />
              </label>
  
            
            </div>
  
            {{-- Kanan: Upload Gambar --}}
            <div class="w-full lg:w-1/3">
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $partner->image) }}" alt="Preview" class="w-full rounded-md shadow">
                  </div>

              <label class="block text-sm font-medium text-gray-700 mb-2 mt-3">
                Gambar <span class="text-xs text-gray-400">(Max Size: 750kb)</span>
              </label>
              <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition">
                  <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16v-4m0 0l-3 3m3-3l3 3m0-6a4 4 0 014 4v1h2a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 012-2h2v-1a4 4 0 014-4z"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Drag and drop</span> a file here or click</p>
                    <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 750kb)</p>
                  </div>
                  <input id="dropzone-file" type="file" class="hidden" name="image" />
                </label>
              </div>

             
            </div>
          </div>
  
          <button
            type="submit"
            class="block mb-5 w-auto px-4 py-2 mt-6 text-sm font-medium text-white bg-primary hover:bg-gray-900 rounded-lg transition-colors"
          >
            Save
          </button>
        </form>
      </div>
    </div>
  </x-layout>
  