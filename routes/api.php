<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.')->prefix('v1')->group(function () {
    // // Health check
    // Route::get('health-check', [HealthCheckController::class, 'index'])->name('health_check');

    // Route::get('/email/verify/{id}/{hash}', [AuthenticatedUserController::class, 'verifyUserEmail'])->name('verification.verify');
    // // Authentication routes
    // Route::post('/login', [AuthController::class, 'login'])->name('login');
    // Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    // Route::post('/register', [AuthController::class, 'register'])->name('register');
    // Route::post('/reset-password', [AuthController::class, 'resetPassword'])->middleware('auth:api')->name('reset_password');
    // Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');
    // Route::post('/reset-password-by-link', [AuthController::class, 'resetPasswordByLink'])->middleware(['signed', 'consume_signed_route'])->name('reset_password_by_link');

    // // Authentication providers
    // Route::prefix('auth')->group(function () {
    //     Route::get('{provider}/login', [SocialAuthController::class, 'redirectToProvider'])->name('auth.provider.login');
    //     Route::get('{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('auth.provider.callback');
    // });

    // Route::get('faqs/ask/{question}', [FaqController::class, 'ask'])->name('faqs.ask');

    // Route::prefix('authenticated-user')->group(function () {
    //     Route::post('send-verify-mail', [AuthenticatedUserController::class, 'sendVerifyMail'])->name('authenticated_user.send_verify_mail');
    // });

    // Route::prefix('faqs')->group(function () {
    //     Route::get('/', [FaqController::class, 'index'])->name('faqs.index');
    //     Route::get('{id}', [FaqController::class, 'show'])->name('faqs.show');
    // });

    // Route::prefix('products')->group(function () {
    //     Route::get('/', [ProductController::class, 'index'])->name('products.index');
    //     Route::get('{id}', [ProductController::class, 'show'])->name('products.show');
    // });

    // Route::prefix('faq-categories')->group(function () {
    //     Route::get('/', [FaqCategoryController::class, 'index'])->name('faq_categories.index');
    //     Route::get('{id}', [FaqCategoryController::class, 'show'])->name('faq_categories.show');
    // });

    // Route::prefix('tickets')->group(function () {
    //     Route::get('/', [TicketController::class, 'index'])->name('tickets.index');
    // });

    // Route::prefix('draws')->group(function () {
    //     Route::get('/', [DrawController::class, 'index'])->name('draws.index');
    // });

    // Route::post('systex/{couponNo}/callback', [SystexController::class, 'callback'])->middleware(['verify_systex_header_and_ip', 'json_request'])->name('systex.callback')->withoutMiddleware(FormatJsonResponse::class);

    // Route::middleware(['auth:api', 'role:admin|user', 'verified'])->group(function () {
    //     Route::prefix('orders')->group(function () {
    //         Route::get('/', [OrderController::class, 'index'])->name('orders.index');
    //     });
    // });

    // // Admin routes
    // Route::middleware(['auth:api', 'permission:admin_management', 'verified'])->group(function () {
    //     Route::prefix('authorization')->group(function () {
    //         Route::post('assign_user_role', [AuthorizationController::class, 'assignUserRole'])->name('authorization.assign_user_role');
    //         Route::delete('delete_user_role', [AuthorizationController::class, 'deleteUserRole'])->name('authorization.delete_user_role');
    //         Route::get('get_role_permissions', [AuthorizationController::class, 'getRolePermissions'])->name('authorization.get_role_permissions');
    //         Route::post('assign_permission_to_role', [AuthorizationController::class, 'assignPermissionToRole'])->name('authorization.assign_permission_to_role');
    //         Route::get('users', [AuthorizationController::class, 'getUsersByRoleNames'])->name('authorization.get_users_by_role_names');
    //     });
    // });

    // Route::middleware(['auth:api', 'permission:qa', 'verified'])->group(function () {
    //     Route::patch('faqs', [FaqController::class, 'updateMany'])->name('faqs.updateMany');
    //     Route::resource('faqs', FaqController::class)->except([
    //         'index',
    //         'show',
    //     ]);

    //     Route::resource('faq-categories', FaqCategoryController::class)->except([
    //         'index',
    //         'show',
    //     ]);
    // });

    // Route::middleware(['auth:api', 'permission:product', 'verified'])->group(function () {
    //     Route::resource('products', ProductController::class)->except([
    //         'index',
    //         'show',
    //     ]);
    // });

    // Route::middleware(['auth:api', 'permission:specy', 'verified'])->group(function () {
    //     Route::resource('species', SpecyController::class);
    //     Route::resource('runes', RuneController::class);
    // });

    // Route::middleware(['auth:api', 'permission:subspecy', 'verified'])->group(function () {
    //     Route::resource('subspecies', SubspecyController::class);
    // });

    // Route::middleware(['auth:api', 'permission:brand', 'verified'])->group(function () {
    //     Route::resource('brands', BrandController::class);
    // });

    // Route::middleware(['auth:api', 'permission:supplier', 'verified'])->group(function () {
    //     Route::resource('suppliers', SupplierController::class);
    // });

    // Route::middleware(['auth:api', 'permission:task', 'verified'])->group(function () {
    //     Route::prefix('tasks')->group(function () {
    //         Route::post('{id}/assign', [TaskController::class, 'assign'])->name('tasks.assign');
    //         Route::delete('{id}/{taskable_type}/{taskable_id}', [TaskController::class, 'deleteTaskable'])->name('tasks.delete_taskable');
    //         Route::post('import', [TaskController::class, 'import'])->name('tasks.import');
    //         Route::delete('batch-delete', [TaskController::class, 'batchDelete'])->name('tasks.batch_delete');
    //         Route::patch('batch-update-status', [TaskController::class, 'batchUpdateStatus'])->name('tasks.batch_update_status');
    //         Route::post('create-with-click', [TaskController::class, 'createWithClick'])->name('tasks.create_with_click');
    //         Route::post('{id}/increase-limit', [TaskController::class, 'increaseLimit'])->name('tasks.increase_limit');
    //     });

    //     Route::resource('tasks', TaskController::class)->except([
    //         'index',
    //         'show',
    //     ]);
    // });

    // Route::middleware(['auth:api', 'permission:question', 'verified'])->group(function () {
    //     Route::prefix('surveys')->group(function () {
    //         Route::post('/', [SurveyController::class, 'store'])->name('surveys.store');
    //         Route::patch('{id}', [SurveyController::class, 'update'])->name('surveys.update');
    //         Route::put('{id}', [SurveyController::class, 'update'])->name('surveys.update');
    //         Route::delete('{id}', [SurveyController::class, 'destroy'])->name('surveys.destroy');
    //     });

    //     Route::prefix('questions')->group(function () {
    //         Route::post('/', [QuestionController::class, 'store'])->name('questions.store');
    //         Route::patch('{id}', [QuestionController::class, 'update'])->name('questions.update');
    //         Route::put('{id}', [QuestionController::class, 'update'])->name('questions.update');
    //         Route::delete('{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');
    //     });

    //     Route::prefix('question-options')->group(function () {
    //         Route::post('/', [QuestionOptionController::class, 'store'])->name('question_options.store');
    //         Route::patch('{id}', [QuestionOptionController::class, 'update'])->name('question_options.update');
    //         Route::put('{id}', [QuestionOptionController::class, 'update'])->name('question_options.update');
    //         Route::delete('{id}', [QuestionOptionController::class, 'destroy'])->name('question_options.destroy');
    //     });

    //     Route::prefix('clicks')->group(function () {
    //         Route::post('/', [ClickController::class, 'store'])->name('clicks.store');
    //         Route::patch('{id}', [ClickController::class, 'update'])->name('clicks.update');
    //         Route::put('{id}', [ClickController::class, 'update'])->name('clicks.update');
    //         Route::delete('{id}', [ClickController::class, 'destroy'])->name('clicks.destroy');
    //     });

    //     Route::prefix('videos')->group(function () {
    //         Route::post('/', [VideoController::class, 'store'])->name('videos.store');
    //         Route::patch('{id}', [VideoController::class, 'update'])->name('videos.update');
    //         Route::put('{id}', [VideoController::class, 'update'])->name('videos.update');
    //         Route::delete('{id}', [VideoController::class, 'destroy'])->name('videos.destroy');
    //     });
    // });

    // Route::middleware(['auth:api', 'permission:draw', 'verified'])->group(function () {
    //     Route::prefix('draws')->group(function () {
    //         Route::post('/', [DrawController::class, 'store'])->name('draws.store');
    //         Route::patch('{id}', [DrawController::class, 'update'])->name('draws.update');
    //         Route::put('{id}', [DrawController::class, 'update'])->name('draws.update');
    //         Route::delete('{id}', [DrawController::class, 'destroy'])->name('draws.destroy');
    //     });
    // });

    // Route::middleware(['auth:api', 'permission:prize', 'verified'])->group(function () {
    //     Route::prefix('prizes')->group(function () {
    //         Route::post('{id}/batch', [PrizeController::class, 'batchCreate'])->name('prizes.batch');
    //     });
    //     Route::prefix('prize-groups')->group(function () {
    //         Route::get('prize-count', [PrizeGroupController::class, 'getPrizeCount'])->name('prize_groups.prize_count');
    //         Route::get('non-winning-probability', [PrizeGroupController::class, 'getNonWinningPrizeProbability'])->name('prize_groups.non_winning_prize_probability');
    //     });

    //     Route::resource('prizes', PrizeController::class);
    //     Route::resource('prize-groups', PrizeGroupController::class);
    // });

    // Route::middleware(['auth:api', 'permission:message', 'verified'])->group(function () {
    //     Route::prefix('messages')->group(function () {
    //         Route::post('publish-message-to-users', [MessageController::class, 'publishMessageToUsers'])->name('messages.publish_message_to_users');
    //         Route::post('/', [MessageController::class, 'store'])->name('messages.store');
    //         Route::post('{id}', [MessageController::class, 'update'])->name('messages.update');
    //         Route::delete('{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
    //     });
    // });

    // Route::middleware(['auth:api', 'permission:vcoin', 'verified'])->group(function () {
    //     Route::prefix('wallets')->group(function () {
    //         Route::post('increase-system-coins', [WalletController::class, 'increaseSystemCoins'])->name('wallets.increase_system_coins');
    //     });

    //     Route::prefix('users')->group(function () {
    //         Route::get('/system/vcoin-info', [UserController::class, 'getSystemUserVCoinInfo'])->name('users.get_system_user_vcoin_info');
    //     });
    // });

    // Route::middleware(['auth:api', 'permission:member_management', 'verified'])->group(function () {
    //     Route::prefix('users')->group(function () {
    //         Route::post('/', [UserController::class, 'store'])->name('users.store');
    //         Route::patch('{id}', [UserController::class, 'update'])->name('users.update');
    //         Route::put('{id}', [UserController::class, 'update'])->name('users.update');
    //         Route::delete('{id}', [UserController::class, 'destroy'])->name('users.destroy');
    //         Route::post('increase-coins', [UserController::class, 'increaseCoins'])->name('users.increase_coins');
    //         Route::post('decrease-coins', [UserController::class, 'decreaseCoins'])->name('users.decrease_coins');
    //         Route::post('upload-nicknames', [UserController::class, 'uploadNicknames'])->name('users.upload_nicknames');
    //     });
    // });

    // Route::middleware(['auth:api', 'role:user'])->group(function () {
    //     Route::prefix('authenticated-user')->group(function () {
    //         Route::post('bind-mail', [AuthenticatedUserController::class, 'bindMail'])->name('authenticated_user.bind_mail');
    //     });
    // });
    // // Admin routes
    // Route::middleware(['auth:api', 'role:user|part_time|editor|admin|super_admin', 'verified'])->group(function () {
    //     // permissions and roles
    //     Route::prefix('authorization')->group(function () {
    //         Route::get('get_user_role/{id}', [AuthorizationController::class, 'getUserRole'])->name('authorization.get_user_role');
    //         Route::get('get_user_permissions/{id}', [AuthorizationController::class, 'getUserPermissions'])->name('authorization.get_user_permissions');
    //     });

    //     // File upload
    //     Route::post('upload/image', [FileController::class, 'uploadImage'])->name('upload.image');

    //     // Subspecy-related routes
    //     Route::post('qubic', [NftApiController::class, 'qubicApi']);
    //     Route::post('qubic/mint', [NftApiController::class, 'mint'])->name('subspecies.mint');

    //     // Authenticated user routes
    //     Route::prefix('authenticated-user')->group(function () {
    //         Route::post('verify-sms/{encrypt}', [AuthenticatedUserController::class, 'verifySms'])->name('authenticated_user.verify_sms');
    //         Route::post('send-sms', [AuthenticatedUserController::class, 'sendSms'])->name('authenticated_user.send_sms');
    //         Route::get('check-fulfilled', [AuthenticatedUserController::class, 'fulfilled'])->name('authenticated_user.check_fulfilled');
    //         Route::post('daily-login-reward', [AuthenticatedUserController::class, 'dailyLoginReward'])->name('authenticated_user.daily_login_reward');
    //         Route::patch('daily-login-reward', [AuthenticatedUserController::class, 'invalidateDailyLoginReward'])->name('authenticated_user.change_daily_login_reward');
    //         Route::patch('set-mobile-to-null', [AuthenticatedUserController::class, 'setMobileToNull'])->name('authenticated_user.set_mobile_to_null');
    //         Route::get('/', [AuthenticatedUserController::class, 'show'])->name('authenticated_user.show');
    //         Route::patch('/', [AuthenticatedUserController::class, 'update'])->name('authenticated_user.update');
    //         Route::delete('/', [AuthenticatedUserController::class, 'destroy'])->name('authenticated_user.destroy');
    //         Route::get('invitations', [AuthenticatedUserController::class, 'getInvitationCount'])->name('authenticated_user.invitations');
    //     });

    //     Route::post('survey/assign-options-to-user', [SurveyController::class, 'assignOptionsToUser'])->name('surveys.assign_options_to_user');

    //     Route::prefix('tasks')->group(function () {
    //         Route::post('{id}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
    //         Route::post('{id}/take', [TaskController::class, 'take'])->name('tasks.take');
    //         Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    //         Route::get('{id}', [TaskController::class, 'show'])->name('tasks.show');
    //     });

    //     Route::prefix('tags')->group(function () {
    //         Route::post('assign-taggables', [TagController::class, 'assignTaggables'])->name('tags.assign_taggables');
    //     });

    //     Route::prefix('pets')->group(function () {
    //         Route::get('prefixes', [PetController::class, 'allPrefixes'])->name('pets.all_prefixes');
    //         Route::post('generate-prefix', [PetController::class, 'generatePrefix'])->name('pets.generate_prefix');
    //         Route::get('{id}/generate-names', [PetController::class, 'generateNames'])->name('pets.generate_names');
    //         Route::get('generate-name', [PetController::class, 'generateName'])->name('pets.generate_name');
    //         Route::post('{id}/mint', [PetController::class, 'mint'])->name('pets.mint');
    //     });

    //     Route::prefix('users')->group(function () {
    //         Route::get('generate-nickname', [UserController::class, 'generateNickname'])->name('users.generate_nickname');
    //         Route::post('create-fake-users/{amount}', [UserController::class, 'createFakeUsers'])->name('users.create_fake_users');
    //     });

    //     Route::patch('notices/mark-as-read', [NoticeController::class, 'markAsRead'])->name('notices.mark_as_read');
    //     Route::prefix('messages')->group(function () {
    //         Route::patch('mark-as-read', [MessageController::class, 'markAsRead'])->name('messages.mark_as_read');
    //         Route::post('publish-message-to-users', [MessageController::class, 'publishMessageToUsers'])->name('messages.publish_message_to_users');
    //         Route::get('unread-count', [MessageController::class, 'getUnreadMessageCount'])->name('messages.unread_count');
    //         Route::get('/', [MessageController::class, 'index'])->name('messages.index');
    //         Route::get('{id}', [MessageController::class, 'show'])->name('messages.show');
    //     });
    //     Route::get('clicks/redirect-link/{id}', [ClickController::class, 'redirectLink']);
    //     Route::prefix('draws')->group(function () {
    //         Route::post('{id}/draw', [DrawController::class, 'draw'])->name('draws.draw');
    //         Route::post('{id}/mark-ticket-as-winner', [DrawController::class, 'markTicketAsWinner'])->name('draws.mark_ticket_as_winner');
    //     });

    //     Route::prefix('tickets')->group(function () {
    //         Route::get('{id}/users', [TicketController::class, 'getDrawUserIds'])->name('tickets.get_draw_user_ids');
    //         Route::post('{id}', [TicketController::class, 'store'])->name('tickets.store');
    //     });

    //     Route::resource('tickets', TicketController::class)->except([
    //         'store',
    //         'index',
    //     ]);

    //     Route::resource('orders', OrderController::class)->except([
    //         'index',
    //     ]);

    //     Route::resource('questions', QuestionController::class)->except([
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('question-options', QuestionOptionController::class)->except([
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('surveys', SurveyController::class)->except([
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('clicks', ClickController::class)->except([
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('videos', VideoController::class)->except([
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('draws', DrawController::class)->except([
    //         'index',
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('users', UserController::class)->except([
    //         'store',
    //         'update',
    //         'destroy',
    //     ]);

    //     Route::resource('pets', PetController::class)->except([
    //         'index',
    //         'show',
    //     ]);

    //     // Resourceful routes
    //     Route::resources([
    //         'contracts' => ContractController::class,
    //         'tags' => TagController::class,
    //         'notices' => NoticeController::class,
    //         'utility-categories' => UtilityCategoryController::class,
    //         'utilities' => UtilityController::class,
    //     ]);
    // });

    // Route::prefix('pets')->group(function () {
    //     Route::get('/', [PetController::class, 'index'])->name('pets.index');
    //     Route::get('{id}', [PetController::class, 'show'])->name('pets.show');
    // });
});