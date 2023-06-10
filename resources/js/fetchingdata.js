import axios, { Axios }  from "axios";




document.getElementById('addApointment').addEventListener('click',()=>{
    let form= document.querySelector('#appointmentForm')
    let data= new FormData(form)
    
    console.log('clicked')
    axios.post('http://127.0.0.1:8000/citas/agregar',data).
    then(response=>{
        $('#appointmentModal').modal('hide')
        console.log('done')
    }).
    catch(error=>{
        if(error.response){
            alert(error.response)
            console.log('failded')
        }
    })

    console.log('pass')
})