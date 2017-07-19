<?php

namespace App\Model;

use App\Model\UserSizesAdapter as UserSizes;
use App\Model\UserPreferredBodyPartsAdapter as UserPreferredBodyParts;

class QuizAdapter extends Quiz
{
    public function createUserSizes()
    {
        UserSizes::create([
            'quiz_id' => $this->id,
            ]);

        return $this;
    }

    public function createUserPreferredBodyParts()
    {
        UserPreferredBodyParts::create([
            'quiz_id' => $this->id,
            ]);

        return $this;
    }
}
