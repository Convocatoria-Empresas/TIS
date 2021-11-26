
<template>
    <div class="row">
        <div class="text-center col">
            <h1>REGISTRO DE EMPRESA</h1><h2></h2>
        </div>
        <div class="col-12">
            <div class="card">

                <div class="card-header"><h4> <strong>Registrar Empresa</strong></h4></div>
                <div class="card-body">
               <!--     <form @submit.prevent="submit">
                        <div  class="row">
                            <div  class="row needs-validation" novalidate>

                                <div class="col-lg-5 offset-md-1" >
                                <label for="validationCustom01" class="form-label"><strong>Nombre Largo</strong></label>
                                <input maxlength="30" type="text" placeholder="Nombre Largo Empresa" name="Nombre_Largo" class="form-control" id="Nombre_Largo" v-model="empresa.Nombre_Largo" required pattern="[a-zA-Z- -\.]+"  
                                oninvalid="setCustomValidity('Porfavor llena el nombre, solo se aceptan caracteres de la A-Z ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-1">
                                 <label for="validationCustom01" class="form-label"><strong>Socios (Codigo SIS)</strong></label>
                                <input maxlength="9" minlength="9" type="text" placeholder="Representante Legal" name="Socio_1" class="form-control" id="Socio_1" v-model="empresa.Socio_1"  required pattern="[0-9]+"
                                oninvalid="setCustomValidity('Revise el codigo SIS ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-5 offset-md-1">
                                <label for="validationCustom01" class="form-label"><strong>Nombre Corto</strong></label>
                                <input maxlength="20"  type="text" placeholder="Nombre Corto Empresa" name="Nombre_Corto" class="form-control" id="Nombre_Corto" v-model="empresa.Nombre_Corto"  required pattern="[a-zA-Z- -\.]+"
                                oninvalid="setCustomValidity('Porfavor llena el nombre corto con caracteres de la A-Z')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-1">
                                <label for="validationCustom01" class="form-label"></label>
                                <input maxlength="9" minlength="9" type="text" placeholder="Integrante" name="Socio_2" class="form-control" id="Socio_2" v-model="empresa.Socio_2" required pattern="[0-9]+"
                                oninvalid="setCustomValidity('Revise el codigo SIS  ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-5 offset-md-1">
                                 <label for="validationCustom01" class="form-label"><strong>Correo de la Empresa</strong></label>
                                <input type="email" name="email" class="form-control"  id="Correo_electronico" v-model="empresa.Correo_electronico" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
                                oninvalid="setCustomValidity('Por favor ingresa una dirección de correo valida ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-1">
                                <label for="validationCustom01" class="form-label"></label>
                                <input maxlength="9" minlength="9" type="text" placeholder="Integrante" name="Socio_3" class="form-control" id="Socio_3" v-model="empresa.Socio_3" required pattern="[0-9]+"
                                oninvalid="setCustomValidity('Revise el codigo SIS ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-1">
                                <label for="validationCustom01" class="form-label"><strong>Telefono</strong></label>
                                <input maxlength="8" minlength="7" type="text" placeholder="Telefono Empresa" name="Telefono" class="form-control" id="Telefono" v-model="empresa.Telefono"  required pattern="[0-9]+"
                                oninvalid="setCustomValidity('Porfavor llene el Telefono, solo se aceptan numeros y el minumo son 7 digitos')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-2">
                                <label for="validationCustom01" class="form-label"></label>
                                <input maxlength="9" minlength="9" type="text" placeholder="Integrante" name="Socio_4" class="form-control" id="Socio_4" v-model="empresa.Socio_4"  pattern="[0-9]+"
                                oninvalid="setCustomValidity('Revise el codigo SIS ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-1">
                                <label for="validationCustom01" class="form-label"><strong>NIT</strong></label>
                                <input maxlength="7" minlength="7" type="text" placeholder="NIT Empresa" name="NIT" class="form-control" id="NIT"  v-model="empresa.NIT" required pattern="[0-9]+"
                                oninvalid="setCustomValidity('Porfavor llene el NIT de la Empresa, solo se aceptan numeros ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div>

                                <div class="col-lg-4 offset-md-2">
                                 <label for="validationCustom01" class="form-label"></label>
                                <input maxlength="9" minlength="9" type="text" placeholder="Integrante" name="Socio_5" class="form-control" id="Socio_5" v-model="empresa.Socio_5" pattern="[0-9]+"
                                oninvalid="setCustomValidity('Revise el codigo SIS  ')" onchange="try{setCustomValidity('')}catch(e){}" />
                                <div class="valid-feedback">
                                 </div>
                                </div> 

                            </div>
                            <div class="row">
                               <div class="col-lg-4 offset-md-1">
                                <label for="formFile" class="form-label"><strong>Solvencia Tecnica</strong></label>
                                <input class="form-control" accept=".pdf" type="file" id="Solvencia" required>
                                </div>
                                <div class="col-lg-4 offset-md-2">
                                <label for="formFile" class="form-label"><strong>Plan de Pago</strong></label>
                                <input class="form-control"  accept=".pdf" type="file" id="Plan_Pago" required>
                                </div>
                                <div class="col-lg-4 offset-md-1">
                                <label for="formFile" class="form-label"><strong>Constitución de la Empresa</strong></label>
                                <input class="form-control" accept=".pdf" type="file" id="Constitucion" required>
                                </div>
                                <div class="col-lg-4 offset-md-2">
                                <label for="formFile" class="form-label"><strong>Carta de Presentación</strong></label>
                                <input class="form-control" accept=".pdf" type="file" id="Carta" required>
                                </div>
                            </div>
                            <div class="row">
                                   <div class="col-lg-5 offset-md-1">
                                  <li> <a href="https://www.facebook.com/lacocoyodotcom/" target="_blank" class="nav-link text-info">Mas información</a></li>
                                  </div>
                                     <div class="col-lg-6">
                                     <label for="validationCustom01" class="form-label"></label>
                                     <div class="row">
                                     <div class="col-lg-6 offset-md-2">
                                     <button type="submit" class="btn btn-lg btn-danger">Cancelar</button>
                                     </div>
                                     <div class="col-lg-4">
                                     <button type="submit" class="btn btn-lg btn-success">Registrar</button>
                                     {{ empresa }}
                                     </div>


                                     </div>

                                     </div>
                            </div>



                        </div>
                    </form>-->
                    <form class="form-group" @submit.prevent="submit">
        <label for="title">El registro</label>
        <hr>
        <label for="content">Nombre_Larg</label>
        <input class="form-control" id="Nombre_Larg" type="text" v-model="empresa.Nombre_Largo">
        <label for="content">Nombre corto</label>
        <input class="form-control" id="Nombre_Corto" type="text" v-model="empresa.Nombre_Corto">
        <label for="content">Correo</label>
        <input class="form-control" id="Correo_electronico" type="text" v-model="empresa.Correo_electronico">
        <label for="content">Telefono</label>
        <input class="form-control" id="title" type="text" v-model="empresa.Telefono">
        <label for="content">NIT</label>
        <input class="form-control" id="Telefono" type="text" v-model="empresa.NIT">


        <label for="content">Doc1</label>
        <input  id="Solvencia" type="file" @change="processFileSolv">
        
        <label for="content">Doc2</label>
        <!--<input  id="Constitucion" type="file" @change="processFileConst" >-->
        <label for="content">Doc3</label>  
        <!--<input id="Plan_Pago" type="file" @change="processFilePlan">-->
        <label for="content">Doc4</label>
        <!--<input id="Carta" type="file" @change="processFileCarta">-->


        <label for="content">Socio 1</label>
        <input class="form-control" id="Socio_1" type="text" v-model="empresa.Socio_1">
        <label for="content">Socio 2</label>
        <input class="form-control" id="Socio_2" type="text" v-model="empresa.Socio_2">
        <label for="content">Socio 3</label>
        <input class="form-control" id="Socio_3" type="text" v-model="empresa.Socio_3">
        <label for="content">Socio 4</label>
        <input class="form-control" id="Socio_4" type="text" v-model="empresa.Socio_4">
        <label for="content">Socio 5</label>
        <input class="form-control" id="Socio_5" type="text" v-model="empresa.Socio_5">
        <button type="submit" class="btn btn-primary mt-3">Ingresar</button>
        {{ empresa }}
        

    </form>
                </div>
            </div>
        </div>
    </div>
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

            

           const response = await axios.post('/empresa', this.empresa);

           
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

            console.log(this.response);
            
        },
        processFileSolv(event){

             var Solvfile= event.target.files[0];
            this.empresa.Solvencia = Solvfile;
            console.log(event.target.files[0]);
        },
        
         processFileConst(event){

            var Constfile= event.target.files[0];
            this.empresa.Constitucion = Constfile;
            console.log(event.target.files[0]);
        },
         processFilePlan(event){

            var Planfile=event.target.files[0];
            this.empresa.Plan_Pago = Planfile;
            console.log(event.target.files[0]);
        },
         processFileCarta(event){

            var Cartafile=event.target.files[0];
            this.empresa.Carta = Cartafile;
            console.log(event.target.files[0]);
        }
    },
}
</script>


<!--<form class="form-group" @submit.prevent="submit">
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
        

    </form>-->
