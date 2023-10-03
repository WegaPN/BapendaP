<nav class="bg-transparent z-30 top-0 fixed w-full hover:bg-sky-950 transition duration-300 ease-out ">
  <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-16 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
        <div class="flex">
  <div class="z-0 max-w-7xl flex items-center justify-between mx-auto p-4 sticky top-0">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-2">
            
          <ul class="flex space-x-4">
            <li><a href="{{ route('welcome') }}" class="text-white hover:text-gray-300">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-white hover:text-gray-300">About</a></li>
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                data-dropdown-trigger="hover"
                class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                type="button">Berita UPT <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 4 4 4-4" />
                </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownHover"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="{{ route('beutara') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Berita
                            Wilayah Utara</a>
                    </li>
                    <li>
                        <a href="{{ route('betimur') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Berita
                            Wilayah timur</a>
                    </li>
                    <li>
                        <a href="{{ route('betengah') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Berita
                            Wilayah Tengah</a>
                    </li>
                    <li>
                        <a href="{{ route('bebarat') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Berita
                            Wilayah Barat</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
                @auth
                    <li><a href="{{ route('berita.index') }}" class="text-white hover:text-gray-300">Berita</a></li>
                    <li><a href="{{ route('kategori.index') }}" class="text-white hover:text-gray-300">Kategori</a></li>
                    <li><a href="{{ url('/utara') }}" class="text-white hover:text-gray-300">Berita Utara</a></li>
                    <li><a href="{{ url('/timur') }}" class="text-white hover:text-gray-300">Berita Timur</a></li>
                    <li><a href="{{ url('/barat') }}" class="text-white hover:text-gray-300">Berita Barat</a></li>

                    @endauth
                @if(Auth::check())
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-white hover:text-gray-300">Sign Out</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" class="text-white hover:text-gray-300">login</a>
                </li>
            @endif                    </ul>
        </div>
    </div>
  </div>
</nav>

<script>
    var navbar = document.querySelector('nav')

window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('navscroll')
  } else {
    navbar.classList.remove('navscroll')
  }
}
</script>
