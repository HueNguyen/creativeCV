<template>
    <div class="data-content">
        <h4>FAVORITE</h4>
        <div class="row pad-left-15 pad-right-15 pad-bot-15 box-favorite">
            <div class="col-md-3">
                <div class="thumbnail" height="70px" width="70px">
                    <img src="/images/favorite/favorite-default.png">
                </div>
            </div>
            <div class="col-md-9 pad-left-15">
                <div class="caption">
                    <h3 class="title-favorite">Thumbnail label
                        <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        <a><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    </h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>

        </div>
        <div class="row pad-left-15 pad-right-15 pad-bot-15 box-favorite">
            <div class="col-md-3">
                <div class="thumbnail" height="70px" width="70px">
                    <img src="/images/favorite/favorite-default.png">
                </div>
            </div>
            <div class="col-md-9 pad-left-15">
                <div class="caption">
                    <h3 class="title-favorite">Thumbnail label
                        <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        <a><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    </h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-success" id="btn-add-favorite"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
        <!--form add favorite-->
        <div class="form-add-favorite">
            <div class="pad-top-15">
                <input type="text" class="form-control" id="fav-name" placeholder="Title/Name of favorite">
            </div>
            <div class="pad-top-15">
                <textarea class="form-control" rows="5" id="fav-description" placeholder="Description(0-1000 characters)"></textarea>
            </div>
            <div class="pad-top-15 pad-bot-15">
                <input type="file" id="fav-image">
            </div>
            <div style="text-align: right">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default">Cancle</button>
            </div>
        </div>
        <!--end form-->
    </div>

</template>
<script type="text/babel">
    export default{
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>