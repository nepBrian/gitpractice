<template>
  <div>
    <ul class="list-reset flex justify-center xl:text-4xl lg:text-3xl md:text-2xl text-xl bg-blue-darker h-16 items-center">
      <li class="pl-8"><a href="#">Home</a></li>
      <li class="pl-8"><a href="#">About</a></li>
      <li class="pl-8"><a href="#">News/Events</a></li>
      <li class="pl-8"><a href="#">Supporters</a></li>
      <li class="pl-8"><a href="#">Contact</a></li>
      <li class="pl-8"><a href="#">Login</a></li>
      <li class="pl-8"><a href="#">Donate</a></li>
    </ul>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
