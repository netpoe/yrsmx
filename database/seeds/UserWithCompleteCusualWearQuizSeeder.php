<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;

use App\Model\{
    UserAdapter as User,
    QuizAdapter as Quiz,
    OutfitType,
    UserSizesAdapter as UserSizes,
    UserPreferredBodyPartsAdapter as UserPreferredBodyParts,
    UserFitAdapter as UserFit,
    UserStyleAdapter as UserStyle
};

use App\Model\UserSizes\{
    DressSizes,
    BlouseSizes,
    BraBandSizes,
    BraCupsSizes,
    PantsSizes,
    ShoesSizes,
    SkirtSizes
};

use App\Model\UserPreferredBodyParts\{
    BodyType
};

use App\Model\UserFit\{
    LowerPartFit,
    PantsFitHips,
    PantsFitShape,
    UpperPartFit
};

use App\Model\UserStyle\{
    Accessories,
    Clothes,
    Colors,
    Fabrics,
    Jewelry,
    Prints,
    Risk,
    Shoes,
    Words
};

use App\Model\UserInfo\{
    GenderId
};

use App\Util\DateTimeUtil;

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


        UserSizes::unguard();

        $quiz->userSizes->update([
            'height' => 1.60,
            'weight' => 67,
            'dress' => DressSizes::ECH,
            'blouse' => BlouseSizes::CH,
            'bra_band' => BraBandSizes::SIZE_30,
            'bra_cups' => BraCupsSizes::SIZE_A,
            'skirt' => SkirtSizes::G,
            'shoes' => ShoesSizes::SIZE_24_5,
            'pants' => PantsSizes::SIZE_7,
            ]);

        $quiz->user_sizes_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        UserPreferredBodyParts::unguard();

        $quiz->userPreferredBodyParts->update([
            'body_type' => BodyType::TRIANGLE,
            'thighs' => 0,
            'calves' => 1,
            'butt' => 0,
            'abdomen' => 1,
            'hips' => 0,
            'breast' => 1,
            'shoulders' => 0,
            'arms' => 0,
            ]);

        $quiz->user_preferred_body_parts_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        UserFit::unguard();

        $quiz->userFit->update([
            'upper_part_fit' => UpperPartFit::FIT,
            'lower_part_fit' => LowerPartFit::MID,
            'pants_fit_shape' => PantsFitShape::STRAIGHT,
            'pants_fit_hips' => PantsFitHips::WAIST,
            ]);

        $quiz->user_fit_completed_ts = DateTimeUtil::DBNOW();

        $quiz->save();


        UserStyle::unguard();

        $quiz->userStyle->update([
            'colors' => Colors::BLANCO,
            'prints' => Prints::FLORES,
            'fabrics' => Fabrics::LYCRA,
            'words' => Words::BOHEMIO,
            'clothes' => Clothes::VESTIDOS,
            'accessories' => Accessories::BOLSAS,
            'shoes' => Shoes::FLATS,
            'jewelry' => Jewelry::DISCRETA,
            'risk' => Risk::CLASSIC,
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
}
