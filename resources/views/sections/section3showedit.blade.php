<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>
<body>
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="text-4xl font-bold mb-10">Section 3 Edit</h1>
            <p class="mb-5 font-bold"><a href="../section3"><- Kembali</a></p>
            <form action="../edit-section3/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="case_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Case Image</label>
                    <input name="case_image" type="file" id="case_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @if($data->case_image)
                        <p class="text-gray-500 mt-2">{{$data->case_image}}</p>
                    @else
                        <p class="text-gray-500 mt-2">No file chosen</p>
                    @endif
                </div>

                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input value="{{$data->title}}" name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="small_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small Description</label>
                    <input value="{{$data->small_description}}" name="small_description" type="text" id="small_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{$data->description}}</textarea>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Section 5</button>
            </form>
        </div>
    @include('includes.script')
    <script>
        CKEDITOR.replace( 'description' );
        const fileInput = document.getElementById('image');
        const fileNameDisplay = document.getElementById('file-name');
    
        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                fileNameDisplay.textContent = file.name;
            } else {
                fileNameDisplay.textContent = '';
            }
        });
    </script>
</body>
</html>