<template>
    <form>
        <p>
            Blaze 1
        </p>
        <select v-model="form.character_id">
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
        <button type="button" @click="debug">Add</button>
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
        relation: Array,
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
        edit() {
            this.$inertia.put('/relations/' + relation.id , this.form);
        },
        debug(){
            console.log(relation);
        }
    }
}
</script>