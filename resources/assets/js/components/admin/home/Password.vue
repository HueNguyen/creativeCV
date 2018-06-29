<template>
    <div class="data-content">
        <h4>CHANGE PASSWORD</h4>
        <div class="form-change-password">
            <div class="form-group">
                <label for="pass-old">Old password</label>
                <input type="password" class="form-control" id="pass-old" placeholder="Old password">
            </div>
            <div class="form-group">
                <label for="pass-new">New password</label>
                <input type="password" class="form-control" id="pass-new" placeholder="New password">
            </div>
            <div class="form-group">
                <label for="pass-confirm">Re-typing</label>
                <input type="password" class="form-control" id="pass-confirm" placeholder="Retype password">
            </div>
            <div class="pad-top-15" style="text-align: right">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default">Cancle</button>
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