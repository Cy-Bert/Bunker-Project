<script setup>
import BunkerLayout from "../Layouts/BunkerLayout.vue";

defineProps({
  perks: Object,
});



</script>

<template>
  <BunkerLayout>
    <section>
      <button @click="openModal()"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Perk</button>
      <div class="tbl-header  mb-1 border-2">
        <div class="w-full table-fixed">
          <table>
            <thead class="bg-[#db0a0a23]">
              <th>ID</th>
              <th>Name</th>
              <th>Desc</th>
              <th>Type</th>
              <th>Character Name</th>
              <th>Actions</th>
            </thead>
            <tbody class="max-h-96">
              <tr v-for="perk in perks" :key="perk.id">
                <td class="text-center font-normal rounded-lg border-b border-black ">{{ perk.id }}</td>
                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.name }}</td>
                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.desc }}</td>
                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.type }}</td>
                <td class="text-center font-normal rounded-lg border-b border-black">{{ perk.character.name }}</td>
                <td
                  class="action justify-center items-center content-center text-center font-normal rounded-lg border-b border-black">
                  <button @click="edit(perk)"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>

                  <button @click="deleteRow(perk)"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </BunkerLayout>
</template>
