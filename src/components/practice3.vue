<template>
 <div>
<p>{{ registers }}</p>
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
    apiService.getRegisters1(1).then((datas) => {
        this.registers = datas;
        });
},
},

}
</script>

<style>

</style>
