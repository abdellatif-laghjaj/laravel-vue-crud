<template>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3 class="mb-0">Employees</h3>
                <button type="button" class="btn btn-warning" @click="addEmployee()">
                    <i class="bi bi-person-plus-fill me-2"></i>
                    Add Employee
                </button>
            </div>
            <div class="card-body">
                <div class="card w-100" style="width: 18rem;">
                    <table class="table table-striped" v-if="isLoaded">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Section</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(employee, index) in employees" :key="employee.id">
                            <th scope="row">{{ employee.id }}</th>
                            <td>{{ employee.name }}</td>
                            <td>{{ employee.department }}</td>
                            <td>{{ employee.section }}</td>
                            <td>{{ employee.email }}</td>
                            <td class="d-flex gap-2">
                                <button type="button" class="btn btn-warning text-white"
                                        @click="editEmployee(employee)">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" class="btn btn-dark text-white" @click="viewEmployee(employee)">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-danger text-white"
                                        @click="deleteEmployee(employee)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center m-3" v-else>
                        <div class="spinner-border" role="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import swal from 'sweetalert';
import axios from "axios";
export default {
    name: "Home",
    data() {
        return {
            employees: [],
            isLoaded: false,
        };
    },
    methods: {
        addEmployee() {
            window.location.href = "/add-employee";
        },
        getEmployees() {
            axios.get('api/employees')
                .then(res => {
                    this.employees = res.data.employees;
                    this.isLoaded = true;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        editEmployee(employee) {
        },
        viewEmployee(employee) {
        },
        deleteEmployee(employee) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this employee!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    axios.delete('api/employees/delete/' + employee.id)
                        .then(res => {
                            this.getEmployees();
                            swal("Employee has been deleted!", {
                                icon: "success",
                            });
                        })
                        .catch(error => {
                            swal("Something went wrong!", {
                                icon: "error",
                            });
                        });
                } else {
                    swal("Your employee is safe!");
                }
            });
        },
    },
    mounted() {
        this.getEmployees();
    },
}
</script>

<style scoped>

</style>
