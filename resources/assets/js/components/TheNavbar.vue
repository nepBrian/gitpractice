<template>
  <nav id="navbar" class="hidden lg:block">
    <ul class="list-reset flex justify-center items-center bg-blue-lightest uppercase tracking-wide font-semibold py-8 lg:text-md">
      <!-- <li class="pl-10"><a class="text-blue hover:text-blue-dark no-underline" href="/">Home</a></li> -->
      <li class="pl-10"><a class="text-blue hover:text-blue-dark no-underline" href="#about">About</a></li>
      <!-- <li class="pl-10"><a class="text-blue hover:text-blue-dark no-underline" href="#">News</a></li> -->
      <li class="pl-10"><a class="text-blue hover:text-blue-dark no-underline" href="#board-members">Board Members</a></li>
      <li class="pl-10"><a class="text-blue hover:text-blue-dark no-underline" href="#contact">Contact</a></li>
      <!-- <li class="pl-10"><a class="text-blue hover:text-blue-dark no-underline" target="_blank" href="https://www.nepconnect.review/login">Login</a></li> -->
    </ul>
  </nav>
</template>

<script>
    import { association } from '../data.json'

    export default {
        created () {
            // window.addEventListener('scroll', this.stickyNav);
        },
        data() {
          return {
            association: association
            // nav: nav,
            // topOfNav: topOfNav
          }
        },
        methods: {
            stickyNav() {
                // const nav = document.querySelector('#navbar');
                // let topOfNav = nav.offsetTop;
                // console.log(window.scrollY, this.topOfNav);
                // if (window.scrollY >= this.topOfNav) {
                //   document.body.style.paddingTop = nav.offsetHeight + 'px';
                //   document.body.classList.add('fixed-nav');
                // } else {
                //   document.body.classList.remove('fixed-nav');
                //   document.body.style.paddingTop = 0;
                // }
            }
        },
        destroyed () {
          // window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>

<style scoped>
    body.fixed-nav nav {
      position: fixed;
      box-shadow:0 5px 0 rgba(0,0,0,0.1);
    }

    nav {
      background:black;
      top:0;
      width: 100%;
      transition:all 0.5s;
      position: relative;
      z-index: 1;
    }

</style>
