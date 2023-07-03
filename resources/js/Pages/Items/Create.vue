<template>
    <app-layout>
        <div class="flex my-2">
            <label class="m-auto">name</label>
            <input v-model="form.name" type="text"
                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                placeholder="Nom">
        </div>
        <div class="flex my-2">
            <label class="m-auto">desc</label>
            <input v-model="form.desc" type="text"
                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                placeholder="Description">
        </div>
        <div class="flex my-2">
            <label for='status' class="m-auto">Stats</label>
            <input v-model="form.stats" type="text"
                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                placeholder="Description">


        </div>

        <div class="flex my-2">
            <p class="my-auto mx-auto">charachter_ID</p>
            <input v-model="form.character_id" type="text"
                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                placeholder="Notes">
        </div>
        <div class="flex w-full justify-end">
            <button @click="create()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
        </div>
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
                desc: null,
                stats: null,
                character_id: null,
            },
        }
    },

    methods: {
        create() {

            this.$inertia.post('/items', this.form)
        }
    }
}

</script>