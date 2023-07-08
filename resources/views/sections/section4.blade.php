<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.navbar')
        <div class="grow p-4 sm:ml-64">
            <h1 class="text-4xl font-bold mb-10">Section 4</h1>
            <p class="mb-5 font-bold"><a href="../"><- Kembali</a></p>
            <form action="../edit-section4/1" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub Title</label>
                    <input name="subtitle" type="text" id="subtitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->subtitle}}" required>
                </div>

                <div class="mb-6">
                    <label for="card1title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Card 1 Title</label>
                    <input name="card1title" type="text" id="card1title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->card1title}}" required>
                </div>
                <div class="mb-6">
                    <label for="card1text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text 1 Text</label>
                    <input name="card1text" type="text" id="card1text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->card1text}}" required>
                </div>

                <div class="mb-6">
                    <label for="card2title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Card 2 Title</label>
                    <input name="card2title" type="text" id="card2title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->card2title}}" required>
                </div>
                <div class="mb-6">
                    <label for="card2text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text 2 Text</label>
                    <input name="card2text" type="text" id="card2text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->card2text}}" required>
                </div>

                <div class="mb-6">
                    <label for="card3title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Card 3 Title</label>
                    <input name="card3title" type="text" id="card3title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->card3title}}" required>
                </div>
                <div class="mb-6">
                    <label for="card3text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text 3 Text</label>
                    <input name="card3text" type="text" id="card3text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->card3text}}" required>
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
            </form>
        </div>

    @include('includes.script')
</body>
</html>