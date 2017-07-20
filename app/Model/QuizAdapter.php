<?php

namespace App\Model;

use App\Model\UserSizesAdapter as UserSizes;
use App\Model\UserPreferredBodyPartsAdapter as UserPreferredBodyParts;
use App\Model\UserFitAdapter as UserFit;
use Illuminate\Support\Facades\DB;

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

    public function createUserFit()
    {
        UserFit::create([
            'quiz_id' => $this->id,
            ]);

        return $this;
    }

    public static function completed()
    {
        return DB::table('quiz')
                    ->join('users', 'users.id', '=', 'quiz.user_id')
                    ->whereNotNull('quiz.completed_at')
                    ->groupBy('users.id')
                    ->get();
    }
}
