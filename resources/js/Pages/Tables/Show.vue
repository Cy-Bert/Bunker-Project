<template>
    <app-layout>
        <button @click="index()" class="bg-slate-300 rounded py-2 px-3 ">Retour</button>
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
                    <tr class="border-slate-400 border-y-2">
                        <td class="px-4">{{ table.id }}</td>
                        <td class="px-4">{{ table.name }}</td>
                        <td class="px-4">{{ table.desc }}</td>
                        <td class="px-4">{{ table.status }}</td>
                        <td class="px-4">{{ table.food }}</td>
                        <td class="px-4">{{ table.heat }}</td>
                        <td class="px-4">{{ table.heal }}</td>
                        <td class="px-4">{{ table.ammo }}</td>
                        <td class="px-4">{{ table.notes }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue';

    export default {
        components: {
            AppLayout,
        },

        props: ['table'],

        methods: {
            index: function() {
                this.$inertia.get('/tables')
            },
        },
    }




</script>
