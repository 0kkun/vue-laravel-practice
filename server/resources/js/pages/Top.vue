<template>
    <div class="container-fluid">
        <Header />
        <StoreInfo />
        <ActionCount />
        <DownButton />
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import StoreInfo from '../components/StoreInfo.vue'
import ActionCount from '../components/ActionCount.vue'
import DownButton from '../components/DownButton.vue'

export default {
    components: {
        Header,
        StoreInfo,
        ActionCount,
        DownButton,
    },
}
</script>
