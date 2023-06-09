<template>
    <bunker-layout>
        <button @click="index()" class="bg-slate-300 rounded py-2 px-3 ">Retour</button>

        <div class="px-4">
            <div v-if="errors.name" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.name }}</div>
            <div class="flex my-5">
                <p class="mx-auto my-auto">nom</p>
                <input v-model="form.name" type="text"
                    class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                    id="exampleFormControlInput1" placeholder="Nom">
            </div>
            <div v-if="errors.desc" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.desc }}</div>
            <div class="flex my-5">
                <p class="my-auto mx-auto">desc</p>
                <input v-model="form.desc" type="text"
                    class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                    id="exampleFormControlInput1" placeholder="Description">
            </div>
            <div v-if="errors.type" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.type }}</div>
            <div class="flex my-5">
                <p class="my-auto mx-auto">type</p>
                <input v-model="form.type" type="text"
                    class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                    id="exampleFormControlInput1" placeholder="Type">
            </div>
            <div v-if="errors.character_id" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.character_id
            }}</div>
            <div class="flex my-5">
                <p class="my-auto mx-auto">character_id</p>
                <input v-model="form.character_id" min="0" type="number"
                    class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                    id="exampleFormControlInput1" placeholder="character_id">
            </div>

            <!-- <div v-if="$page.errors.notes" class="text-red-500">{{ $page.errors.notes[0] }}</div> -->
        </div>
        <div class="flex w-full justify-end">
            <button @click="update(form)"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </div>
    </bunker-layout>
</template>

<script>
import BunkerLayout from './../../Layouts/BunkerLayout.vue'

export default {
    components: {
        BunkerLayout,
    },

    props: ['perk', 'data', 'errors'],

    data() {
        return {
            form: {
                name: this.perk.name,
                desc: this.perk.desc,
                type: this.perk.type,
                character_id: this.perk.character_id,
            },
        }
    },

    methods: {
        edit: function (perk) {
            this.form = Object.assign({}, data);
        },

        update: function (perk) {
            this.$inertia.put('/perks/' + this.perk.id, perk);
        },

        index: function () {
            this.$inertia.get('/perks')
        },
    },
}




</script>
