<template>
    <div class="data-content">
        <h4>SKILL</h4>
        <p class="name-skill">Photoshop <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
            </div>
        </div>
        <p class="name-skill">Illustrator <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
        <p class="name-skill">HTML5/CSS3 <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>
        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                <span class="sr-only">50% Complete (warning)</span>
            </div>
        </div>
        <p class="name-skill">Javascript <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a><a><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>
        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                <!--<span class="sr-only">90% Complete (danger)</span>-->
            </div>
        </div>
        <button type="button" class="btn btn-success" id="btn-add-skill"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
        <!--form add skill-->
        <div class="form-add-skill">
            <div class="pad-top-15">
                <select class="form-control">
                    <option>--Select Skill--</option>
                    <option>PHP, MySQL</option>
                    <option>Ajax, Jquery</option>
                    <option>HTML/CSS</option>
                    <option>Photoshop</option>
                    <option>OS(Window, Linux)</option>
                </select>
            </div>
            <div class="pad-top-15">
                <select class="form-control">
                    <option>--Select Color Chart--</option>
                    <option>PHP, MySQL</option>
                    <option>Ajax, Jquery</option>
                    <option>HTML/CSS</option>
                    <option>Photoshop</option>
                    <option>OS(Window, Linux)</option>
                </select>
            </div>
            <div class="pad-top-15">
                <span class="rating">(Rating 8/10) </span>
                <p class="rating-skill">
                    <!--<span class="rating">(Rating 8/10) </span>-->
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                </p>
            </div>
            <div style="text-align: right">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default">Cancle</button>
            </div>
        </div>
        <!--end form add skill-->
    </div>

</template>
<script type="text/babel">
    export default{
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>