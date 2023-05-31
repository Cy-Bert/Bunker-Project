<template>
    <div>
      <!-- Display items -->
      <div class="mb-4" v-for="item in items" :key="item.id">
        <h2 class="text-xl font-semibold">{{ item.name }}</h2>
        <p class="text-gray-600">{{ item.desc }}</p>
        <p class="text-gray-500">{{ item.stats }}</p>
        <button class="bg-red-500 text-white py-1 px-2 mt-2" @click="deleteItem(item.id)">Delete</button>
      </div>
  
      <!-- Create new item form -->
      <form @submit.prevent="createItem" class="mt-4">
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="name">Name:</label>
          <input v-model="newItem.name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter name" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="desc">Description:</label>
          <textarea v-model="newItem.desc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="desc" placeholder="Enter description" required></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="stats">Stats:</label>
          <input v-model="newItem.stats" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stats" type="text" placeholder="Enter stats">
        </div>
        <button class="bg-blue-500 text-white py-2 px-4 rounded" type="submit">Create Item</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        items: [], // Array to hold the list of items
        newItem: { // Object to hold the form data for creating a new item
          name: '',
          desc: '',
          stats: ''
        }
      }
    },
    methods: {
      createItem() {
        // Make API request to create a new item using this.newItem data
        // After successful creation, update the items array with the new item
        // Clear the form inputs
      },
      deleteItem(itemId) {
        // Make API request to delete the item with the given itemId
        // After successful deletion, remove the item from the items array
      }
    }
  }
  </script>
  