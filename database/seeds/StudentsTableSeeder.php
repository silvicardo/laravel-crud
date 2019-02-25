<?php

use Illuminate\Database\Seeder;
//"linkare" l'Entity
use App\Student;
//Faker per dummyData
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 40 ; $i++) {

          //random Gender
          $genders = ['male','female'];
          $randomGender = $genders[array_rand($genders)];

          //random Age + date of birth
          $randomAge = rand(13,21);
          $randomDay = rand(1,28);
          $randomMonth = rand(1,12);
          $dateOfBirth = date('Y-m-d', strtotime("-$randomAge year -$randomDay days -$randomMonth months"));
          //doublechecking with date_diff
          $randomAge = date_diff(date_create($dateOfBirth), date_create('now'))->y;

          //New Student
          $newStudent = new Student;

          $newStudent->name = $faker->firstName($randomGender);
          $newStudent->lastname = $faker->lastName($randomGender);
          $newStudent->gender = mb_substr($randomGender, 0, 1, "UTF-8");
          $newStudent->age = $randomAge;
          $newStudent->date_of_birth = $dateOfBirth;
          $newStudent->class = rand(1,5);

          $newStudent->save();
        }
    }
}
