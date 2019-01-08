<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MateriaMedicinaSeeder extends Seeder
{
	protected $materias = [	
		[
			"ANATOMÍA DESCRIPTIVA Y TOPOGRÁFICA + NEUROANATOMÍA",
			"HISTOLOGIA, EMBRIOLOGIA",
			"MEDICINA DE LA COMUNIDAD",
			"BIOFISICA",
			"BIOLOGIA, GENETICA",
			"GUARANI",
		],[
			"FISIOLOGIA",
			"MICROBIOLOGÍA Y PARASITOLOGÍA",
			"BIOQUIMICA",
			"NUTRICION",
			"EPIDEMIOLOGIA Y ECOLOGIA",
			"SALUD PÚBLICA Y ADMINISTACIÓN HOSPITALARIA",
			"BIOESTADISTICA Y DEMOGRAFIA",
		],[
			"ANATOMIA PATOLOGICA",
			"FISIOPATOLOGÍA",
			"FARMACOLOGÍA",
			"PSICOLOGÍA Y PSIQUIATRÍA",
			"MEDICINA FAMILIAR",
			"SOCIO ANTROPOLOGÍA",
			"MEDICINA LEGAL Y DEONTOLOGÍA",
			"ETICA MEDICA I",
			"METODOLOGIA DE LA INVESTIGACIÓN CIENTÍFICA",
		],[
			"GINECOLOGÍA Y OBSTETRICIA",
			"MEDICINA I",
			"CIRUGÍA I",
			"MEDICINA EN IMAGENES",
			"DERMOTOLOGÍA",
			"OFTALMOLOGÍA",
			"ETICA MEDICA II",
		],[
			"MEDICINA II",
			"CLÍNICA PEDIÁTRICA",
			"CIRUGIA II",
			"NEUMOLOGÍA",
			"TERAPÉUTICA Y TOXICOLOGÍA",
			"UROLOGÍA",
			"ORL",
			"TRAUMATOLOGÍA - ORTOPEDIA",
		],[
			"INTERNADO ROTATORIO Y PASANTÍA RURAL"
		]
	];


	protected $id_carrera = 2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$materias = $this->materias;

    	for ($i=0; $i < count($materias); $i++) { 
    		$materiasPorSemestre = $materias[$i];

    		foreach ($materiasPorSemestre as $materiaIndex => $materiaName) {
	    		DB::table('materias')->insert([
		            'id_carrera' => $this->id_carrera,
		            'nombre' => $materiaName,
		            'anho_materia' => $materiaIndex + 1,
		            'semestral' => false,
		            'estado' => 'A'
		        ]);
	    	}
    	}

    	


    }
}
