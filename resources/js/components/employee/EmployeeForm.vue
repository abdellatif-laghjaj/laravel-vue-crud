<template>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <a href="/" class="btn btn-dark btn-sm float-right">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h3 class="ms-2 mb-0">{{ scope }} Form</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name" class="my-2">Name</label>
                        <input type="text" class="form-control" id="name" v-model="form.name"
                               placeholder="Enter employee name" required>
                    </div>
                    <div class="form-group">
                        <label for="department" class="my-2">Department</label>
                        <input type="text" class="form-control" id="department" v-model="form.department"
                               placeholder="Enter employee department" required>
                    </div>
                    <div class="form-group">
                        <label for="section" class="my-2">Section</label>
                        <input type="text" class="form-control" id="section" v-model="form.section"
                               placeholder="Enter employee section" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="my-2">Email</label>
                        <input type="email" class="form-control" id="email" v-model="form.email"
                               placeholder="Enter employee email" required>
                    </div>
                    <button type="button" class="btn btn-warning text-white my-2 w-100" @click="saveForm()">save
                    </button>
                </form>
            </div>
        </div>

    </div>
</template>

<script>
import axios from "axios";
import swal from 'sweetalert';

export default {
    name: 'employee-form',
    props: {
        scope: String,
    },
    data() {
        return {
            form: {
                name: '',
                department: '',
                section: '',
                email: ''
            }
        }
    },
    methods: {
        clearForm() {
            this.form.name = '';
            this.form.department = '';
            this.form.section = '';
            this.form.email = '';
        },
        saveForm() {
            const config = {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }
            let formData = new FormData();
            formData.append('name', this.form.name);
            formData.append('department', this.form.department);
            formData.append('section', this.form.section);
            formData.append('email', this.form.email);

            axios.post('api/employees/add', formData, config)
                .then(response => {
                    swal({
                        title: "Success",
                        text: "Employee added successfully",
                        icon: "success",
                        button: "Ok",
                    }).then(() => {
                        this.$router.push({name: 'home'})
                    })
                })
                .catch(error => {
                    swal({
                        title: "Error",
                        text: "Something went wrong",
                        icon: "error",
                        button: "Ok",
                    })
                })

            this.clearForm();
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
