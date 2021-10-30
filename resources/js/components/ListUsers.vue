<template>
    <div>
        <ul class="">
            <li class="d-flex flex-row py-2" v-for="user in users">
                <div class="px-3">
                    <img v-if="user.avatar && user.avatar.length < 100" src="img/user.png" alt="img/user.png" width="48" height="48">  
                    <img v-else :src="user.avatar" alt="User Icon" width="48" height="48">   
                </div>
                <div class="w-100">
                    <h5>{{user.name}}</h5>
                    <div>{{user.title}} at <strong>{{user.company}}</strong></div>
                    <div class="user-bio">{{user.bio}}</div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script type="text/javascript">
    export default {
        props: {
            users: {}
        },    }
</script>

<style type="text/css" scoped>
    div{
        background-color: white;
    }
    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    li + li > div:last-child {
        border-top: 1px solid #ccc;
    }
    .user-bio {
        color:  #aaa;
    }
</style>
