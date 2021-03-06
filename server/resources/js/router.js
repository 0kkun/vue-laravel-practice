// 以下はapp.jsで読み込む

import Vue from 'vue';
import Router from 'vue-router';

import ActionCount from './components/ActionCount.vue';
import SystemError from './pages/errors/System.vue'
import Top from './pages/Top.vue'
import ActionRanking from './pages/ActionRanking.vue'

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/mobile',
            name: 'Top',
            component: Top
        },
        {
            path: '/mobile/action-ranking',
            name: 'ActionRanking',
            component: ActionRanking
        },
        {
            path: '/mobile/500',
            component: SystemError
        }
    ]
});