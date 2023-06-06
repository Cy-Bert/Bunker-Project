<template>
  <AppLayout>

      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

                  <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New item</button>
                  <table class="table-fixed w-full">
                      <thead>
                          <tr class="bg-gray-100">
                              <th class="px-4 py-2 w-20">No.</th>
                              <th class="px-4 py-2">Name</th>
                              <th class="px-4 py-2">Desc</th>
                              <th class="px-4 py-2">Stats</th>
                              <th class="px-4 py-2">Character ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="row in data">
                              <td class="border px-4 py-2">{{ row.id }}</td>
                              <td class="border px-4 py-2">{{ row.name }}</td>
                              <td class="border px-4 py-2">{{ row.desc }}</td>
                              <td class="border px-4 py-2">{{ row.stats }}</td>
                              <td class="border px-4 py-2">{{ row.character_id }}</td>
                              <td class="border px-4 py-2">
                                  <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                  <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

  </AppLayout>
</template>
<script>
  import AppLayout from './../../Layouts/AppLayout.vue'

  export default {
      components: {
          AppLayout,
      },
      props: ['data', 'errors'],
      data() {
          return {
              editMode: false,
              isOpen: false,
              form: {
                  title: null,
                  body: null,
              },
          }
      },
      methods: {
          openModal: function () {
              this.isOpen = true;
          },
          closeModal: function () {
              this.isOpen = false;
              this.reset();
              this.editMode=false;
          },
          reset: function () {
              this.form = {
                  title: null,
                  body: null,
              }
          },
          save: function (data) {
              this.$inertia.item('/items', data)
              this.reset();
              this.closeModal();
              this.editMode = false;
          },
          edit: function (data) {
              this.form = Object.assign({}, data);
              this.editMode = true;
              this.openModal();
          },
          update: function (data) {
              data._method = 'PUT';
              this.$inertia.item('/items/' + data.id, data)
              this.reset();
              this.closeModal();
          },
          deleteRow: function (data) {
              if (!confirm('Are you sure want to remove?')) return;
              data._method = 'DELETE';
              this.$inertia.item('/items/' + data.id, data)
              this.reset();
              this.closeModal();
          }
      }
  }
</script>