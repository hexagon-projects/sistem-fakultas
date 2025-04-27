<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
      <h4 class="mb-4 text-lg font-semibold text-gray-600">
        Side Banner
      </h4>
  
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto">
        <form 
          action="{{ route('sideBanner.update') }}" 
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
                <option value="{{ $dept->id }}" {{ (old('id_departement', $sideBanner->id_departement ) == $dept->id) ? 'selected' : '' }}>
                  {{ $dept->name }}
                </option>
              @endforeach
            </select>
          </label>
  
          {{-- Title --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Title</span>
            <input
              name="title"
              type="text"
              value="{{ old('title', $sideBanner->title ) }}"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>
  
          {{-- Description --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Description</span>
            <textarea
              name="description"
              id="description"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            >{{ old('description', $sideBanner->description ) }}</textarea>
          </label>
  
          {{-- YouTube Link --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">YouTube Link</span>
            <input
              name="yt"
              type="text"
              value="{{ old('yt', $sideBanner->yt ) }}"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>
  
          {{-- Status --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Status</span>
            <select name="status" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
              <option value="active" {{ old('status', $sideBanner->status ) == 'active' ? 'selected' : '' }}>Active</option>
              <option value="nonactive" {{ old('status', $sideBanner->status ) == 'nonactive' ? 'selected' : '' }}>Nonactive</option>
            </select>
          </label>
  
          {{-- Home --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Tampilkan di Home?</span>
            <select name="home" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
              <option value="ya" {{ old('home', $sideBanner->home ) == 'ya' ? 'selected' : '' }}>Ya</option>
              <option value="tidak" {{ old('home', $sideBanner->home ) == 'tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
          </label>
  
          <div class="mt-4">
            <!-- Gambar yang sudah tersimpan di database -->
            <div class="mt-2 mb-4">
              <img src="{{ asset('storage/' . $sideBanner->image1) }}" alt="Preview" class="w-1/2 h-auto rounded-md shadow">
            </div>
          
            <!-- Label -->
            <label for="image1" class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar 1</label>
          
            <!-- Dropzone -->
            <label for="image1"
              class="relative flex flex-col items-center justify-center w-1/2 h-44 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition">
          
              <!-- Default Content -->
              <div id="image1-default" class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16v-4m0 0l-3 3m3-3l3 3m0-6a4 4 0 014 4v1h2a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 012-2h2v-1a4 4 0 014-4z" />
                </svg>
                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Drag and drop</span> or click to upload</p>
                <p class="text-xs text-gray-500">PNG, JPG, or GIF (Max 750KB)</p>
              </div>
          
              <!-- Preview setelah user upload -->
              <img id="preview-image1" src="#" alt="Preview" class="absolute inset-0 w-full h-full object-cover rounded-lg hidden z-10" />
          
              <!-- File input -->
              <input id="image1" name="image1" type="file" class="hidden" accept="image/*" onchange="previewImage(event, 'preview-image1', 'image1-default')" />
            </label>
          </div>

          <div class="mt-4">
            <!-- Gambar yang sudah tersimpan di database -->
            <div class="mt-2 mb-4">
              <img src="{{ asset('storage/' . $sideBanner->image2) }}" alt="Preview" class="w-1/2 h-auto rounded-md shadow">
            </div>
          
            <!-- Label -->
            <label for="image2" class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar 2</label>
          
            <!-- Dropzone -->
            <label for="image2"
              class="relative flex flex-col items-center justify-center w-1/2 h-44 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition">
          
              <!-- Default Content -->
              <div id="image2-default" class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16v-4m0 0l-3 3m3-3l3 3m0-6a4 4 0 014 4v1h2a2 2 0 012 2v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3a2 2 0 012-2h2v-1a4 4 0 014-4z" />
                </svg>
                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Drag and drop</span> or click to upload</p>
                <p class="text-xs text-gray-500">PNG, JPG, or GIF (Max 750KB)</p>
              </div>
          
              <!-- Preview setelah user upload -->
              <img id="preview-image2" src="#" alt="Preview" class="absolute inset-0 w-full h-full object-cover rounded-lg hidden z-10" />
          
              <!-- File input -->
              <input id="image2" name="image2" type="file" class="hidden" accept="image/*" onchange="previewImage(event, 'preview-image2', 'image1-default')" />
            </label>
          </div>
  
          {{-- Submit --}}
          <button
            type="submit"
            class="block w-auto px-4 py-2 mt-6 text-sm font-medium text-white bg-primary rounded-lg hover:bg-gray-900 transition-colors"
          >
            Save
          </button>
        </form>
      </div>
    </div>

    <script>
      function previewImage(event, previewId, defaultId, oldImageId) {
        const input = event.target;
        const preview = document.getElementById(previewId);
        const defaultContent = document.getElementById(defaultId);
        const oldImage = document.getElementById(oldImageId);
    
        if (input.files && input.files[0]) {
          const reader = new FileReader();
    
          reader.onload = function (e) {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
            defaultContent.classList.add('hidden');
            if (oldImage) {
              oldImage.classList.add('hidden'); // Sembunyikan gambar lama
            }
          };
    
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    
  </x-layout>
  