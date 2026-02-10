<template>
    <div class="card bg-light my-5">
        <div class="card-header bg-white">

        </div>
        <div class="row my-3">
            <div class="col-md-6 mx-auto">
                <!-- flash mess -->
            </div>
        </div>
        <div v-if="contacts.data.length">
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-2 mx-auto">
                        
                    </div>
                </div>
                <div class="row">
                    <ContactListItem 
                        v-for="contact in contacts.data"
                        :key="contact.id"
                        :contact="contact"
                    />
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center align-items-center">
                <div class="mt-3">
                    <ul class="pagination">
                        <li
                            v-for="(link, index) in contacts.links"
                            :key="index"
                            :class="`page-item ${link.active ? 'active' : ''}`"
                        >
                            <Link
                                :href="link.url"
                                class="page-link"
                                v-if="link.url !== null"    
                                v-dompurify-html="link.label"
                            >
                            </Link>
                            <div 
                                v-else
                                class="page-link"
                                v-dompurify-html="link.label"
                            >
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import ContactListItem from './ContactListItem.vue';
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        contacts: {
            type: Object,
            required: true,
        }
    })
</script>

<style scoped>

</style>