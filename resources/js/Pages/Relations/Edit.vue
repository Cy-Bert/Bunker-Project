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
        <button type="button" class="shadow p-1" @click="update(form)">Add</button>
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
            
            form: {
                character_id: this.relation.character_id ,
                to_character_id: this.relation.to_character_id ,
                relation: this.relation.relation
            }
        }
    },
    methods: {
        edit() {
            this.$inertia.put('/relations/' + relation.id , this.form);
        },
        update: function(data) {
                this.$inertia.put('/relations/' + this.relation.id, data);
            },
        debug(){
            console.log(this.characters);
        }
    }
}
</script>