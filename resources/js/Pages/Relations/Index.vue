<template>
  <AppLayout>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <div  v-if="OpenShow" class="bg-black/50 w-full h-full absolute">
            <div class="absolute bg-white ml-[47rem] mt-32 w-[490px] h-[400px] z-10 rounded">
              <button type="button" @click="Close" class="ml-[27.5rem] mt-2 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
              </button>
              <div class=" font-extrabold">
                <p class="text-center m-5 text-xl">Relation N°{{ ActualRelation.id }}</p>
                <div class="mt-20 text-lg">
                  <div class="ml-12 -mt-12">
                    <p>{{ ActualRelation.character.name }}</p>
                  </div>
                    <svg class="ml-56 mt-[-1.75rem]" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m8 20l-1.4-1.425L9.175 16H2v-2h7.175L6.6 
                      11.425L8 10l5 5l-5 5Zm8-6l-5-5l5-5l1.4 1.425L14.825 8H22v2h-7.175l2.575 2.575L16 14Z"/></svg>
                  <div class="mt-[-2.04rem] ml-[22rem]">
                    <p>{{ ActualRelation.other.name }}</p>
                  </div>
                  <Relations :ActualRelation=ActualRelation />
                  <div class=" ml-[11.85rem] mt-12">
                    <div class="h-24 drop-shadow-lg w-24 rounded-[50%] z-20 absolute ml-2 mt-2" style="background-image: url(https://www.numedia.fr/wp-content/uploads/2023/05/Dwayne-Johnson-The-Rock-Fast-and-Furious-1-1024x576.jpg);"></div>
                    <div v-if="ActualRelation.relation < 50" class="rotate-180 z-10 absolute" style="border-radius: 50%; width: 7rem; height: 7rem;" :style="{'background': 'conic-gradient(transparent '+ ((-ActualRelation.relation + 50) * 3.6) + 'deg, white 0deg)'}"></div>
                    <div v-if="ActualRelation.relation >= 50" class="rotate-180 -scale-x-100 z-10 absolute" style="border-radius: 50%; width: 7rem; height: 7rem;" :style="{'background': 'conic-gradient(transparent '+ ((ActualRelation.relation - 50) * 3.6) + 'deg, white 0deg)'}"></div>
                    <div class="w-28 h-28 rounded-[50%] absolute " style="background: conic-gradient(#FF0000, #4D096C, #2000E8);"></div> 
                  </div>
                  <div :class="[ this.ActualRelation.relation > 50 ? 'text-[#41051D]' : '', this.ActualRelation.relation < 50 ? 'text-[#2F076E]' : '' , this.ActualRelation.relation < 25 ? 'text-[#2001E2]' : '' , this.ActualRelation.relation > 75 ? 'text-[#FB0101]' : '']"> 
                    <p class="text-center mt-48 text-4xl" >{{ ActualRelation.relation }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div v-if="OpenCreate" class="bg-black/50 w-full h-full absolute">
          <div class="absolute bg-white ml-[47rem] mt-32 w-[490px] h-[400px] z-10 rounded">
              <button type="button" @click="Close2" class="ml-[27.5rem] mt-2 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
              </button>
            <form class="ml-[9rem] mt-12">
                <p>
                    Blaze 1
                </p>
                <select v-model="form.character_id" class="">
                    <option :value="character.id" v-for="character in characters">{{ character.name }}</option>
                </select>
                <p>
                    Blaze 2
                </p>
                <select v-model="form.to_character_id">
                    <option :value="character.id" v-for="character in characters">{{ character.name }}</option>
                </select> 
                <p>
                    Relation
                </p>
                <input type="text" v-model="form.relation">
                <button type="button" @click="create" class="border border-black bg-plus rounded p-2 h-8 w-8 hover:border-grey">
                </button>
            </form>
          </div>
        </div>
        <div v-if="OpenEdit"  class="bg-black/50 w-full h-full absolute">
          <div class="absolute bg-white ml-[47rem] mt-32 w-[490px] h-[400px] z-10 rounded">
            <button type="button" @click="Close3" class="ml-[27.5rem] mt-2 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
              </button>
          <form class="ml-[9rem] mt-12">
              <p class="font-bold">
                  Blaze 1
              </p>
              <p>{{ ActualRelation.character.name }}</p>
    
              <p class="font-bold">
                  Blaze 2
              </p>
              <p>{{ ActualRelation.other.name }}</p> 
              <p class="font-bold"> 
                  Relation
              </p>
              <input type="text" v-model="form.relation" :placeholder="ActualRelation.relation">
              <button type="button" class="shadow p-1" @click="update(form)">Add</button>
          </form>
        </div>
      </div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
          <button @click="CreateOn()"
                    class="bg-yellow-300 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Create</button>
          <table class="table-fixed w-full">
            <thead>
              <tr class="bg-gray-100">
                <th class="px-4 py-2 w-20">No.</th>
                <th class="px-4 py-2">Perso 1</th>
                <th class="px-4 py-2">Perso 2</th>
                <th class="px-4 py-2">Relation</th>
                <th class="px-4 py-2">ActionManLeSuperHumain</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="relation in relations">
                <td class="border px-4 py-2">{{ relation.id }}</td>
                <td class="border px-4 py-2">{{ relation.character.name }}</td>
                <td class="border px-4 py-2">{{ relation.other.name }}</td>
                <td class="border px-4 py-2">{{ relation.relation }}</td>
                <td class="border px-4 py-2">
                  <button @click="EditOn(relation)"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                  <button @click="destroy(relation)"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                  <button @click="ShowOn(relation)"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Show</button>
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
import AppLayout from './../../Layouts/AppLayout.vue';
import Relations from '@/Components/Bunker/Relations.vue';
export default {
  components: {
    AppLayout, Relations
  },
  props: ['relations', 'errors', 'relation', 'char1', 'char2', 'characters'],
  data() {
    return {
      editMode: false,
      OpenShow: false,
      OpenCreate: false,
      OpenEdit: false,
      ActualRelation: {relation: null},
      // Gauge: "conic-gradient(transparent" + this.ActualRelation + "deg, orange 6deg 18deg)",
      // GoodRel: this.ActualRelation.relation > 50 ? true : false,  
      form: {
        id: null,
        character: {
          name: null,
        },
        other: {
          name: null,
        },
        // characters: this.characters,
            form: {
                character_id: null,
                to_character_id: null,
                relation: null},
      },
    }
  },
  methods: {
    create() {
      this.$inertia.post('/relations',this.form);
      this.OpenCreate=false
    },
    edit() {
            this.$inertia.put('/relations/' + relation.id , this.form);
        },
    update: function(data) {
            this.$inertia.put('/relations/' + this.ActualRelation.id, data);
            this.OpenEdit=false
            this.form.relation= null
        },
    show(relation) {
      // this.$inertia.get('/relations/'+ relation.id , relation)
      this.$inertia.get(route('relations.show', relation.id))
    },
    destroy(relation) {
      this.$inertia.delete('/relations/' + relation.id, relation)
    },
    ShowOn(relation){
      this.OpenShow=true;
      this.ActualRelation=relation
    },
    CreateOn(){
      this.OpenCreate=true;
    },
    EditOn(relation){
      this.OpenEdit=true
      this.ActualRelation=relation
    },
    Close(){
      this.OpenShow=false
      this.ActualRelation=null
    },
    Close2(){
      this.OpenCreate=false
    },
    Close3(){
      this.OpenEdit=false
    }
  }
}

</script>