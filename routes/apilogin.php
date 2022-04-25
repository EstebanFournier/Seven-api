 <?php
/* 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Lib\QuickCheck;

Route::post('/login', function (Request $request) {
    $json = $request->json();

    $quickcheck_result = QuickCheck::quickCheck(['email', 'password', 'device_name'], $json);
    if ($quickcheck_result != null) {
        return $quickcheck_result;
    };

    
    $user = User::where('email', $json->get("email"))->first();

    if (! $user || ! Hash::check($json->get("password"), $user->password)) {
        return [
            'error' => 'The provided credentials are incorrect.',
            'errcode' => 'invalidcredential'
        ];
    }
    
    return [
        "token" => $user->createToken($json->get("device_name"))->plainTextToken,
        "agency_id" => $user->agency_id,
    ];
});  */