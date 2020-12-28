import './bootstrap'
import Vue from 'vue'

// 使用するコンポーネントを呼び出せるようインポート
import ActionCount from './components/ActionCount'

// bladeでコンポーネントを呼び出す時に使う名前を定義
Vue.component('action-count-component', require('./components/ActionCount.vue').default);

// blade上のどのダグに、どのコンポーネントを使用するかを定義
const app = new Vue({
    el: '#shop-top-web',
    components: {
        ActionCount,
    }
});
