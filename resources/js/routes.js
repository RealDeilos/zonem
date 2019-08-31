import vueRouter from 'vue-router';
import about from './views/about.vue';
import contact from './views/contact.vue';

let routes=[
    {
        path:'/',
        component:about
    },
    {
        path:'/contact',
        component:contact
    }
];

export default new vueRouter({
    routes,
    linkActiveClass:'active-one',
    scrollBehavior(to,from,savedPosition){

        return {x:0,y:0}
    }
})

