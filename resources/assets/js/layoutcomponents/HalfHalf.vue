<template>
    <section class="flex flex-wrap items-center bg-overlay-black-light bg-cover bg-center bg-no-repeat py-10">
        <div class="container m-auto">
            <div slot="leftContent" class="flex flex-1 w-full -ml-10">
                <div class="pl-10 flex flex-1 w-full pl-10 my-4">
                    <div class="uk-card p-8 bg-grey-light">
                        <h6 class="text-md uppercase mb-4">Leadership</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container m-auto">
            <slot name="rightContent"></slot>
        </div>
    </section>
</template>
