<template>
    <div class="container-fluid font-weight-bold">
        <UpButton />
        <div class="card">
            <div class="card-title bg-primary text-white h2 text-center p-1">省エネランキング</div>
            <div class="card-body border-bottom">
                <div class="row">
                    <div class="col">
                        <div class="h3 text-left">電力使用量</div>
                    </div>
                    <div class="col">
                        <div class="h3 text-right">3位</div>
                        <div class="h4 text-right">( 目標比 95% )</div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <div class="h3 text-left">活動回数</div>
                    </div>
                    <div class="col">
                        <div class="h3 text-right">1位</div>
                        <div class="h4 text-right">( 当月 41 回 )</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import UpButton from '../components/UpButton.vue'

export default {
    components: {
        UpButton,
    },
}
</script>
