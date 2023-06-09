<template>
    <bunker-layout>
        <button @click="index()" class="bg-slate-300 rounded py-2 px-3 ">Retour</button>
        <button @click="console.log(this)">console log</button>
        <div class="bg-slate-200 w-[98%] mx-auto mt-8">
            <table class="table-fixed w-full">
                <thead class="">
                    <th class="px-4">id</th>
                    <th class="px-4">name</th>
                    <th class="px-4">desc</th>
                    <th class="px-4">type</th>
                    <th class="px-4">character_id</th>
                </thead>

                <tbody class="">
                    <tr class="border-slate-400 border-y-2">
                        <td class="px-4 text-center">{{ perk.id }}</td>
                        <td class="px-4 text-center">{{ perk.name }}</td>
                        <td class="px-4 text-center">{{ perk.desc }}</td>
                        <td class="px-4 text-center">{{ perk.type }}</td>
                        <td class="px-4 text-center">{{ perk.character_id }}</td>
                    </tr>
                </tbody>
            </table>
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
    },
}




</script>
