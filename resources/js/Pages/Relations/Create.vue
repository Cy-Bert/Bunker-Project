<template>
    <form>
        <p>
            Blaze 1
        </p>
        <select>
            <option v-for="character in characters">{{ character.name }}</option>
        </select>
        <p>
            Blaze 2
        </p>
        <select>
            <option v-for="character in characters">{{ character.name }}</option>
        </select>
        <p>
            Relation
        </p>
        <input type="text">
    </form>
</template>
<script>
 import AppLayout from './../../Layouts/AppLayout.vue'

export default {
  components: {
    AppLayout,
  },
  props: ['relations', 'characters'],
  data() {
    return {
    }
}
}
</script>