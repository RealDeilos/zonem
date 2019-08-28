<template>

    <a  :href="href" @click.prevent="scrollInto">
            <slot></slot>
        </a>

</template>
<script>
export default {
   props:['href'],
    methods: {
        scrollInto(){
            document.querySelector(this.href).scrollIntoView({behavior:'smooth'});
        }
    },
}
</script>
<style>

</style>
