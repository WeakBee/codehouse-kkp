<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeHouse</title>
    
    {{-- @vite('resources/css/app.css') --}}
    <link rel="icon" href="{{ url('assets/images/favicon2.ico') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/app-2750b9d9.css')}}">
</head>
<body>
@if (empty($section1) && empty($section2) && empty($section3) && empty($section4) && empty($section5))
    <section class="bg-neutral-100">
        <div class="container mx-auto h-screen md:py-10 flex justify-center align-center">
            <h1 class="text-6xl font-bold">This Page Is Under Construction.</h1>
        </div>
    </section>
@else
    <section class='bg-myBlue text-white relative'>
        <nav class="text-white py-5 relative z-10">
            <div class="container flex flex-wrap items-center mx-auto text-white px-5 ">
                <a href="./" class="flex items-center mr-auto">
                    <img src="assets/images/logo-putih2.png" class="h-12" alt="Flowbite Logo" />
                </a>
                <div class="flex md:order-2">
                    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex items-center flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 bg-myBlue md:bg-transparent">
                    <li>
                    <a href="#" class="block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent text-white md:p-0 md:dark:text-blue-500 md:hover:text-blue-700" aria-current="page">Home</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portfolio</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Career</a>
                    </li>
                    <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 bg-myGreen text-myBlack rounded-md font-semibold font-medium text-sm px-4 py-2 text-center border border-myGrenn hover:bg-transparent hover:text-myGreen">Codehouse Academy</a>
                    </li>

                </ul>
                </div>
            </div>
        </nav>
        <img class='robot-hand absolute inset-y-0 right-0 z-0' src="assets/images/robot-hand2.png"/>
        <div class='container mx-auto pt-16 pb-10 px-5 z-10 relative'>
            @foreach ($section1 as $data)
                <div class='flex flex-col md:flex-row text-center md:text-left items-center'>
                    <img class='rotate-animation' src="assets/images/Sunlight_fill.svg"/>
                    <p class='font-medium ml-3'>{{$data['text1']}}</p>
                </div>
                <h1 class='md:ml-24 my-10 text-5xl md:text-8xl font-bold text-center md:text-left md:w-2/3'>{{$data['text2']}}</h1>
                <p class='font-medium md:text-left text-center md:w-1/3'>{{$data['text3']}}</p>
                <div class='flex flex-col md:flex-row items-center'>
                    <div>
                        <button class='flex items-center py-3 px-5 my-20 bg-myGreen text-myBlack rounded-md font-semibold button-arrow'>{{$data['buttontext']}}<img class='ml-4 arrow' src="assets/images/Arrow-2.svg"/></button>
                    </div>
                    <div class='flex-auto flex justify-end'>
                        <img class='md:mr-10 hidden md:block mt-3' src="assets/images/Arrow-1.svg" />
                        <div>
                            <p class='mb-2 text-center md:text-left'>Terdaftar di:</p>
                            <div class='flex'>
                                <div class='w-28 h-28 bg-white rounded-xl drop-shadow-xl mx-2 p-3 hover:scale-110 duration-300'>
                                    <img src="assets/images/logo-kominfo.png"/>
                                </div>
                                <div class='w-28 h-28 bg-white rounded-xl drop-shadow-xl mx-2 p-3 hover:scale-110 duration-300'>
                                    <img src="assets/images/logo-ristek.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="section-marquee" class='bg-white text-myBlack relative hidden md:block'>
        <div class='container mx-auto pt-16 pb-10 px-5'>
            <h1 class='font-bold text-3xl text-center md:text-left md:text-5xl mb-5'>Trusted By</h1>
            <p class="text-center md:text-left">Menyediakan solusi digital untuk Startup dan Korporat di Indonesia</p>
        </div>
        <div class="marquee">
            <div class="marquee-content"> 
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-1.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-2.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-3.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-4.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-5.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-6.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-7.png" alt="">
            </div>
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-8.png" alt="">
            </div> 
            
            {{-- batas --}}
            
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-1.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-2.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-3.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-4.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-5.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-6.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-7.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-8.png" alt="">
            </div>

            {{-- batas --}}

            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-1.png" alt="">
            </div>
            <div class="marquee-item">
                <img src="assets/images/logo-perusahaan/logo-2.png" alt="">
            </div>
            </div>
        </div>
        <div class="white-shadow"></div>
    </section>

    <section id="section-2" class='bg-white text-myBlack py-10 relative overflow-hidden'>
        @foreach ($section2 as $data)
            <div class="container mx-auto px-5 py-10 text-center">
                <h1 class="text-3xl text-center md:text-left md:text-5xl font-bold mb-4">{{$data['title']}}</h1>
                <p class="text-center md:text-left">{{$data['subtitle']}}</p>
            </div>
            <div class="flex justify-center items-center relative">
                <div class="cch card-carousel0"></div>
                <div class="card-carousel cch cch-1" place="1">
                    <img class="gambar-carousel absolute" src="assets/images/core-service/uiuxdesign.jpg">
                    <div class="gradient-black"></div>
                    <div class="flex mb-5 w-full items-center z-10">
                        <img class="mr-3 icon-carousel" src="assets/icons/uiux.svg">
                        <p class="text-myGreen">{{$data['card1title']}}</p>
                    </div>
                    <div class="flex flex-auto z-10">
                        <p class="font-semibold text-xl">{{$data['card1text']}}</p>
                    </div>
                </div>
                <div class="card-carousel cch cch-2" place="2">
                    <img class="gambar-carousel absolute" src="assets/images/core-service/app-dev.jpg">
                    <div class="gradient-black"></div>
                    <div class="flex mb-5 w-full items-center z-10">
                        <img class="mr-3 icon-carousel" src="assets/icons/app.svg">
                        <p class="text-myGreen">{{$data['card2title']}}</p>
                    </div>
                    <div class="flex flex-auto z-10">
                        <p class="font-semibold text-xl">{{$data['card2text']}}</p>
                    </div>
                </div>
                <div class="card-carousel cch cch-3" place="3">
                    <img class="gambar-carousel absolute" src="assets/images/core-service/website-dev.jpg">
                    <div class="gradient-black"></div>
                    <div class="flex mb-5 w-full items-center z-10">
                        <img class="mr-3 icon-carousel" src="assets/icons/web.svg">
                        <p class="text-myGreen">{{$data['card3title']}}</p>
                    </div>
                    <div class="flex flex-auto z-10">
                        <p class="font-semibold text-xl">{{$data['card3text']}}</p>
                    </div>
                </div>
                <div class="card-carousel cch cch-4" place="4">
                    <img class="gambar-carousel absolute" src="assets/images/core-service/procurement-system.jpg">
                    <div class="gradient-black"></div>
                    <div class="flex mb-5 w-full items-center z-10">
                        <img class="mr-3 icon-carousel" src="assets/icons/procurement.svg">
                        <p class="text-myGreen">{{$data['card4title']}}</p>
                    </div>
                    <div class="flex flex-auto z-10">
                        <p class="font-semibold text-xl">{{$data['card4text']}}</p>
                    </div>
                </div>
                <div class="card-carousel cch cch-5" place="5">
                    <img class="gambar-carousel absolute" src="assets/images/core-service/e-commerce.jpg">
                    <div class="gradient-black"></div>
                    <div class="flex mb-5 w-full items-center z-10">
                        <img class="mr-3 icon-carousel" src="assets/icons/ecom.svg">
                        <p class="text-myGreen">{{$data['card5title']}}</p>
                    </div>
                    <div class="flex flex-auto z-10">
                        <p class="font-semibold text-xl">{{$data['card5text']}}</p>
                    </div>
                </div>
                <div class="card-carousel cch cch-6" place="6">
                    <img class="gambar-carousel absolute" src="assets/images/core-service/blockchain.jpg">
                    <div class="gradient-black"></div>
                    <div class="flex mb-5 w-full items-center z-10">
                        <img class="mr-3 icon-carousel" src="assets/icons/blockchain.svg">
                        <p class="text-myGreen">{{$data['card6title']}}</p>
                    </div>
                    <div class="flex flex-auto z-10">
                        <p class="font-semibold text-xl">{{$data['card6text']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="arrow-carousel ac-left"><-</div>
        <div class="arrow-carousel ac-right">-></div>
    </section>

    <section id="section-3" class="bg-white text-myBlack py-10">
        <div class="container mx-auto flex flex-col md:flex-row px-5 py-5 items-center mb-5">
            <div class="md:w-1/2 text-center md:text-left mb-5 md:mb-0">
                <h1 class="font-bold text-3xl md:text-5xl">Case Study</h1>
            </div>
            <div class="md:w-1/2 text-center md:text-left">
                <p class="text-lg">Kami memiliki beberapa contoh Studi Kasus yang dapat menjawab rasa penasaran anda</p>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="grid md:grid-cols-4 grid-cols-1 gap-5">
                @php
                $count = 0;
                @endphp

                @foreach ($section3 as $data)
                    @if ($count >= 4)
                        @break
                    @endif

                    <div class="case-study-card rounded-lg mx-3">
                        <div class="gradient-black"></div>
                        <img class="bg-case-img" src="{{ asset('storage/uploads/Section3/' . $data->case_image) }}">
                        <div class="flex flex-col p-7 h-full">
                            <p class="text-myGreen font-light mb-3 z-10">{{ $data->title }}</p>
                            <p class="text-white font-medium flex-auto z-10">{{ $data->small_description }}</p>
                            <a class="flex items-center justify-center py-2 bg-myGreen text-myBlack rounded-md font-semibold button-arrow z-10 hover:scale-110 duration-300" href="{{ route('casestudyslug', ['slug' => $data->id]) }}">Explore <img class="ml-4" src="assets/images/Arrow-2.svg" /></a>
                        </div>
                    </div>

                    @php
                    $count++;
                    @endphp
                @endforeach
            </div>
            <div class="w-full">
                <a href="{{ route('casestudy') }}" class="w-full md-w-max flex justify-center items-center pt-5 px-2">
                    <div class="w-full md:w-72 px-10 py-2 bg-myGreen text-black text-center font-bold rounded-lg hover:scale-110 transition duration-150 ease-in-out">Lihat Semua</div>
                </a>
            </div>
        </div>
    </section>

    <section id="section-4" class="bg-white text-myBlack py-10">
        @foreach ($section4 as $data)
        <div class="container mx-auto flex flex-col md:flex-row px-5 py-5 items-center mb-5">
            <div class="md:w-1/2">
                <h1 class="font-bold text-center md:text-left mb-5 md:mb-0 text-3xl md:text-5xl">How We Work</h1>
            </div>
            <div class="md:w-1/2">
                <p class="text-lg text-center md:text-left">{{$data['subtitle']}}</p>
            </div>
        </div>
        <div class="container mx-auto pb-10">
            <div class="method-card">
                <div class="card">
                    <img src="assets/images/how-we-work/planning-design.jpg" alt="">
                    <div class="card-title">
                        <h3>{{$data['card1title']}}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{$data['card1text']}}</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/how-we-work/development-testing.jpg" alt="">
                    <div class="card-title">
                        <h3>{{$data['card2title']}}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{$data['card2text']}}</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/how-we-work/handover-maintenance.jpg" alt="">
                    <div class="card-title">
                        <h3>{{$data['card3title']}}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{$data['card3text']}}</p>
                    </div>
                </div>
            </div>
        </div>  
        @endforeach
    </section>

    <section class='bg-myBlue text-white pb-12'>
        <div class="container mx-auto px-5 pt-20 mb-7">
            <h1 class="text-3xl md:text-5xl font-semibold mb-4 text-center md:text-left">Customer is Our<br/>Top Priority</h1>
            <p class="font-light text-center md:text-left">Kami mensurvey seluruh Client kami, dan hasilnya akan diberikan langsung ke CEO kami.</p>
        </div>

        <div class="container mx-auto mb-16 overflow-hidden relative">
            <div class="cust-quote-container flex justify-center md:justify-left relative">
                @foreach ($section5 as $index => $data) 
                <div class="cust-card flex flex-col md:flex-row indi-{{ $loop->index }} items-center {{ $loop->index === 0 ? 'active' : '' }} text-center md:text-left">
                    <img src="{{ asset('storage/uploads/section5/' . $data->person_image) }}" alt={{ $data->person_name }}>
                    <div class="mb-10">
                        <p class="md:text-6xl font-bold mb-5 md:w-2/3">"{{ $data->person_quote }}"</p>
                        <p class="font-bold">- {{ $data->person_name }}</p>
                        <p>{{ $data->person_company }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="circle-indicator flex gap-2">
                @foreach ($section5 as $index => $data) 
                    <span class="indi-circle flex w-3 h-3 bg-gray-200 rounded-full {{ $loop->index === 0 ? 'active' : '' }}" indicator="indi-{{ $loop->index }}"></span>
                @endforeach
            </div>
        </div>

        <div class="container flex flex-col md:flex-row bg-white mx-auto p-5 rounded-lg">
            <div class="bg-myBlack text-white rounded-lg p-5 md:w-1/4 order-last md:order-first">
                <p class="font-semibold mb-10">CODEHOUSE</p>
                <h2 class="text-4xl font-semibold mb-5">Start your journey with us.</h2>
                <h3 class="text-xl mb-10">Diskusikan keinginan anda bersama kami</h3>

                <div class="flex mb-4">
                    <img class="w-4 mr-4" src="assets/icons/handphone.svg">
                    <div>
                        <p class="font-medium"><a href="#">+62-895-6223-87600</a></p>
                        <p class="font-light">Jakarta</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <img class="w-4 mr-4" src="assets/icons/handphone.svg">
                    <div>
                        <p class="font-medium"><a href="#">+62-856-2874-500</a></p>
                        <p class="font-light">Bandung</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <img class="w-4 mr-4" src="assets/icons/handphone.svg">
                    <div>
                        <p class="font-medium"><a href="#">+65-8837-4219</a></p>
                        <p class="font-light">Singapore</p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <img class="w-5 mr-4" src="assets/icons/instagram.svg">
                    <div>
                        <p class="font-medium"><a href="">Codehouse.id</a></p>
                    </div>
                </div>
                <div class="flex mb-10">
                    <img class="w-8 -ml-1 mr-3" src="assets/icons/place.svg">
                    <div>
                        <p class="font-medium"><a href="">Boulevard Kelapa Gading RA19/11 
                            Jakarta 14240</a> </p>
                        <p class="font-light">Headquarter</p>
                    </div>
                </div>
            </div>
            <div class="md:w-3/4 px-5 text-black mb-10 md:mb-0" >
                <P class="font-bold mb-5">Looking For ?</P>
                <form action="{{ route('createform') }}" method="POST">
                    @csrf
                    <div class="flex flex-col md:flex-row mb-5 gap-4">
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input id="bordered-radio-1" type="radio" value="Website" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Website</label>
                        </div>
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input checked id="bordered-radio-2" type="radio" value="Android" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Android</label>
                        </div>
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input checked id="bordered-radio-3" type="radio" value="IOS" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-3" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">IOS</label>
                        </div>
                        <div class="flex grow items-center pl-4 border border-gray-200 rounded-lg">
                            <input checked id="bordered-radio-4" type="radio" value="Other" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-4" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                        </div>
                    </div>
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="client_email" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="client_name" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="company">Company</label><br>
                    <input type="text" id="company" name="client_company" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="phone">Phone</label><br>
                    <input type="text" id="phone" name="client_phone" class="border-gray-300 rounded-lg py-1 px-2 mb-3"><br>
                    <label for="how">How can we help ?</label><br>
                    <textarea type="text" rows="7" name="how_can_we_help" class="border-gray-300 rounded-lg py-1 px-2 mb-3" id="how"></textarea>
                    <button class="bg-myBlue w-full py-4 text-white font-medium rounded-lg border-2 border-myBlue hover:bg-transparent hover:border-myBlack  hover:text-myBlack duration-300">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-myBlack py-10">
        <div class="container mx-auto text-white">
            <div class="flex flex-col justify-center md:flex-row pt-5 pb-10 border-b-2">
                <img class="w-14 mx-auto md:mx-0 mb-5 md:mb-0" src="assets/images/logo-biru-bulat.png">
                <div class="flex flex-col md:flex-row text-center md:flex-auto items-center md:justify-end">
                    <p class="md:mr-10 mb-5 md:mb-0">Siap memulai ?</p>
                    <button class="py-3 px-10 bg-myBlue text-white rounded-md font-semibold border-2 border-myBlue hover:bg-transparent hover:border-white duration-300">Dapatkan Solusi Anda</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row py-10 nav-footer">
                <div class="md:w-1/5 text-center md:text-left mb-5 md:mb-0">
                    <p class="font-bold"><a href="#">CodeHouse Academy</a></p>
                    <p><a href="#">Roadmap</a></p>
                    <p><a href="#">Kurikulum</a></p>
                    <p><a href="#">Beasiswa</a></p>
                </div>
                <div class="md:w-1/5 text-center md:text-left mb-5 md:mb-0">
                    <p class="font-bold"><a href="#">About</a></p>
                    <p><a href="#">Our Story</a></p>
                    <p><a href="#">Meet The Team</a></p>
                </div>
                <div class="md:w-1/5 text-center md:text-left mb-5 md:mb-0">
                    <p class="font-bold"><a href="#">Jobs</a></p>
                    <p><a href="#">Job Archive</a></p>
                </div>
                <div class="md:w-1/5 text-center md:text-left mb-5 md:mb-0">
                    <p class="font-bold"><a href="#">Portfolio</a></p>
                </div>
                <div class="md:w-1/5 flex justify-center md:items-end md:justify-end text-center md:text-left">
                    <a href="#"><img class="w-7" src="assets/icons/instagram.svg"></a>
                </div>
            </div>
        </div>
    </footer>
@endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
  {{-- <script type="text/javascript" src="{{ URL::asset('build/assets/app-0d91dc04.js') }}"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>