<template>

</template>

<script>

    export default {
        created () {
            // window.addEventListener('scroll', this.stickyNav);
        },
        data() {
          return {
            // nav: nav,
            // topOfNav: topOfNav
          }
        },
        methods: {
            // stickyNav() {
            //     const nav = document.querySelector('#navbar');
            //     let topOfNav = nav.offsetTop;
            //     console.log(window.scrollY, topOfNav);
            //     if (window.scrollY >= topOfNav) {
            //       document.body.style.paddingTop = nav.offsetHeight + 'px';
            //       document.body.classList.add('fixed-nav');
            //     } else {
            //       document.body.classList.remove('fixed-nav');
            //       document.body.style.paddingTop = 0;
            //     }
            // },
            // smoothScrolling: function() {
            //     let x = document.querySelector('#about');
            //     x.scrollIntoView({
            //         behavior: 'smooth'
            //     });
            //     console.log(this.$refs);
            // }
        },
        destroyed () {
          // window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>

<style scoped>
   /* body.fixed-nav nav {
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
    }*/

</style>
