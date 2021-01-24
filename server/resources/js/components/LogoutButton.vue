<template>
    <div>
        <div class="text-center pt-3">
            <div class="btn btn-danger">
                <a class="text-white" href="/logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    ログアウト
                </a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    <input type="hidden" name="_token" :value="csrf_token">
                </form>
            </div>
        </div>
    </div>
</template>

<script>
var csrf_token = $('meta[name="csrf-token"]').attr('content');

export default {
    data() {
        return {
            csrf_token: csrf_token
        }
    }
}
</script>
