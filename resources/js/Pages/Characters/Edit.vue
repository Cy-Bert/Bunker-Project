<template>
    <app-layout>
        <form>
            <label>Name :</label>
            <input v-model="form.name">
            <label>Age :</label>
            <input v-model="form.age">
            <label>Size (in cm) :</label>
            <input v-model="form.size">
            <label>Gender :</label>
            <select v-model="form.gender">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="non-binaire">Non-binaire</option>
            </select>
            <label>Body shape :</label>
            <input v-model="form.body_shape">
            <label>Personality :</label>
            <input v-model="form.personality">
            <label>Type :</label>
            <select v-model="form.type">
                <option value="PJ">PJ</option>
                <option value="PNJ">PNJ</option>
            </select>
            <label>Notes :</label>
            <input v-model="form.notes">
        </form>
        <button @click="back()">Back</button>
        <!-- <button @click="update()">Update</button> -->
    </app-layout>
 </template>
<script>

import AppLayout from './../../Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },
    props: { 
        character: Array,
    },  
    methods: {
        update() {
            this.$inertia.put('characters.store', this.form);
        },
        back() {
            this.$inertia.get(route('characters.index'));
        },
    },
    data() {
        return {
            form: {
                name: this.character.name,
                age: this.character.age,
                size: this.character.size,
                gender: this.character.gender,
                body_shape: this.character.body_shape,
                personality: this.character.personality,
                type: this.character.type,
                notes: this.character.notes
            }
        }
    },
    watch: {
        form: {
            handler(val, oldVal) {
                this.update()
            },
            deep: true
        },
    }
}
</script>