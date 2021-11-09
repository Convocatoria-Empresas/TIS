<template>

    <div>
        <h1 class="text-center">LISTAR EMPRESA</h1>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Largo</th>
                    <th scope="col">Nombre Corto</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">NIT</th>
                    <th scope="col">Solvencia</th>
                    <th scope="col">Constitución</th>
                    <th scope="col">Plan de Pago</th>
                    <th scope="col">Carta</th>
                    <th scope="col">Socio 1</th>
                    <th scope="col">Socio 2</th>
                    <th scope="col">Socio 3</th>
                    <th scope="col">Socio 4</th>
                    <th scope="col">Socio 5</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="emp of empresa" :key="emp.id">
                    <th scope="row">{{ emp .id }}</th>
                    <td>{{emp.Nombre_Largo}}</td>
                    <td>{{emp.Nombre_Corto}}</td>
                    <td>{{emp.Correo_electronico}}</td>
                    <td>{{emp.Telefono}}</td>
                    <td>{{emp.NIT}}</td>
                    <td>{{emp.Solvencia}}</td>
                    <td>{{emp.Constitucion}}</td>
                    <td>{{emp.Plan_Pago}}</td>
                    <td>{{emp.Carta}}</td>
                    <td>{{emp.Socio_1}}</td>
                    <td>{{emp.Socio_2}}</td>
                    <td>{{emp.Socio_3}}</td>
                    <td>{{emp.Socio_4}}</td>
                    <td>{{emp.Socio_5}}</td>

                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    
    async mounted(){ 
        const response = await axios.get("/empresa");
        const data= response.data;

        console.log("Lo de abajo no debería estar vacío");
        console.log(data);
        this.empresa = response.data;
        //this.empresa= data;
    },
    
    data() {
        return{
            empresa:[],/*{
                Nombre_Largo : 'rgersg',
                Nombre_Corto : '',
                Correo_electronico : '',
                Telefono : '',
	            NIT : '',
                Solvencia : '',
                Constitucion : '',
                Plan_Pago : '',
                Carta : '',
                Socio_1 : '',
                Socio_2 : '',
                Socio_3 : '',
                Socio_4 : '',
                Socio_5 : '',
            }*/
                
            
        }
        
    },
    methods:{
        async list(){
            const res = await axios.get('empresas');

            console.log("patito");
            console.log(res);
            this.empresa = res.data;
        }
    },
    created(){
        this.list();
    },
}
</script>
