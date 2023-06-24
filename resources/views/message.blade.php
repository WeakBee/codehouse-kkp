<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <section class="flex">
        @include('includes.navbar')

        <div class="grow p-10">
            <h1 class="mb-10 text-4xl font-bold">Form Messages</h1>
            @if (count($messages) < 1)
                <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Pesan Masih Kosong nih...</h5>
                    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Coba Refresh kali aja ada pesan yang masuk</p>
                    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                        <a href="messages" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <div class="-mt-1 font-sans text-sm font-semibold">Refresh</div>
                        </a>
                    </div>
                </div>
            @endif
            @foreach($messages as $data)
                    <div class="mb-5 bg-myBlue text-white rounded-lg p-10 flex items-center">
                        <p class="text-6xl font-bold mr-10">{{$data['id']}}</p>
                        <div>
                            <h1 class="text-4xl font-bold">{{$data['client_name']}}</h1>
                            <div class="flex mb-5">
                                <p>{{$data['client_email']}} |&nbsp;</p>
                                <p>{{$data['client_company']}} |&nbsp;</p>
                                <p>{{$data['client_phone']}}</p>
                            </div>
                            <p>"{{$data['how_can_we_help']}}"</p>
                            <p class="text-sm">Dikirim: {{$data['created_at']}} </p>
                        </div>
                    </div>
                @endforeach
        </div>
    </section>

    @include('includes.script')
</body>
</html>