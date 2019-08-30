<template>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg" :class="navbarClass" v-scroll="other">
            <router-link to="/" tag="a" class="navbar-brand ml-5" exact >
             <img src="/images/logo.png" alt="Developer Web back-end front-end Enzo Minniti" class="logoEnzo" :class="logoAnimated" >
      </router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse"  id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
               <router-link to="/" tag="a" class="nav-link">
                                    <div class="control">
                                        <a class="atext"><strong>Home</strong></a>
                                     </div>
                            </router-link>
      </li>
      <li class="nav-item">
              <router-link to="/contact" tag="a" class="nav-link" >
                             <div class="control">
                                    <a class="atext"><strong>Contact</strong></a>
                             </div>


                             </router-link>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item mr-5">
                            <div class="control">
                                        <a href="https://www.linkedin.com/in/enzo-minniti-82ba81105/" class="atext">
                                        <strong>
                                            <i class="fab fa-linkedin fa-2x iconMy"></i>
                                                Linkedin
                                        </strong>
                                        </a>
                                </div>
            </li>
            <li class="nav-item mr-5">
                        <div class="control">
                                <a href="https://www.github.com/RealDeilos?tab=repositories" class="atext">
                                    <strong>
                                        <i class="fab fa-github fa-2x iconMy"></i>
                                            GitHub
                                    </strong>
                                    </a>

                            </div>
            </li>
    </ul>
  </div>
</nav>



                    <transition appear name="fade">
                            <router-view class="page"></router-view>
                    </transition>


        </div>

</template>
<script>
export default {

    data() {
        return {
            navbarClass:'navbar-light',
            logoAnimated:'',

        }
    },
            methods:{
                other(evt,el){

                    var windowBottom=$(window).scrollTop();//JQUERY
                    if(windowBottom==0){
                            el.style.opacity='1';
                            el.style.backgroundColor='rgb(255, 255, 255)';
                            this.navbarClass='navbar-light';
                            this.logoAnimated='animated tada';
                    }
                    if(windowBottom!=0){
                            el.style.opacity='0.7';
                            el.style.backgroundColor='black';
                            this.navbarClass='navbar-dark';
                            this.logoAnimated='';
                           }
            },
         },
         watch: {
                $route(to,from){
                    // var x=document.getElementById('elnavbar');
                    // console.log(x);
                   $('#navbarNav').collapse('hide');
                }
         },
}
</script>
<style>
    .logoEnzo{
        height: 50px;
        width: auto;
    }
    .fade-enter-active{
       transition: all 1s ease;
    }
    .fade-leave-active{
        transition: all 0.5s ease;
    }
    .fade-enter{
         opacity: 0;
         transform: translateX(30px);
    }
    .fade-leave{
        opacity: 0;
        transform: translateX(-30px);
    }


</style>
