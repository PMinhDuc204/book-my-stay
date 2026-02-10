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
    <div class="container">
        <ContactList :contacts="contacts" />
    </div>
</template>

<style scoped>

</style>
