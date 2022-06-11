<template>
    <div class="card mb-6 mb-xl-9">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <h1
                    class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"
                >
                    Edit {{ name }}
                </h1>
            </div>
        </div>

        <div class="card-body">
            <form @submit.prevent="_store" class="form">
                <div class="pb-10 pb-lg-12">
                    <!--begin::Title-->
                    <div v-if="errors.length">
                        <b>Terjadi kesalahan:</b>
                        <ul>
                            <li v-for="err in errors" :key="err.id">
                                {{ err }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row mb-5">
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <label class="required fs-5 fw-bold mb-2"
                                >Nama</label
                            >
                            <input
                                type="text"
                                class="form-control form-control-solid"
                                placeholder=""
                                v-model="form.nama"
                                required
                            />
                        </div>
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <label class="required fs-5 fw-bold mb-2"
                                >Gender</label
                            >
                            <select
                                class="form-select form-select-solid"
                                data-placeholder="Select a option"
                                data-allow-clear="true"
                                v-model="form.gender"
                                required
                            >
                                <option value="1">laki-laki</option>
                                <option value="2">perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4 fv-row fv-plugins-icon-container">
                            <label class="required fs-5 fw-bold mb-2"
                                >Anak dari</label
                            >
                            <select
                                class="form-select form-select-solid"
                                data-control="select2"
                                data-placeholder="Select an option"
                                data-allow-clear="true"
                                v-model="form.ref_id"
                                required
                            >
                                <option
                                    v-for="row in keluargas"
                                    :key="row.id"
                                    :value="row.id"
                                >
                                    {{ row.nama }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button
                        @click="back"
                        type="button"
                        class="btn btn-dark me-3"
                    >
                        Back
                    </button>
                    <button
                        @click="reset"
                        type="reset"
                        class="btn btn-warning me-3"
                    >
                        Reset
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import LayoutApp from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination";
export default {
    layout: LayoutApp,
    components: {
        Head,
        Link,
        Pagination,
    },
    props: {
        name: String,
        keluarga: Object,
        keluargas: Object,
    },
    data() {
        return {
            errors: [],
            form: {
                id: this.keluarga.id,
                nama: this.keluarga.nama,
                gender: this.keluarga.gender,
                ref_id: this.keluarga.ref_id,
            },
        };
    },
    created() {},
    methods: {
        back() {
            window.history.back();
        },
        reset() {
            this.form = [];
        },
        _store() {
            this.$inertia.put(
                route("keluarga.update", this.keluarga.id),
                this.form,
                {
                    preserveScroll: true,
                    onSuccess: (success) => {
                        Toast.fire({
                            icon: "success",
                            title: "Diperbarui",
                        });
                    },
                    onError: (error) => {
                        this.errors = [];
                        Object.entries(this.$attrs.errors).map((arr) => {
                            this.errors.push(arr[1]);
                        });
                    },
                }
            );
        },
    },
};
</script>
