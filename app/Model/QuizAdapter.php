<?php

namespace App\Model;

use App\Model\UserSizesAdapter as UserSizes;
use App\Model\UserPreferredBodyPartsAdapter as UserPreferredBodyParts;
use App\Model\UserFitAdapter as UserFit;
use App\Model\UserStyleAdapter as UserStyle;
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

    public function createUserStyle()
    {
        UserStyle::create([
            'quiz_id' => $this->id,
            ]);

        return $this;
    }

    public function status()
    {
        if ($this->completed_at) {
            return 'completado';
        }

        if ($this->user_style_completed_ts) {
            return 'estilo';
        }

        if ($this->user_info_completed_ts) {
            return 'datos básicos';
        }

        if ($this->user_fit_completed_ts) {
            return 'fit';
        }

        if ($this->user_preferred_body_parts_completed_ts) {
            return 'partes del cuerpo';
        }

        if ($this->user_sizes_completed_ts) {
            return 'tallas';
        }

        return 'pendiente';
    }
}










