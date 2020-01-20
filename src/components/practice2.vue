<template>
<div>
    <div>
        <div> Firstname: <input type="text" name="name" id="name" value=""></div>
        <div> Mobile: <input type="text" name="phone" id="phone"></div>
        <div> Password: <input type="text" name="pwd" id="pwd"></div>
        <button id="sub" v-on:click="hi">Submit</button>
    </div>
</div>
</template>

<script>
import {APIService} from '../Apiservice';
import axios from 'axios';

const apiService = new APIService();

export default {
  name: 'Practice',
    props: {
    info: String,
    phone: String,
    pass: String,
    tools: Object
  },
  data :{
     first:'',
  },
    methods: {
        hi:function(){
            //  return axios.post('http://localhost:80/apis/create.php',{first:document.getElementById('name').value})
            // .then(resp => {alert(resp.data);
            // })
            // .catch(error=>{alert(error);
            // });
            this.tools = {
                first: document.getElementById('name').value,
                second: document.getElementById('phone').value,
                third: document.getElementById('pwd').value
            }
            alert(this.tools);
            apiService.createRegister(this.tools);
        },
        // createRegister(register){
        //     const url = `${API_URL}/apis/`;
        //     return axios.post('http://localhost:80/apis/create.php',register.first)
        //     .then(resp => {alert(resp.data);
        //     })
        //     .catch(error=>{alert(error);
        //     });
        // }   
    },
  components: {

  }
}
</script>

<style>
</style>
