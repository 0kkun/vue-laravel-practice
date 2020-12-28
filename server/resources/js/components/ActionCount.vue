<template>
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title text-center">活動回数</h5>
            <div class="card-text">
                <span class="h4">{{ actionCount }} 回</span>
                <button class="btn btn-primary" @click="increment">OK</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data : function () {
            return {
                actionCount: 0,
            }
        },
        methods: {
            increment() {
                this.actionCount += 1;
            }
        }	
    }
</script>

<style>
</style>