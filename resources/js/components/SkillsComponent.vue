<template>
<div>
       <div class="row justify-content-start">
           <div class="col-10">
                       <h2 class="subtitle mt-4">FrameWorks knowledge... <em>& Working on it</em></h2>
            <div class="d-flex align-items-center mt-1 ml-5">
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
            <div class="d-flex align-items-center mt-2 ml-5">
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
    </div>
    <div class="row justify-content-start mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 class="subtitle mt-4">Language knowledge... <em>fundamentals OOB of course!</em></h2>
                    <i class="fas fa-laptop-code fa-2x"></i>
                    <br>
                    <ol>
                        <li>Php 7+</li>
                        <li>JS ECMAScript 6</li>
                        <li>Mysql</li>
                        <li>git</li>
                        <li>Scrum workflow</li>
                        <li>node.js</li>
                        <li>Ajax</li>
                        <li>Html5/css3</li>
                    </ol>

        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h2 class="subtitle mt-4">
                Degrees & Studies
            </h2>
            <i class="fas fa-graduation-cap fa-2x"></i>
            <ol>
                <li>Full Stack Web Developer. Digital House</li>
                <li>Vue.js. Educación IT</li>
            </ol>

        </div>

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
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: #42b883;
    display: inline-block;
    margin-right: 10px;
    opacity: 1;
}
.vueballIncomplete{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: #42b883;
    display: inline-block;
    margin-right: 10px;
    opacity: 0.2;
}
.laravelball{
   width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: #f55247;
    display: inline-block;
    margin-right: 10px;
    opacity: 1;
}
.laravelballIncomplete{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: #f55247;
    display: inline-block;
    margin-right: 10px;
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
