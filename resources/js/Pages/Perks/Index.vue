<template>
    <BunkerLayout>
        <section>

            <div class="flex items-center justify-center min-h-screen bg-gray-900 flex-col">
                <button @click="create()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New
                    Perk</button>
                <div class="col-span-12">
                    <div class="overflow-auto lg:overflow-visible ">
                        <table class="table text-gray-400 border-separate space-y-6 text-sm">
                            <thead class="bg-gray-800 text-gray-500">
                                <tr>
                                    <th class="uppercase font-extrabold p-5">ID</th>
                                    <th class="uppercase font-extrabold p-3">Name</th>
                                    <th class="uppercase font-extrabold p-3">Desc</th>
                                    <th class="uppercase font-extrabold p-8">Type</th>
                                    <th class="uppercase font-extrabold p-3">Character Id</th>
                                    <th class="uppercase font-extrabold p-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr v-for="perk in perks" :key="perk.id" class="bg-gray-800">
                                    <td class="text-gray-300 text-center rounded-lg border-b border-black font-semibold ">{{ perk.id }}</td>
                                    <td class="text-gray-300 text-center font-normal rounded-lg border-b border-black">{{ perk.name }}
                                    </td>
                                    <td class="text-gray-300 text-center font-normal rounded-lg border-b border-black">{{ perk.desc }}
                                    </td>
                                    <td class="text-gray-300 text-center font-normal rounded-lg border-b border-black uppercase">{{ perk.type }}
                                    </td>
                                    <td class="text-gray-300 text-center font-normal rounded-lg border-b border-black">{{
                                        perk.character_id
                                    }}</td>
                                    <td class="action justify-center items-center content-center text-center font-normal rounded-lg border-b border-black gap-2 flex flex-wrap p-2" >
                                        <button @click="edit(perk)"
                                            class="bg-blue-400 my-1 mx-auto px-4 rounded hover:scale-105 hover:bg-blue-500 ease-in-out duration-75 text-white">Edit</button>
                                        <button @click="show(perk)"
                                            class="bg-amber-500 my-1 mx-auto px-2 rounded hover:scale-105 hover:bg-amber-600 ease-in-out duration-75 text-white">Show</button>
                                        <button @click="destroy(perk)"
                                            class="bg-red-500 my-1 mx-auto px-2 rounded hover:scale-105 hover:bg-red-600 ease-in-out duration-75 text-white">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </BunkerLayout>
</template>



<script>
import BunkerLayout from './../../Layouts/BunkerLayout.vue'

export default {
    components: {
        BunkerLayout,
    },

    props: ['perks'],

    methods: {
        destroy(perk) {
            // this.$inertia.delete('/perks/' + perk.id, perk)
            this.$inertia.delete(route('perks.destroy', perk))
        },

        edit(perk) {
            this.$inertia.get(route('perks.edit', perk));
        },

        create() {
            this.$inertia.get(route('perks.create'));
        },

        show(perk) {
            this.$inertia.get(route('perks.show', perk));
        },
    },
}
</script>
