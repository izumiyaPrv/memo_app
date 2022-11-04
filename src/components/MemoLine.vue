<template>
    <v-row no-gutters class="task-list py-3">
        <v-col cols="6" sm="10" class="task-name d-flex align-center px-1 py-3">
            かいがいしゅっちょう
        </v-col>
        <v-col cols="6" sm="2" class="d-flex justify-center align-center">
            <v-btn class="ml-2 px-0" @click="SwitchDescriptionCard">詳細</v-btn>
            <v-btn class="ml-2 px-0">削除</v-btn>
        </v-col>
    </v-row>
</template>

<script>
export default {
    props: {
    },
    methods: {
        SwitchDescriptionCard() {
            this.$emit('SwitchDescriptionCard')
        }
    }
}
</script>

<style>
.task-name {
    background-color: #f5f5f5;
    border-radius: 6px;
}
</style>