<template>
    <div>
        <v-container class="mainwrapper">
            <v-navigation-drawer permanent expand-on-hover>
                <v-list class="mt-10">
                    <v-list-item link>
                        Daily
                    </v-list-item>
                    <v-list-item link>
                        Weekly
                    </v-list-item>
                    <v-list-item link>
                        Monthly
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>
            <HeaderTab class="mb-3" />
            <MemoLine />
        </v-container>
    </div>
</template>

<script>
import MemoLine from '../components/MemoLine.vue'
import HeaderTab from '../components/HeaderTab.vue'
export default {
    components: {
        MemoLine,
        HeaderTab
    },
}
</script>

<style>
.mainwrapper {
    max-width: 1200px;
}
</style>
