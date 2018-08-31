<template>
    <div class="relative">
      <div role="button" class="inline-block select-none" @click="open = !open">
        <slot name="link"></slot>
      </div>
      <div class="absolute pin-r w-full mt-2" v-show="open">
        <slot name="dropdown"></slot>
      </div>
    </div>
</template>

<script>
    export default {
        data() {
          return {
            open: false
          }
        }
    }
</script>
