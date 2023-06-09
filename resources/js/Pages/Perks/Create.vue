<template>
    <bunker-layout>

        <button @click="index()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Retour</button>

        <div class="flex items-center justify-center">
            <div class=" bg-gray-900 rounded-lg p-5">
                <div class="flex my-2">
                    <label class="m-auto text-white px-7">Nom</label>
                    <input v-model="form.name" type="text"
                        class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                        placeholder="Nom">
                </div>
                <div class="flex my-2">
                    <label class="m-auto text-white px-7">Description</label>
                    <input v-model="form.desc" type="text"
                        class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                        placeholder="Description">
                </div>
                <div class="flex flexl my-2 mx-4">
                    <label for='type' class="m-auto text-white px-7">Type</label>
                    <select v-model="form.type" class="rounded-lg">
                        <option value="Bonus">Bonus</option>
                        <option value="Malus">Malus</option>
                    </select>

                    <!-- <p class="my-auto mx-auto">Status</p>
            <input v-model="form.status"  class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Statut"> -->
                </div>

                <div class="flex my-2">
                    <p class="my-auto mx-auto text-white px-7">Character_id</p>
                    <input v-model="form.character_id" type="text"
                        class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                        placeholder="Character_id">
                </div>
                <div class="flex w-full justify-end">
                    <button @click="create(perk)"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                </div>
            </div>
        </div>
    </bunker-layout>
</template>

<script>


import BunkerLayout from './../../Layouts/BunkerLayout.vue'

export default {
    components: {
        BunkerLayout,
    },

    data() {
        return {
            form: {
                name: null,
                desc: null,
                type: null,
                character_id: null,
            },
        }
    },

    methods: {
        create() {
            // console.log(this.form);
            this.$inertia.post('/perks', this.form)
        }
    }
}

</script>
