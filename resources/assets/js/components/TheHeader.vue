<template>
    <div>
        <div name="header-mobile" class="block lg:hidden">
            <nav class="bg-white-lightest flex items-center justify-center relative">
                <div class="flex items-center flex-wrap">
                    <a href="#" class="no-underline flex justify-center items-center px-4"><img class="h-24" src="../../images/StoughtonPRA_BadgeLogo-tiny.png" alt="SPRA Badge"></a>
                </div>
                <div class="flex-wrap ml-auto">
                    <a class="px-4 text-2xl text-blue-darkest no-underline hover:text-blue-dark" href="#">☰</a>
                </div>
            </nav>
        </div>
        <div name="header" class="bg-blue-darkest hidden lg:block">
            <div class="tm-headbar-top py-4">
                <div class="container flex items-center m-auto">
                    <a href="/"><img class="invisible md:h-32 sm:h-24 sm:visible" src="../../images/StoughtonPRA_BadgeLogo.png" alt="SPRA Badge name"></a>
                    <div class="ml-auto">
                        <div class="flex items-center flex-col">
                            <div class="flex justify-end w-full mb-6">
                                <i class="fab fa-twitter mr-6 text-white text-3xl"></i>
                                <i class="fab fa-facebook-f mr-6 text-white text-3xl"></i>
                                <i class="fab fa-youtube text-white text-3xl"></i>
                            </div>
                            <a href="#" class="no-underline text-3xl text-white hover:underline">Join Our Mailing List!</a>
                            <span class="text-sm text-grey">"Stay Up To Date With Our Latest News!!!!"</span>
                        </div>
                    </div>
                </div>
            </div>
            <navbar-component></navbar-component>
        </div>
    </div>
</template>

<script>
    import NavbarComponent from './TheNavbar.vue'

    export default {
        components: {
            NavbarComponent
        }
    }
</script>
