<?php

use Illuminate\Database\Seeder;
use App\Peliculas;
class DatabaseSeeder extends Seeder
{
		private $arrayPeliculas = array(

		array(
			  'id' => '1',
			  'nombre' => 'Wonder Woman',
			  'año' => '2017',
			  'imagen' => '/img/WonderWoman.jpg',
			  'genero' => 'Cine de ciencia ficción',
			  'descripcion' => 'Diana es una joven guerrera'
			),

		array(
			'id' => '2',
			  'nombre' => 'The Fast of the Furious',
			  'año' => '2017',
			  'imagen' => '/img/ff8.jpg',
			  'genero' => 'Cine de Suspenso',
			  'descripcion' => 'Ahora que Dominic Toretto y Letty Ortiz están de Luna de Miel y Brian y Mia se han retirado del juego, y el resto del equipo ha sido exonerado, el equipo ha encontrado el camino a una vida normal.'
			),

		array(
			'id' => '3',
			  'nombre' => 'Baywatch',
			  'año' => '2017',
			  'imagen' => '/img/bay.jpg',
			  'genero' => 'Cine de Accion',
			  'descripcion' => 'Los vigilantes de la playa narra la historia del esforzado socorrista Mitch Buchannon (Johnson) y su choque de personalidades con un bravucón socorrista novato (Efron). Juntos, descubren una trama delictiva local que amenaza el futuro de la Bahía.'
			),
	);

		private function  seedPeliculas() {
	DB::table('peliculas')->delete();
	foreach( $this->arrayPeliculas as $peliculas ) {
          $p = new Peliculas;
          $p->nombre = $peliculas['nombre'];
          $p->año = $peliculas['año'];
          $p->imagen = $peliculas['imagen'];
		  $p->genero = $peliculas['genero'];
		  $p->descripcion = $peliculas['descripcion'];
          $p->save();
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	self::seedPeliculas();
	  	$this->command->info('Tabla Peliculas inicializada con datos!');

        // $this->call(UsersTableSeeder::class);
    }

}
