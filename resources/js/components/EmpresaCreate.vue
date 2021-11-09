<template>
    <form class="form-group" @submit.prevent="submit">
        <label for="title">Aquií va</label>
        <hr>
        <label for="content">Nombre_Larg</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Nombre_Largo">
        <label for="content">Nombre corto</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Nombre_Corto">
        <label for="content">Correo</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Correo_electronico">
        <label for="content">Telefono</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Telefono">
        <label for="content">NIT</label>
        <input class="form-control" id="title" type="text" v-model="empresa.NIT">
        <label for="content">Doc1</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Solvencia">
        <label for="content">Doc2</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Constitucion">
        <label for="content">Doc3</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Plan_Pago">
        <label for="content">Doc4</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Carta">
        <label for="content">Socio 1</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Socio_1">
        <label for="content">Socio 2</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Socio_2">
        <label for="content">Socio 3</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Socio_3">
        <label for="content">Socio 4</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Socio_4">
        <label for="content">Socio 5</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Socio_5">
        <button type="submit" class="btn btn-primary mt-3">Ingresar</button>
        {{ empresa }}

    </form>
</template>

<script>

export default {
    
    /*async mounted(){
        const response = await axios.get("/create");
        const data= response.data;
        console.log(data);
    },*/
    
    data() {
        return{
            empresa:{
            Nombre_Largo:"",
            Nombre_Corto:"",
            Correo_electronico:"",
            Telefono:"",
	        NIT:"",
            Solvencia:"",
            Constitucion:"",
            Plan_Pago:"",
            Carta:"",
            Socio_1:"",
            Socio_2:"",
            Socio_3:"",
            Socio_4:"",
            Socio_5:""
            }
        }
        
    },
    methods:{
        async submit(){
           const response = await axios.empresa('/empresa', this.empresa);
             this.empresa.Nombre_Largo = "";
            this.empresa.Nombre_Corto = "";
            this.empresa.Correo_electronico = "";
            this.empresa.Telefono = "";
	        this.empresa.NIT = "";
            this.empresa.Solvencia = "";
            this.empresa.Constitucion = "";
            this.empresa.Plan_Pago = "";
            this.empresa.Carta = "";
            this.empresa.Socio_1 = "";
            this.empresa.Socio_2 = "";
            this.empresa.Socio_3 = "";
            this.empresa.Socio_4 = "";
            this.empresa.Socio_5 = "";
            
            console.log(response);
        }
    },
}
</script>
