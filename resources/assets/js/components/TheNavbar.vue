<template>
  <div class="hidden xl:block">
<!--     <ul class="list-reset flex justify-center items-center bg-blue-lightest uppercase tracking-wide font-semibold py-8 xl:text-md">
      <li class="pl-8"><a class="text-blue hover:text-blue-dark no-underline" href="/">Home</a></li>
      <li class="pl-8"><a class="text-blue hover:text-blue-dark no-underline" href="#">About</a></li>
      <li class="pl-8"><a class="text-blue hover:text-blue-dark no-underline" href="#">News</a></li>
      <li class="pl-8"><a class="text-blue hover:text-blue-dark no-underline" href="#">Supporters</a></li>
      <li class="pl-8"><a class="text-blue hover:text-blue-dark no-underline" href="contact">Contact</a></li>
      <li class="pl-8"><a class="text-blue hover:text-blue-dark no-underline" target="_blank" href="https://www.nepconnect.review/login">Login</a></li>
    </ul> -->
    <nav class="flex items-center bg-blue-lightest p-6 font-sans antialiased">
      <div class="flex items-center flex-no-shrink text-blue mr-6">
        <span class="font-bold italic text-xl tracking-tight">Stoughton PRA</span>
      </div>
      <div class="flex items-center">
        <dropdown-link>
          <span slot="link" class="appearance-none flex items-center inline-block text-blue hover:text-blue-dark font-medium">
                <span class="mr-1">Tailwind CSS</span>
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
          </span>
          <div slot="dropdown" class="bg-white shadow rounded border overflow-hidden">
            <a href="#" class="no-underline block px-4 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-blue">Tickets</a>
            <a href="#" class="no-underline block px-4 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-blue">Reports</a>
            <a href="#" class="no-underline block px-4 py-3 border-b text-grey-darkest bg-white hover:text-white hover:bg-blue">Manage</a>
          </div>
        </dropdown-link>
      </div>
    </nav>
  </div>
</template>
