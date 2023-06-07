<template>
    <app-layout>

    </app-layout>
</template>

<script>

import AppLayout from './../../Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },
    props: { 
        characters: Array,
    },
    methods: {
        debug() {
            console.log(this.form);
        },
    }
}
</script>