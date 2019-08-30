<template>
    <div>
          <section class="section" id="aboutme">
                    <div class="container">
                    <h1 class="title mb-5">Looking for a Web Developer?, I can help you</h1>
                      <div class="row mt-5">
                          <div class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6">
                                <img src="/images/profile.jpg" class="box" alt="profile" id="perfil">
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 firstSubtitle">
                                      <h2 class="subtitle mt-3">
                                          <strong>Coding is Heaven!, only when everything goes right...</strong>

                                            </h2>
                                                <em>
                                                    Just kidding! For some reason, don't know why yet, I dived into this passion for Web Development.<br>
                                                    My first steps started a couple of years ago when some big ominous text on my screen told me that everything was going to blow up.<br>
                                                    In some strange way I became addicted to that feeling you get when you need to solve a problem and nothing comes up to you. You understand me, right?<br>
                                                    If you don't like it as much as I do, but you have a project and are in fact trying to avoid this situations, maybe I can do it for you! Look into my profile, Enzo ZoneM. I'm here to save you from a headache.
                                                     </em>
                                               <br>

                          </div>
                          </div>
                          <div class="row justify-content-center">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 secondTag">
                                             <scroll href="#skills" class="ascroll">
                                                         <h2 class="atext subtitle">
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
                    <div class="container" id="containerScroll" v-scroll="handleScroll">
                        <skills-component :ball1="balls"></skills-component>
                    </div>

                </section>

                 <section id="separator2">
                    </section>

                <section class="section" id="worksDisplay">
                    <div class="container" id="workImage" v-scroll="handleScroll">
                                 <div class="row justify-content-start">
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 mt-4 mb-5">
                                    <h2 class="subtitle">
                                        Check Out... My first Work & proud of it
                                    </h2>

                                       <a class="juegohistoria atext" href="http://www.historiaeconomica.dhalumnos.com/">
                                         <strong>http://www.historiaeconomica.dhalumnos.com/</strong></a>
                            </div>
                        </div>
                         <div class="row justify-content-center workcontent">
                            <first-work :firstwork="firstwork" id="componentFirstWork"></first-work>

                        </div>
                    </div>

                </section>

                        <section id="footerBackground">
                                                <h5 class="subtitlecolor">© 2019 Enzo Minniti | All Rights Reserved.</h5>

                         </section>

                    <!-- flecha de scroll -->
                    <scroll id="arrowScroll" v-if="arrow" @click="scrollToTop" href="#app">
                        <i class="fas fa-angle-double-up fa-7x is-primary arrowUp"></i>
                    </scroll>
    </div>
</template>
<script>
import SmoothScrollingVue from '../components/SmoothScrolling.vue';
import SkillsComponent from '../components/SkillsComponent.vue';
import FirstWork from '../components/FirstWork';

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
            firstwork:false,
        }
    },
    components:{
        'scroll':SmoothScrollingVue,
        'skills-component':SkillsComponent,
        'first-work':FirstWork,
    },

       methods: {

            handleScroll: function(evt,el){
                var windowBottom=$(window).scrollTop()+$(window).innerHeight();//JQUERY
                var elBottom=el.offsetTop;
                if(el.id=="containerScroll")
                {
                        if(elBottom<windowBottom){
                                                this.arrow=true;
                                                this.balls=true;
                                        }else{
                                            this.arrow=false;
                                            this.balls=false;
                                        }
                }
                if(el.id=="workImage")
                {
                              if(elBottom<windowBottom){
                                                this.firstwork=true;
                                        }else
                                        {
                                                this.firstwork=false;
                                        }
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
    #perfil:hover{
        transform: scale(1.2,1.2) rotateX(-4deg);
        filter:none;
        transition: all 0.35s;
    }
    .atext strong{
        color: hsl(171, 100%, 41%);
    }
    .atext strong:hover{
        transition: all 0.3s cubic-bezier(0.000, 0.000, 0.230, 1);
         -webkit-background-clip: text;
         background-clip: text;
          -webkit-text-fill-color: transparent;
        background-image: linear-gradient(to right, hsl(171, 100%, 41%),hsl(236, 100%, 41%),hsl(268, 100%, 41%) );
         background-position: 0%;
    }
    .atext::before{
        position: absolute;
        left: 0;
        bottom: 0;
        width: 20%;
        height: 1px;
        background: hsl(171, 100%, 41%);
        content: "";
    }
    .atext:hover::before{
        transition: all 0.5s ease;
        background:linear-gradient(to right,hsl(171, 100%, 41%),hsl(268, 100%, 41%)) ;
        width: 90%;
    }
    .juegohistoria.atext:hover::before{
        transition: all 0.5s ease;
        background:linear-gradient(to right,hsl(171, 100%, 41%),hsl(268, 100%, 41%)) ;
        width: 50%;
    }
    .ascroll:hover{
        text-decoration: none;
    }
    .arrowUp{
        position: fixed;
        bottom: 100px;
        right: 250px;
        color: hsla(171, 100%, 41%, 0.774);
    }
     .arrowUp:hover{
        cursor: pointer;
        color: hsl(171, 100%, 41%);
    }
    .iconMy{
       color: hsl(171, 100%, 41%);
    }
    .subtitlecolor{
        color: hsl(171, 100%, 41%);
        width: fit-content;
        display: block;
        margin-left: auto;
        margin-right: 5%;
        margin-top: 0.5%;
        padding-bottom: 0.5%;
    }
    #footerBackground{
        /* position: absolute; */
        /* bottom: 0; */
        height:50px;
        /* width: 100%; */
        background-color:transparent;
        /* box-shadow: 0 0.2rem 1.2rem rgba(0,0,0,0.2); */
    }
    #worksDisplay{
         background-color:rgba(53, 153, 123, 0.068);
    }
    @media(max-width:700px){
        #arrowScroll{
            display: none;
        }
        #footerBackground{
            height: 5vh;
        }
        #perfil{
            margin-left: 30px;
        }

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
