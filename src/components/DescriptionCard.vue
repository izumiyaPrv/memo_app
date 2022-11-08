<template>
    <v-card max-width="374" class="mx-auto py-5">
        <v-row>
            <v-col class="d-flex justify-center align-center font-weight-bold">MEMOの詳細</v-col>
        </v-row>
        <v-row>
            <v-col class="d-flex justify-center align-center">作成日</v-col>
            <v-col class="d-flex justify-center align-center">{{ description ? description["created_at"] : "" }}</v-col>
        </v-row>
        <v-row>
            <v-col class="d-flex justify-center align-center">更新日</v-col>
            <v-col class="d-flex justify-center align-center">{{ description ? description["updated_at"] : "" }}</v-col>
        </v-row>
        <v-row>
            <v-col class="d-flex justify-center align-center">memo</v-col>
            <v-col class="d-flex justify-center align-center">{{ description ? description["memo"] : "" }}</v-col>
        </v-row>
        <v-btn class="d-block mx-auto mt-5" width="200">削除</v-btn>
    </v-card>
</template>

<script>
export default {
    data() {
        return {
            descriptionData: []
        }
    },
    props: {
        description: Object
    },
}
</script>

<style>

</style>