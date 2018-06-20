<template>
    <div class="data-content">
        <h4>EDUCATION</h4>
        <sub-education></sub-education>
        <hr>
        <sub-education></sub-education>
        <button type="button" class="btn btn-success" id="btn-add-education"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
        <!--<p id="icon-add-education"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></p>-->
    </div>
</template>

<script type="text/babel">
    import SubEducation from './SubEducation.vue';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            'sub-education': SubEducation
        }
    }
</script>