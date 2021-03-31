require('./bootstrap');

import Vue from 'vue';
import Showlists from './components/Showlists.vue'


Vue.components('Showlists',require('./components/Showlists.vue').default);

const app = new Vue({
    el: '#app',
    components: {
    Showlists
    }
});





//new Vue({
//    el:'#app',
//    {
//        path: '/travellers',
//        name: 'list',
//        brforeEnter: guardMyroute,
//        component: RoleUpdate,
//        params: true,
//        meta: {
//            title: 't List'
//        }
//    }
//});



//components:{
//
//},
//
//mounted:function () {
//    
//    axios.get('https://127.0.0.1:8000/api/post')
//        .then(response => this.posts = response.data);
//
//},
//data:{
//    posts:null,
//}
//

//Vue.component('vtab',require('./components/vtab.vue').default)
//const app = new Vue({
//    el: '#app'
//})