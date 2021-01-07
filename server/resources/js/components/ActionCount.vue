<template>
    <div class="pt-2">
        <div class="row">
            <div class="col">
                <div v-for="template in actionData" :key="template.text">
                    <div class="card bg-primary mb-3">
                        <div class="card-body text-center card-height">
                            {{ template.text }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div v-for="(actionCount, index) in actionData" :key="actionCount.count">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h5>活動回数</h5>
                            <span class="h5">{{ actionCount.count }} 回</span>
                            <button class="btn btn-primary" @click="increment(index)">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data : function () {
            return {
                actionData: [],
            }
        },
        mounted: function() {
            this.getActionData();
        },
        methods: {
            getActionData: function() {
                axios.get('/api/get_action_data')
                .then( (res) => {
                    this.actionData = res.data;
                });
            },
            increment(index) {
                this.actionData[index].count += 1;
            },
        }	
    }
</script>

<style scoped>
.card-height {
    height: 106px;
}
</style>