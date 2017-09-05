<?php

namespace App\Factory;

use App\Quiz\AbstractUIQuiz;

use App\Model\{
    OutfitTypeAdapter as OutfitType,
    UserAdapter as User,
    LuProductAttributesAdapter as LuProductAttributes
};

use App\Entities\ProductAttribute;

class QuizFactory
{
    const UI_QUIZ_PLACEHOLDER = 'App\Quiz\UI%sQuiz';

    public static function get(User $user): AbstractUIQuiz
    {
        $outfitTypeId = $user->getLatestQuiz()->outfit_type;

        if (!$outfitTypeId) {
            throw new \Exception("No outfit_type found for user [$user->id]");
        }

        $outfitType = new ProductAttribute(LuProductAttributes::OUTFIT_TYPE);

        $subattribute = array_filter($outfitType->subattributes(), function($subattribute) use ($outfitTypeId) {
            return $subattribute->getId() == $outfitTypeId;
        })[0];

        if (!$subattribute || !$subattribute->uiQuizName) {
            throw new \Exception("No OutfitType subattribute found for outfitTypeId [$outfitTypeId]");
        }

        $uiQuiz = sprintf(self::UI_QUIZ_PLACEHOLDER, $subattribute->uiQuizName);

        return new $uiQuiz($user);
    }
}













