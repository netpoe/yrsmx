<?php

use Illuminate\Database\Seeder as DatabaseSeeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;

use App\Model\{
    UserAdapter as User,
    QuizAdapter as Quiz,
    Outfit\OutfitTypeAdapter as OutfitType,
    User\UserSizesAdapter as UserSizes,
    User\UserPreferredBodyPartsAdapter as UserPreferredBodyParts,
    User\UserFitAdapter as UserFit,
    User\UserStyleAdapter as UserStyle,
    User\Info\GenderId,
    Dictionary\DictProductCategoriesAdapter as DictProductCategories,
    Dictionary\DictProductAttributesAdapter as DictProductAttributes
};

use App\Util\DateTimeUtil;

use App\Entities\{
    ProductCategory,
    ProductAttribute
};

class Seeder extends DatabaseSeeder
{
    protected $user;

    protected $quiz;

    public function createUser(): User
    {
        $email = 'new' . rand(1, 999) . '@yours.mx';

        $user = (new User)->new($email);

        $user->updated_password_ts = DateTimeUtil::DBNOW();

        $user->password = Hash::make('test123');

        $user->save();

        $this->user = $user;

        return $this->user;
    }

    public function createQuiz(Int $outfitTypeKey): Quiz
    {
        $outfitType = new ProductAttribute(DictProductAttributes::OUTFIT_TYPE);

        $quiz = Quiz::create([
            'user_id' => $this->user->id,
            'outfit_type' => $outfitType->getSubattributeByKey($outfitTypeKey)->getId(),
            'started_at' => DateTimeUtil::DBNOW(),
            ]);

        $this->quiz = $quiz->createUserSizes()
                        ->createUserPreferredBodyParts()
                        ->createUserFit()
                        ->createUserStyle()
                        ->assignUIQuiz();

        return $this->quiz;
    }

    public function setQuizUserSizes()
    {
        $dressSizes = new ProductCategory(DictProductCategories::SIZE_DRESS);
        $blouseSizes = new ProductCategory(DictProductCategories::SIZE_BLOUSE);
        $braBandSizes = new ProductCategory(DictProductCategories::SIZE_BRA_BAND);
        $braCupsSizes = new ProductCategory(DictProductCategories::SIZE_BRA_CUPS);
        $skirtSizes = new ProductCategory(DictProductCategories::SIZE_SKIRT);
        $shoeSizes = new ProductCategory(DictProductCategories::SIZE_SHOES);
        $pantsSizes = new ProductCategory(DictProductCategories::SIZE_PANTS);

        UserSizes::unguard();

        $this->quiz->userSizes->update([
            'height' => 1.60,
            'weight' => 67,
            'dress' => $dressSizes->getRandomSubcategoryId(),
            'blouse' => $blouseSizes->getRandomSubcategoryId(),
            'bra_band' => $braBandSizes->getRandomSubcategoryId(),
            'bra_cups' => $braCupsSizes->getRandomSubcategoryId(),
            'skirt' => $skirtSizes->getRandomSubcategoryId(),
            'shoes' => $shoeSizes->getRandomSubcategoryId(),
            'pants' => $pantsSizes->getRandomSubcategoryId(),
            ]);

        $this->quiz->user_sizes_completed_ts = DateTimeUtil::DBNOW();

        $this->quiz->save();

        return $this;
    }

    public function setQuizUserPreferredBodyParts()
    {
        $bodyType = new ProductCategory(DictProductCategories::BODY_TYPE);
        $bodyParts = new ProductAttribute(DictProductAttributes::BODY_PART);
        $bodyPartsModel = $bodyParts->getSubattributeModelName();

        UserPreferredBodyParts::unguard();

        $this->quiz->userPreferredBodyParts->update([
            'body_type' => $bodyType->getRandomSubcategoryId(),
            'thighs' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::THIGHS),
            'calves' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::CALVES),
            'butt' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::BUTT),
            'abdomen' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::ABDOMEN),
            'hips' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::HIPS),
            'breast' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::BREAST),
            'shoulders' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::SHOULDERS),
            'arms' => $this->getRandomBodyPartIdOrZero($bodyParts, $bodyPartsModel::ARMS),
            ]);

        $this->quiz->user_preferred_body_parts_completed_ts = DateTimeUtil::DBNOW();

        $this->quiz->save();

        return $this;
    }

    public function setUserFit()
    {
        $upperPartFit = new ProductCategory(DictProductCategories::UPPER_PART_FIT);
        $lowerPartFit = new ProductCategory(DictProductCategories::LOWER_PART_FIT);
        $pantsFitShape = new ProductCategory(DictProductCategories::PANTS_FIT_SHAPE);
        $pantsFitHips = new ProductCategory(DictProductCategories::PANTS_FIT_HIPS);

        UserFit::unguard();

        $this->quiz->userFit->update([
            'upper_part_fit' => $upperPartFit->getRandomSubcategoryId(),
            'lower_part_fit' => $lowerPartFit->getRandomSubcategoryId(),
            'pants_fit_shape' => $pantsFitShape->getRandomSubcategoryId(),
            'pants_fit_hips' => $pantsFitHips->getRandomSubcategoryId(),
            ]);

        $this->quiz->user_fit_completed_ts = DateTimeUtil::DBNOW();

        $this->quiz->save();

        return $this;
    }

    public function setUserStyle()
    {
        $colors = new ProductAttribute(DictProductAttributes::COLORS);
        $prints = new ProductAttribute(DictProductAttributes::PRINTS);
        $fabrics = new ProductAttribute(DictProductAttributes::FABRICS);
        $words = new ProductAttribute(DictProductAttributes::WORDS);
        $clothes = new ProductCategory(DictProductCategories::TYPE);
        $accessories = new ProductCategory(DictProductCategories::ACCESSORIES);
        $shoes = new ProductCategory(DictProductCategories::SHOES);
        $jewelry = new ProductAttribute(DictProductAttributes::JEWELRY);
        $risk = new ProductCategory(DictProductCategories::RISK);

        UserStyle::unguard();

        $this->quiz->userStyle->update([
            'colors' => implode('|', $colors->getRandomSubattributeIds()),
            'prints' => implode('|', $prints->getRandomSubattributeIds(2)),
            'fabrics' => implode('|', $fabrics->getRandomSubattributeIds(1)),
            'words' => implode('|', $words->getRandomSubattributeIds(2)),
            'clothes' => implode('|', $clothes->getRandomSubcategoryIds()),
            'accessories' => implode('|', $accessories->getRandomSubcategoryIds(2)),
            'shoes' => implode('|', $shoes->getRandomSubcategoryIds(1)),
            'jewelry' => implode('|', $jewelry->getRandomSubattributeIds()),
            'risk' => $risk->getRandomSubcategoryId(),
            ]);

        $this->quiz->user_style_completed_ts = DateTimeUtil::DBNOW();

        $this->quiz->save();

        return $this;
    }

    public function setUserInfo()
    {
        User::unguard();

        $faker = FakerFactory::create();

        $this->user->info->update([
            'name' => $faker->firstName('female'),
            'paternal_last_name' => $faker->lastName(),
            'maternal_last_name' => $faker->lastName(),
            'mobile_number' => $faker->e164PhoneNumber(),
            'gender_id' => GenderId::FEMALE,
            'dob' => $faker->date(),
            'occupation' => $faker->realText(100),
            'extras' => $faker->realText(100),
            ]);

        $this->quiz->user_info_completed_ts = DateTimeUtil::DBNOW();

        $this->quiz->save();

        return $this;
    }

    public function completeQuiz()
    {
        $this->quiz->completed_at = DateTimeUtil::DBNOW();

        $this->quiz->save();

        return $this;
    }

    public function getRandomBodyPartIdOrZero(ProductAttribute $bodyPartsAttribute, Int $bodyPartKey)
    {
        if (rand(0, 1)) {
            return $bodyPartsAttribute->getSubattributeByKey($bodyPartKey)->getId();
        }

        return 0;
    }
}
