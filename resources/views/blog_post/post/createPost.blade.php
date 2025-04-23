<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
    <h4
    class="mb-4 text-lg font-semibold text-gray-600 "
  >
    Create Post
  </h4>
    <div    
    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto"
  >


  <form 
  action="{{ route('posts.store') }}" 
  method="POST" 
  enctype="multipart/form-data" 
  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md h-auto"
>
  @csrf

  <label class="block text-sm mt-3">
    <span class="text-gray-700 font-semibold">Title</span>
    <input
      name="title"
      type="text"
      class="block w-full mt-1 text-sm focus:border-[#034833] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md"
      
    />
  </label>

  <label class="block text-sm mt-3">
    <span class="text-gray-700 font-semibold">Resume</span>
    <textarea name="resume" id="resume" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"></textarea>
  </label>

  <label class="block text-sm mt-3">
    <span class="text-gray-700 font-semibold">Content</span>
    <textarea name="content" id="content" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md"></textarea>
  </label>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
    <div class="mb-6 mt-4">
      <label for="id_category" class="block text-sm font-medium text-gray-700">Tipe Konten</label>
      <select
        id="id_category"
        name="id_category"
        class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
      >
        <option value="1">Artikel</option>
        <option value="2">Berita</option>
      </select>
    </div>

      <div class="mb-6 mt-4">
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select
          id="status"
          name="status"
          class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
        >
          <option value="active">Active</option>
          <option value="unactive">Unactive</option>
        </select>
      </div>

 

    <div class="mb-4 mt-4">
      <label for="publish" class="block text-sm font-medium text-gray-700">Tanggal</label>
      <input
        type="date"
        name="publish"
        id="publish"
        class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
      />
    </div>

    <div class="mb-4 mt-4">
      <label for="yt" class="block text-sm font-medium text-gray-700">YouTube URL</label>
      <input
        type="text"
        name="yt"
        id="yt"
        placeholder="https://youtube.com/..."
        class="mt-3 h-10 block w-full border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
      />
    </div>  
  </div>


 
  <div class="mb-4">
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
  </div>

 

  <button
    type="submit"
    class="block w-auto px-4 py-2 mt-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple mb-5"
  >
    Save 
  </button>
</form>

</div>

</x-layout>