<template>
    <div>
        <h1>LA EMPRESA</h1>
    </div>
</template>

<script>

export default {
    
    async mounted(){
        const response = await axios.get("/empresa");
        const data= response.data;
        console.log(data);
    },
    
    data() {
        return{
            empresa:{
            Nombre_Largo:"Aperture",
            Nombre_Corto:"APE",
            Correo_electronico:"something@gmail.com",
            Telefono:"74067895",
	        NIT:"23654",
            Solvencia:"agh.pdf",
            Constitucion:"uff.pdf",
            Plan_Pago:"ehh.pdf",
            Carta:"ajem.pdf",
            Socio_1:"201704567",
            Socio_2:"201704569",
            Socio_3:"201704565",
            Socio_4:"201704566",
            Socio_5:"201704563"
            }
        }
        
    },
}
</script>
