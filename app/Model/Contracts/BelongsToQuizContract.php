<?php

namespace App\Model\Contracts;

interface BelongsToQuizContract
{
    /**
     * getQuizRelationshipMethodName Gets a string with the name of the
     * Quiz-to-User quiz answers table relationship method
     *
     * this string name is used in the UserProductsService when retrieving the value
     * of the table column associated with a user quiz answer
     *
     * @return String
     */
    public function getQuizRelationshipMethodName(): String;
}
