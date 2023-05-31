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
        items: [],
        newItem: {
          name: '',
          desc: '',
          stats: ''
        }
      }
    },
    methods: {
      async fetchItems() {
        // Make GET request to fetch all items
        this.items = await this.$inertia.get('/items');
      },
      async createItem() {
        // Make POST request to create a new item
        const response = await this.$inertia.post('/items', this.newItem);
  
        // Update the items array with the newly created item
        this.items.push(response.data);
  
        // Clear the form inputs
        this.newItem.name = '';
        this.newItem.desc = '';
        this.newItem.stats = '';
      },
      async deleteItem(itemId) {
        // Make DELETE request to delete the item with the given itemId
        await this.$inertia.delete(`/items/${itemId}`);
  
        // Remove the deleted item from the items array
        this.items = this.items.filter(item => item.id !== itemId);
      }
    },
    mounted() {
      // Fetch items when the component is mounted
      this.fetchItems();
    }
  }
  </script>