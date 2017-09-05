<?php

namespace App\Model\Traits;

trait BelongsToQuizTrait
{
    public function getQuizRelationshipMethodName(): String
    {
        if (!$this->quizRelationshipMethodName) {
            throw new \Exception('No [quizRelationshipMethodName] public property is associated with the [' . get_class($this) . '] parent model.');
        }

        return $this->quizRelationshipMethodName;
    }
}
