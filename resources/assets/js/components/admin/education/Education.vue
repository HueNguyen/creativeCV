<template>
    <div class="data-content">
        <h4>EDUCATION</h4>
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--name-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edu-name" placeholder="Name of school">
                        </div>
                    </div>
                </div>
                <!--end name-->
                <!--specialized-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-specialized" class="col-sm-2 control-label">Specialized</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="edu-specialized">
                                <option>--Select Specialized--</option>
                                <option>Information Technology</option>
                                <option>Design 2D</option>
                                <option>Design 3D</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--end specialized-->
            </div>
        </div>
        <!--date-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--start date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-start-date" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edu-start-date" placeholder="dd/MM/yyyy">
                        </div>
                    </div>
                </div>
                <!--end start date-->
                <!--end date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-end-date" class="col-sm-2 control-label">End date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="edu-end-date" placeholder="dd/MM/yyyy">
                        </div>
                    </div>
                </div>
                <!--end end-date-->
            </div>
        </div>
        <!--end date-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--address-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edu-address" placeholder="Address">
                        </div>
                    </div>
                </div>
                <!--end address-->
                <!--specialized-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-website" class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="edu-website" placeholder="Address">
                        </div>
                    </div>
                </div>
                <!--end specialized-->
            </div>
        </div>
        <!--image-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edu-image" class="col-sm-2 control-label">Image cover</label>
                        <div class="col-sm-9">
                            <input type="file" id="edu-image">
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end image-->
        <!--description-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <div class="form-group">
                    <label for="edu-slug" class="col-md-1 control-label">Slug</label>
                    <div class="col-md-11 pad-left-15 pad-right-15">
                        <textarea class="form-control" rows="5" id="edu-slug" placeholder="Description(0-1000 characters)"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!--end description-->
        <!--description-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <div class="form-group">
                    <label for="edu-about" class="col-md-1 control-label">Think about this</label>
                    <div class="col-md-11 pad-left-15 pad-right-15">
                        <textarea class="form-control" rows="5" id="edu-about" placeholder="Description(0-1000 characters)"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!--end description-->
        <!--description-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <div class="form-group">
                    <label class="col-md-1 control-label">Description</label>
                    <div class="col-md-11 pad-left-15 pad-right-15">
                        <!--<textarea class="form-control" rows="5" id="edu-description" placeholder="Description(0-1000 characters)"></textarea>-->
                        <ckeditor></ckeditor>
                    </div>

                </div>
            </div>
        </div>
        <!--end description-->
        <!--button save-->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-primary">Save change</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end button save-->
    </div>
</template>

<script type="text/babel">
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
//            'ckeditor': CKEditor
        }
    }
</script>