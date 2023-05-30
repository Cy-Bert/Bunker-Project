<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CharSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            'name' => 'vinvui jackson',
            'health' => 4,
            'stamina' => 4,
            'luck' => 2,
            'notes_MJ' => 'il est trop cool yee hee',
            'avatar' => '/truc',
            'age' => 12,
            'size' => 175,
            'gender' => 'homme',
            'body_shape' => 'pur bg',
            'personality' => 'trop sympa, génie total',
            'type' => 'PJ',
            'status' => 'inbranlable',
            'notes' => 'rien de plus à dire il est parfait',
            'table_id' => 3,
            'user_id' => 2,
            'code_invit' => 'zfzfeze45'
        ]);
        DB::table('characters')->insert([
            'name' => 'naruto',
            'health' => 3,
            'stamina' => 1,
            'luck' => 4,
            'notes_MJ' => "alors c'est un ninja de chine qui a un nom de bouffe et qui est full teubé mais il est fort alors ça va",
            'avatar' => '/konoha',
            'age' => 16,
            'size' => 162,
            'gender' => 'homme',
            'body_shape' => 'moyen',
            'personality' => "complètement con, rien d'autre à dire",
            'type' => 'PJ',
            'status' => 'débile',
            'notes' => "a un pote qui s'appelle sasouke et qui le déteste, mais bon ça se comprend il est vraiment vraiment bête, ça dégoûte",
            'table_id' => 2,
            'user_id' => 1,
            'code_invit' => 'auytht89'
        ]);
        DB::table('characters')->insert([
            'name' => 'boubour le boulghour',
            'health' => 2,
            'stamina' => 2,
            'luck' => 3,
            'notes_MJ' => "bah c'est un grain de boulghour qui kiffe la vie, il est vegan et personne ne l'aime parce qu'il soûle tout le monde",
            'avatar' => "/boulghour",
            'age' => 88,
            'size' => 20,
            'gender' => "non-binaire",
            'body_shape' => "tout greums",
            'personality' => "super chiant",
            'type' => "PNJ",
            'status' => "",
            'notes' => "Tant qu'il meurt pas toute la team a -9000 en bonheur",
            'table_id' => 3,
            'code_invit' => ""
        ]); 
        DB::table('characters')->insert([
            'name' => 'le gugus',
            'health' => 3,
            'stamina' => 4,
            'luck' => 3,
            'notes_MJ' => "chais pas quoi mettre c'est dur d'inventer des trucs un peu golri",
            'avatar' => "/gugus",
            'age' => 18,
            'size' => 157,
            'gender' => "homme",
            'body_shape' => "un peu large",
            'personality' => "il en a pas c'est juste des lignes de code bro",
            'type' => "PNJ",
            'status' => "",
            'notes' => "",
            'table_id' => 2,
            'code_invit' => ""
        ]); 
        DB::table('characters')->insert([
            'name' => 'pamela beesly',
            'health' => 1,
            'stamina' => 2,
            'luck' => 3,
            'notes_MJ' => "elle bossait dans une boite qui vend du papier, elle a perdu son mari dès le 1er jour de l'apocalypse parce qu'il a essayé de pranker un zombie",
            'avatar' => "/pam",
            'age' => 32,
            'size' => 165,
            'gender' => "femme",
            'body_shape' => "moyenne",
            'personality' => "plutôt introvertie mais drôle et compatissante",
            'type' => "PJ",
            'status' => "",
            'notes' => "",
            'table_id' => 2,
            'user_id' => 4,
            'code_invit' => "yuiyihv78"
        ]); 
        DB::table('characters')->insert([
            'name' => 'michelangela',
            'health' => 4,
            'stamina' => 3,
            'luck' => 1,
            'notes_MJ' => "c'était une tortue puis elle s'est fait radioactivisé et maintenant c'est aussi une ninja, pète sa mère",
            'avatar' => "/tortuninja",
            'age' => 26,
            'size' => 182,
            'gender' => "femme",
            'body_shape' => "baraque",
            'personality' => "bah c'est une tortue sympa mais elle a pas beaucoup de conversation quoi",
            'type' => "PNJ",
            'status' => "",
            'notes' => "possède une armure naturelle",
            'table_id' => 3,
            'code_invit' => ""
        ]); 
        DB::table('characters')->insert([
            'name' => 'clément li',
            'health' => 3,
            'stamina' => 4,
            'luck' => 2,
            'notes_MJ' => "il a fait fortune dans les cryptos mais les zombards ils s'en foutent des cryptos du coup il a un peu le seum",
            'avatar' => "/clem",
            'age' => 22,
            'size' => 182,
            'gender' => "non-binaire",
            'body_shape' => "baraque",
            'personality' => "golri et malin mais des fois il va un peu trop loin",
            'type' => "PJ",
            'status' => "endormi",
            'notes' => "",
            'table_id' => 3,
            'user_id' => 3,
            'code_invit' => "azerty420"
        ]); 
        DB::table('characters')->insert([
            'name' => 'princesse leia',
            'health' => 4,
            'stamina' => 3,
            'luck' => 2,
            'notes_MJ' => "elle a fait des bails avec son reuf après ils ont tué le gros méchant et maintenant ils sont sur terre me demande pas pourquoi wesh",
            'avatar' => "/leia",
            'age' => 27,
            'size' => 172,
            'gender' =>"femme",
            'body_shape' => 'moyenne',
            'personality' => "aventurière un peu cool mais un peu chiante des fois",
            'type' => "PJ",
            'status' => 'empoisonnée',
            'notes' => "",
            'table_id' => 3,
            'user_id' => 4,
            'code_invit' => "wxcvbn56"
        ]);
    }
}
