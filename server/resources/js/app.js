import './bootstrap'
import Vue from 'vue'
import router from './router'

// 使用するコンポーネントを呼び出せるようインポート
import ActionCount from './components/ActionCount'

// bladeでコンポーネントを呼び出す時に使う名前を定義
Vue.component('action-count-component', require('./components/ActionCount.vue').default)

// blade上のどのダグに、どのコンポーネントを使用するかを定義
document.addEventListener('DOMContentLoaded', function() {
    // idが無い場合はVueインスタンスを作成しないようにする
    if (document.getElementById("shop-top-web")) {
        const app = new Vue({
            el: '#shop-top-web',
            components: {
                ActionCount,
            }
        });
    }

    if (document.getElementById("mobile")) {
        const mobile = new Vue({
            el: '#mobile',
            router: router
        });
    }
}, false);

export default router