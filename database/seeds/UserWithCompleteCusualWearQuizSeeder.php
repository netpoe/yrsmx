<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;

use App\Model\{
    UserAdapter as User,
    QuizAdapter as Quiz,
    OutfitTypeAdapter as OutfitType,
    UserSizesAdapter as UserSizes,
    UserPreferredBodyPartsAdapter as UserPreferredBodyParts,
    UserFitAdapter as UserFit,
    UserStyleAdapter as UserStyle,
    LuProductCategoriesAdapter as LuProductCategories,
    LuProductAttributesAdapter as LuProductAttributes
};

use App\Model\UserInfo\{
    GenderId
};

use App\Util\DateTimeUtil;

use App\Entities\{
    ProductCategory,
    ProductAttribute
};

class UserWithCompleteCusualWearQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = 'new' . rand(1, 999) . '@yours.mx';

        $user = (new User)->new($email);

        $user->updated_password_ts = DateTimeUtil::DBNOW();

        $user->password = Hash::make('test123');

        $user->save();


        $quiz = Quiz::create([
            'user_id' => $user->id,
            'outfit_type' => OutfitType::CASUAL_WEAR,
            'started_at' => DateTimeUtil::DBNOW(),
            ]);

        $quiz->createUserSizes()
            ->createUserPreferredBodyParts()
            ->createUserFit()
            ->createUserStyle()
            ->assignUIQuiz();


        $dressSizes = new ProductCategory(LuProductCategories::SIZE_DRESS);
        $blouseSizes = new ProductCategory(LuProductCategories::SIZE_BLOUSE);
        $braBandSizes = new ProductCategory(LuProductCategories::SIZE_BRA_BAND);
        $braCupsSizes = new ProductCategory(LuProductCategories::SIZE_BRA_CUPS);
        $skirtSizes = new ProductCategory(LuProductCategories::SIZE_SKIRT);
        $shoeSizes = new ProductCategory(LuProductCategories::SIZE_SHOES);
        $pantsSizes = new ProductCategory(LuProductCategories::SIZE_PANTS);

        UserSizes::unguard();

        $quiz->userSizes->update([
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

        $quiz->user_sizes_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        $bodyType = new ProductCategory(LuProductCategories::BODY_TYPE);
        $bodyParts = new ProductAttribute(LuProductAttributes::BODY_PART);
        $bodyPartsModel = $bodyParts->getSubattributeModelName();

        UserPreferredBodyParts::unguard();

        $quiz->userPreferredBodyParts->update([
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

        $quiz->user_preferred_body_parts_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        $upperPartFit = new ProductCategory(LuProductCategories::UPPER_PART_FIT);
        $lowerPartFit = new ProductCategory(LuProductCategories::LOWER_PART_FIT);
        $pantsFitShape = new ProductCategory(LuProductCategories::PANTS_FIT_SHAPE);
        $pantsFitHips = new ProductCategory(LuProductCategories::PANTS_FIT_HIPS);

        UserFit::unguard();

        $quiz->userFit->update([
            'upper_part_fit' => $upperPartFit->getRandomSubcategoryId(),
            'lower_part_fit' => $lowerPartFit->getRandomSubcategoryId(),
            'pants_fit_shape' => $pantsFitShape->getRandomSubcategoryId(),
            'pants_fit_hips' => $pantsFitHips->getRandomSubcategoryId(),
            ]);

        $quiz->user_fit_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        $colors = new ProductAttribute(LuProductAttributes::COLORS);
        $prints = new ProductAttribute(LuProductAttributes::PRINTS);
        $fabrics = new ProductAttribute(LuProductAttributes::FABRICS);
        $words = new ProductAttribute(LuProductAttributes::WORDS);
        $clothes = new ProductCategory(LuProductCategories::TYPE);
        $accessories = new ProductCategory(LuProductCategories::ACCESSORIES);
        $shoes = new ProductCategory(LuProductCategories::SHOES);
        $jewelry = new ProductAttribute(LuProductAttributes::JEWELRY);
        $risk = new ProductCategory(LuProductCategories::RISK);

        UserStyle::unguard();

        $quiz->userStyle->update([
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

        $quiz->user_style_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        User::unguard();

        $faker = FakerFactory::create();

        $user->info->update([
            'name' => $faker->firstName('female'),
            'paternal_last_name' => $faker->lastName(),
            'maternal_last_name' => $faker->lastName(),
            'mobile_number' => $faker->e164PhoneNumber(),
            'gender_id' => GenderId::FEMALE,
            'dob' => $faker->date(),
            'occupation' => $faker->realText(100),
            'extras' => $faker->realText(100),
            ]);

        $quiz->user_info_completed_ts = DateTimeUtil::DBNOW();

        $quiz->completed_at = DateTimeUtil::DBNOW();

        $quiz->save();
    }

    public function getRandomBodyPartIdOrZero(ProductAttribute $bodyPartsAttribute, Int $bodyPartKey)
    {
        if (rand(0, 1)) {
            return $bodyPartsAttribute->getSubattributeByKey($bodyPartKey)->getId();
        }

        return 0;
    }
}
