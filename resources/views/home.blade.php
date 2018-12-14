<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('components.head')
    <body>
        <div id="app">
            <header-component></header-component>
            <homepage-jumbotron>
                <h1 slot="title" class="jumbo">STOUGHTON PRA</h1>
            </homepage-jumbotron>
            <section class="bg-grey-lightest py-16">
                <div class="max-w-xl m-auto px-10">
                    <div class="-ml-10 flex flex-wrap flex-col md:flex-row">

                        <div class="flex flex-1 w-full pl-10 my-4">
                            <div class="flex flex-auto flex-wrap">
                                <div class="flex-auto uk-card bg-grey-light bg-cover bg-center bg-no-repeat h-64 md:h-auto" style="background-image: url('https://stoughtonpolicerelief.org/templates/yootheme/cache/SPDMotorcycle-0374845a.jpeg');"></div>
                            </div>
                        </div>
                        <div class="flex flex-2 w-full pl-10 my-4">
                            <div class="uk-card p-8 bg-grey-light">
                                <h6 class="text-lg uppercase mb-4">About the SPRA</h6>
                                <h3 class="text-3xl font-hairline">Welcome/Our Mission</h3>
                                <p class="mt-4 mb-8 font-light leading-normal">The Stoughton Police Relief Association consists of 60 sworn officers and civilian personnel whom have taken an oath to maintain law and order for our citizens, and represent the finest element of our community.</p>
                                <button class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 rounded-full">Read More</button>
                            </div>
                        </div>

                    </div> <!-- end of column-container-->
                </div> <!-- end of container-->
            </section>

            <section class="bg-grey-darkest py-16">
                <div class="max-w-xl m-auto px-10">
                    <div class="-ml-10 flex flex-wrap flex-col md:flex-row">

                        <div class="flex flex-1 w-full pl-10 my-4">
                            <div class="flex flex-auto flex-wrap">
                                <div class="flex-auto uk-card bg-grey-light bg-cover bg-center bg-no-repeat h-64 md:h-auto" style="background-image: url('https://stoughtonpolicerelief.org/templates/yootheme/cache/SPDMotorcycle-0374845a.jpeg');"></div>
                            </div>
                        </div>
                        <div class="flex flex-1 w-full pl-10 my-4">
                            <div class="uk-card p-8 bg-grey-light">
                                <h6 class="text-lg uppercase mb-4">About the SPRA</h6>
                                <h3 class="text-3xl font-hairline">President/Board</h3>
                                <p class="mt-4 mb-8 font-light leading-normal">The Stoughton Police Relief Association consists of 60 sworn officers and civilian personnel whom have taken an oath to maintain law and order for our citizens, and represent the finest element of our community.</p>
                                <button class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 rounded-full">Read More</button>
                            </div>
                        </div>

                    </div> <!-- end of column-container-->
                </div> <!-- end of container-->
            </section>

            <section class="bg-grey-lightest py-16 px-10">
                <form class="w-full max-w-md m-auto">
                    <h1> CONTACT US </h1> <br/>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                            Name
                          </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Name">
                    </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                            E-Mail
                          </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="E-Mail">
                    </div>
                </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Subject
                          </label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-password" type="text" placeholder="Subject">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                            Message
                          </label>
                          <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-password" type="text" placeholder="Message"></textarea>
                          <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6 ">
                    <label class="md:w-2/3 block text-grey font-bold">
                      <input class="mr-2 leading-tight" type="checkbox">
                      <span class="text-sm">
                        Send a copy to yourself (Optional)
                      </span>
                    </label>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-2/3">
                      <button class="shadow button button-primary focus:shadow-outline focus:outline-none font-bold" type="button">
                        Send Email
                      </button>
                    </div>
                  </div>
                </form>

            </section>
            <!-- <half-half>
                <div slot="leftContent" class="flex flex-1 w-full pl-10 my-4">
                    <div class="uk-card p-8 bg-grey-light">
                        <h6 class="text-md uppercase mb-4">Leadership</h6>
                    </div>
                </div>
                <div slot="rightContent" class="flex flex-1 w-full pl-10 my-4">
                    <div class="uk-card p-8 bg-grey-light">
                        <h6 class="text-md uppercase mb-4">Mission</h6>
                    </div>
                </div>
            </half-half> -->
            <footer-component></footer-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
