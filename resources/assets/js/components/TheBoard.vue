<template>
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
                        <h6 class="text-lg uppercase mb-4">About the President</h6>
                        <h3 class="text-3xl font-hairline">President/Board</h3>
                        <p class="mt-4 mb-8 font-light leading-normal">The {{ association.fullName }} consists of 60 sworn officers and civilian personnel whom have taken an oath to maintain law and order for our citizens, and represent the finest element of our community.</p>
                        <button class="bg-blue-light hover:bg-blue text-white font-bold py-2 px-4 rounded-full">Read More</button>
                    </div>
                </div>

            </div> <!-- end of column-container-->
        </div> <!-- end of container-->
    </section>
</template>

<script>
    import { association } from '../data.json'

    export default {
        data() {
            return {
                association
            }
        }
    }
</script>
