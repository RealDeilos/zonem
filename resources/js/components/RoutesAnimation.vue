<template>
    <div>
        <nav class="navbar is-fixed-top is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
                    <router-link to="/" tag="a" class="navbar-item" exact>
                        Home
                    </router-link>
                    <router-link to="/work" tag="a" class="navbar-item">
                        <a>Speak</a>
                   </router-link>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
              <span class="icon">
                <i class="fab fa-twitter"></i>
              </span>
              <span>
                Tweet
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-primary" href="https://github.com/jgthms/bulma/releases/download/0.7.5/bulma-0.7.5.zip">
              <span class="icon">
                <i class="fas fa-download"></i>
              </span>
              <span>Download</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>

            <div class="">
                    <transition appear name="fade">
                            <router-view class="page"></router-view>
                    </transition>
            </div>

    </div>
</template>
<script>
export default {

}
</script>
<style>
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
