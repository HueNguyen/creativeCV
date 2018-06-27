<template>
    <div class="data-content edu-library">
        <h4>LIBRARY</h4>
        <div class="row pad-all-15">
            <div class="col-md-3 pad-bot-15">
                <a class="thumbnail">
                    <img src="/images/education/lib_01.jpg" class="img-edu-lib">
                </a>
            </div>
            <div class="col-md-3 pad-bot-15">
                <a class="thumbnail">
                    <img src="/images/education/lib_02.jpg" class="img-edu-lib">
                </a>
            </div>
            <div class="col-md-3 pad-bot-15">
                <a class="thumbnail">
                    <img src="/images/education/lib_03.jpg" class="img-edu-lib">
                </a>
            </div>
            <div class="col-md-3 pad-bot-15">
                <a class="thumbnail">
                    <img src="/images/education/lib_04.jpg" class="img-edu-lib">
                </a>
            </div>
            <div class="col-md-3 pad-bot-15">
                <a class="thumbnail">
                    <img src="/images/education/lib_05.png" class="img-edu-lib">
                </a>
            </div>
        </div>
    </div>
</template>

<script type="text/babel">
    export default {
        created(){


        },
        mounted() {
            console.log('Component mounted.')
            var liMaxHeight4 = -1;
            var x = document.getElementsByClassName("img-edu-lib");
//            console.log(x)
////            console.log($('.img-edu-lib').length)
//
            for(var i = 0; i < x.length; i++){
                console.log(x[i].attr('height'))
//                if(x[i].height > liMaxHeight4){
//                    liMaxHeight4 = x[i].height;
//                }
            }
//
//            $(".img-edu-lib").css('min-height',liMaxHeight4);


//             var liMaxHeight4 = -1;
//
//             $('.img-edu-lib').each(function(index) {console.log($(this)[0]);
//                 if ($(this).outerHeight() > liMaxHeight4) {
//                     liMaxHeight4 = $(this).outerHeight();
//                 }
//             });
//             $('.img-edu-lib').css('min-height',liMaxHeight4);
        },
        components: {
//            'sub-education': SubEducation
        }
    }


</script>