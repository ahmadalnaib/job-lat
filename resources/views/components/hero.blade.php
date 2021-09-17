{{-- 
      <!-- Main Hero Content -->
      <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
        <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block">Start Get Your</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Next Great Job</span></h1>
        <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Whether you're looking to move to a new role or just seeing what's availble, we've gethered this comprehensive list of open positions from a variety of companies and locations for you to choose from.</div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{route('listings.create')}}" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Post Now
                </a>
                <span class="absolute top-0 right-0 px-4 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-400 rounded-full">Free</span>
            </span>
            <a href="#" class="mt-3 text-sm text-indigo-500">Learn More</a>
        </div>
    </div>


    <!-- End Main Hero Content -->

    <form class="flex w-full justify-center items-end" action="{{route('listings.index')}}" method="get">
      <div class="relative mr-4 w-full lg:w-1/2 text-left">
        <input type="text" id='search' name='search' value="{{request('search')}}" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="php,doctor">
      </div>
      <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
  
      
    </form> --}}

<!-- Section 1 -->
<section class="relative bg-no-repeat bg-cover bg-center" style="background-image: url('/storage/bg.webp')">
  <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-30"></div>

  <div class="relative z-20 px-4 py-24 mx-auto text-center text-white max-w-7xl lg:py-32">
      <div class="flex flex-wrap text-white">
          <div class="relative w-full px-4 mx-auto text-center xl:flex-grow-0 xl:flex-shrink-0">

              <h1 class="mt-0 mb-2 text-4xl font-bold text-white sm:text-5xl lg:text-7xl">Top jobs in the Germany</h1>
              <p class="mt-0 mb-4 text-base text-white sm:text-lg lg:text-xl">
                Whether you're looking to move to a new role or just seeing what's available, we've gathered this comprehensive list of open positions from a variety of companies and locations for you to choose from.
              </p>

          </div>
      </div>
  </div>

  <div class="relative z-30 h-48 px-10 bg-white lg:h-32">
      <form  ction="{{route('listings.index')}}" method="get" class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 bg-white rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
          <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
              <input type="text" id='search' name='search' value="{{request('search')}}" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="Keywords, location, job type...">
          </div>
          <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>
          
          <div class="w-full h-full lg:w-auto">
              <button type="submit" class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 lg:w-64">SEARCH</button>
          </div>
      </form>
  </div>

</section>



