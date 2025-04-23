<x-layout>
    <div class="container grid px-6 mx-auto mt-8">
    <h4 class="mb-4 text-lg font-semibold text-gray-600">
        Chat
      </h4>

      <form 
      action="{{ route('chat.update') }} " 
      method="POST" 
      enctype="multipart/form-data"
      class="px-4 py-3 bg-white rounded-lg shadow-md"
    >
    @method('PUT')
          @csrf
    <label class="block text-sm mt-3">
        <textarea
          name="chat"
          class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md h-44"
        > {{ old('chat', $chat->chat) }}</textarea>
      </label>
    </div>

    <button
    type="submit"
    class="block ml-5 w-auto px-4 py-2 mt-6 text-sm font-medium text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-lg active:bg-[#034833] hover:bg-[#034833] focus:outline-none focus:shadow-outline-purple"
  >
    Save
  </button>

</form>
</x-layout>