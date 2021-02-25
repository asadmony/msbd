<?php $me = Auth::user(); ?>

@if ($me->isAdmin() || $me->hasRoleItem('payments'))


<li class="treeview {{ session('lsbm') == 'payments' ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-id-card" aria-hidden="true"></i>
        <span>Payment</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'paymentAddNew' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common2.paymentAddNew')}}"><i class="fa fa-circle-o"></i> Add New Payment</a></li>

        <li class="{{ session('lsbsm') == 'allPendingPayments' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common2.allPendingPayments')}}"><i class="fa fa-circle-o"></i> All Pending Payments</a>
        </li>

        <li class="{{ session('lsbsm') == 'allPaidPayments' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common2.allPaidPayments')}}"><i class="fa fa-circle-o"></i> All Paid Payments</a></li>

        <li class="{{ session('lsbsm') == 'allFreePayments' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common2.allFreePayments')}}"><i class="fa fa-circle-o"></i> All Free Payments</a></li>
    </ul>
</li>

@endif

@if ($me->isAdmin() || $me->hasRoleItem('page'))

<li class=" treeview{{ session('lsbm') == 'page' ? ' active ' : '' }}">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Menu & Page</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'newMenu' ? ' active ' : '' }}"><a href="{{route('common1.newMenu')}}"><i
                    class="fa fa-circle-o"></i> New Menu </a></li>

        <li class="{{ session('lsbsm') == 'allMenus' ? ' active ' : '' }}"><a href="{{route('common1.allMenus')}}"><i
                    class="fa fa-circle-o"></i> All Menus </a></li>



        <li class="{{ session('lsbsm') == 'newPage' ? ' active ' : '' }}"><a href="{{route('common1.allPages')}}"><i
                    class="fa fa-circle-o"></i> New Page </a></li>
        <li class="{{ session('lsbsm') == 'allPages' ? ' active ' : '' }}"><a href="{{route('common1.allPages')}}"><i
                    class="fa fa-circle-o"></i> All Pages </a></li>

    </ul>
</li>

@endif

@if ($me->isAdmin() || $me->hasRoleItem('gallery'))

{{-- <li class=" treeview{{ session('lsbm') == 'gallery' ? ' active ' : '' }}">
    <a href="#">
        <i class="fa fa-image"></i> <span>Image Gallery</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'imgGalleryAddNew' ? ' active ' : '' }}"><a
                href="{{route('common1.imgGalleryAddNew')}}"><i class="fa fa-circle-o"></i> Add New Gallery </a></li>

        <li class="{{ session('lsbsm') == 'imgGalleriesAll' ? ' active ' : '' }}"><a
                href="{{route('common1.imgGalleriesAll')}}"><i class="fa fa-circle-o"></i> Galleries All </a></li>

    </ul>
</li> --}}


<li class=" treeview{{ session('lsbm') == 'imageGallery' ? ' active ' : '' }}">
    <a href="#">
        <i class="fa fa-image"></i> <span>Image Gallery</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'imageGalleriesAll' ? ' active ' : '' }}"><a
                href="{{route('common1.imageGalleriesAll')}}"><i class="fa fa-circle-o"></i> Galleries All </a></li>

    </ul>
</li>

@endif

@if ($me->isAdmin() || $me->hasRoleItem('videoGallery'))


<li class=" treeview{{ session('lsbm') == 'videoGallery' ? ' active ' : '' }}">
    <a href="#">
        <i class="fa fa-play"></i> <span>Video Gallery</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'videoGalleryAddNew' ? ' active ' : '' }}"><a
                href="{{route('common1.videoGalleryAddNew')}}"><i class="fa fa-circle-o"></i> Add New Gallery </a></li>

        <li class="{{ session('lsbsm') == 'videoGalleriesAll' ? ' active ' : '' }}"><a
                href="{{route('common1.videoGalleriesAll')}}"><i class="fa fa-circle-o"></i> Galleries All </a></li>

    </ul>
</li>

@endif

@if ($me->isAdmin() || $me->hasRoleItem('media'))

<li class=" treeview{{ session('lsbm') == 'media' ? ' active ' : '' }}">
    <a href="#">
        <i class="fa fa-upload"></i> <span>Media</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ session('lsbsm') == 'mediaAll' ? ' active ' : '' }}"><a href="{{route('common1.mediaAll')}}"><i
                    class="fa fa-circle-o"></i> Media All </a></li>

    </ul>
</li>

@endif

@if ($me->isAdmin() || $me->hasRoleItem('proposal'))

<li class="treeview {{ session('lsbm') == 'proposal' ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-id-card" aria-hidden="true"></i>
        <span>Proposal</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'all_proposals' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common3.proposalsGroup', 'all_proposals')}}"><i class="fa fa-circle-o"></i> All
                Proposals</a></li>

        <li class="{{ session('lsbsm') == 'pending_proposals' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common3.proposalsGroup', 'pending_proposals')}}"><i class="fa fa-circle-o"></i> All
                Pending Proposals</a></li>

        <li class="{{ session('lsbsm') == 'accepted_proposals' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common3.proposalsGroup', 'accepted_proposals')}}"><i class="fa fa-circle-o"></i> All
                Accepted Proposals</a></li>

    </ul>
</li>


@endif

@if ($me->isAdmin() || $me->hasRoleItem('users'))

<li class="treeview {{ session('lsbm') == 'users' ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ session('lsbsm') == 'newUser' ? 'active' : '' }}"><a class="changed-menu"
                href="{{route('common3.newUser')}}"><i class="fa fa-circle-o"></i> Create New User</a></li>

        {{-- <li class="{{ session('lsbsm') == 'all_unchecked_users' ? 'active' : '' }}"><a class="changed-menu"
            href="{{route('admin.usersGroup','all_unchecked_users')}}"><i class="fa fa-circle-o"></i> All Unchecked
            Users</a>
</li>

<li class="{{ session('lsbsm') == 'all_checked_users' ? 'active' : '' }}"><a class="changed-menu"
        href="{{route('admin.usersGroup','all_checked_users')}}"><i class="fa fa-circle-o"></i> All Checked and Active
        Users</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'active_users' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup','active_users')}}"><i class="fa fa-circle-o"></i> Active Users</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'inactive_users' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup','inactive_users')}}"><i class="fa fa-circle-o"></i>All Deactivated Users</a></li>
--}}


@if($me->isAdmin())

<li class="{{ session('lsbsm') == 'profile_picture_pending' ? 'active' : '' }}"><a class="changed-menu"
        href="{{route('common2.usersGroup','profile_picture_pending')}}"><i class="fa fa-circle-o"></i> Profile Picture
        Pending</a></li>

@endif

{{-- <li class="{{ session('lsbsm') == 'final_check_pending' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'final_check_pending')}}"><i class="fa fa-circle-o"></i> Final Check Pending</a>
</li> --}}

{{-- <li class="{{ session('lsbsm') == 'validity_10' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'validity_10')}}"><i class="fa fa-circle-o"></i> Validity less than 10 days</a>
</li> --}}

{{-- <li class="{{ session('lsbsm') == 'order_by_age' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup','order_by_age')}}"><i class="fa fa-circle-o"></i> Order By Age</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'basic_info_pending' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup','basic_info_pending')}}"><i class="fa fa-circle-o"></i> Basic Info Pending</a></li>
--}}

{{-- <li class="{{ session('lsbsm') == 'personal_info_pending' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'personal_info_pending')}}"><i class="fa fa-circle-o"></i> Personal Info
    Pending</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'personal_activity_pending' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'personal_activity_pending')}}"><i class="fa fa-circle-o"></i> Personal Activities
    Pending</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'golden' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'golden')}}"><i class="fa fa-circle-o"></i> Golden Users</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'golden_plus' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'golden_plus')}}"><i class="fa fa-circle-o"></i> Golden Plus Users</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'diamond' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'diamond')}}"><i class="fa fa-circle-o"></i> Diamond Users</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'diamond_plus' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'diamond_plus')}}"><i class="fa fa-circle-o"></i> Diamond Plus Users</a></li> --}}



{{-- <li class="{{ session('lsbsm') == 'free_package' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'free_package')}}"><i class="fa fa-circle-o"></i> Free Package Users</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'subscribers' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'subscribers')}}"><i class="fa fa-circle-o"></i> All Subscribers</a></li> --}}





{{-- <li class="{{ session('lsbsm') == 'male_users' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup', 'male_users')}}"><i class="fa fa-circle-o"></i> Only Male Profile</a></li> --}}

{{-- <li class="{{ session('lsbsm') == 'female_users' ? 'active' : '' }}"><a class="changed-menu"
    href="{{route('admin.usersGroup','female_users')}}"><i class="fa fa-circle-o"></i> Only Female Profile</a></li> --}}
@if ($me->isAdmin())
@endif


<li class="{{ session('lsbsm') == 'online_users' ? 'active' : '' }}"><a class="changed-menu"
        href="{{route('common2.usersGroup','online_users')}}"><i class="fa fa-circle-o"></i> Online (Now) Users</a></li>

<li class="{{ session('lsbsm') == 'offline_users' ? 'active' : '' }}"><a class="changed-menu"
        href="{{route('common2.usersGroup','offline_users')}}"><i class="fa fa-circle-o"></i> Offline Profiles</a></li>



<li class="{{ session('lsbsm') == 'usersAll' ? 'active' : '' }}"><a class="changed-menu"
        href="{{route('common2.usersAll')}}"><i class="fa fa-circle-o"></i> All Users</a></li>

</ul>
</li>

<li class="treeview {{ session('lsbm') == 'mobileAndEmail' ? 'active' : '' }}">
    <a href="#">
      <i class="fa fa-id-card" aria-hidden="true"></i>
      <span>Mobile & Email Numbers</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="{{ session('lsbsm') == 'mobileNumbersAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.mobileNumbersAll')}}"><i class="fa fa-circle-o"></i>All Mobile Numbers</a></li>

      <li class="{{ session('lsbsm') == 'emailNumbersAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.emailNumbersAll')}}"><i class="fa fa-circle-o"></i> All Email Id's</a></li>

      <li class="{{ session('lsbsm') == 'emailsAndNumbersAll' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.emailsAndNumbersAll')}}"><i class="fa fa-circle-o"></i> All Mobile & Email Id's</a></li>

      <li class="{{ session('lsbsm') == 'registerInfo' ? 'active' : '' }}"><a class="changed-menu" href="{{route('admin.registerInfoAll')}}"><i class="fa fa-circle-o"></i> All Registration Info</a></li>
    </ul>
  </li>

@endif
