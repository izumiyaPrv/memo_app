<template>
    <div>
        <v-container class="mainwrapper">
            <NavigationDrower/>
            <HeaderTab class="mb-3" />
            <MemoLine />
        </v-container>
    </div>
</template>

<script>
import MemoLine from '../components/MemoLine.vue'
import HeaderTab from '../components/HeaderTab.vue'
import NavigationDrower from '../components/NavigationDrower.vue'

export default {
    components: {
        MemoLine,
        HeaderTab,
        NavigationDrower
    },
}
</script>

<style>
.mainwrapper {
    max-width: 1200px;
}
</style>
