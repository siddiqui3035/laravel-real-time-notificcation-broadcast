,<template>
    <div class="container">
        <div class="card">
            Notifications:
            <notify :user="user" :user_notifications="user_notifications"></notify>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Post_action</th>
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
                <!-- <template v-for="post in posts" :key="post.id"> -->
                  <!-- v-for="(item,index) in users" :key="index"> -->
                  <!-- <tr v-for="listuser in users" :key="listuser.id" :value="listuser.id" > -->
                    <!-- <tr v-for="post in posts" :key="post.id">
                        <td>1</td>
                        <td>{{post.title}}</td>
                        <td>{{post.discription}}</td>
                        <td>{{post.user.name}}</td>
                        <td>
                            <button type="btn btn-sm btn-info" @click="LikePost(post.id)">
                                Like
                            </button>
                        </td>
                    </tr> -->
                <!-- </template> -->

            </tbody>
        
        </table>
    </div>
</template>

<script>
import {ref, onMounted} from  'vue';
import Notify from './PostNotifyComponent.vue'
export default{
  props:['posts','user','user_notifications'],
  components:{
  'notify':Notify
  },
  setup(props){
    let posts =  ref([])

    onMounted(() =>{
      posts.value = props.posts
    })

    function LikePost(id){
      axios.post('/post-like',{'post_id':id}).then(response=> {
          console.log(response.data);
        });
    }
    return {
      posts,
      LikePost
    }
  }
}
// import Notify from './PostNotifyComponent.vue'
// export default {
//   name: "Posts",

//   data() {
//     return {
//       posts: [],
//     };
//   },
//   created() {
//     this.postData();
//   },
//   methods: {
//     postData() {
//       axios.get("/get-post").then((response) => {
//         this.posts = response.data.posts;
//         console.log(this.posts);
//       });
//     },
//   },
// };
</script>
