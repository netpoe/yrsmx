<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

use App\Model\{
    User\UserSizesAdapter as UserSizes,
    User\UserPreferredBodyPartsAdapter as UserPreferredBodyParts,
    User\UserFitAdapter as UserFit,
    User\UserStyleAdapter as UserStyle,
    Outfit\OutfitTypeAdapter as OutfitType,
    Quiz\QuizWorkAdapter as QuizWork,
    Quiz\QuizGetAwayAdapter as QuizGetAway
};

class QuizAdapter extends Quiz
{
    const COMPLETE = 'completado';
    const PENDING = 'pendiente';
    const USER_STYLE = 'estilo';
    const USER_INFO = 'datos básicos';
    const USER_FIT = 'fit';
    const USER_PREFERRED_BODY_PARTS = 'partes del cuerpo';
    const USER_SIZES = 'tallas';

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

    public function createUserStyle()
    {
        UserStyle::create([
            'quiz_id' => $this->id,
            ]);

        return $this;
    }

    public function assignUIQuiz()
    {
        if ($this->outfitType->key == OutfitType::WORK) {
            QuizWork::create([
                'quiz_id' => $this->id
                ]);
        }

        if ($this->outfitType->key == OutfitType::GET_AWAY) {
            QuizGetAway::create([
                'quiz_id' => $this->id
                ]);
        }

        return $this;
    }

    /**
     * [status Returns a quiz status string according to the quiz current timestamp]
     * @return [String] status
     */
    public function status()
    {
        if ($this->completed_at) {
            return self::COMPLETE;
        }

        if ($this->user_style_completed_ts) {
            return self::USER_STYLE;
        }

        if ($this->user_info_completed_ts) {
            return self::USER_INFO;
        }

        if ($this->user_fit_completed_ts) {
            return self::USER_FIT;
        }

        if ($this->user_preferred_body_parts_completed_ts) {
            return self::USER_PREFERRED_BODY_PARTS;
        }

        if ($this->user_sizes_completed_ts) {
            return self::USER_SIZES;
        }

        return self::PENDING;
    }

    public function isCasualWearQuiz()
    {
        return $this->outfitType->key == OutfitType::CASUAL_WEAR;
    }

    public function startedAt()
    {
        $m = new \Moment\Moment($this->started_at);

        return $m->calendar();
    }

    public function completedAt()
    {
        $m = new \Moment\Moment($this->completed_at);

        return $m->calendar();
    }

    public function totalCompletionTime()
    {
        $m = new \Moment\Moment($this->started_at);

        return $m->from($this->completed_at)->getMinutes() . ' minutos';
    }
}










