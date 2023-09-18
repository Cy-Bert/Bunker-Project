<template>
    <app-layout>
        <video src="https://dydx.exchange/wave.webm" muted autoplay loop class="absolute z-10 w-auto min-w-full "> </video>
        <div class="text-slate-200 w-full pt-8 relative z-40">
            <!-- TABLE -->
            <table class="table-fixed mx-auto border-2 border-slate-400 bg-black/[.40]">
                <!-- HEAD -->
                <thead class="">
                    <th class="px-4 text-left w-20">id</th>
                    <th class="px-4 text-left w-32 ">name</th>
                    <th class="px-4 text-left">desc</th>
                    <th class="px-4 text-left w-32">status</th>
                    <th class="px-4 text-left w-20">food</th>
                    <th class="px-4 text-left w-20">heat</th>
                    <th class="px-4 text-left w-20">heal</th>
                    <th class="px-4 text-left w-20">ammo</th>
                    <th class="px-4 text-left">notes</th>
                </thead>
                <!-- BODY -->
                <tbody class="w-full relative">
                    <tr v-for="table in tables" class="border-slate-400 border-y-2 text-left">
                        <td class="px-4">{{ table.id }}</td>
                        <td class="px-4 w-32">{{ table.name }}</td>
                        <td class="px-4">{{ table.desc }}</td>
                        <td class="px-4">{{ table.status }}</td>
                        <td class="px-4">{{ table.food }}</td>
                        <td class="px-4">{{ table.heat }}</td>
                        <td class="px-4">{{ table.heal }}</td>
                        <td class="px-4">{{ table.ammo }}</td>
                        <td class="px-4">
                            <span v-if="table.notes">{{ table.notes.slice(0, 20) }}{{ table.notes.length > 20 ? '...' : ''
                            }} </span>
                        </td>
                        <div class="justify-around flex w-fit mr-4">
                            <button @click="edit(table)"
                                class="text-stone-800 bg-blue-400 my-3 mx-2 px-2 rounded hover:scale-105 hover:bg-blue-600 ease-in-out duration-75">edit</button>
                            <button @click="destroy(table)"
                                class="text-stone-800 bg-red-500 my-3 mx-2 px-2 rounded hover:scale-105 hover:bg-red-600 ease-in-out duration-75">delete</button>
                            <button @click="show(table)"
                                class="text-stone-800 bg-amber-500 text- my-3 px-2 rounded hover:scale-105 hover:bg-amber-600 ease-in-out duration-75">show</button>
                        </div>
                    </tr>
                </tbody>
            </table>
            <button @click="create()" class="bg-red-700">CREATE</button>
        </div>
        <!-- MODAL SHOW -->
        <div class="bg-black/50 h-full w-full top-0 fixed z-50 flex items-center justify-center" v-if="isOpen1">
            <div class="py-20 w-10/12 ">
                <div>
                    <div class="bg-slate-200 mt-8">
                        <table class="table-fixed w-full ">
                            <thead class=" text-left">
                                <th class="px-4 w-20 ">id</th>
                                <th class="px-4 ">name</th>
                                <th class="px-4 ">desc</th>
                                <th class="px-4 ">status</th>
                                <th class="px-4 w-20 ">food</th>
                                <th class="px-4 w-20 ">heat</th>
                                <th class="px-4 w-20 ">heal</th>
                                <th class="px-4 w-20 ">ammo</th>
                                <th class="px-4">notes</th>
                            </thead>

                            <tbody class="">
                                <tr class="border-slate-400 border-y-2 text-left">
                                    <td class="px-4 w-20 ">{{ selectedTable.id }}</td>
                                    <td class="px-4 ">{{ selectedTable.name }}</td>
                                    <td class="px-4 ">{{ selectedTable.desc }}</td>
                                    <td class="px-4 w-32 ">{{ selectedTable.status }}</td>
                                    <td class="px-4 w-20 ">{{ selectedTable.food }}</td>
                                    <td class="px-4 w-20 ">{{ selectedTable.heat }}</td>
                                    <td class="px-4 w-20 ">{{ selectedTable.heal }}</td>
                                    <td class="px-4 w-20 ">{{ selectedTable.ammo }}</td>
                                    <td class="px-4">{{ selectedTable.notes }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button @click="isOpen1 = false"
                            class="px-2 py-1 mt-4 mb-8 bg-red-700 z-20 mx-auto flex rounded">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- MODAL EDIT -->
        <div class="bg-black/50 h-full w-full top-0 fixed z-50 flex items-center justify-center text-slate-200 "
            v-if="isOpen2">
            <div class="py-20 w-10/12 bg-slate-800">
                <div>
                    <button @click="index()" class="bg-neutral-900 rounded py-2 px-3">Retour</button>
                    <div class="px-4">
                        <div v-if="errors.name" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.name }}
                        </div>
                        <div class="flex my-5">
                            <p class="mx-auto my-auto">nom</p>
                            <input v-model="form.name" type="text"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Nom">
                        </div>
                        <div v-if="errors.desc" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.desc }}
                        </div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">desc</p>
                            <input v-model="form.desc" type="text"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Description">
                        </div>
                        <div v-if="errors.status" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.status
                        }}
                        </div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">Status</p>
                            <input v-model="form.status" type="text"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Statut">
                        </div>
                        <div v-if="errors.food" class="text-red-700 text-lg">{{ errors.food }}</div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">food</p>
                            <button class="w-14 bg-red-700 rounded mr-2"
                                v-on:click="form.food -= 1, update(form)">-</button>
                            <input v-model="form.food" min="0" type="number"
                                class="shadow appearance-none border rounded w-[40%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  "
                                id="exampleFormControlInput1" placeholder="Nourriture">
                            <button class="w-14 bg-red-700 rounded ml-2"
                                v-on:click="form.food += 1, update(form)">+</button>
                        </div>
                        <div v-if="errors.heat" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.heat }}
                        </div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">heat</p>
                            <button class="w-14 bg-red-700 rounded mr-2"
                                v-on:click="form.heat -= 1, update(form)">-</button>
                            <input v-model="form.heat" min="0" type="number"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Chaleur">
                            <button class="w-14 bg-red-700 rounded ml-2"
                                v-on:click="form.heat += 1, update(form)">+</button>
                        </div>
                        <div v-if="errors.heal" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.heal }}
                        </div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">heal</p>
                            <button class="w-14 bg-red-700 rounded mr-2"
                                v-on:click="form.heal -= 1, update(form)">-</button>
                            <input v-model="form.heal" min="0" type="number"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Soin">
                            <button class="w-14 bg-red-700 rounded ml-2"
                                v-on:click="form.heal += 1, update(form)">+</button>
                        </div>
                        <div v-if="errors.ammo" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.ammo }}
                        </div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">ammo</p>
                            <button class="w-14 bg-red-700 rounded mr-2"
                                v-on:click="form.ammo -= 1, update(form)">-</button>
                            <input v-model="form.ammo" min="0" type="number"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Munitions">
                            <button class="w-14 bg-red-700 rounded ml-2"
                                v-on:click="form.ammo += 1, update(form)">+</button>
                        </div>
                        <div v-if="errors.notes" class="text-red-700 text-lg mx-auto flex justify-center">{{ errors.notes }}
                        </div>
                        <div class="flex my-5">
                            <p class="my-auto mx-auto">notes</p>
                            <input v-model="form.notes" type="text"
                                class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                                id="exampleFormControlInput1" placeholder="Notes">
                            <!-- <div v-if="$page.errors.notes" class="text-red-500">{{ $page.errors.notes[0] }}</div> -->
                        </div>
                    </div>
                </div>
                <button @click="isOpen2 = false" class="px-2 py-1 mt-2 mb-1 bg-red-700 z-20 mx-auto flex">Close</button>
            </div>
        </div>

        <!-- MODAL CREATE -->
        <div v-if="isOpen3" class="bg-black/50 h-full w-full top-0 fixed z-50 flex items-center justify-center ">
            <div class="py-20 w-10/12 bg-slate-800">
                <div class="flex my-2 ">
                    <label class="m-auto">name</label>
                    <input v-model="form_create.name" type="text"
                        class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                        placeholder="Nom">
                </div>
                <div class="flex my-2">
                    <label class="m-auto">desc</label>
                    <input v-model="form_create.desc" type="text"
                        class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                        placeholder="Description">
                </div>
                <div class="flex my-2 mx-4">
                    <label for='status' class="m-auto">Status</label>
                    <select v-model="form_create.status">
                        <option value="en création">en création</option>
                        <option value="en cours">en cours</option>
                        <option value="archivée">archivée</option>
                    </select>

                    <!-- <p class="my-auto mx-auto">Status</p>
                <input v-model="form.status"  class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex " placeholder="Statut"> -->
                </div>
                <div class="flex my-2">
                    <p class="my-auto mx-auto">notes</p>
                    <input v-model="form_create.notes" type="text"
                        class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ml-auto flex "
                        placeholder="Notes">
                </div>
                <button @click="isOpen3 = false"
                    class="px-2 py-1 mt-4 mb-8 bg-red-700 z-20 mx-auto flex rounded">Close</button>
                <button @click="create2(form_create)"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
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

    props: ['tables', 'table', 'selectedTable', 'data', 'errors'],

    data() {
        return {
            isOpen1: false,
            isOpen2: false,
            isOpen3: false,
            selectedTable: null,
            form: {
                name: this.selectedTable ? this.selectedTable.name : '',
                desc: this.selectedTable ? this.selectedTable.desc : '',
                status: this.selectedTable ? this.selectedTable.status : '',
                food: this.selectedTable ? this.selectedTable.food : '',
                heat: this.selectedTable ? this.selectedTable.heat : '',
                heal: this.selectedTable ? this.selectedTable.heal : '',
                ammo: this.selectedTable ? this.selectedTable.ammo : '',
                notes: this.selectedTable ? this.selectedTable.notes : '',
                id: this.selectedTable ? this.selectedTable.id : '',
            },
            form_create: {
                name: null,
                desc: null,
                status: null,
                food: null,
                heat: null,
                heal: null,
                ammo: null,
                notes: null,
                user_id: 1
            }
        }
    },

    watch: {
        form: {
            deep: true,
            handler() {
                console.log(this.form)
                this.update(this.form)
            },
        },
    },

    methods: {
        destroy(table) {
            this.$inertia.delete('/tables/' + table.id, table)
        },

        edit(table) {
            this.form = Object.assign({}, table);
            this.selectedTable = table;
            this.editMode = true;
            this.isOpen2 = true;
        },

        create() {
            // debugger;
            // this.form = Object.assign({}, table);
            // this.selectedTable = table;
            this.editMode = true;
            this.isOpen3 = true;
            // this.$inertia.get('/tables/create', table);
        },

        show(table) {
            this.selectedTable = table;
            this.editMode = false;
            this.isOpen1 = true;
        },

        update: function (form) {
            this.$inertia.put('/tables/' + form.id, form);
        },

        index: function () {
            this.$inertia.get('/tables')
        },

        // CREATE

        create2: function () {
            this.$inertia.post('/tables', this.form_create)
        },

        index: function () {
            this.$inertia.get('/tables')
        },
    },
}
</script>
