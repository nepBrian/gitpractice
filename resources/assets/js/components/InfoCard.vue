<template>
    <div class="flex flex-1 w-full pl-10 my-4">
        <div class="uk-card p-8 bg-grey-light">
            <slot name="metatext"></slot>
            <slot name="title"></slot>
            <slot name="description"></slot>
            <slot name="button"></slot>
        </div>
    </div>
</template>
