<template>
    <div>
          <section class="section" id="aboutme">
                    <div class="container">
                    <h1 class="title mb-5">The Web Developer You Are Looking For</h1>
                      <div class="row mt-5">
                          <div class="col">
                                <img src="/images/profile.jpg" class="box" alt="profile" id="perfil">
                          </div>
                          <div class="col">
                                      <h2 class="subtitle mt-3">
                                          <strong>I'm kidding, but stay and take a look...</strong>

                                            </h2>
                                                <em>My name is EM and I’m a Web Developer and UX Designer based in the passionate Buenos Aires, Argentina with a few years of experience using the basics web technologies in the coolest ways, sometimes as a Contractor for US-based agencies, sometimes as a Freelancer and some other times just for fun but always trying to get the best from each experience.
                                            Yes, I speak Spanish!</em>
                                               <br>

                          </div>
                          </div>
                          <div class="row justify-content-center">
                              <div class="col-2">
                                             <scroll href="#skills" class="ascroll">
                                                         <h2 class="atext subtitle is-primary">
                                                             <strong>See my Profile, <i class="fa fa-arrow-down" aria-hidden="true"></i></strong>
                                                         </h2>

                                                    </scroll>
                              </div>
                          </div>






                    </div>
            </section>

                 <section id="separator1">
                    </section>

                <section class="section" id="skills">
                    <div class="container" v-scroll="handleScroll">
                        <skills-component :ball1="balls"></skills-component>
                    </div>
                </section>
                 <section id="separator2">
                    </section>
                    <scroll v-if="arrow" @click="scrollToTop" href="#app">
                        <i class="fas fa-angle-double-up fa-7x is-primary arrowUp"></i>
                    </scroll>
    </div>
</template>
<script>
import SmoothScrollingVue from '../components/SmoothScrolling.vue';
import SkillsComponent from '../components/SkillsComponent.vue';
Vue.directive('scroll',{
    inserted:function(el,binding){
        let f=function(evt){
            if(binding.value(evt,el)){
                window.removeEventListener('scroll',f)
            }
        }
        window.addEventListener('scroll',f);
    }
})
export default {
    data() {
        return {
            balls:false,
            arrow:false,
        }
    },
    components:{
        'scroll':SmoothScrollingVue,
        'skills-component':SkillsComponent,
    },
       methods: {

            handleScroll: function(evt,el){
                var windowBottom=$(window).scrollTop()+$(window).innerHeight();//JQUERY
                var elBottom=el.offsetTop;

                if(elBottom<windowBottom){
                        this.arrow=true;
                        this.balls=true;
                }else{
                    this.arrow=false;
                    this.balls=false;
                }

                // console.log(el.getBoundingClientRect().top);
                // console.log(window.scrollY);
                // console.log('elemento'+el.offsetTop);
                    // if(window.scrollY==el.getBoundingClientRect().top){
                    //     alert('llegaste');
                    // }
            },
              scrollToTop(event){
                alert(event);
           },
    },
}
</script>
<style>
    #aboutme{
        padding-top: 10%;
        background-color:rgba(53, 153, 123, 0.068);
    }

    #skills{
        padding-top: 4%;
    }
    #perfil{
            transform: rotate(4deg);
            box-shadow: 0 0.2rem 1.2rem rgba(0,0,0,0.2);
            filter: grayscale(100%);
            margin-right: 0%;
    }
    #perfil{
            transform: rotate(4deg);
            box-shadow: 0 0.2rem 1.2rem rgba(0,0,0,0.2);
            filter: grayscale(100%);
            margin-right: 0%;
    }
    #perfil:hover{
        transform: scale(1.2,1.2) rotateX(-4deg);
        filter:none;
        transition: all 0.35s;
    }
    h2.atext strong{
        color: hsl(171, 100%, 41%);
    }
    h2.atext strong:hover{
        transition: all 0.3s cubic-bezier(0.000, 0.000, 0.230, 1);
         -webkit-background-clip: text;
         background-clip: text;
          -webkit-text-fill-color: transparent;
        background-image: linear-gradient(to right, hsl(171, 100%, 41%),hsl(236, 100%, 41%),hsl(268, 100%, 41%) );
         background-position: 0%;
    }
    h2.atext::before{
        position: absolute;
        left: 0;
        bottom: 0;
        width: 20%;
        height: 1px;
        background: hsl(171, 100%, 41%);
        content: "";
    }
    h2.atext:hover::before{
        transition: all 0.5s ease;
        background:linear-gradient(to right,hsl(171, 100%, 41%),hsl(268, 100%, 41%)) ;
        width: 90%;
    }
    .ascroll:hover{
        text-decoration: none;
    }
    .arrowUp{
        position: fixed;
        bottom: 100px;
        right: 250px;

        color: hsla(171, 100%, 41%, 0.705);


    }
     .arrowUp:hover{
         cursor: pointer;
        color: hsl(171, 100%, 41%);
    }
 /* #aboutme::before{
        content:"";
        position: absolute;
        top: 0;
        left: 0;
        background:rgba(0, 0, 255, 0);
        height: 100%;
        width: 100%;

    } */
    /* #aboutme::after{
        content:"";
        position: absolute;
        top: 30;
        left: 0;
        height: 1px;
        background:blue;
        width: 100%;
        z-index: 100;

    } */


</style>
