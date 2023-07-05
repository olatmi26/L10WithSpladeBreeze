<?php
namespace App\Http\Controllers\Auth;
use Auth;
use App\Models\Role;
use App\Models\Company;
use App\Models\Location;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class StaffLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::STAFF_BACKEND;
    //protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function staffLogin()
    {
        return view('auth.staff-login');
    }
    public function login(Request $request)
    {
        // return $request->all();
        $request->validate([
            'phoneN0' => 'required|string|max:16',
            'password' => 'required|string',
        ]);
        $credentials = $request->only(['phoneN0', 'password']);
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }
            // return redirect()->route('dashboard.index');
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }
    public function showRegisterForm()
    {
        $departments = Department::orderBy('name', 'asc')->get();
        $designations = Role::whereNotIn('id', [1, 2, 10, 23])->orderBy('name', 'asc')->get(['id', 'name']);
        $companies = Company::orderBy('name', 'asc')->get(['id', 'name']);
        $locations = Location::orderBy('location', 'asc')->get(['id', 'location']);
        return view('auth.staff-register', compact('departments', 'designations', 'companies', 'locations'));
    }
    protected function authenticated()
    {
        \Auth::logoutOtherDevices(request('password'));
        // return redirect()->intended($redirectTo);
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($response = $this->loggedOut($request)) {
            return $response;
        }
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}