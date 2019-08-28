import './bootstrap';
import router from './routes';
import RouteAnimation from './components/RoutesAnimation.vue';



const app = new Vue({
    el:'#app',
    router,
    components:{
        'route-animation':RouteAnimation,
    },

})
