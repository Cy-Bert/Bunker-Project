<template>
    <app-layout>
        <div>
            enter title
            <input v-model="form.name" type="text" class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Title">
        </div>
        <input v-model="form.name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Title">
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'
    export default {
        components: {
            AppLayout,
        },

        props: ['table'],

        data() {
            return {
                form: {
                    name: this.table.name,
                },
            }
        },

        methods: {
        },
    }
</script>
