<template>
    <v-row>
        <v-col class="d-flex justify-center align-center" cols="10">
            <textarea type="text" v-model="memo" placeholder="edit" class="add-memo-area" />
            <input v-model="date" class="add-date-area" type="date">
        </v-col>
        <v-col cols="2" class="d-flex justify-center align-center">
            <v-btn @click="addMemo">メモを追加</v-btn>
        </v-col>
    </v-row>
</template>

<script>

export default {
    data() {
        return {
            memo: '',
            date:'',
            url: 'http://127.0.0.1:8000/',
        }
    },
    methods: {
        addMemo() {
            this.$emit('addMemo',this.memo,this.date)
            this.memo = "";
        }
    }
}
</script>

<style>
.add-memo-area {
    width: 70%;
    border: 3px solid #f79428;
    border-radius: 3px;
}
.add-date-area{
    width: 30%;
    height: 100%;
}
</style>