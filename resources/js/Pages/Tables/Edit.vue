<template>
    <app-layout>
        <button @click="index()" class="bg-slate-300 rounded py-2 px-3 ">Retour</button>
        <div class="px-4">
            <div v-if="errors.name" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.name }}</div>
        <div class="flex my-5">
            <p class="mx-auto my-auto">nom</p>
            <input v-model="form.name" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Nom">
        </div>
        <div v-if="errors.desc" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.desc }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">desc</p>
            <input v-model="form.desc" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Description">
        </div>
        <div v-if="errors.status" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.status }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">Status</p>
            <input v-model="form.status" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Statut">
        </div>


        <div v-if="errors.food" class="text-red-700 text-lg">{{ errors.food }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">food</p>
            <button class="w-20 bg-red-700" v-on:click="form.food -= 1, update(form)" >-</button>
            <input v-model="form.food" min="0" type="number" class="shadow appearance-none border rounded w-[40%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  " id="exampleFormControlInput1" placeholder="Nourriture">
            <button class="w-20 bg-red-700" v-on:click="form.food += 1, update(form)">+</button>
        </div>



        <div v-if="errors.heat" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.heat }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">heat</p>
            <input v-model="form.heat" min="0" type="number" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Chaleur">
        </div>
        <div v-if="errors.heal" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.heal }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">heal</p>
            <input v-model="form.heal" min="0" type="number" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Soin">
        </div>
        <div v-if="errors.ammo" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.ammo }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">ammo</p>
            <input v-model="form.ammo" min="0" type="number" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Munitions">
        </div>
        <div v-if="errors.notes" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.notes }}</div>
        <div class="flex my-5">
            <p class="my-auto mx-auto">notes</p>
            <input v-model="form.notes" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Notes">
            <!-- <div v-if="$page.errors.notes" class="text-red-500">{{ $page.errors.notes[0] }}</div> -->
        </div>
        <div class="flex w-full justify-end">
            <button @click="update(form)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </div>
    </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },

        props: ['table', 'data', 'errors'],

        data() {
            return {
                form: {
                    name: this.table.name,
                    desc: this.table.desc,
                    status: this.table.status,
                    food: this.table.food,
                    heat: this.table.heat,
                    heal: this.table.heal,
                    ammo: this.table.ammo,
                    notes: this.table.notes,
                },
            }
        },

        methods: {
            edit: function(data) {
                this.form = Object.assign({}, data);
            },

            update: function(data) {
                this.$inertia.put('/tables/' + this.table.id, data);
            },

            index: function() {
                this.$inertia.get('/tables')
            },
        },
    }




</script>
