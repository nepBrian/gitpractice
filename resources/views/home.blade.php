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
                <div style="max-width: 1200px;" class="container m-auto px-10">
                    <div class="-ml-10 flex flex-wrap flex-col md:flex-row">
                        <div class="flex flex-1 w-full pl-10 my-4">
                            <div class="flex flex-auto flex-wrap">
                                <div class="flex-auto uk-card bg-grey-light bg-cover bg-center bg-no-repeat h-64 md:h-auto" style="background-image: url('https://stoughtonpolicerelief.org/templates/yootheme/cache/SPDMotorcycle-0374845a.jpeg');"></div>
                            </div>
                        </div>
                        <div class="flex flex-1 w-full pl-10 my-4">
                            <div class="uk-card p-8 bg-grey-light">
                                <h6 class="text-lg uppercase mb-4">About the SPRA</h6>
                                <h3 class="text-3xl font-hairline">Our Mission</h3>
                                <p class="mt-4 mb-8 font-light leading-normal">The Stoughton Police Relief Association consists of 85 sworn officers and civilian personnel whom have taken an oath to maintain law and order for our citizens, and represent the finest element of our community.</p>
                                <button class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 rounded-full">Read More</button>
                            </div>
                        </div>
                        <div class="flex flex-1 w-full pl-10 my-4">
                            <div class="uk-card p-8 bg-grey-light">
                                <h6 class="text-md uppercase mb-4">Leadership</h6>
                                <h3 class="text-3xl font-hairline">President's Message</h3>
                                <p class="mt-4 mb-8 font-light leading-normal">As President of the Stoughton Police Relief Association, and on behalf of our entire membership, thank you for your ongoing support. We are fortunate to be part of a close-knit community that cares, which makes our outreach even more impactful.</p>
                                <button class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 rounded-full">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <half-half>
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
            </half-half>
            <footer-component></footer-component>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
