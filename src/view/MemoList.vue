<template>
    <div>
        <v-container class="mainwrapper">
            <NavigationDrower />
            <HeaderTab class="mb-3" />
            <AddMemoListVue @addMemo="addMemo" />
            <MemoLine @SwitchDescriptionCard="SwitchDescriptionCard" @deleteMemo="deleteMemo"
                v-for="memoData in memosData" :key="memoData.id" :memoData="memoData" />
            <DescriptionCard class="description-card" v-show="isDescriptionCard" :description="description" de/>
        </v-container>
    </div>
</template>

<script>
import MemoLine from '../components/MemoLine.vue'
import HeaderTab from '../components/HeaderTab.vue'
import NavigationDrower from '../components/NavigationDrower.vue'
import DescriptionCard from '../components/DescriptionCard.vue'
import AddMemoListVue from '../components/AddMemoList.vue'
import axios from 'axios'

export default {
    components: {
        MemoLine,
        HeaderTab,
        NavigationDrower,
        DescriptionCard,
        AddMemoListVue,
    },
    data() {
        return {
            isDescriptionCard: false,
            url: 'http://127.0.0.1:8000/',
            sort: 'desc',
            memosData: [],
            descriptionId: "",
            descriptionDatas: ""
        }
    },
    methods: {
        SwitchDescriptionCard(id) {
            this.isDescriptionCard = !this.isDescriptionCard
            this.descriptionId = id;
        },
        getMemo() {
            const url = this.url + 'api/v1/get'
            axios.get(url, {
                params: {
                    sort: this.sort
                }
            }).then(response => {
                this.memosData = response.data;
            }).catch(() => {
            })
        },
        deleteMemo(deleteId) {
            const url = this.url + 'api/v1/delete'
            axios.delete(url, {
                params: {
                    id: deleteId
                }
            }).then(() => {
                this.getMemo();
            }).catch(() => {
            })
        },
        addMemo(memo) {
            if (!memo == "") {
                const url = this.url + 'api/v1/add'
                axios.post(url, {
                    memo: memo
                }).then(() => {
                    this.getMemo();
                }).catch(() => {
                })
            }
        }
    },
    computed: {
        description: function () {
            return this.memosData.filter(memo => memo.id === this.descriptionId)[0]
        }
    },
    mounted() {
        this.getMemo()
    }
}
</script>

<style>
.mainwrapper {
    max-width: 1200px;
}

.description-card {
    width: 375px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
}
</style>
