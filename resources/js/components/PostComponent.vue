 <template>
     <div id="app">
        <h6>{{ posts.post}}</h6>
        <h6>{{ posts.body}}</h6>
         by {{posts.user_id}} @ {{posts.created_at}}
     </div>
</template>

<script>
    export default {

        mounted(){
            console.log('PostComponent mounted.')
            },

        data(){
            return {
                posts:[]
                }

            },

    props:['posts']
}
</script>
