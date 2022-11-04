<template>
  <v-app>
    <v-main>
      <MemoList/>
    </v-main>
  </v-app>
</template>

<script>
import MemoList from './view/MemoList.vue'

export default {
  name: 'App',

  components: {
    MemoList,
  },

  data: () => ({
    //
  }),
}
</script>
