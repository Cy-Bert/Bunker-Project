<template>
    <bunker-layout>
        <div class="flex my-2">
            <label class="m-auto">name</label>
            <input v-model="form.name"  type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Nom">
        </div>
        <div class="flex my-2">
            <label class="m-auto">desc</label>
            <input v-model="form.desc" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Description">
        </div>
        <div class="flex my-2 mx-4">
            <label for='status' class="m-auto">Type</label>
            <select v-model="form.type">
                <option value="bonus">Bonus</option>
                <option value="malus">Malus</option>
            </select>

            <!-- <p class="my-auto mx-auto">Status</p>
            <input v-model="form.status"  class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Statut"> -->
        </div>

        <div class="flex my-2">
            <p class="my-auto mx-auto">Character_id</p>
            <input v-model="form.character_id" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Character_id">
        </div>
        <div class="flex w-full justify-end">
            <button @click="create(perk)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
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
