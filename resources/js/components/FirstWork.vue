<template>
   <transition name="changeback">

       <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 box firstwork"  v-if="firstwork">

                                <img src="/images/firstwork.jpg" class="img-fluid" alt="">

         </div>
         </transition>


</template>
<script>
export default {
    props:{
        firstwork:{
            default:false
        }
    },
    data() {
        return {

        }
    },
}
</script>
<style>
    .firstwork::before{
        content:"";
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to right,hsl(171, 100%, 41%),hsl(268, 100%, 41%));
        opacity: 0.2;
        border-radius:6px;
    }
    .firstwork:hover{
       transition: all 2s ease;
       transform: scale(1.5);
    }
     .changeback-enter-active{
        transition: all 3s ease;
    }
    .changeback-enter{
         /* filter: blur(5px); */
         opacity: 0;
    }

    @media(max-width: 700px){
    .firstwork:hover{
        transition: none;
        transform: none;
    }
    .eljuegodelahistoria{
        position: relative;
        display: block;
    }
    }


/*
    .changeback-enter-active{
        transition: all 10s ease;
    }
    .changeback-enter{
        opacity: 0;
    } */


</style>
