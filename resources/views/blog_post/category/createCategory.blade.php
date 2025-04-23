<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
    <h4
    class="mb-4 text-lg font-semibold text-gray-600 "
  >
    Create Category
  </h4>
    <div    
    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto"
  >


  <form 
  action="{{ route('category.store') }}" 
  method="POST" 
  enctype="multipart/form-data" 
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto"
>
  @csrf

  <label class="block text-sm mt-3">
    <span class="text-gray-700 font-semibold">Title</span>
    <input
      name="name"
      type="text"
      class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md"
      
    />
  </label>
 
  <div class="mb-4 mt-4">
    <label for="image" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
    <input
      type="file"
      name="image"
      id="image"
      class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm
             file:mr-4 file:py-2 file:px-4
             file:rounded-md file:border-0
             file:text-sm file:font-semibold
             file:bg-indigo-50 file:text-indigo-700
             hover:file:bg-indigo-100"
    />
    <img id="preview-image" src="#" alt="Preview Gambar" class="mt-4 hidden w-1/2 h-1/2 rounded-md shadow-md">

  </div>

  <button
    type="submit"
    class="block w-auto px-4 py-2 mt-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple mb-5"
  >
    Save 
  </button>
</form>

</div>

<script>
    document.getElementById("image").addEventListener("change", function (e) {
      const preview = document.getElementById("preview-image");
      const file = e.target.files[0];
  
      if (file) {
        const reader = new FileReader();
        
        reader.onload = function (e) {
          preview.src = e.target.result;
          preview.classList.remove("hidden");
        };
  
        reader.readAsDataURL(file);
      }
    });
  </script>
</x-layout>