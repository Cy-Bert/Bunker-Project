<script setup>
import BunkerLayout from "../Layouts/BunkerLayout.vue";
defineProps({
    perks: Object,
  });
</script>

<template>
  <BunkerLayout>
    <section>
      <perk v-for="perk in perks" :key="perk.id">

        <h3>{{perk.name}}</h3>
        <p>{{perk.desc}}</p>
        <div>{{ perk.type }}</div>
        <div>{{ perk.character.name }}</div>

        <a href="#">Read more</a>
      </perk>
    </section>
  </BunkerLayout>
 </template>
