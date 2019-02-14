<template>
    <section class="bg-grey-lightest py-16 px-10">
        <form class="w-full max-w-md m-auto">
            <h1> CONTACT US </h1> <br/>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Name
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Name">
            </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    E-Mail
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="E-Mail">
            </div>
        </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Subject
                  </label>
                  <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-password" type="text" placeholder="Subject">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Message
                  </label>
                  <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-password" type="text" placeholder="Message"></textarea>
                  <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6 ">
            <label class="md:w-2/3 block text-grey font-bold">
              <input class="mr-2 leading-tight" type="checkbox">
              <span class="text-sm">
                Send a copy to yourself (Optional)
              </span>
            </label>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-2/3">
              <button class="shadow button button-primary focus:shadow-outline focus:outline-none font-bold" type="button">
                Send Email
              </button>
            </div>
          </div>
        </form>
    </section>
</template>
