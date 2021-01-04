<template>
    <div class="container-fluid">
        <Header />
        <StoreInfo />
        <ActionCount />
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import StoreInfo from '../components/StoreInfo.vue'
import ActionCount from '../components/ActionCount.vue'

export default {
    components: {
        Header,
        StoreInfo,
        ActionCount,
    },
}
</script>
