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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            employees: [],
        };
    },
    methods: {
        addEmployee() {
            window.location.href = "/add-employee";
        },
        getEmployees() {
            alert("get employees");
        },
    },
    created() {
        this.getEmployees();
    },
}
</script>

<style scoped>

</style>
