<template>
    <section class="flex items-center bg-overlay-black-light min-h-screen-20vh bg-cover bg-center bg-no-repeat" style="background-image: url('https://stoughtonpolicerelief.org/templates/yootheme/cache/bg-hp-banner1-6254abef.jpeg');">
        <div class="container m-auto">
            <div class="flex items-center flex-col text-white tracking-wide">
                <h2 class="text-xl lg:text-3xl text-shadow-light heading-line"><span>DEDICATION AND COMMITMENT</span></h2>
                <h1 class="jumbo">{{ association.partialName }}</h1>
                <h3 class="text-1xl lg:text-3xl font-hairline italic text-shadow-light heading-line"><span>BRAVERY AND SERVICE</span></h3>
            </div>
        </div>
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
