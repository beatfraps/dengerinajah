<template>
  <div class="home">
    <p id = "label-welcome"> <b> Welcome to DengerinAja! </b> </p>
    <div class = "login">
        <label id = "label-id"> <b> DengerinAja ID * </b> </label> <br>
        <input
            type = "text"
            id = "login-id"
            v-model = "user.id"
            placeholder = "DengerinAja ID">
    </div>
    <br>
    <a @click="login"><button class="submit-id">  Login </button></a>
  </div>
</template>

<style>

#login-id{
    margin:0;
    padding:3px;
    width: 530px;
}

.submit-id{
    background: blue;
    border: none;
    border-radius: 5px;
    padding: 10px;
    padding-left: 252px;
    padding-right: 242px;
    font-weight: bold;
    color:white;
}

.home{
    font-family: Helvetica;
    margin-top:120px;
    border: 1px solid gray;
    border-radius: 5px;
    margin-left: 400px;
    margin-right: 400px;
    padding: 20px;
}

#label-welcome{
    font-size: 25px;
    color: black;
    text-align: left;

}

.login{
    text-align: left;
}


</style>

<script>
export default {
    data(){
        return{
            user:{
                id:""
            }
        }
    },
    methods:{
        login(){
            let stat = false;
            axios.get('http://localhost:8000/api/member/'+this.user.id)
            .then(response=>{
                if(response.status!=200){
                     axios.post('http://localhost:8000/api/member/'+this.user.id)
                    .then(response=>{
                        this.$router.push('/artist/'+this.user.id);
                    });
                }else{
                    this.$router.push('/artist/'+this.user.id);
                }
            });
          
        }   
    }
}
</script>