<template>
    <div>
        <v-container class="mainwrapper">
            <NavigationDrower />
            <HeaderTab class="mb-3" />
            <MemoLine @SwitchDescriptionCard="SwitchDescriptionCard" />
            <DescriptionCard v-show="isDescriptionCard"/>
        </v-container>
    </div>
</template>

<script>
import MemoLine from '../components/MemoLine.vue'
import HeaderTab from '../components/HeaderTab.vue'
import NavigationDrower from '../components/NavigationDrower.vue'
import DescriptionCard from '../components/DescriptionCard.vue'

export default {
    components: {
        MemoLine,
        HeaderTab,
        NavigationDrower,
        DescriptionCard
    },
    data() {
        return {
            isDescriptionCard: false
        }
    },
    methods: {
        SwitchDescriptionCard() {
            this.isDescriptionCard = !this.isDescriptionCard
        }
    }
}
</script>

<style>
.mainwrapper {
    max-width: 1200px;
}
</style>
