<template>
    <app-layout>
        <form>
            <label>Name :</label>
            <input v-model='form.name'>
            <label>Age :</label>
            <input v-model='form.age'>
            <label>Size (in cm) :</label>
            <input v-model='form.size'>
            <label>Gender :</label>
            <select v-model='form.gender'>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="non-binaire">Non-binaire</option>
            </select>
            <label>Body shape :</label>
            <input v-model='form.body_shape'>
            <label>Personality :</label>
            <input v-model='form.personality'>
            <label>Type :</label>
            <select v-model='form.type'>
                <option value="PJ">PJ</option>
                <option value="PNJ">PNJ</option>
            </select>
            <label>Notes :</label>
            <input v-model='form.notes'>
        </form>
        <button @click="debug()">debug</button>
        <button @click="create()">store</button>
    </app-layout>
 </template>

<script>

    import AppLayout from './../../Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },
        data() {
            return {
                form: {
                    name: null,
                    age: null,
                    size: null,
                    gender: null,
                    body_shape: null,
                    personality: null,
                    type: null,
                    notes: null
                }
            }
        },
        methods: {
            debug() {
                console.log(this.form);
            },
            create() {
                this.$inertia.post(route('characters.store'), this.form);
            },
        },
    }

</script>