<script setup>
    import ContactList from '@/components/contacts/ContactList.vue'
    const props = defineProps({
        contacts: {
            type: Object,
            required: true,
        },
    })
</script>

<template>
    <ContactList :contacts="contacts" />
</template>

<style scoped>

</style>
