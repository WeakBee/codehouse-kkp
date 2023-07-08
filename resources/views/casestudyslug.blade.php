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
    <div class="container mx-auto h-screen md:py-10 ">
      <div class="flex flex-col md:flex-row bg-white shadow-xl overflow-hidden md:rounded-xl w-full h-full">
        <div class="md:w-1/2 w-full relative">
          <img class="w-full h-full object-cover" src="{{ asset('storage/uploads/Section3/' . $content->case_image) }}">
          <a href="{{ route('home') }}" class="absolute top-4 left-4"><p class="font-bold text-white"><- Kembali</p></a>
        </div>
        <div class="md:w-1/2 w-full p-10 overflow-auto">
          <h1 class="text-2xl font-bold mb-4">{{ $content->title }}</h1>
          <div> 
            {!! $content->description !!}
          </div>
        </div>
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