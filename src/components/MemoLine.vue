<template>
    <v-row no-gutters class="task-list py-3">
        <v-col cols="3" sm="7" class="memo d-flex align-center px-1 py-3">
            {{ memoData.memo }}
        </v-col>
        <v-col cols="3" sm="2" class="date d-flex align-center justify-center px-1 py-3 ml-1">
            {{ memoData.scheduled_date }}
        </v-col>
        <v-col cols="6" sm="2" class="d-flex justify-center align-center">
            <v-btn class="ml-2 px-0" @click="SwitchDescriptionCard(memoData.id)">詳細</v-btn>
            <v-btn class="ml-2 px-0" @click="deleteMemo(memoData.id)">削除</v-btn>
        </v-col>
    </v-row>
</template>

<script>

export default {
    data() {
        return {
            url: 'http://127.0.0.1:8000/',
        }
    },
    props: {
        memoData: {
            type: Object
        }
    },
    methods: {
        SwitchDescriptionCard(id) {
            this.$emit('SwitchDescriptionCard',id)
        },
        deleteMemo(deleteId) {
            this.$emit('deleteMemo',deleteId)
        },
    }
}
</script>

<style>
.memo {
    background-color: #f5f5f5;
    border-radius: 6px;
}
.date {
    background-color: #f5f5f5;
    border-radius: 6px;
}
</style>