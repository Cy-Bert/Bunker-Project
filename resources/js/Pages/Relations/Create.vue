<template>
    <form class="mt-72 ml-[50rem]">
        <p>
            Blaze 1
        </p>
        <select v-model="form.character_id" class="">
            <option :value="character.id" v-for="character in characters">{{ character.name }}</option>
        </select>
        <p>
            Blaze 2
        </p>
        <select v-model="form.to_character_id">
            <option :value="character.id" v-for="character in characters">{{ character.name }}</option>
        </select> 
        <p>
            Relation
        </p>
        <input type="text" v-model="form.relation">
        <button type="button" @click="create" class="border border-black bg-plus rounded p-2 h-8 w-8 hover:border-grey">
        </button>
    </form>
</template>
<script>
import AppLayout from './../../Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },
    
    props: {
        characters: Array,
        relations: Array,
    },

    data() {
        return {
            characters: this.characters,
            form: {
                character_id: null,
                to_character_id: null,
                relation: null
            }
        }
    },
    methods: {
        create() {
            this.$inertia.post('/relations',this.form);
        },
        debug(){
            console.log(this.form);
        }
    }
}
</script>