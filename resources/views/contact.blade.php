<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('components.head')
    <body>

        <div id="app">
            <header-component></header-component>
            <section class="container m-auto">
                <h1 class="text-5xl my-8">Contact Form</h1>
                <form class="w-full max-w-sm m-auto mb-8">
                  <div class="flex items-center border-b border-b-2 border-teal py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Full Name" aria-label="Full name">
                    <button class="flex-no-shrink bg-teal hover:bg-teal-dark border-teal hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded" type="button">
                      Sign Up
                    </button>
                    <button class="flex-no-shrink border-transparent border-4 text-teal hover:text-teal-darker text-sm py-1 px-2 rounded" type="button">
                      Cancel
                    </button>
                  </div>
                </form>
            </section>
            <footer-component></footer-component>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
