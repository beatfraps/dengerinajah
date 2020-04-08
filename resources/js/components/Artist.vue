<template>
    <div class = "artist">
        <h2> Artist List </h2>
        <br>
        <table class = "artist_list">
            <thead>
                <tr> 
                    <th> Name </th>
                    <th> Country </th>
                    <th> Subscription Status </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="artist in artists" :key="artist.id">
                    <td> <router-link :to="'/song/'+artist.id" class="artist_name"> {{ artist.name }} </router-link> </td>

                    <td>{{ artist.country }}</td>
                    <td><button 
                        v-on:click="subscribe(artist.id)"
                        class="btn btn-outline-primary"
                        v-if="!subscript.includes(artist.id)"> Subscribe </button>
                        
                        <button 
                        v-on:click="unsubscribe(artist.id)"
                        class="btn btn-primary"
                        v-else> Unsubscribe </button> </td>
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
    padding: 5px;
}
</style>

<script>
export default {
    data(){
        return{
            artists:[],
            memberid:"",
            subscript:[],
            artisid:""
        };
    },
    mounted(){
        this.loadData();
        this.getSubs();
    },
    methods:{
        loadData(){
            axios.get('http://localhost:8000/api/artists').then(response=>{
                this.artists = response.data;
            });
        },
         getSubs(){   
            this.memberid = this.$route.params.id;
            axios.get('http://localhost:8000/api/subscription/'+this.memberid)
            .then(response=>{
                let x = response.data;
                for(let i =0 ;i<x.length;i++){
                    this.subscript.push(x[i].artist_id);
                }
            });

            console.log(this.subscript);
         }
         ,
         subscribe(id){
             axios.post('http://localhost:8000/api/subscription/'+this.memberid+'/lagu/'+id)
             .then(response=>{
                 this.$router.go();
             })
         },
         unsubscribe(id){
             axios.get('http://localhost:8000/api/subscription/'+this.memberid+'/hapus/'+id)
             .then(response=>{
                 this.$router.go();
             })
         }
    }
};
</script>