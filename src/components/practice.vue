<template>
 <div>
 <table>
  <tr><td>First_name</td><td>last_name</td><td>Address</td><td>email</td><td>phone</td><td>office</td></tr>
 <tr v-for= "register in registers">
    <td>{{ register.firstname }}</td>
    <td>{{ register.surname }}</td>
    <td>{{ register.home_address }}</td>
    <td>{{ register.user_email }}</td>
    <td>{{ register.mobile_1 }}</td>
    <td>{{ register.office_1 }}</td>   
 </tr>
 </table>

 </div>
</template>

<script>
import {APIService} from '../Apiservice';

const apiService = new APIService();

export default {

name: 'Listregisters', 

components: {

},

data() {

return {
registers:[],
};

},
created() {
this.fetchService();
},

methods: {

fetchService(){
    apiService.getRegisters(1).then((datas) => {
        this.registers = datas;
        });
},
},

}
</script>

<style>

</style>
