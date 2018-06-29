<template>
    <div class="data-content">
        <h4>EXPERIENCE</h4>
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--company-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-comapany" class="col-sm-2 control-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exp-comapany" placeholder="Name of company">
                        </div>
                    </div>
                </div>
                <!--end company-->
                <!--position-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-position" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exp-position">
                                <option>--Select Specialized--</option>
                                <option>Information Technology</option>
                                <option>Design 2D</option>
                                <option>Design 3D</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--end position-->
            </div>
            <!--date-->
            <div class="col-md-12 pad-bot-15">
                <!--start date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-start-date" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exp-start-date" placeholder="dd/MM/yyyy">
                        </div>
                    </div>
                </div>
                <!--end start date-->
                <!--end date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-end-date" class="col-sm-2 control-label">End date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exp-end-date" placeholder="dd/MM/yyyy">
                        </div>
                    </div>
                </div>
                <!--end end-date-->
            </div>
            <!--end date-->
            <div class="col-md-12 pad-bot-15">
                <div class="form-group">
                    <label for="exp-description" class="col-md-1 control-label">Description</label>
                    <div class="col-md-11 pad-left-15 pad-right-15">
                        <textarea class="form-control" rows="5" id="exp-description" placeholder="Description(0-1000 characters)"></textarea>
                    </div>
                </div>
            </div>
            <!--button save-->
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end button save-->
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--company-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-comapany" class="col-sm-2 control-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exp-comapany" placeholder="Name of company">
                        </div>
                    </div>
                </div>
                <!--end company-->
                <!--position-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-position" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="exp-position">
                                <option>--Select Specialized--</option>
                                <option>Information Technology</option>
                                <option>Design 2D</option>
                                <option>Design 3D</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--end position-->
            </div>
            <!--date-->
            <div class="col-md-12 pad-bot-15">
                <!--start date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-start-date" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exp-start-date" placeholder="dd/MM/yyyy">
                        </div>
                    </div>
                </div>
                <!--end start date-->
                <!--end date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exp-end-date" class="col-sm-2 control-label">End date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exp-end-date" placeholder="dd/MM/yyyy">
                        </div>
                    </div>
                </div>
                <!--end end-date-->
            </div>
            <!--end date-->
            <div class="col-md-12 pad-bot-15">
                <div class="form-group">
                    <label for="exp-description" class="col-md-1 control-label">Description</label>
                    <div class="col-md-11 pad-left-15 pad-right-15">
                        <textarea class="form-control" rows="5" id="exp-description" placeholder="Description(0-1000 characters)"></textarea>
                    </div>
                </div>
            </div>
            <!--button save-->
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end button save-->
        </div>
        <button type="button" class="btn btn-success" id="btn-add-experience"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
    </div>
</template>

<script type="text/babel">
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
//            'sub-education': SubEducation
        }
    }
</script>