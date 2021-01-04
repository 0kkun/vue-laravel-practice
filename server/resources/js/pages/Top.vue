<template>
    <div class="container-fluid">
        <Header />
        <StoreInfo />
        <Consumption />
        <ActionCount />
        <DownButton />
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import StoreInfo from '../components/StoreInfo.vue'
import Consumption from '../components/Consumption.vue'
import ActionCount from '../components/ActionCount.vue'
import DownButton from '../components/DownButton.vue'

export default {
    components: {
        Header,
        StoreInfo,
        Consumption,
        ActionCount,
        DownButton,
    },
}
</script>
