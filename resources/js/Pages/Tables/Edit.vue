<template>
    <app-layout>
        <input type="hidden" name="id" value="{{$table->id}}">
        <div class="inline-block flex my-2">
            <p class="ml-auto my-auto">nom</p>
            <input v-model="form.name" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
            <button @click="update(form)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-4">Update</button>
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">id</p>
            <input v-model="form.desc" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">Status</p>
            <input v-model="form.status" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">food</p>
            <input v-model="form.food" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">heat</p>
            <input v-model="form.heat" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">heal</p>
            <input v-model="form.heal" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">ammo</p>
            <input v-model="form.ammo" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <div class="inline-block flex my-2">
            <p class="my-auto mx-auto">notes</p>
            <input v-model="form.notes" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },

        props: ['table', 'data', ''],

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
                console.log(data);
                data._method = 'PUT';
                this.$inertia.post('/tables/' + this.table.id, data)
            }
        },
    }
</script>
