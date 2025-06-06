<x-layout title="Edit FAQs">

    <div class="p-5 flex items-center justify-center">
        <div class="w-full bg-white p-5 rounded-xl text-sm flex flex-col">
            <form action="{{ route('faq.update', $faq->id) }}" method="post" enctype="multipart/form-data" id="form-departement">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-1 gap-5 items-start">

                <div class="col-span-1 md:col-span-2 gap-5">    
                    <h1 class="font-semibold">Edit Faqs</h1>
                    <hr class="my-3"> 
                    <div class="flex flex-col gap-1 mb-5">
                        <label for="id_category">Categories</label>
                        <select name="id_category" id="id_category"
                            class="block w-full mt-1 text-sm focus:border-[#5676ff] focus:outline-none focus:shadow-outline-purple form-select border-gray-300 border-2 p-2 rounded-md">
                            @foreach ($categories as $categorie)
                            @if ($faq->id_category == $categorie->id)
                                <option value="{{ $categorie->id }}" selected>{{ $categorie->name }}</option>
                            @endif
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                        @error('id_category')
                            <div>
                                <small class="text-red-500"><i>{{ $message }}</i></small>
                            </div>
                        @enderror
                    </div>                    
                    <div class="flex flex-col gap-1 mb-5">
                        <label for="question">Question</label>
                        <input type="text" name="question" value="{{ $faq->question }}"
                            class="block w-full mt-1 text-sm focus:border-[#5676ff] focus:outline-none focus:shadow-outline-purple form-input border-gray-300 border-2 p-2 rounded-md" />
                        @error('question')
                            <div>
                                <small class="text-red-500"><i>{{ $message }}</i></small>
                            </div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1 mb-5">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="description" class="block w-full mt-1 text-sm border-gray-300 border-2 p-2 rounded-md">{{ $faq->answer }}</textarea>
                        @error('answer')
                            <div>
                                <small class="text-red-500"><i>{{ $message }}</i></small>
                            </div>
                        @enderror
                    </div>            
                </div>
            </div>
            <div class="flex items-center justify-between my-5">
                <a href="{{ route('faq.index') }}" class="py-3 px-5 bg-gray-300 rounded-xl">Back</a>
                <button class="py-3 px-5 bg-[#5676ff] text-white rounded-xl" type="button" onclick="confirmSubmit()">Next</button>
            </div>
            </form>
        </div>
    </div>


    <script>
        function previewImage(event) {
            const fileInput = event.target;
            const preview = document.getElementById('image-preview');
            const removeBtn = document.getElementById('remove-btn');
            const uploadText = document.getElementById('upload-text');
    
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    removeBtn.classList.remove('hidden');
                    uploadText.classList.add('hidden');
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    
        function removeImage() {
            const fileInput = document.getElementById('image');
            const preview = document.getElementById('image-preview');
            const removeBtn = document.getElementById('remove-btn');
            const uploadText = document.getElementById('upload-text');
    
            fileInput.value = '';
            preview.src = '#';
            preview.classList.add('hidden');
            removeBtn.classList.add('hidden');
            uploadText.classList.remove('hidden');
        }
    </script>

<script>
    function confirmSubmit() {
        Swal.fire({
            title: 'Simpan Data?',
            text: "Pastikan semua data sudah benar.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, simpan',
            cancelButtonText: 'Batal',
            buttonsStyling: false, // ini penting!
            customClass: {
                confirmButton: 'bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700',
                cancelButton: 'bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 ml-2'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('form-departement').submit();
            }
        });
    }
</script>

</x-layout>