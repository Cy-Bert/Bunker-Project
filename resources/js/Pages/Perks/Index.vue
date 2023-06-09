

<template>
    <BunkerLayout>
        <section>
            <button @click="create()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Perk</button>
            <div class="tbl-header  mb-1 border-2">
                <div class="w-full table-fixed">
                    <table>
                        <thead class="bg-[#db0a0a23]">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Type</th>
                            <th>Character Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="bg">
                            <tr v-for="perk in perks" :key="perk.id">
                                <td class="text-center font-normal rounded-lg border-b border-black ">{{ perk.id }}</td>
                                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.name }}</td>
                                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.desc }}</td>
                                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.type }}</td>
                                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.character.name
                                }}</td>
                                <td
                                    class="action justify-center items-center content-center text-center font-normal rounded-lg border-b border-black">
                                    <button @click="edit(perk)"
                                        class="bg-blue-400 my-3 mx-auto px-4 rounded hover:scale-105 hover:bg-blue-500 ease-in-out duration-75">edit</button>
                                    <button @click="destroy(perk)"
                                        class="bg-red-500 my-3 mx-auto px-2 rounded hover:scale-105 hover:bg-red-600 ease-in-out duration-75">delete</button>
                                    <button @click="show(perk)"
                                        class="bg-amber-500 my-3 mx-auto px-2 rounded hover:scale-105 hover:bg-amber-600 ease-in-out duration-75">show</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
