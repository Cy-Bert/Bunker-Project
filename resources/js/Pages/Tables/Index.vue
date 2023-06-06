<template>
    <app-layout>
        <div class="bg-slate-200 w-[98%] mx-auto mt-8">
            <table class="table-fixed w-full">
                <thead class="">
                    <th class="px-4">id</th>
                    <th class="px-4">name</th>
                    <th class="px-4">desc</th>
                    <th class="px-4">status</th>
                    <th class="px-4">food</th>
                    <th class="px-4">heat</th>
                    <th class="px-4">heal</th>
                    <th class="px-4">ammo</th>
                    <th class="px-4">notes</th>
                </thead>

                <tbody class="">
                    <tr v-for="table in tables" class="border-slate-400 border-y-2">
                        <td class="px-4">{{ table.id }}</td>
                        <td class="px-4">{{ table.name }}</td>
                        <td class="px-4">{{ table.desc }}</td>
                        <td class="px-4">{{ table.status }}</td>
                        <td class="px-4">{{ table.food }}</td>
                        <td class="px-4">{{ table.heat }}</td>
                        <td class="px-4">{{ table.heal }}</td>
                        <td class="px-4">{{ table.ammo }}</td>
                        <td class="px-4">{{ table.notes }}</td>

                        <button @click="edit(table)" class="bg-blue-400 my-3 mx-auto px-4 rounded hover:scale-105 hover:bg-blue-500 ease-in-out duration-75">edit</button>
                        <button @click="destroy(table)" class="bg-red-500 my-3 mx-auto px-2 rounded hover:scale-105 hover:bg-red-600 ease-in-out duration-75">delete</button>
                    </tr>
                </tbody>
            </table>
        </div>
        <button @click="create(table)" class="mx-auto bg-red-500 hover:scale-105 hover:bg-red-600 ease-in-out duration-75 rounded w-20 h-8 block mt-4">Add +</button>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },

        props: ['tables'],

        methods: {
            destroy(table) {
                this.$inertia.delete('/tables/' + table.id, table)
            },

            edit(table) {
                this.$inertia.get('/tables/' + table.id + '/edit' , table);
            },

            create(table) {
                this.$inertia.get('/tables/create', table);
            },
        },
    }
</script>
