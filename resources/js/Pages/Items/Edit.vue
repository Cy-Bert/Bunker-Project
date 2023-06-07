<template>
    <app-layout>
        <button @click="index()" class="bg-slate-300 rounded py-2 px-3 ">Retour</button>

        <div class="px-4">
        <div class="flex my-2">
            <p class="mx-auto my-auto">nom</p>
            <input v-model="form.name" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Nom">
        </div>
        <div class="flex my-2">
            <p class="my-auto mx-auto">desc</p>
            <input v-model="form.desc" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Description">
        </div>
        <div class="flex my-2">
            <p class="my-auto mx-auto">Stats</p>
            <input v-model="form.stats" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Statut">
        </div>
        <div class="flex my-2">
            <p class="my-auto mx-auto">Character_ID</p>
            <input v-model="form.character_id" min="0" type="number" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Nourriture">
        </div>
      
        <div class="flex w-full justify-end">
            <button @click="update(form)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </div>
    </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },

        props: ['item', 'data', ''],

        data() {
            return {
                form: {
                    name: this.item.name,
                    desc: this.item.desc,
                    stats: this.item.stats,
                    character_id: this.item.character_id,
                },
            }
        },

        methods: {
            edit: function(data) {
                this.form = Object.assign({}, data);
            },

            update: function(data) {
                this.$inertia.put('/items/' + this.item.id, data);
            },

            index: function() {
                this.$inertia.get('/items')
            },
        },
    }
</script>