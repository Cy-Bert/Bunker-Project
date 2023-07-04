<template>
    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-100" >
                                <th class="px-4 py-2 w-20">No.</th>
                                <th class="px-4 py-2">Perso 1</th>
                                <th class="px-4 py-2">Perso 2</th>
                                <th class="px-4 py-2">Relation</th>
                                <th class="px-4 py-2">NiqueSaMereLaravelOBoutD1MomentWlhAAAAAA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <td class="border px-4 py-2">{{ relation.id }}</td>
                                <td class="border px-4 py-2">{{ char1.name }}</td>
                                <td class="border px-4 py-2">{{ char2.name }}</td>
                                <td class="border px-4 py-2">{{ relation.relation }}</td>
                                <td class="border px-4 py-2">
                                    <button @click="index" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go Back</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
</template>
<script>
    import AppLayout from './../../Layouts/AppLayout.vue';

    export default {

        components: {
            AppLayout,
        },

        props: ['relation','char1', 'char2'],

        methods: {
            index: function() {
                this.$inertia.get('/relations')
            },
        },
    }
</script>