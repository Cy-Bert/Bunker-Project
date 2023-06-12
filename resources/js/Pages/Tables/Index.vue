<template>
    <app-layout>
        <video src="https://dydx.exchange/wave.webm" muted autoplay loop class="absolute z-10 w-auto min-w-full min-h-full max-w-none "> </video>
        <div class="text-slate-200 w-full pt-8 relative z-40">
            <table class="table-fixed mx-20 border-2 border-slate-400 bg-black/[.40]">
                <thead class="">
                    <th class="px-4 text-left w-20">id</th>
                    <th class="px-4 text-left w-52">name</th>
                    <th class="px-4 text-left">desc</th>
                    <th class="px-4 text-left w-32">status</th>
                    <th class="px-4 text-left w-20">food</th>
                    <th class="px-4 text-left w-20">heat</th>
                    <th class="px-4 text-left w-20">heal</th>
                    <th class="px-4 text-left w-20">ammo</th>
                    <th class="px-4 text-left">notes</th>
                    <th class="px-4 text-left">Boutons ?</th>
                </thead>

                <tbody class="w-full ">
                    <tr v-for="table in tables" class="border-slate-400 border-y-2">
                        <td class="px-4 text-left w-20">{{ table.id }}</td>
                        <td class="px-4 text-left w-52">{{ table.name }}</td>
                        <td class="px-4 text-left">{{ table.desc }}</td>
                        <td class="px-4 text-left">{{ table.status }}</td>

                        <td class="px-4 text-left w-20">{{ table.food }}
                            <button v-on:click="counter +=1" >+ </button>
                            <button v-on:click="counter -=1">- </button>
                        </td>

                        <td class="px-4 text-left w-20">{{ table.heat }}</td>
                        <td class="px-4 text-left w-20">{{ table.heal }}</td>
                        <td class="px-4 text-left w-20">{{ table.ammo }}</td>
                        <td class="px-4 text-left">{{ table.notes }}</td>
                            <div class="justify-evenly flex w-fit mr-4">
                                <button @click="edit(table)" class="text-stone-800 bg-blue-400 my-3 mx-2 px-2 rounded hover:scale-105 hover:bg-blue-600 ease-in-out duration-75">edit</button>
                                <button @click="destroy(table)" class="text-stone-800 bg-red-500 my-3 mx-2 px-2 rounded hover:scale-105 hover:bg-red-600 ease-in-out duration-75">delete</button>
                                <button @click="show(table)" class="text-stone-800 bg-amber-500 text- my-3 px-2 rounded hover:scale-105 hover:bg-amber-600 ease-in-out duration-75">show</button>
                            </div>
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

            show(table) {
                this.$inertia.get('/tables/' + table.id, + '/show', table);
            },
        },
    }
</script>
