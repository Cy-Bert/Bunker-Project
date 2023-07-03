<template>
    <div class="h-48 w-full bg-red-600">
        <div class=" ml-[11.85rem] mt-12">
            <div class="h-24 drop-shadow-lg w-24 rounded-[50%] z-20 absolute ml-2 mt-2" style="background-image: url(https://www.numedia.fr/wp-content/uploads/2023/05/Dwayne-Johnson-The-Rock-Fast-and-Furious-1-1024x576.jpg);"></div>
                <div v-if="ActualRelation.relation < 50" class="rotate-180 z-10 absolute" style="border-radius: 50%; width: 7rem; height: 7rem;" :style="{'background': 'conic-gradient(transparent '+ ((-ActualRelation.relation + 50) * 3.6) + 'deg, white 0deg)'}"></div>
                <div v-if="ActualRelation.relation >= 50" class="rotate-180 -scale-x-100 z-10 absolute" style="border-radius: 50%; width: 7rem; height: 7rem;" :style="{'background': 'conic-gradient(transparent '+ ((ActualRelation.relation - 50) * 3.6) + 'deg, white 0deg)'}"></div>
            <div class="w-28 h-28 rounded-[50%] absolute " style="background: conic-gradient(#FF0000, #4D096C, #2000E8);"></div> 
        </div>
    </div>
    <button @click="console.log(this.ActualRelation)">tu le c</button>
</template>
<script>
export default {
        props: ['relations', 'errors', 'relation', 'ActualRelation'],
        data() {
        return {
        // ActualRelation: {relation: null},
        // Gauge: "conic-gradient(transparent" + this.ActualRelation + "deg, orange 6deg 18deg)",
        // GoodRel: this.ActualRelation.relation > 50 ? true : false,  
        
        }
    },
    methods: {
            show(relation) {
        // this.$inertia.get('/relations/'+ relation.id , relation)
        this.$inertia.get(route('relations.show', relation.id))
        },
        
    }
}
</script>