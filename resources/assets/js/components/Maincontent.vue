<template>
    <div class="h-screen bg-green-light">
        <section class="flex">
            <div class="bg-red">
                Main Content
            </div>
            <div class="bg-red-dark">
                Side Content
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
