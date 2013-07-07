<?php

class DownloadsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('downloads')->delete();

        $downloads = array(
        	array(
        		'did' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',5)),0,5),
        		'dname' => '500 Juegos para consola Neo Geo'
        		),
        	array(
        		'did' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',5)),0,5),
        		'dname' => '1500 Juegos para consola SNES LITE'
        		),
        	array(
        		'did' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',5)),0,5),
        		'dname' => '3500 Juegos para consola SNES'
        		),
        	array(
        		'did' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',5)),0,5),
        		'dname' => '6000 Juegos para consola N64'
        		),
        	array(
        		'did' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',5)),0,5),
        		'dname' => '3500 Juegos para consola SEGA GENESIS'
        		),
        	array(
        		'did' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',5)),0,5),
        		'dname' => '16000 Juegos para consla FAMILY FAMMICOM'
        		)
        );

        // Uncomment the below to run the seeder
        DB::table('downloads')->insert($downloads);
    }

}