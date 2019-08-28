<template>
    <div >
        <h2 class="subtitle mt-5">FrameWorks knowledge... <em>and still learning</em></h2>
            <div class="d-flex align-items-center mt-1">
                 <img src="/images/laravel.png" alt="" class="logo img-thumbnail d-inline-block mr-5">
                <transition name="ballsin">
                    <div class="laravelball" v-if="ball1"></div>
                </transition>
                <transition name="ballsin2">
                    <div class="laravelball" v-if="ball1"></div>
                </transition>
                <transition name="ballsin3">
                    <div class="laravelball" v-if="ball1"></div>
                </transition>
                <transition name="ballsin4">
                    <div class="laravelballIncomplete" v-if="ball1"></div>
                </transition>
                <transition name="ballsin5">
                    <div class="laravelballIncomplete" v-if="ball1"></div>
                </transition>
            </div>
            <div class="d-flex align-items-center mt-2">
                <img src="/images/vue.png" alt="" class="logo img-thumbnail d-inline-block mr-5">
                <transition name="ballsin">
                    <div v-if="ball1" class="vueball">
                    </div>
                </transition>
                <transition name="ballsin2">
                    <div  v-if="ball1" class="vueball">
                    </div>
                </transition>
                    <transition name="ballsin3">
                    <div  v-if="ball1" class="vueballIncomplete">
                    </div>
                </transition>
                <transition name="ballsin4">
                    <div  v-if="ball1" class="vueballIncomplete">
                    </div>
                </transition>
                <transition name="ballsin5">
                    <div  v-if="ball1" class="vueballIncomplete">
                    </div>
                </transition>

            </div>
    </div>
</template>
<script>
export default {
       props:{
           ball1:{
               default:false
           }
       }
}
</script>
<style>
.logo{
    width: 100px;
    height: auto;
    border-radius: 50%;
}
.vueball{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #42b883;
    display: inline-block;
    margin-right: 2px;
    opacity: 1;
}
.vueballIncomplete{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #42b883;
    display: inline-block;
    margin-right: 2px;
    opacity: 0.2;
}
.laravelball{
   width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #f55247;
    display: inline-block;
    margin-right: 2px;
    opacity: 1;
}
.laravelballIncomplete{
   width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #f55247;
    display: inline-block;
    margin-right: 2px;
    opacity: 0.2;
}
.ballsin-enter-active{
    transition:all 0.5s ease;
}

.ballsin-enter{
    opacity: 0;
    transform: scale(0);
    background-color:transparent;
}
.ballsin2-enter-active{
    transition:all 1s ease;
}

.ballsin2-enter{
    opacity: 0;
    transform: scale(0);
    background-color:transparent;
}
.ballsin3-enter-active{
    transition:all 1.5s ease;
}

.ballsin3-enter{
    opacity: 0;
    transform: scale(0);
    background-color:transparent;
}
.ballsin4-enter-active{
    transition:all 2s ease;
}

.ballsin4-enter{
    opacity: 0;
    transform: scale(0);
    background-color:transparent;
}
.ballsin5-enter-active{
    transition:all 2.5s ease;
}

.ballsin5-enter{
    opacity: 0;
    transform: scale(0);
    background-color:transparent;
}

</style>
