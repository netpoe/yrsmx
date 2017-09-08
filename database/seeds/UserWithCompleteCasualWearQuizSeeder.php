<?php

use App\Model\{
    OutfitTypeAdapter as OutfitType
};

class UserWithCompleteCasualWearQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = new static;

        $user = $seeder->createUser();

        $quiz = $seeder->createQuiz(OutfitType::CASUAL_WEAR);

        $seeder
            ->setQuizUserSizes()
            ->setQuizUserPreferredBodyParts()
            ->setUserFit()
            ->setUserStyle()
            ->setUserInfo()
            ->completeQuiz();
    }
}
