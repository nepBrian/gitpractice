<template>
    <section class="bg-grey-darkest py-16">
        <div class="max-w-xl m-auto px-10">
            <h1 class="text-blue-lightest uppercase mb-4">{{ association.acronym }} Executive Board</h1>
            <div class="-ml-10 flex flex-wrap">
                <div class="flex w-full sm:w-1/2 lg:w-1/4 pl-10 my-4 justify-center">
                    <div class="rounded p-8 bg-grey-light w-full relative">
                        <img class="w-full rounded mb-4" src="https://picsum.photos/200/200?image=0" alt="Executive board president">
                        <h3 class="text-2xl font-hairline text-grey-darkest">President</h3><br />
                        <p class="uppercase font-bold">Joey Shmoey</p>
                        <a href="#" class="absolute pin-r pin-b m-4 bg-blue hover:bg-blue-dark text-grey-light p-1 rounded-full no-underline text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22" class="w-6 icon-mail">
                                <path style="fill: #fdfdfd;" d="M22 8.62V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.62l9.55 4.77a1 1 0 0 0 .9 0L22 8.62z"/>
                                <path style="fill: #fdfdfd;" d="M12 11.38l-10-5V6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v.38l-10 5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex w-full sm:w-1/2 lg:w-1/4 pl-10 my-4 justify-center">
                    <div class="rounded p-8 bg-grey-light w-full relative">
                        <img class="w-full rounded mb-4" src="https://picsum.photos/200/200?image=10" alt="Executive Board vice-president">
                        <h3 class="text-2xl font-hairline text-grey-darkest">Vice-President</h3><br />
                        <p class="uppercase font-bold">Guy Jones</p>
                        <a href="#" class="absolute pin-r pin-b m-4 bg-blue hover:bg-blue-dark text-grey-light p-1 rounded-full no-underline text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22" class="w-6 icon-mail">
                                <path style="fill: #fdfdfd;" d="M22 8.62V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.62l9.55 4.77a1 1 0 0 0 .9 0L22 8.62z"/>
                                <path style="fill: #fdfdfd;" d="M12 11.38l-10-5V6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v.38l-10 5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex w-full sm:w-1/2 lg:w-1/4 pl-10 my-4 justify-center">
                    <div class="rounded p-8 bg-grey-light w-full relative">
                        <img class="w-full rounded mb-4" src="https://picsum.photos/200/200?image=20" alt="Executive Board treasurer">
                        <h3 class="text-2xl font-hairline text-grey-darkest">Treasurer</h3><br />
                        <p class="uppercase font-bold">Derek Francisco</p>
                        <a href="#" class="absolute pin-r pin-b m-4 bg-blue hover:bg-blue-dark text-grey-light p-1 rounded-full no-underline text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22" class="w-6 icon-mail">
                                <path style="fill: #fdfdfd;" d="M22 8.62V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.62l9.55 4.77a1 1 0 0 0 .9 0L22 8.62z"/>
                                <path style="fill: #fdfdfd;" d="M12 11.38l-10-5V6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v.38l-10 5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex w-full sm:w-1/2 lg:w-1/4 pl-10 my-4 justify-center">
                    <div class="rounded p-8 bg-grey-light w-full relative">
                        <img class="w-full rounded mb-4" src="https://picsum.photos/200/200?image=30" alt="Executive Board secretary">
                        <h3 class="text-2xl font-hairline text-grey-darkest">Secretary</h3><br />
                        <p class="uppercase font-bold">John Reilly</p>
                        <a href="#" class="absolute pin-r pin-b m-4 bg-blue hover:bg-blue-dark text-grey-light p-1 rounded-full no-underline text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22" class="w-6 icon-mail">
                                <path style="fill: #fdfdfd;" d="M22 8.62V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.62l9.55 4.77a1 1 0 0 0 .9 0L22 8.62z"/>
                                <path style="fill: #fdfdfd;" d="M12 11.38l-10-5V6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v.38l-10 5z"/>
                            </svg>
                        </a>
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
