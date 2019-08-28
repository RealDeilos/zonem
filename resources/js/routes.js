import vueRouter from 'vue-router';
import about from './views/about.vue';
import work from './views/work.vue';

let routes=[
    {
        path:'/',
        component:about
    },
    {
        path:'/work',
        component:work
    }
];

export default new vueRouter({
    routes,
    linkActiveClass:'is-active'
})

