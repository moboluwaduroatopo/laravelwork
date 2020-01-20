import axios from 'axios';
// const API_URL = 'http://localhost:80';
export class APIService{
// getRegisters1() {
//    //const url = `${API_URL}/apis/`;
//     return axios.get(`http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=d52b32d17922f5700bce1c17c421a80f`).then(response => response.data);
// }
getRegisters() {
    // const url = `${API_URL}/apis/`;
    return axios.get(`{url}index.php`).then(response => response.data);
}
createRegister(register){
    // const url = `${API_URL}/apis/`;
    return axios.post('http://localhost:80/apis/create.php',register)
    .then(resp => resp.data)
    .catch(error=>{alert(error);
    });
}
constructor(){
}

}