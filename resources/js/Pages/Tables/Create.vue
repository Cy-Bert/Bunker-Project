<template>
    <app-layout>
        <div class="flex my-2">
            <label class="m-auto">name</label>
            <input v-model="form.name"  type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Nom">
        </div>
        <div class="flex my-2">
            <label class="m-auto">desc</label>
            <input v-model="form.desc" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Description">
        </div>
        <div class="flex my-2 mx-4">
            <label for='status' class="m-auto">Status</label>
            <select v-model="form.status">
                <option value="en création">en création</option>
                <option value="en cours">en cours</option>
                <option value="archivée">archivée</option>
            </select>

            <!-- <p class="my-auto mx-auto">Status</p>
            <input v-model="form.status"  class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Statut"> -->
        </div>

        <div class="flex my-2">
            <p class="my-auto mx-auto">notes</p>
            <input v-model="form.notes" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Notes">
        </div>
        <div class="flex w-full justify-end">
            <button @click="create(data)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },

        data() {
            return {
                form: {
                    name: null,
                    desc: null,
                    status: null,
                    food: null,
                    heat: null,
                    heal: null,
                    ammo: null,
                    notes: null,
                    user_id: 1
                },
            }
        },

        methods: {
            create() {
                // console.log(this.form);
                this.$inertia.post('/tables', this.form)
            }
        }
    }

</script>
