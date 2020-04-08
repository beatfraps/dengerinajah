<template>
    <div class = "artist">
        <h2> Artist List </h2>
        <br>
        <table class = "artist_list">
            <thead>
                <tr> 
                    <th> Title </th>
                    <th> Release Year </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="song in songs" :key="song.id">
                    <td>{{ song.title }}</td>
                    <td>{{ song.releaseYear }}</td>
                </tr>
            </tbody>
        </table>    
    </div>
</template>

<style>
.artist{
    text-align: left;
    padding: 50px;
    font-family: Helvetica;
}

table{
    border-collapse:collapse;   
    width: 1000px;  
}

table thead{
    border-top: 1px solid black;
    border-bottom: 1px solid black;
}

table tbody{
    border-bottom: 1px solid black;
}

table th{
    padding: 10px;
}

table td{
    padding: 10px;
}
</style>

<script>
export default {
    data(){
        return{
            songs:[]
        };
    },
    mounted(){
        this.loadData();
    },
    methods:{
        loadData(){
            axios.get("http://localhost:8000/api/song/"+this.$route.params.art_id)
            .then(response=>{
               this.songs = response.data;
            });
        },
    }
};
</script>