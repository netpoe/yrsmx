<?php

namespace App\Factory;

use App\Model\UserAdapter as User;
use App\Quiz\AbstractUIQuiz;
use App\Model\OutfitType;

class QuizFactory
{
    const OUTFIT_TYPES = [
        OutfitType::CASUAL_WEAR,
        OutfitType::BASICS,
        OutfitType::WORK,
        OutfitType::GET_AWAY,
        OutfitType::SPORTS_WEAR,
        OutfitType::MOM_TO_BE,
        OutfitType::INTIMATES,
        OutfitType::PARTY_TIME,
    ];

    const UI_QUIZ_PLACEHOLDER = 'App\Quiz\UI%sQuiz';

    public static function get(User $user): AbstractUIQuiz
    {
        $outfitType = $user->getLastQuiz()->outfit_type;

        if (!in_array($outfitType, self::OUTFIT_TYPES)) {
            throw new \Exception("No outfit_type found for user [$user->id]");
        }

        $uiQuiz = null;

        if ($outfitType == OutfitType::CASUAL_WEAR) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'CasualWear');
        }

        if ($outfitType == OutfitType::BASICS) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'Basics');
        }

        if ($outfitType == OutfitType::WORK) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'Work');
        }

        if ($outfitType == OutfitType::GET_AWAY) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'GetAway');
        }

        if ($outfitType == OutfitType::SPORTS_WEAR) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'SportsWear');
        }

        if ($outfitType == OutfitType::MOM_TO_BE) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'MomToBe');
        }

        if ($outfitType == OutfitType::INTIMATES) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'Intimates');
        }

        if ($outfitType == OutfitType::PARTY_TIME) {
            $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, 'PartyTime');
        }

        if (!$uiQuiz) {
            throw new \Exception("No uiQuiz instance found for user [$user->id]");
        }

        return new $uiQuiz($user);
    }
}













