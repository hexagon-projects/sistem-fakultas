<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
      <h4 class="mb-4 text-lg font-semibold text-gray-600">
        Slide Banner
      </h4>
  
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto">
        <form 
          action="{{ route('slider.update', $slider->id) }}" 
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
              <option value="">-- Pilih Departement --</option>
              @foreach ($departements as $dept)
                <option value="{{ $dept->id }}" {{ (old('id_departement', $slider->id_departement ) == $dept->id) ? 'selected' : '' }}>
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
              value="{{ old('title', $slider->title ) }}"
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
            >{{ old('description', $slider->description ) }}</textarea>
          </label>
  
          {{-- YouTube Link --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">YouTube Link</span>
            <input
              name="yt"
              type="text"
              value="{{ old('yt', $slider->yt ) }}"
              class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"
            />
          </label>
  
          {{-- Status --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Status</span>
            <select name="status" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
              <option value="active" {{ old('status', $slider->status ) == 'active' ? 'selected' : '' }}>Active</option>
              <option value="nonactive" {{ old('status', $slider->status ) == 'nonactive' ? 'selected' : '' }}>Nonactive</option>
            </select>
          </label>
  
          {{-- Home --}}
          <label class="block text-sm mt-3">
            <span class="text-gray-700 font-semibold">Tampilkan di Home?</span>
            <select name="home" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">
              <option value="ya" {{ old('home', $slider->home ) == 'ya' ? 'selected' : '' }}>Ya</option>
              <option value="tidak" {{ old('home', $slider->home ) == 'tidak' ? 'selected' : '' }}>Tidak</option>
            </select>
          </label>
  
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
                <img src="{{ asset('storage/' . $slider->image1) }}" alt="Preview" class="w-1/2 h-1/2 rounded-md shadow">
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
                <img src="{{ asset('storage/' . $slider->image2) }}" alt="Preview" class="w-1/2 h-1/2 rounded-md shadow">
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
  