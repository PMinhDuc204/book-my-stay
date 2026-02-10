<template>
    <div class="col-md-4 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <span class="fw-bold">
                        {{ contact.name }}
                    </span>
                </div>
                <div class="flex flex-column my-2">
                    <span class="text-primary">
                        {{ contact.company }}
                    </span>
                    <span>
                       {{ contact.job_title }}
                    </span>
                </div>
                <div class="flex flex-column my-2">
                    <span class="border border-light border-3 rounded p-1 mb-1">
                        <i class="fas fa-phone"></i> {{ contact.phone }}
                    </span>
                    <span class="border border-light border-3 rounded p-1">
                        <i class="fas fa-envelope"></i> {{ contact.email }}
                    </span>
                </div>
                <div class="dropdown">
                    <i class="fas fa-ellipsis-vertical"
                        data-bs-toggle="dropdown"
                        style="cursor: pointer"
                    ></i>
                    <ul class="dropdown-menu">
                        <li>
                            <Link :href="route('contacts.edit', contact.id)" class="dropdown-item">
                                <i class="fas fa-pen mx-2 text-warning" style="cursor: pointer"></i>Update
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('contacts.destroy', contact.id)" method="delete" as="button" class="dropdown-item">
                                <i class="fas fa-trash mx-2 text-danger" style="cursor: pointer"></i>Delete
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
    const props = defineProps({
        contact: {
            type: Object,
            required: true,
        }
    })
</script>

<style scoped>

</style>