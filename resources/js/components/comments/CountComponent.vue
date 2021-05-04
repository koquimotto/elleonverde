<template>
    <h3 class="comment-one__title title-style">
    Comentarios {{ count }}
    </h3>
</template>

<script>
    export default {
        data(){
        return{
            count: 0,
        }
    },
    // Traer comentarios
    created(){
        this.listar();
    },

    methods:{
        async listar(){
            const res = await axios.get('/comments/count/',1);
            this.count = res.data;
        },
        
    }

}
</script>
