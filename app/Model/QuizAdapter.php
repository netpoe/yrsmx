<?php

namespace App\Model;

use App\Model\UserSizesAdapter as UserSizes;

class QuizAdapter extends Quiz
{
    public function createUserSizes()
    {
        UserSizes::create([
            'quiz_id' => $this->id,
            ]);

        return $this;
    }
}
