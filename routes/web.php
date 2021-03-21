<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;



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


//blog

Route::get('blog', [
    'uses' => 'WelcomeBlogController@blog',
    'as' => 'blog' 
]);

Route::get('blog/{post}/{title?}', [
    'uses' => 'WelcomeBlogController@blogPostDetails',
    'as' => 'blogPostDetails' 
]);

Route::get('select/tags/or/add/new', [
'uses' =>'WelcomeBlogController@selectTagsOrAddNew',
'as' => 'welcome.selectTagsOrAddNew'
]);

//blog

Route::get('/', [
    'uses' =>'WelcomeController@welcome',
    'as' => 'welcome.welcome'
]);
Route::get('/our-team-members',[
    'uses' => 'WelcomeController@teamMembers',
    'as' => 'welcome.teamMembers',
]);
Route::get('/branch/{branch}/team-members',[
    'uses' => 'WelcomeController@branchTeamMembers',
    'as' => 'welcome.branchTeamMembers',
]);
Route::get('/incomplete-profile', [
    'uses' =>'WelcomeController@incompleteProfile',
    'as' => 'user.incompleteProfile'
]);
// Route::post('/incomplete-profile', [
//     'uses' =>'WelcomeController@createProfile',
//     'as' => 'user.createProfile'
// ]);
Route::post('/incomplete-profile', [
    'uses' =>'WelcomeController@createProfilePost',
    'as' => 'user.createProfilePost'
]);

Route::get('login/{provider}', 
    'Auth\LoginController@redirectToProvider')->name('socialLogin');

Route::get('login/{provider}/callback',
    'Auth\LoginController@handleProviderCallback');

Route::get('/home2', [
    'uses' =>'WelcomeController@welcome2',
    'as' => 'welcome.welcome2'
]);

Route::post('/contact/information',[
    'uses' => 'WelcomeController@contactAdmin',
    'as' => 'welcome.contactAdmin',
]);


Route::get('/our-branches', [
    'uses' =>'WelcomeController@ourBranches',
    'as' => 'welcome.ourBranches'
]);

Route::get('/our-success-stories', [
    'uses' =>'WelcomeController@successStories',
    'as' => 'welcome.successStories'
]);


// Auth::routes();

Route::get('login', [
    'uses' =>'Auth\LoginController@showLoginForm',
    'as' => 'login'
]);

Route::post('login', [
    'uses' =>'Auth\LoginController@login',
]);

Route::post('logout', [
    'uses' =>'Auth\LoginController@logout',
    'as' => 'logout'
]);


Route::post('password/email', [
    'uses' =>'Auth\ForgotPasswordController@sendResetLinkEmail',
    'as' => 'password.email'
]);


Route::get('password/reset', [
    'uses' =>'Auth\ForgotPasswordController@showLinkRequestForm',
    'as' => 'password.request'
]);

Route::post('password/reset', [
    'uses' =>'Auth\ResetPasswordController@reset',
    'as' => 'password.update'
]);


Route::get('password/reset/{token}', [
    'uses' =>'Auth\ResetPasswordController@showResetForm',
    'as' => 'password.reset'
]);


Route::get('register', [
    'uses' =>'Auth\RegisterController@showRegistrationForm',
    'as' => 'register'
]);

Route::post('register', [
    'uses' =>'Auth\RegisterController@register',
]);


Route::any('signup', [
    'uses' =>'Auth\SignupController@signup',
    'as' => 'signup'
]);

Route::any('signup/post', [
    'uses' =>'Auth\SignupController@signupPost',
    'as' => 'signupPost'
]);


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@mobileIndex')->name('home');


//page
Route::get('page/{page}/{route_name?}', [
    'uses' => 'WelcomeController@page',
    'as' => 'page'
]);
//page

Route::get('test/{view}', [
    'uses' =>'WelcomeController@test',
    'as' => 'welcome.test'
]);


Route::get('/{username}', [
    'uses' =>'WelcomeController@username',
    'as' => 'welcome.username'
])->middleware('auth');

//gallery //vdo gallery
//
Route::get('photo/gallery', [
    'uses' =>'WelcomeController@photoGallery',
    'as' => 'welcome.photoGallery'
]);

Route::get('image/gallery/{gallery}', [
'uses' =>'WelcomeController@gallery',
'as' => 'welcome.gallery'
]);

Route::get('video/gallery/{gallery?}', [
'uses' =>'WelcomeController@videoGallery',
'as' => 'welcome.videoGallery'
]);

//gallery //vdo gallery



// SSLCOMMERZ Start
    // Route::get('ssl/pay', 'PublicSslCommerzPaymentController@index');
    // Route::POST('ssl/success', 'PublicSslCommerzPaymentController@success');
    // Route::POST('ssl/fail', 'PublicSslCommerzPaymentController@fail');
    // Route::POST('ssl/cancel', 'PublicSslCommerzPaymentController@cancel');
    // Route::POST('ssl/ipn', 'PublicSslCommerzPaymentController@ipn');

    Route::any('ssl/pay/{payment}', [
    'uses' =>'PublicSslCommerzPaymentController@index',
    'as' => 'ssl.pay'
    ]);

    Route::post('ssl/success', [
    'uses' =>'PublicSslCommerzPaymentController@success',
    'as' => 'ssl.success'
    ]);

    Route::post('ssl/fail', [
    'uses' =>'PublicSslCommerzPaymentController@fail',
    'as' => 'ssl.fail'
    ]);

    Route::post('ssl/cancel', [
    'uses' =>'PublicSslCommerzPaymentController@cancel',
    'as' => 'ssl.cancel'
    ]);

    Route::post('ssl/ipn', [
    'uses' =>'PublicSslCommerzPaymentController@ipn',
    'as' => 'ssl.ipn'
    ]);

//SSLCOMMERZ END


#admin start //admin
Route::group(['middleware' => ['auth','role:admin'] ,'prefix' => 'admin'], function () {

    Route::get('/dashboard', [
    'uses' =>'AdminController@dashboard',
    'as' => 'admin.dashboard'
    ]);

    Route::get('/website/parameter', [
    'uses' =>'AdminController@websiteParameter',
    'as' => 'admin.websiteParameter'
    ]);

    Route::post('website/parameter/update', [
    'uses' =>'AdminController@websiteParameterUpdate',
    'as' => 'admin.websiteParameterUpdate'
    ]);

    Route::get('team/members', [
    'uses' =>'TeamMemberController@teamMemberList',
    'as' => 'admin.teamMemberList'
    ]);
    Route::get('team/member/{member?}/edit', [
    'uses' =>'TeamMemberController@teamMemberEdit',
    'as' => 'admin.teamMember.edit'
    ]);
    Route::post('team/save-member/{teamMember?}', [
    'uses' =>'TeamMemberController@teamMemberSave',
    'as' => 'admin.teamMember.save'
    ]);
    Route::delete('team/member/{teamMember}/delete', [
    'uses' =>'TeamMemberController@teamMemberDelete',
    'as' => 'admin.teamMember.delete'
    ]);
    Route::get('user/setting/list', [
    'uses' =>'AdminController@userSettingList',
    'as' => 'admin.userSettingList'
    ]);

    Route::post('user/setting/field/add', [
    'uses' =>'AdminController@userSettingFieldAdd',
    'as' => 'admin.userSettingFieldAdd'
    ]);

    Route::get('user/setting/field/value', [
    'uses' =>'AdminController@userSettingFieldValue',
    'as' => 'admin.userSettingFieldValue'
    ]);

    Route::post('user/setting/field/value/add/post', [
    'uses' =>'AdminController@userSettingFieldValueAddPost',
    'as' => 'admin.userSettingFieldValueAddPost'
    ]);

    Route::any('user/setting/value/edit/{value}/{i}', [
    'uses' =>'AdminController@userSettingValueEdit',
    'as' => 'admin.userSettingValueEdit'
    ]);

    Route::any('user/setting/value/delete/{value}', [
    'uses' =>'AdminController@userSettingValueDelete',
    'as' => 'admin.userSettingValueDelete'
    ]);

    Route::any('user/setting/value/update/{value}/{i}', [
    'uses' =>'AdminController@userSettingValueUpdate',
    'as' => 'admin.userSettingValueUpdate'
    ]);

    Route::get('admins/all/', [
    'uses' =>'AdminController@adminsAll',
    'as' => 'admin.adminsAll'
    ]);

    Route::get('roles/all/', [
    'uses' =>'AdminController@rolesAll',
    'as' => 'admin.rolesAll'
    ]);

    Route::get('select/new/role', [
        'as' => 'admin.selectNewRole',
        'uses' => 'AdminController@selectNewRole'
    ]);
    // Route::post('admin/add/new/post', [
    // 'uses' =>'AdminController@adminAddNewPost',
    // 'as' => 'admin.adminAddNewPost'
    // ]);

    Route::post('admin/delete/{role}', [
    'uses' =>'AdminController@adminDelete',
    'as' => 'admin.adminDelete'
    ]);

    Route::get('role/add/new', [
    'uses' =>'AdminController@roleAddNew',
    'as' => 'admin.roleAddNew'
    ]);

    Route::post('role/add/new/post', [
    'uses' =>'AdminController@roleAddNewPost',
    'as' => 'admin.roleAddNewPost'
    ]);

    Route::post('role/delete/{role}', [
    'uses' =>'AdminController@roleDelete',
    'as' => 'admin.roleDelete'
    ]);

    //role

    //media person

    Route::get('media/persons/all/', [
    'uses' =>'AdminController@mediaPersonsAll',
    'as' => 'admin.mediaPersonsAll'
    ]);

    Route::get('select/new/role', [
        'as' => 'admin.selectNewRole',
        'uses' => 'AdminController@selectNewRole'
    ]);
    Route::post('media/person/add/new/post', [
    'uses' =>'AdminController@mediaPersonAddNewPost',
    'as' => 'admin.mediaPersonAddNewPost'
    ]);

    Route::post('media/person/delete/{role}', [
    'uses' =>'AdminController@mediaPersonDelete',
    'as' => 'admin.mediaPersonDelete'
    ]);
    //media person


    //package
    Route::get('all/membership/packages', [
    'uses' =>'AdminController@allMembershipPackages',
    'as' => 'admin.allMembershipPackages'
    ]);

    Route::get('membership/package/add/new', [
    'uses' =>'AdminController@membershipPackageAddNew',
    'as' => 'admin.membershipPackageAddNew'
    ]);

    Route::post('membership/package/add/new/post', [
    'uses' =>'AdminController@membershipPackageAddNewPost',
    'as' => 'admin.membershipPackageAddNewPost'
    ]);

    Route::get('membership/package/edit/{package}', [
    'uses' =>'AdminController@membershipPackageEdit',
    'as' => 'admin.membershipPackageEdit'
    ]);

    Route::post('membership/package/update/{package}', [
    'uses' =>'AdminController@membershipPackageUpdate',
    'as' => 'admin.membershipPackageUpdate'
    ]);

    // Route::any('membership/package/delete/{package}', [
    // 'uses' =>'AdminController@membershipPackageDelete',
    // 'as' => 'admin.membershipPackageDelete'
    // ]);

    //package

    // branch
    Route::get('all/branches', [
    'uses' =>'AdminController@allBranches',
    'as' => 'admin.allBranches'
    ]);

    Route::get('add/new/branch', [
    'uses' =>'AdminController@addNewBranch',
    'as' => 'admin.addNewBranch'
    ]);

    Route::post('add/new/branch/post', [
    'uses' =>'AdminController@addNewBranchPost',
    'as' => 'admin.addNewBranchPost'
    ]);

    Route::get('branch/edit/{branch}', [
    'uses' =>'AdminController@branchEdit',
    'as' => 'admin.branchEdit'
    ]);

    Route::post('branch/update/post/{branch}', [
    'uses' =>'AdminController@branchUpdatePost',
    'as' => 'admin.branchUpdatePost'
    ]);

    Route::any('branch/delete/{branch}', [
    'uses' =>'AdminController@branchDelete',
    'as' => 'admin.branchDelete'
    ]);

    // branch


    //front slider //slider
    Route::get('front/sliders/all', [
    'uses' =>'AdminController@frontSlidersAll',
    'as' => 'admin.frontSlidersAll'
    ]);

    Route::post('front/slider/add/new', [
    'uses' =>'AdminController@frontSliderAddNew',
    'as' => 'admin.frontSliderAddNew'
    ]);

    Route::get('front/slider/delete/{slider}', [
    'uses' =>'AdminController@frontSliderDelete',
    'as' => 'admin.frontSliderDelete'
    ]);
    //front slider //slider


});


#common start //common
Route::group(['middleware' => ['auth','role:common','profile.check'] ,'prefix' => 'authority'], function () {

    Route::get('dashboard', [
    'uses' =>'CommonController1@dashboard',
    'as' => 'common1.dashboard'
    ]);

    // Blogs
    //menu & page

    // Route::get('new/post', [
    //     'uses' =>'CommonController1@newPost',
    //     'as' => 'common1.newPost'
    //     ]);
    
    // Route::post('new/blog/post', [
    //     'uses' =>'CommonController1@newBlogPost',
    //     'as' => 'common1.newBlogPost'
    //     ]);
    
    // Route::get('all/posts', [
    //     'uses' =>'CommonController1@allPosts',
    //     'as' => 'common1.allPosts'
    //     ]);


    //menu & page

    Route::get('new/menu', [
    'uses' =>'CommonController1@newMenu',
    'as' => 'common1.newMenu'
    ]);

    Route::post('new/menu/post', [
    'uses' =>'CommonController1@newMenuPost',
    'as' => 'common1.newMenuPost'
    ]);

    Route::get('all/menus', [
    'uses' =>'CommonController1@allMenus',
    'as' => 'common1.allMenus'
    ]);

    Route::get('menu/delete/{menu}', [
    'uses' =>'CommonController1@menuDelete',
    'as' => 'common1.menuDelete'
    ]);

    // Route::get('new/page', [
    // 'uses' =>'CommonController1@newPage',
    // 'as' => 'common1.newPage'
    // ]);

    // Route::post('new/page/post', [
    // 'uses' =>'CommonController1@newPagePost',
    // 'as' => 'common1.newPagePost'
    // ]);

    // Route::get('all/pages', [
    // 'uses' =>'CommonController1@allPages',
    // 'as' => 'common1.allPages'
    // ]);


    // Route::get('edit/page/{page}', [
    // 'uses' =>'CommonController1@editPage',
    // 'as' => 'common1.editPage'
    // ]);

    // Route::post('edit/page/post/{page}', [
    // 'uses' =>'CommonController1@editPagePost',
    // 'as' => 'common1.editPagePost'
    // ]);

    // Route::any('delete/page/{page}', [
    // 'uses' =>'CommonController1@deletePage',
    // 'as' => 'common1.deletePage'
    // ]);


    //pages
    Route::get('/pages/all', [
    'uses' =>'CommonController1@pagesAll',
    'as' => 'common1.allPages'
    ]);

    Route::post('/page/add/new/post', [
    'uses' =>'CommonController1@pageAddNewPost',
    'as' => 'common1.pageAddNewPost'
    ]);

    Route::get('page/edit/{page}', [
    'uses' =>'CommonController1@pageEdit',
    'as' => 'common1.pageEdit'
    ]);

    Route::post('page/edit/post/{page}', [
    'uses' =>'CommonController1@pageEditPost',
    'as' => 'common1.pageEditPost'
    ]);

    Route::get('page/delete/{page}', [
    'uses' =>'CommonController1@pageDelete',
    'as' => 'common1.pageDelete'
    ]);

    Route::get('page/items/{page}', [
    'uses' =>'CommonController1@pageItems',
    'as' => 'common1.pageItems'
    ]);


    Route::post('page-item/add/post/{page}', [
    'uses' =>'CommonController1@pageItemAddPost',
    'as' => 'common1.pageItemAddPost'
    ]);

    Route::get('page-item/delete/{item}', [
    'uses' =>'CommonController1@pageItemDelete',
    'as' => 'common1.pageItemDelete'
    ]);


    Route::get('page-item/edit/{item}', [
    'uses' =>'CommonController1@pageItemEdit',
    'as' => 'common1.pageItemEdit'
    ]);

    Route::post('page-item/update/post/{item}', [
    'uses' =>'CommonController1@pageItemUpdate',
    'as' => 'common1.pageItemUpdate'
    ]);

    Route::get('page-item/edit-editor/{item}', [
    'uses' =>'CommonController1@pageItemEditEditor',
    'as' => 'common1.pageItemEditEditor'
    ]);


    //pages

    //page

    //media
    Route::get('media/all', [
    'uses' =>'CommonController1@mediaAll',
    'as' => 'common1.mediaAll'
    ]);

    Route::post('media/upload/post', [
    'uses' =>'CommonController1@mediaUploadPost',
    'as' => 'common1.mediaUploadPost'
    ]);

    Route::get('media/delete/{media}', [
    'uses' =>'CommonController1@mediaDelete',
    'as' => 'common1.mediaDelete'
    ]);
    //media
    //
    //
    

     //image gallery
    Route::get('image/galleries/all', [
    'uses' =>'CommonController1@imageGalleriesAll',
    'as' => 'common1.imageGalleriesAll'
    ]);

    Route::post('gallery/image/add/new', [
    'uses' =>'CommonController1@galleryImageAddNew',
    'as' => 'common1.galleryImageAddNew'
    ]);

    Route::get('gallery/image/delete/{gallery}', [
    'uses' =>'CommonController1@galleryImageDelete',
    'as' => 'common1.galleryImageDelete'
    ]);
    //image gallery


    //img gallery //image gallery
    Route::get('/image/gallery/all', [
    'uses' =>'CommonController1@imgGalleriesAll',
    'as' => 'common1.imgGalleriesAll'
    ]);

    Route::get('/image/gallery/add/new', [
    'uses' =>'CommonController1@imgGalleryAddNew',
    'as' => 'common1.imgGalleryAddNew'
    ]);

    Route::any('/image/gallery/item/ajax/post/{item}', [
    'uses' =>'CommonController1@imgGalleryItemAjaxPost',
    'as' => 'common1.imgGalleryItemAjaxPost'
    ]);

    Route::post('/image/gallery/add/new/post', [
    'uses' =>'CommonController1@imgGalleryAddNewPost',
    'as' => 'common1.imgGalleryAddNewPost'
    ]);

    Route::any('/image/gallery/delete/{gallery}', [
    'uses' =>'CommonController1@imgGalleryDelete',
    'as' => 'common1.imgGalleryDelete'
    ]);

    Route::any('/image/gallery/edit/{gallery}', [
    'uses' =>'CommonController1@imgGalleryEdit',
    'as' => 'common1.imgGalleryEdit'
    ]);

    Route::any('/image/gallery/edit/post/{gallery}', [
    'uses' =>'CommonController1@imgGalleryEditPost',
    'as' => 'common1.imgGalleryEditPost'
    ]);

    //img gallery //image gallery

    //vdo gallery //video gallery
    Route::get('/video/gallery/all', [
    'uses' =>'CommonController1@videoGalleriesAll',
    'as' => 'common1.videoGalleriesAll'
    ]);

    Route::get('/video/gallery/add/new', [
    'uses' =>'CommonController1@videoGalleryAddNew',
    'as' => 'common1.videoGalleryAddNew'
    ]);


    Route::any('/video/gallery/item/ajax/post/{item}', [
    'uses' =>'CommonController1@videoGalleryItemAjaxPost',
    'as' => 'common1.videoGalleryItemAjaxPost'
    ]);

    Route::post('/video/gallery/add/new/post', [
    'uses' =>'CommonController1@videoGalleryAddNewPost',
    'as' => 'common1.videoGalleryAddNewPost'
    ]);

    Route::any('/video/gallery/delete/{gallery}', [
    'uses' =>'CommonController1@videoGalleryDelete',
    'as' => 'common1.videoGalleryDelete'
    ]);

    Route::any('/video/gallery/edit/{gallery}', [
    'uses' =>'CommonController1@videoGalleryEdit',
    'as' => 'common1.videoGalleryEdit'
    ]);

    Route::any('/video/gallery/edit/post/{gallery}', [
    'uses' =>'CommonController1@videoGalleryEditPost',
    'as' => 'common1.videoGalleryEditPost'
    ]);

    //vdo gallery //video gallery




    //all users

    Route::get('new/user', [
    'uses' =>'CommonController3@newUser',
    'as' => 'common3.newUser'
    ]);

    Route::post('new/user/post', [
    'uses' =>'CommonController3@newUserPost',
    'as' => 'common3.newUserPost'
    ]);


    Route::get('all/users', [
    'uses' =>'CommonController2@usersAll',
    'as' => 'common2.usersAll'
    ]);

    Route::get('make/user/active/{user}', [
    'uses' =>'CommonController2@makeUserActive',
    'as' => 'common2.makeUserActive'
    ]);


    Route::get('users/group/{type}', [
    'uses' =>'CommonController2@usersGroup',
    'as' => 'common2.usersGroup'
    ]);

    //mobile & email number for 3rd party sale
    Route::get('mobile/numbers/all', [
        'uses' =>'CommonController2@mobileNumbersAll',
        'as' => 'admin.mobileNumbersAll'
    ]);
    
    Route::get('email/numbers/all', [
        'uses' =>'CommonController2@emailNumbersAll',
        'as' => 'admin.emailNumbersAll'
    ]);

    Route::get('email/mobile/numbers/all', [
        'uses' =>'CommonController2@emailsAndNumbersAll',
        'as' => 'admin.emailsAndNumbersAll'
    ]);

    Route::get('user/registration-info/all', [
        'uses' =>'CommonController2@registerInfoAll',
        'as' => 'admin.registerInfoAll'
    ]);


    Route::get('user/search/ajax', [
    'uses' =>'CommonController2@userSearchAjax',
    'as' => 'common2.userSearchAjax'
    ]);

    Route::get('user/profilepic/checked/{pic}/{term}', [
    'uses' =>'CommonController2@userProfilepicCheck',
    'as' => 'common2.userProfilepicCheck'
    ]);

    Route::get('user/details/edit/{user}', [
    'uses' =>'CommonController2@userDetailsEdit',
    'as' => 'common2.userDetailsEdit'
    ]);

    Route::any('user/details/update/post/{user}', [
    'uses' =>'CommonController2@userDetailsUpdatePost',
    'as' => 'common2.userDetailsUpdatePost'
    ]);

    Route::post('new/temp/password/send/post/{user}', [
    'uses' =>'CommonController2@newTempPassSendPost',
    'as' => 'common2.newTempPassSendPost'
    ]);

    Route::post('upgrade/user/for/free/post/{user}', [
    'uses' =>'CommonController2@upgradeUserForFreePost',
    'as' => 'common2.upgradeUserForFreePost'
    ]);

    Route::post('branch/package/reference/support/post/{user}', [
    'uses' =>'CommonController2@branchPackageReferenceSupport',
    'as' => 'common2.branchPackageReferenceSupport'
    ]);


    Route::post('upload/new/cv/{user}', [
        //private, public
        'uses' =>'CommonController3@uploadNewCv',
        'as' => 'common3.uploadNewCv',
    ]);





    //all users


    //user pp

    Route::get('user/pp/delete/{picture}', [
        //private, public
        'uses' =>'CommonController2@userPPDelete',
        'as' => 'common2.userPPDelete',
    ]);

    Route::post('user/profilepic/Change/{user}', [
        'uses' =>'CommonController2@userProfilepicChange',
        'as' => 'common2.userProfilepicChange',
    ]);

    Route::post('upload/new/public/photos/{user}/{type}', [
        //private, public
        'uses' =>'CommonController2@uploadNewPublicPhotos',
        'as' => 'common2.uploadNewPublicPhotos',
    ]);

    Route::get('user/photo/delete/{photo}', [
        //private, public
        'uses' =>'CommonController2@userPhotoDelete',
        'as' => 'common2.userPhotoDelete',
    ]);

    //user pp

    //payment
     Route::get('all/pending/payments', [
        'uses' =>'CommonController2@allPendingPayments',
        'as' => 'common2.allPendingPayments'
    ]);

     Route::get('all/paid/payments', [
        'uses' =>'CommonController2@allPaidPayments',
        'as' => 'common2.allPaidPayments'
    ]);

    Route::get('all/free/payments', [
        'uses' =>'CommonController2@allFreePayments',
        'as' => 'common2.allFreePayments'
    ]);

     Route::get('payment/add/new', [
        'uses' =>'CommonController2@paymentAddNew',
        'as' => 'common2.paymentAddNew'
    ]);

    Route::post('payment/add/new/post', [
        'uses' =>'CommonController2@paymentAddNewPost',
        'as' => 'common2.paymentAddNewPost'
    ]);

     Route::post('pending/payment/update/post/{payment}', [
        'uses' =>'CommonController2@pendingPaymentUpdatePost',
        'as' => 'common2.pendingPaymentUpdatePost'
    ]);

    Route::get('payment/delete/{payment}', [
        'uses' =>'CommonController2@paymentDelete',
        'as' => 'common2.paymentDelete'
    ]);

    Route::get('payment/history/for/user/{user}', [
        'uses' =>'CommonController2@paymentHistoryForUser',
        'as' => 'common2.paymentHistoryForUser'
    ]);

    Route::get('select/new/role', [
        'as' => 'common2.selectNewRole',
        'uses' => 'CommonController2@selectNewRole'
    ]);
    //payment


    //proposal

    Route::get('proposals/group/{type}', [
        //private, public
        'uses' =>'CommonController3@proposalsGroup',
        'as' => 'common3.proposalsGroup',
    ]);

    Route::get('proposal/checked/by/admin/{proposal}', [
    'uses' =>'CommonController3@proposalCheckedByAdmin',
    'as' => 'common3.proposalCheckedByAdmin'
    ]);

    Route::get('proposals/of/user/{user}', [
    'uses' =>'CommonController3@proposalsOfUser',
    'as' => 'common3.proposalsOfUser'
    ]);

    //proposal

    //media person

    Route::get('select/new/mediaperson', [
        'as' => 'common3.selectNewMediaPerson',
        'uses' => 'CommonController3@selectNewMediaPerson'
    ]);

    //media person
    //
    

    //blog start

    //category
    Route::get('categories/all', [
    'uses' =>'CommonBlogController@categoriesAll',
    'as' => 'commonblog.categoriesAll'
    ]);

    Route::get('category/add/new', [
    'uses' =>'CommonBlogController@categoryAddNew',
    'as' => 'commonblog.categoryAddNew'
    ]);

    Route::post('category/add/new/post', [
    'uses' =>'CommonBlogController@categoryAddNewPost',
    'as' => 'commonblog.categoryAddNewPost'
    ]);

    Route::any('category/edit/{cat}', [
    'uses' =>'CommonBlogController@categoryEdit',
    'as' => 'commonblog.categoryEdit'
    ]);

    Route::any('category/update/{cat}', [
    'uses' =>'CommonBlogController@categoryUpdate',
    'as' => 'commonblog.categoryUpdate'
    ]);

    Route::any('category/delete/{cat}', [
    'uses' =>'CommonBlogController@categoryDelete',
    'as' => 'commonblog.categoryDelete'
    ]);   

    //category

//posts
    Route::get('/posts/all', [
    'uses' =>'CommonBlogController@postsAll',
    'as' => 'commonblog.postsAll'
    ]);

    Route::get('/post/add/new', [
    'uses' =>'CommonBlogController@postAddNew',
    'as' => 'commonblog.postAddNew'
    ]);

    Route::post('/post/add/new/post', [
    'uses' =>'CommonBlogController@postAddNewPost',
    'as' => 'commonblog.postAddNewPost'
    ]);

    Route::get('/post/edit/{post}', [
    'uses' =>'CommonBlogController@postEdit',
    'as' => 'commonblog.postEdit'
    ]);

    Route::post('/post/update/{post}', [
    'uses' =>'CommonBlogController@postUpdate',
    'as' => 'commonblog.postUpdate'
    ]);


    Route::get('/feature/image/delete/{post}', [
    'uses' =>'CommonBlogController@featureImageDelete',
    'as' => 'commonblog.featureImageDelete'
    ]);

    Route::get('post/delete/{post}', [
    'uses' =>'CommonBlogController@postDelete',
    'as' => 'commonblog.postDelete'
    ]);    
    //posts

});


#mediaperson start //mediaperson
Route::group(['middleware' => ['auth','mediaperson'] ,'prefix' => 'mediaperson'], function () {

    Route::get('dashboard', [
    'uses' =>'MediaPersonController@dashboard',
    'as' => 'mediaperson.dashboard'
    ]);

    Route::get('all/users', [
    'uses' =>'MediaPersonController@usersAll',
    'as' => 'mediaperson.usersAll'
    ]);

    Route::get('user/search/ajax', [
    'uses' =>'MediaPersonController@userSearchAjax',
    'as' => 'mediaperson.userSearchAjax'
    ]);
});

#mediaperson end


Route::group(['middleware' => ['auth', 'welcome'], 'prefix' => 'mypanel'], function () {

    ## auth search start

    Route::get('user/search/{view?}', [
        'uses' =>'UserController@userSearch',
        'as' => 'user.userSearch'
    ]);


    Route::get('user/search-username', [
        'uses' =>'UserController@userSearchByUsernameAjax',
        'as' => 'user.userSearchByUsernameAjax'
    ]);

    Route::any('user/search-profession/ajax', [
        'uses' =>'UserController@userSearchByProfessionAjax',
        'as' => 'user.userSearchByProfessionAjax'
    ]);
    ## auth search end



    Route::get('my/asset/{partView}', [
        //private, public
        'uses' =>'UserController@myAsset',
        'as' => 'user.myAsset',
    ]);

    Route::post('/setting/basic-info/post', [
    'uses' =>'UserController@settingBasicInfoPost',
    'as' => 'user.settingBasicInfoPost'
    ]);

    Route::post('/setting/family-info/post', [
    'uses' =>'UserController@settingFamilyInfoPost',
    'as' => 'user.settingFamilyInfoPost'
    ]);

    Route::post('setting/search/term/post', [
    'uses' =>'UserController@settingSearchTermPost',
    'as' => 'user.settingSearchTermPost'
    ]);

    Route::post('/setting/edu-info/post', [
    'uses' =>'UserController@settingEduInfoPost',
    'as' => 'user.settingEduInfoPost'
    ]);
    Route::any('/setting/edu-info/delete', [
    'uses' =>'UserController@settingEduDelete',
    'as' => 'user.settingEduDelete'
    ]);


    Route::post('/setting/work-info/post', [
    'uses' =>'UserController@settingWorkInfoPost',
    'as' => 'user.settingWorkInfoPost'
    ]);
    Route::any('/setting/work-info/delete', [
    'uses' =>'UserController@settingWorkDelete',
    'as' => 'user.settingWorkDelete'
    ]);

    Route::post('/setting/contact-info/post', [
    'uses' =>'UserController@settingContactInfoPost',
    'as' => 'user.settingContactInfoPost'
    ]);

    Route::post('/setting/personal-activities/post', [
    'uses' =>'UserController@settingPersonalActivitiesPost',
    'as' => 'user.settingPersonalActivitiesPost'
    ]);

    Route::post('/setting/personal-info/post', [
    'uses' =>'UserController@settingPersonalInfoPost',
    'as' => 'user.settingPersonalInfoPost'
    ]);


    Route::get('send/proposal/{user}', [
        'uses' =>'UserController@sendProposal',
        'as' => 'user.sendProposal',
    ]);

    Route::post('send/proposal/post/{user}', [
        'uses' =>'UserController@sendProposalPost',
        'as' => 'user.sendProposalPost',
    ]);

    Route::get('accept/proposal/{proposal}', [
        'uses' =>'UserController@acceptProposal',
        'as' => 'user.acceptProposal',
    ]);

    Route::get('cancel/proposal/{proposal}', [
        'uses' =>'UserController@cancelProposal',
        'as' => 'user.cancelProposal',
    ]);

    Route::get('my/photo/upload', [
        'uses' =>'UserController@myPhotoUpload',
        'as' => 'user.myPhotoUpload',
    ]);

    Route::get('my/comments', [
        'uses' =>'UserController@myComments',
        'as' => 'user.myComments',
    ]);

    Route::post('my/comment/post', [
        'uses' =>'UserController@myCommentPost',
        'as' => 'user.myCommentPost',
    ]);

    Route::get('user/details/print/{user}', [
        'uses' =>'UserController@userDetailsPrint',
        'as' => 'user.userDetailsPrint',
    ]);


    //favourite
    Route::any('make/favourite/{user}', [
    'uses' =>'UserController@makeFavourite',
    'as' => 'user.makeFavourite'
    ]);
    //favourite

    //contact
    Route::any('make/contact/{user}', [
    'uses' =>'UserController@makeContact',
    'as' => 'user.makeContact'
    ]);
    //contact


    //block
    Route::any('block/this/user/{user}', [
    'uses' =>'UserController@blockThisUser',
    'as' => 'user.blockThisUser'
    ]);
    //block


    //payment //membership
    Route::get('pay/now', [
        'uses' =>'UserController@payNow',
        'as' => 'user.payNow',
    ]);

    Route::post('pay/now/post', [
        'uses' =>'UserController@payNowPost',
        'as' => 'user.payNowPost',
    ]);

    Route::get('pay/now/edit/{payment}', [
        'uses' =>'UserController@payNowEdit',
        'as' => 'user.payNowEdit',
    ]);

    Route::post('pay/now/edit/post/{payment}', [
        'uses' =>'UserController@payNowEditPost',
        'as' => 'user.payNowEditPost',
    ]);

    //this is for tmm
    Route::any('payto/payment/gateway/{payment}', [
    'uses' =>'WalletMixController@paytoPaymentGateway',
    'as' => 'user.paytoPaymentGateway'
    ]);

    //this is for msbd
    Route::any('payto/sslcommerz/gateway/{payment}', [
    'uses' =>'UserController@paytoSslcommerzGateway',
    'as' => 'user.paytoSslcommerzGateway'
    ]);
    //payment //membership


    //profilepic //public photo
    Route::post('my/profilepic/Change', [
        'uses' =>'UserController@profilepicChange',
        'as' => 'user.profilepicChange',
    ]);

    Route::post('my/profilepic/Change/post', [
        'uses' =>'UserController@profilepicChangePost',
        'as' => 'user.profilepicChangePost',
    ]);
    Route::post('upload/new/photos/{type}', [
        //private, public
        'uses' =>'UserController@uploadNewPhotos',
        'as' => 'user.uploadNewPhotos',
    ]);
    Route::post('create-profile/upload/photos/', [
        //private, public
        'uses' =>'UserController@createProfileUploadPhotos',
        'as' => 'user.createProfileUploadPhotos',
    ]);

    Route::get('photo/delete/{photo}', [
        //private, public
        'uses' =>'UserController@photoDelete',
        'as' => 'user.photoDelete',
    ]);
    //profilepic //public photo


    //user setting edu work


    Route::post('education/info/update', [
        //private, public
        'uses' =>'UserController@educationInfoUpdate',
        'as' => 'user.educationInfoUpdate',
    ]);

    Route::post('work/info/update', [
        //private, public
        'uses' =>'UserController@workInfoUpdate',
        'as' => 'user.workInfoUpdate',
    ]);




    //user setting edu work

});

Route::group(['middleware' => ['auth', 'welcome'] ,'prefix' => 'app'], function () {
    Route::get('/usergroup/type/{type}', [
        'uses' =>'UserController@userGroup',
        'as' => 'user.userGroup'
    ]);

    Route::get('/proposal/{proposal}/cancel', [
        'uses' =>'UserController@cancelProposalMobile',
        'as' => 'user.cancelProposalMobile',
    ]);

    Route::get('/proposal/{proposal}/accept', [
        'uses' =>'UserController@acceptProposalMobile',
        'as' => 'user.acceptProposalMobile',
    ]);

    Route::get('/advance/search', [
        'uses' =>'UserController@advanceSearch',
        'as' => 'user.advanceSearch'
    ]);

    Route::get('/advance/search/result', [
        'uses' =>'UserController@advancedSearchResult',
        'as' => 'user.advancedSearchResult'
    ]);

    Route::get('/search/all', [
        'uses' =>'UserController@searchAll',
        'as' => 'user.searchAll'
    ]);

    Route::get('/search/users/', [
        'uses' =>'UserController@searchUsername',
        'as' => 'user.searchUsername'
    ]);

    Route::get('/search/users-username-email-mobile/', [
        'uses' =>'UserController@searchUsers',
        'as' => 'user.searchUsers'
    ]);

    Route::get('/search/photo/', [
        'uses' =>'UserController@searchPhoto',
        'as' => 'user.searchPhoto'
    ]);

    Route::get('/search/settings/', [
        'uses' =>'UserController@searchSettings',
        'as' => 'user.searchSettings'
    ]);

    Route::post('/search/settings/', [
        'uses' =>'UserController@setSearchPreference',
        'as' => 'user.setSearchPreference'
    ]);

    Route::get('/search/profession/', [
        'uses' =>'UserController@searchProfession',
        'as' => 'user.searchProfession'
    ]);

    Route::get('/search-by-profession/', [
        'uses' =>'UserController@searchByProfession',
        'as' => 'user.searchByProfession'
    ]);


    Route::get('/my-preference/', [
        'uses' =>'UserController@customSearch',
        'as' => 'user.customSearch'
    ]);

    Route::get('/settings', [
        'uses' =>'UserController@userSettings',
        'as' => 'user.userSettings'
    ]);

    Route::get('/timeline', [
        'uses' =>'UserController@timeline',
        'as' => 'user.timeline'
    ]);

    Route::get('/userservicegroup/type/{type}', [
        'uses' =>'UserController@userServiceGroup',
        'as' => 'user.userServiceGroup'
    ]);

    // proposal mobile
    Route::post('/send/proposal/{user}', [
        'uses' =>'UserController@processProposalMobileModal',
        'as' => 'user.processProposalMobileModal'
    ]);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
