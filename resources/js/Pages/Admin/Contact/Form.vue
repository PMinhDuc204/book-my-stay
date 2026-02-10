<template>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="text-center mt-2">
                            {{ data.title }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <VeeForm @submit="submit" @invalid-submit="onInvalidSubmit" :initial-values="state.model" v-slot="{ errors }">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name*</label>
                                        <Field name="name" rules="required|max:255" v-model="state.model.name" v-slot="{ field, meta: metaField }">
                                            <input 
                                                type="text" 
                                                id="name" 
                                                class="form-control" 
                                                :class="{ 'is-invalid': (metaField.touched && !metaField.valid) || errors.name || $page.props.errors.name }"
                                                placeholder="Name*"    
                                                v-bind="field"
                                            />
                                        </Field>
                                        <ErrorMessage name="name" class="text-danger small" />
                                        <div
                                            v-if="$page.props.errors.name"
                                            class="text-white bg-danger p-2 rounded my-2"
                                        >
                                            {{ $page.props.errors.name }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email*</label>
                                        <Field name="email" rules="required|email|max:255" v-model="state.model.email" v-slot="{ field, meta: metaField }">
                                            <input 
                                                type="email" 
                                                id="email" 
                                                class="form-control" 
                                                :class="{ 'is-invalid': (metaField.touched && !metaField.valid) || errors.email || $page.props.errors.email }"
                                                placeholder="Email*"    
                                                v-bind="field"
                                            />
                                        </Field>
                                        <ErrorMessage name="email" class="text-danger small" />
                                        <div
                                            v-if="$page.props.errors.email"
                                            class="text-white bg-danger p-2 rounded my-2"
                                        >
                                            {{ $page.props.errors.email }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone*</label>
                                        <Field name="phone" rules="required|max:255" v-model="state.model.phone" v-slot="{ field, meta: metaField }">
                                            <input 
                                                type="text" 
                                                id="phone" 
                                                class="form-control" 
                                                :class="{ 'is-invalid': (metaField.touched && !metaField.valid) || errors.phone || $page.props.errors.phone }"
                                                placeholder="Phone*"    
                                                v-bind="field"
                                            />
                                        </Field>
                                        <ErrorMessage name="phone" class="text-danger small" />
                                        <div
                                            v-if="$page.props.errors.phone"
                                            class="text-white bg-danger p-2 rounded my-2"
                                        >
                                            {{ $page.props.errors.phone }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="job_title" class="form-label">Job*</label>
                                        <Field name="job_title" rules="required|max:255" v-model="state.model.job_title" v-slot="{ field, meta: metaField }">
                                            <input 
                                                type="text" 
                                                id="job_title" 
                                                class="form-control" 
                                                :class="{ 'is-invalid': (metaField.touched && !metaField.valid) || errors.job_title || $page.props.errors.job_title }"
                                                placeholder="Job*"    
                                                v-bind="field"
                                            />
                                        </Field>
                                        <ErrorMessage name="job_title" class="text-danger small" />
                                        <div
                                            v-if="$page.props.errors.job_title"
                                            class="text-white bg-danger p-2 rounded my-2"
                                        >
                                            {{ $page.props.errors.job_title }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="company" class="form-label">Company*</label>
                                        <Field name="company" rules="required|max:255" v-model="state.model.company" v-slot="{ field, meta: metaField }">
                                            <input 
                                                type="text" 
                                                id="company" 
                                                class="form-control" 
                                                :class="{ 'is-invalid': (metaField.touched && !metaField.valid) || errors.company || $page.props.errors.company }"
                                                placeholder="Company*"    
                                                v-bind="field"
                                            />
                                        </Field>
                                        <ErrorMessage name="company" class="text-danger small" />
                                        <div
                                            v-if="$page.props.errors.company"
                                            class="text-white bg-danger p-2 rounded my-2"
                                        >
                                            {{ $page.props.errors.company }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country*</label>
                                        <Field 
                                            as="select"
                                            name="country" 
                                            id="country"
                                            rules="required"
                                            v-model="state.model.country_code"
                                            @change="setCountryAlphaCode"
                                            class="form-control"
                                            :class="{ 'is-invalid': errors.country || $page.props.errors.country }"
                                        >
                                            <option value="" disabled>Select Country</option>
                                            <option v-for="(name, code) in countryList" :key="code" :value="code">
                                                {{ name }}
                                            </option>
                                        </Field>
                                        <ErrorMessage name="country" class="text-danger small" />
                                        <div
                                            v-if="$page.props.errors.country"
                                            class="text-white bg-danger p-2 rounded my-2"
                                        >
                                            {{ $page.props.errors.country }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <button type="submit"
                                    class="btn btn-sm btn-dark me-1"
                                >
                                    {{ data.isEdit ? 'Update' : 'Submit' }}
                                </button>
                                <Link 
                                    v-if="data.urlBack"
                                    :href="data.urlBack"
                                    class="btn btn-sm btn-warning"
                                >
                                    Cancel
                                </Link>
                            </div>
                        </VeeForm>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</template>

<script setup>
    import { Link, useForm } from "@inertiajs/vue3"
    import countries from "i18n-iso-countries"
    import enLocale from "i18n-iso-countries/langs/en.json"
    import { reactive, onMounted } from "vue";
    import { Form as VeeForm, Field, ErrorMessage, defineRule, configure } from 'vee-validate';
    import { localize } from '@vee-validate/i18n';
    import axios from 'axios';
    import $ from 'jquery';



    
    countries.registerLocale(enLocale);
    
    const countryList = countries.getNames("en", { select: "official" });

    defineRule('unique_custom', (value) => {
    return axios
        .post(route('admin.user.checkEmail'), {
        _token: Laravel.csrfToken,
        value: value,
        id: props.data.contact?.id
        })
        .then(function (response) {
        return response.data.valid;
        })
        .catch((error) => {});
    });

    const onInvalidSubmit = ({ errors }) => {
        let firstInputError = Object.entries(errors)[0][0];
        let ele = $('[name="' + firstInputError + '"]');
        if ($('[name="' + firstInputError + '"]').hasClass('hidden') || $('[name="' + firstInputError + '"]').attr('type') == 'hidden') {
            ele = $('[name="' + firstInputError + '"]').closest('div');
        }
        ele.focus();
        $('html, body').animate(
            {
                scrollTop: ele.offset().top - 150 + 'px'
            },
            500
        );
    };

    let messError = {
      en: {
        fields: {
          name: {
            required: 'Name is required.',
            max: 'Name is too long.'
          },
          email: {
            required: 'Email is required.',
            max: 'Email is too long.',
            unique_custom: 'This email is already registered.',
            email: 'Please enter a valid email address.'
          },
          phone: {
            required: 'Please enter phone number.',
            max: 'Phone number is too long.'
          },
          job_title: {
            required: 'Job title is required.',
            max: 'Job title is too long.'
          },
          company: {
             required: 'Company name is required.',
             max: 'Company name is too long.'
          },
          country: {
             required: 'Please select a country.',
          },
          password: {
            required: 'Password is required.',
            max: 'Password is too long.',
            min: 'Password is too short.',
            password_rule: 'Password is too short.'
          }
        }
      }
    };

    configure({
      generateMessage: localize(messError)
    });

    const props = defineProps(['data']);

    const state = reactive({
        model: {
            name: '',
            email: '',
            phone: '',
            job_title: '',
            company: '',
            country: '',
            country_code: ''
        }
    });

    onMounted(() => {
        if (props.data.isEdit){
            state.model = props.data.contact;
        }
    });

    const setCountryAlphaCode = (event) => {
        const code = event.target.value;
        state.model.country_code = code;
        state.model.country = countryList[code];
    };

    const submit = () => {
        if(props.data.isEdit) {
            useForm(state.model).put(route('contacts.update', props.data.contact.id));
            return;
        }
        useForm(state.model).post(route('contacts.store'));
    }
</script>

<style scoped>
</style>