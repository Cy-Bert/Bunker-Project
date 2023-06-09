<template>
    <bunker-layout>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="index()"
            >Retour</button>
        <div class="flex flex-wrap m-9 items-center justify-center bg-gray-900 rounded-lg">
            <div class="col-span-12 ">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                        <thead class="bg-gray-800 text-gray-200">
                            <th class="p-4 px-8">Id</th>
                            <th class="p-4">Name</th>
                            <th class="p-4">Description</th>
                            <th class="p-4 px-8">Type</th>
                            <th class="p-4">Character Id</th>
                            <th class="p-4">Actions</th>

                        </thead>

                        <tbody class="rounded-xl">
                            <tr class="bg-gray-800 text-gray-200 ">
                                <td class="p-4 text-center">{{ perk.id }}</td>
                                <td class="p-4 text-center">{{ perk.name }}</td>
                                <td class="p-4 text-center">{{ perk.desc }}</td>
                                <td class="p-4 text-center">{{ perk.type }}</td>
                                <td class="p-4 text-center">{{ perk.character_id }}</td>
                                <td class="action flex-col flex">
                                    <button @click="edit(perk)"
                                        class="bg-blue-400 my-2 mx-auto px-4 rounded hover:scale-105 hover:bg-blue-500 ease-in-out duration-75 text-white">Edit</button>

                                    <button @click="destroy(perk)"
                                        class="bg-red-500 my-2 mx-auto px-2 rounded hover:scale-105 hover:bg-red-600 ease-in-out duration-75 text-white">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </bunker-layout>
</template>

<script>
import BunkerLayout from './../../Layouts/BunkerLayout.vue';

export default {
    components: {
        BunkerLayout,
    },

    props: ['perk'],

    methods: {
        index: function () {
            this.$inertia.get('/perks')
        },
        destroy(perk) {
            // this.$inertia.delete('/perks/' + perk.id, perk)
            this.$inertia.delete(route('perks.destroy', perk))
        },

        edit(perk) {
            this.$inertia.get(route('perks.edit', perk));
        },
    },
}




</script>
