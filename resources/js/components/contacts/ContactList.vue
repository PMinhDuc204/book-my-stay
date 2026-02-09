<template>
    <div class="card bg-light my-5">
        <div class="card-header bg-white">

        </div>
        <div class="row my-3">
            <div class="col-md-6 mx-auto">
                flash mess
            </div>
        </div>
        <div v-if="contacts.data.length">
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-2 mx-auto">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        contacts: {
            type: Object,
            required: true,
        }
    })
</script>

<style scoped>

</style>