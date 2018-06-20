<template>
    <div class="data-content">
        <h4>PROFILE INFO</h4>
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--full name-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-name" class="col-sm-2 control-label">Full name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="info-name" placeholder="Full name">
                        </div>
                    </div>
                </div>
                <!--end full name-->
                <!--date of birth-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-birthday" class="col-sm-2 control-label">DOB</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="info-birthday" placeholder="Date of birth">
                        </div>
                    </div>
                </div>
                <!--end date of birth-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--phone-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="info-phone" placeholder="Phone">
                        </div>
                    </div>
                </div>
                <!--end phone-->
                <!--mail-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-mail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="info-mail" placeholder="Email">
                        </div>
                    </div>
                </div>
                <!--end mail-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <!--skype-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-skype" class="col-sm-2 control-label">Skype</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="info-skype" placeholder="Skype">
                        </div>
                    </div>
                </div>
                <!--end skype-->
                <!--facebook-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-facebook" class="col-sm-2 control-label">Facebook</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="info-facebook" placeholder="Facebook">
                        </div>
                    </div>
                </div>
                <!--end facebook-->
            </div>
        </div>

        <!--address-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="info-address" placeholder="Address">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end address-->
        <!--website-->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-website" class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="info-website" placeholder="Website">
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <!--end website-->
        <!--precept-->
        <div class="row">
            <div class="col-md-12 pad-bot-15">
                <div class="form-group">
                    <label for="info-precept" class="col-md-1 control-label">Precept</label>
                    <div class="col-md-11 pad-left-15 pad-right-15">
                        <textarea class="form-control" rows="5" id="info-precept" placeholder="Precept(0-1000 characters)"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!--end precept-->
        <!--button save-->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info-website" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-primary">Save</button>
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
        }
    }
</script>