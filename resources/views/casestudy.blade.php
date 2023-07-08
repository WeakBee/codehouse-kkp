<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeHouse</title>
    
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ url('assets/images/favicon2.ico') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <section class="bg-neutral-100">
        <div class="container mx-auto px-5 py-5 shadow-xl min-h-screen bg-white">
            <a href="{{Route('home')}}" class="font-bold text-lg"><- Kembali</a>
            <div class="py-5 text-center">
                <h1 class="text-4xl font-bold">Case Study</h1>
            </div>
            <div class="grid md:grid-cols-4 grid-cols-1 gap-5">
                @foreach ($section3 as $data)
                    <div class="case-study-card rounded-lg mx-3">
                        <div class="gradient-black"></div>
                        <img class="bg-case-img" src="{{ asset('storage/uploads/Section3/' . $data->case_image) }}">
                        <div class="flex flex-col p-7 h-full">
                            <p class="text-myGreen font-light mb-3 z-10">{{ $data->title }}</p>
                            <p class="text-white font-medium flex-auto z-10">{{ $data->small_description }}</p>
                            <a class="flex items-center justify-center py-2 bg-myGreen text-myBlack rounded-md font-semibold button-arrow z-10 hover:scale-110 duration-300" href="{{ route('casestudyslug', ['slug' => $data->id]) }}">Explore <img class="ml-4" src="assets/images/Arrow-2.svg" /></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>