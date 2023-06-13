<template>
  <app-layout>
    <table>
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Health</th>
        <th>Stamina</th>
        <th>Luck</th>
        <th>Notes MJ</th>
        <th>Avatar</th>
        <th>Age</th>
        <th>Size</th>
        <th>Gender</th>
        <th>Body shape</th>
        <th>Personality</th>
        <th>Type</th>
        <th>Status</th>
        <th>Notes</th>
        <th>User ID</th>
        <th>Table ID</th>
        <th>Code invit</th>
      </thead>
      <tbody>
        <tr v-for="character in characters">
          <td>{{ character.id }}</td>
          <td>{{ character.name }}</td>
          <td>{{ character.health }}</td>
          <td>{{ character.stamina }}</td>
          <td>{{ character.luck }}</td>
          <td>{{ character.notes_MJ }}</td>
          <td>{{ character.avatar }}</td>
          <td>{{ character.age }}</td>
          <td>{{ character.size }}</td>
          <td>{{ character.gender }}</td>
          <td>{{ character.body_shape }}</td>
          <td>{{ character.personality }}</td>
          <td>{{ character.type }}</td>
          <td>{{ character.status }}</td>
          <td>{{ character.notes }}</td>
          <td>{{ character.user_id }}</td>
          <td>{{ character.table_id }}</td>
          <td>{{ character.code_invit }}</td>
          <button @click="destroy(character)">Delete</button>
          <button @click="show(character)">Show</button>
          <button @click="edit(character)">Edit</button>
        </tr>
        <tr>
          <button @click="create()">Create</button>
        </tr>
      </tbody>
    </table>
  </app-layout>
 </template>

<script>
    import AppLayout from './../../Layouts/AppLayout.vue'
    import Welcome from './../Welcome.vue'

export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: { 
            characters: Array,
        },
        methods: {
          destroy(character) {
            this.$inertia.delete(route('characters.destroy', character))
          },
          edit(character) {
            this.$inertia.get(route('characters.edit', character))
          },
          show(character) {
            this.$inertia.get(route('characters.show', character))
          },
          create() {
            this.$inertia.get(route('characters.create'))
          },
        }
    }
</script>