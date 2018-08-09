<template>
    <div class="data-content">
        <h4>PRODUCT</h4>
        <div class="row pad-right-15 pad-left-15 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type/Category</th>
                        <th>View(s)</th>
                        <th>Created at</th>
                        <th>Linked Web</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="active"><a href="#">2 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
            <button type="button" class="btn btn-success">Add</button>
        </div>
        <!--end row-->
        <div class="row">
            <div id="wrap-product-detail" class="row pad-top-15">
                <div class="col-md-2 col-xs-12 col-sm-12"></div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="pro-name" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="pro-name" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end name product-->
                    <!--category-->
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="pro-category" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="pro-category">
                                            <option>--Select Category--</option>
                                            <option>Information Technology</option>
                                            <option>Design 2D</option>
                                            <option>Design 3D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end category-->
                    <!--image cover-->
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="pro-image-cover" class="col-sm-2 control-label">Image cover</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="pro-image-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end image cover-->
                    <!--image detail-->
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Image detail</label>
                                    <div class="col-sm-9">
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a class="thumbnail">
                                                <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                                            </a>
                                        </div>
                                        <div class="col-md-3 pad-bot-15">
                                            <a id="button-add-image">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end image detail-->
                    <!--linh demo-->
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="pro-link-demo" class="col-sm-2 control-label">Link demo</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="pro-link-demo" placeholder="Link demo/Website/Youtube">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end link demo-->
                    <!--link source-->
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="pro-link-source" class="col-sm-2 control-label">Link source</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="pro-link-source" placeholder="Link source/Git">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end link source-->
                    <!--description-->
                    <div class="row">
                        <div class="col-md-12 pad-bot-15">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-md-9 pad-left-15 pad-right-15">
                                        <!--<textarea class="form-control" rows="5" id="edu-description" placeholder="Description(0-1000 characters)"></textarea>-->
                                        <ckeditor id="pro-description"></ckeditor>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end description-->
                    <!--button save-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-8">
                                        <button type="button" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end button save-->
                </div>
            </div>
        </div>

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