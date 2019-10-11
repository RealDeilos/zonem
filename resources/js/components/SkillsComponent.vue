<template>
<div>
       <div class="row justify-content-start">
           <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                       <h2 class="subtitle mt-4">FrameWorks knowledge... <em>& Working on it</em></h2>
            <div class="d-flex align-items-center mt-1 ml-4 ml-sm-4 ml-md-5">
                 <img src="/images/laravel.png" alt="" class="logo img-thumbnail d-inline-block mr-3 mr-sm-3 mr-md-5">

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
                    <div class="laravelballHalf" v-if="ball1"></div>
                </transition>
                    <div class="laravelballIncomplete"></div>


            </div>
            <div class="d-flex align-items-center mt-2 ml-4 ml-sm-4 ml-md-5">
                <img src="/images/vue.png" alt="" class="logo img-thumbnail d-inline-block mr-3 mr-sm-3 mr-md-5">
                <transition name="ballsin">
                    <div v-if="ball1" class="vueball">
                    </div>
                </transition>
                <transition name="ballsin2">
                    <div  v-if="ball1" class="vueball">
                    </div>
                </transition>
                    <transition name="ballsin3">
                    <div  v-if="ball1" class="vueballHalf">
                    </div>
                </transition>

                    <div  v-if="ball1" class="vueballIncomplete">
                    </div>


                    <div  class="vueballIncomplete">
                    </div>



           </div>
            </div>
    </div>
    <div class="row justify-content-start mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 class="subtitle mt-4">Language knowledge... <em>fundamentals OOP of course!</em></h2>
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
       },
       data() {
           return {
               ball2:false,
               ball3:false,
               ball4:false,
           }
       },
       methods: {
           change(){
               console.log('hola');
           }
       },
       watch: {
           ball1:function(){
               this.ball2=false;
               this.ball3=false;
               this.ball4=false;
           }
       },
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
    display: inline-block;
    background:linear-gradient(to left,#42b88341 50%, #42b883 50%);
    background-size:300% 150%;
    background-position: left bottom;
    margin-right: 10px;
}
.vueballIncomplete{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: inline-block;
    background:#42b88341;
    margin-right: 10px;
}
.laravelball{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: inline-block;
    background:linear-gradient(to left,#f5534746 50%, #f55247 50%);
    background-size:300% 150%;
    background-position: left bottom;
    margin-right: 10px;
}
.laravelballIncomplete{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: inline-block;
    background:#f5534746;
    margin-right: 10px;
}
.ballsin-enter-active{
    transition:all 1s ease;
    transition-delay: .2s;
}

.ballsin-enter{
    background:linear-gradient(to left,#f5534746 50%, #f55247 50%);
    background-size:300% 150%;
    background-position: right bottom;
}
.ballsin2-enter-active{
    transition:all 1s ease;
    transition-delay: .4s;
}
.ballsin2-enter{
    background:linear-gradient(to left,#f5534746 50%, #f55247 50%);
    background-size:300% 150%;
    background-position: right bottom;
}
.ballsin3-enter-active{
    transition:all 1s ease;
    transition-delay: .7s;
}
.vueballHalf{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: inline-block;
    background:linear-gradient(to left,#42b88341 75%, #42b883 25%);
    background-size:200% 100%;
    background-position: left bottom;
    margin-right: 10px;
}
.ballsin3-enter{
    background:linear-gradient(to left,#f5534746 50%, #f55247 50%);
    background-size:200% 100%;
    background-position: right bottom;
}
.laravelballHalf{
     width: 35px;
    height: 35px;
    border-radius: 50%;
    display: inline-block;
    background:linear-gradient(to left,#f5534746 70%, #f55247 30%);
    background-size:200% 100%;
    background-position: left bottom;
    margin-right: 10px;
}
.ballsin4-enter-active{
    transition:all 1s ease;
    transition-delay:1s;
}
.ballsin4-enter{
    background:linear-gradient(to left,#f5534746 50%, #f55247 50%);
    background-size:200% 100%;
    background-position: right bottom;
}

@media(max-width:600px){
    .vueball,.vueballIncomplete,.laravelball,.laravelballIncomplete,.laravelballHalf,.vueballHalf{
        width: 25px;
        height: 25px;
        margin-right: 5px;
        margin-left: 5px;
    }

}
</style>
