<template>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Post_action</th>
                </tr>
            </thead>

            <tbody>
                <template v-for="post in posts" :key="post.id">
                    <tr>
                        <th scope="row">1</th>
                        <td>{{post.title}}</td>
                        <td>{{post.user.name}}</td>
                        <td>
                            <button type="btn btn-sm btn-info" @click="LikePost(post.id)">
                                Like
                            </button>
                        </td>
                    </tr>
                </template>
            </tbody>
        
        </table>
    </div>
</template>

<script>
    export default{
            props:['posts','user'],
            setup(){
            function LikePost(post_id) {
                console.log(post_id);
            }
        }
    }
</script>
