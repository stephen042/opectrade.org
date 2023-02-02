<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, "index"])->name("app.home"); //used
Route::get('/about', [UserController::class, "about"])->name("about"); //used
Route::get('/cryptocurrency', [UserController::class, "cryptocurrency"])->name("cryptocurrency");
Route::get('/escrow', [UserController::class, "escrow"])->name("escrow");
Route::get('/stocks', [UserController::class, "stocks"])->name("stocks");
Route::get('/nonfarmpayroll', [UserController::class, "nonfarmpayroll"])->name("nonfarmpayroll");
Route::get('/realEstate', [UserController::class, "realEstate"])->name("realEstate");
Route::get('/forex', [UserController::class, "forex"])->name("forex");
Route::get('/personal_loan', [UserController::class, "personal_loan"])->name("personal_loan");
Route::get('/investment_plan', [UserController::class, "investment_plan"])->name("investment_plan"); //used
Route::get('/contact', [UserController::class, "contact"])->name("contact"); //used
Route::get('/services', [UserController::class, "services"])->name("services"); //used
Route::get('/retirement_funds', [UserController::class, "retirement_funds"])->name("retirement_funds");
Route::get('/children_account', [UserController::class, "children_account"])->name("children_account");
Route::get("/register/{ref?}", [UserController::class, "register"])->name("user.register");
Route::get("/forgot-password", [UserController::class, "forgotPasswordAdmin"])->name("user.forgot-password");
Route::get("/login", [UserController::class, "login"])->name("user.login");
Route::get("/faq", [UserController::class, "returnFAQ"])->name("user.faq"); //used
Route::get("/privacy", [UserController::class, "returnPrivacy"])->name("user.privacy");
Route::get("/terms", [UserController::class, "returnTerms"])->name("user.terms");
Route::get("/withdrawalList", [UserController::class, "returnWithdrawalList"])->name("user.withdrawal_list");
Route::get("/depositeList", [UserController::class, "returnDepositeList"])->name("user.deposit_list");
Route::get("/topInvestors", [UserController::class, "returnTopInvestor"])->name("user.top_investors");
Route::post("/register/{ref?}", [UserController::class, "register"])->name("user.register.post");
Route::post("/login", [UserController::class, "login"])->name("user.login.post");
// Route::post("/person_loan",[UserController::class,"loan"])->name("user.loan");
// Route::post("/person_loan",[UserController::class,"loan"])->name("user.loan.post");
Route::get("/static/{name}", [UserController::class, "staticPages"])->name("user.pages.view");

Route::match(["get", "post"], "/master/forgot-password", [UserController::class, "forgotPasswordAdmin"])->name("admin.forgot.password");
Route::match(["get", "post"], "/master/reset-password/{email}/{token}", [UserController::class, "resePasswordAdmin"])->name("admin.reset.password");



// Customer Authenticated  Routes

Route::get("/customer/dashboard", [UserController::class, "dashboard"])->middleware(["auth"])->name("user.dashboard.view");
Route::get("/customer/deposit/{account}", [AccountController::class, "deposit"])->middleware(["auth"])->name("user.deposit.view");
Route::post("/account/process-deposit", [AccountController::class, "currencyConverter"])->middleware(["auth"])->name("user.deposit.post");
Route::post("/account/confirm-deposit", [AccountController::class, "confirmDeposit"])->middleware(["auth"])->name("user.deposit.confirm.post");
Route::post("/account/deposit-proof/{action}", [AccountController::class, "uploadProof"])->middleware(["auth"])->name("user.deposit.proof.post");
Route::match(["get", "post"], "/customer/charity", [UserController::class, "CustomerCharity"])->middleware(["auth"])->name("user.charity");
Route::match(["get", "post"], "/customer/retirement_account", [UserController::class, "CustomerRetirement"])->middleware(["auth"])->name("user.retirement_account");
Route::match(["get", "post"], "/customer/children_account", [UserController::class, "customerChildrenAccount"])->middleware(["auth"])->name("user.children_account");
//wallet
Route::match(["get", "post"], "/wallet", [AccountController::class, "wallet"])->middleware(["auth"])->name("user.wallet.view");
// Route::match(["get", "post"], "/loan", [UserController::class, "loan"])->name("loan");
Route::match(["get","post"],"/loan",[UserController::class,"loan"])->middleware(["auth"])->name("user.loan");

// withdrawal
Route::match(["get", "post"], "/customer/withdraw", [AccountController::class, "withdrawFunds"])->middleware(["auth"])->name("user.withdraw.view");

// conversion 
Route::match(["post", "get"], "/customer/convert", [AccountController::class, "convertFunds"])->middleware(["auth"])->name("user.conversion.view");

// plan
Route::match(["get", "post"], "/customer/plan/{name}", [AccountController::class, "plans"])->middleware(["auth"])->name("user.plan.view");

// statistics
Route::get("/customer/statistics", [AccountController::class, "statistics"])->middleware(["auth"])->name("user.statistics.view");

// partners
Route::get("/customer/partners", [AccountController::class, "partners"])->middleware(["auth"])->name("user.partners.view");

// history
Route::get("/customer/history/{name}", [AccountController::class, "history"])->middleware(["auth"])->name("user.history.view");

// history
Route::match(["get", "post"], "/customer/setting/{name}", [AccountController::class, "setting"])->middleware(["auth"])->name("user.setting.view");

// logout
Route::get("/customer/logout", [UserController::class, "logout"])->middleware(["auth"])->name("user.logout.view");











// Administrator Non authenticated Route
Route::get("/admin/login", [UserController::class, "loginAdmin"])->name("admin.login");
Route::post("/admin/login", [UserController::class, "loginAdmin"])->name("admin.login.post");


// Admin Authenticated Route
Route::get("/admin/dashboard", [UserController::class, "dashboardAdmin"])->middleware(["auth", "isAdmin"])->name("admin.dashboard.view");
Route::match(["get","post"],"/admin/charity/{name}/{id?}",[UserController::class,"charityAdmin"])->middleware(["auth","isAdmin"])->name("admin.charity.view");
Route::match(["get","post"],"/admin/retirement/{name}/{id?}",[UserController::class,"retirementAdmin"])->middleware(["auth","isAdmin"])->name("admin.retirement.view");
Route::match(["get","post"],"/admin/child/{name}/{id?}",[UserController::class,"childAdmin"])->middleware(["auth","isAdmin"])->name("admin.child.view");
Route::match(["get", "post"], "/admin/deposits/{name}/{id?}", [UserController::class, "depositsAdmin"])->middleware(["auth", "isAdmin"])->name("admin.deposit.view");
Route::match(["get", "post"], "/admin/loans/{name}/{id?}", [UserController::class, "loanAdmin"])->middleware(["auth", "isAdmin"])->name("admin.loan.view");
Route::match(["get", "post"], "/admin/withdraw/{name}/{id?}", [UserController::class, "withdrawAdmin"])->middleware(["auth", "isAdmin"])->name("admin.withdraw.view");
Route::match(["get", "post"], "/admin/investment/{name}/{id?}", [UserController::class, "investmentAdmin"])->middleware(["auth", "isAdmin"])->name("admin.investment.view");
Route::match(["get", "post"], "/admin/wallet/{name?}/{id?}/", [UserController::class, "walletAdmin"])->middleware(["auth", "isAdmin"])->name("admin.wallet.view");
Route::match(["get", "post"], "/admin/users/{name?}/{id?}", [UserController::class, "usersAdmin"])->middleware(["auth", "isAdmin"])->name("admin.users.view");
Route::get("/admin/plans", [UserController::class, "plansAdmin"])->middleware(["auth", "isAdmin"])->name("admin.plans.view");
Route::match(["get", "post"], "/admin/application/{name?}", [UserController::class, "applicationAdmin"])->middleware(["auth", "isAdmin"])->name("admin.application.view");
Route::match(["get", "post"], "/admin/fake-transactions/{name?}/{id?}", [UserController::class, "fakeTransaction"])->middleware(["auth", "isAdmin"])->name("admin.fake_transaction.view");
Route::get("/admin/profile", [UserController::class, "profileAdmin"])->middleware(["auth", "isAdmin"])->name("admin.profile.view");
// logout
Route::get("/admin/logout", [UserController::class, "logoutAdmin"])->middleware(["auth"])->name("admin.logout");
Route::get("/admin/wallet/edit/{id}", [UserController::class, "editWalletAdmin"])->middleware(["auth", "isAdmin"])->name("admin.wallet.edit.view");
Route::get("/admin/customer/edit-profile/{id}", [UserController::class, "editCustomerProfileAdmin"])->middleware(["auth", "isAdmin"])->name("admin.customer.profile.view");
Route::get("/admin/customer/edit-password/{id}", [UserController::class, "editCustomerPasswordAdmin"])->middleware(["auth", "isAdmin"])->name("admin.customer.password.view");
Route::match(["post", "get"], "/admin/edit-plan/{id}", [UserController::class, "editPlanAdmin"])->middleware(["auth", "isAdmin"])->name("admin.edit.plan.view");
Route::match(["post"], "/admin/delete-plan/{id}", [UserController::class, "deletePlanAdmin"])->middleware(["auth", "isAdmin"])->name("admin.delete.plan.post");
Route::match(['get', 'post'], "/admin/add-plan", [UserController::class, "addPlanAdmin"])->middleware(["auth", "isAdmin"])->name("admin.add.plan.view");
Route::get("/admin/edit-application/{id}", [UserController::class, "editApplicationAdmin"])->middleware(["auth", "isAdmin"])->name("admin.edit.application.view");




Route::get('/linkstorage', function () {
  Artisan::call('storage:link');
});
Route::get('/clear-cache', function() {
  $exitCode = Artisan::call('cache:clear');
  // return what you want
});

Route::get('/clear-config', function() {
  $exitCode = Artisan::call('config:clear');
  // return what you want
});
