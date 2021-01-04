<template>
    <div class="p-2 bg-info">
        <div class="row pt-2">
            <div class="col-7 h4 font-weight-bold text-center">
                {{ cons }} kwh
            </div>
            <div class="col-5 h4 font-weight-bold text-center">
                目標比 {{ consRatio }} ％
            </div>
        </div>
    </div>
</template>


<script>

export default {
    data : function () {
        return {
            cons: 43212,
            consRatio: 95,
        }
    },
}
</script>