<?php

use App\Service\UserProductsService;

use App\Model\{
    Outfit\OutfitTypeAdapter as OutfitType
};

class UserWithCompleteCasualWearQuizSeederAndAssignedProducts extends Seeder
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

        $userProductsService = new UserProductsService($user);

        $userProductsService->assignProductsToUser();
    }
}
